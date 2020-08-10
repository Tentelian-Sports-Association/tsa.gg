<?php

namespace app\modules\community\controllers;

use app\components\BaseController;

use app\modules\miscellaneouse\models\gender\Gender;
use app\modules\miscellaneouse\models\language\Language;
use app\modules\miscellaneouse\models\nationality\Nationality;

use app\modules\organisation\models\Organisation;
use app\modules\organisation\models\OrganisationMember;

use app\modules\team\models\Team;

use app\modules\miscellaneouse\models\formModels\SearchForm;

use app\modules\user\models\User;

use DateTime;
use Yii;
use yii\data\Pagination;

class CommunityController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behavior()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['0'],
                    ]
                ]
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionOverview()
    {
        /** Base Informations **/
        $user = Yii::$app->HelperClass->getUser();
        
        $languageID = Yii::$app->HelperClass->getUserLanguage($user);
        $languageLocale = Yii::$app->HelperClass->getUserLanguage($user, true);

        $globalCount = User::find()->count();
        $users = User::getUserOverview($languageID);
        //$teams = Team::getTeamOverview();
        //$organisations = Organisation::getOrganisationOverview();

        return $this->render('overview', [
            'globalCount' => $globalCount,
            'users' => $users,
        ]);
	}

    public function actionUserOverview($page = 1)
    {
        /** Base Informations **/
        $user = Yii::$app->HelperClass->getUser();

        $languageID = Yii::$app->HelperClass->getUserLanguage($user);
        $languageLocale = Yii::$app->HelperClass->getUserLanguage($user, true);

        $searchModel = new SearchForm();
        
        if(Yii::$app->session['user_searchModel'])
        {
            $searchModel = Yii::$app->session['user_searchModel'];
		}

        $sortedBy = "id";

        // ggf in helper CLass ausrangieren
        if ($searchModel->load(Yii::$app->request->post())) {

            Yii::$app->session['user_searchModel'] = $searchModel;

            if ($searchModel->validate()) {
                // get sorting code
                $sortedBy = "";
                switch ($searchModel->sortedBy) {
	                case 1:
		                $sortedBy = "id";
		                break;

                    case 2:
		                $sortedBy = "nationality_id";
		                break;

                    case 3:
		                $sortedBy = "language_id";
		                break;

                    case 4:
		                $sortedBy = "username";
		                break;
                }
            }
        }

        // Ausgliedern in User Model
        $allUser = User::find()->where(['like', 'username', $searchModel->searchString])->orderBy([$sortedBy => ($searchModel->sortAscend == 1) ? SORT_ASC : SORT_DESC]); //User::getSortedUser($searchModel->searchString, ($searchModel->sortAscend == 3) ? SORT_DESC : SORT_ASC);
        
        $count = $allUser->count();

        if($count == 0)
        {
            //Alert::addError('No User can be found');
            $searchModel->searchString = '';
            return $this->redirect("user-overview");
		}

        if($searchModel->pageNumber > $count)
        {
            //Alert::addError('Page: ' . $searchModel->pageNumber . ' doesnt exists');
            return $this->redirect("overview");
		}

        $pagination = new Pagination(['totalCount' => $count, 'pageSize' => 35]);
        $sortedPaginatedUsers = $allUser->offset($pagination->offset)->limit($pagination->limit)->all();

        /** Bereich für Invites **/

        $ownId = (Yii::$app->user->identity != null) ? Yii::$app->user->identity->getId() : 0;

        $canInvite = false;
        $invitabelOrgaisationId = null;

        if($ownId != 0)
        {
            $invitabelOrgaisation = OrganisationMember::find()->where(['user_id' => $ownId])->andWhere(['<', 'role_id', '3'])->one();
                if($invitabelOrgaisation != null) { $invitabelOrgaisationId = $invitabelOrgaisation->getOrganisationId(); }
                
                if($invitabelOrgaisationId != null)
                    $canInvite = true;
		}

        /** Ende Ivites Bereich **/

        $paginatedUsers = User::GetDetails($sortedPaginatedUsers, $languageID, $invitabelOrgaisationId);

        // Datenbank anlegen wo das drin ist um das zu vereinfachen
        $sortOrder = [];
        $sortOrder[1] = \app\modules\community\Module::t('searchForm', 'searchForm_sortAscendLbl');
        $sortOrder[2] = \app\modules\community\Module::t('searchForm', 'searchForm_sortDescentLbl');

        $sortOrderBy = [];
        $sortOrderBy[1] = \app\modules\community\Module::t('searchForm', 'searchForm_byID');
        $sortOrderBy[2] = \app\modules\community\Module::t('searchForm', 'searchForm_byNationality');
        $sortOrderBy[3] = \app\modules\community\Module::t('searchForm', 'searchForm_byLanguage');
        $sortOrderBy[4] = \app\modules\community\Module::t('searchForm', 'searchForm_byName');

        return $this->render('userOverview', [
            'searchModel' => $searchModel,
            'sortOrder' => $sortOrder,
            'sortOrderBy' => $sortOrderBy,
            'pagination' => $pagination,
            'sortedPaginatedUsers' => $paginatedUsers,
            'canInvite' => $canInvite,
            'invitabelOrgaisationId' => $invitabelOrgaisationId,
        ]);
	}

    public function actionOrgaOverview($page = 1)
    {
        /** Base Informations **/
        $user = Yii::$app->HelperClass->getUser();

        $languageID = Yii::$app->HelperClass->getUserLanguage($user);
        $languageLocale = Yii::$app->HelperClass->getUserLanguage($user, true);

        $searchModel = null;
        
        $searchModel = new SearchForm();

        $sortedBy = "id";

        if(Yii::$app->session['organisation_searchModel'])
        {
            $searchModel = Yii::$app->session['organisation_searchModel'];
		}

        // Ausgliedern in User Model
        $allOrgnisaions = Organisation::find()->where(['like', 'name', $searchModel->searchString])->orderBy([$sortedBy => ($searchModel->sortAscend == 1) ? SORT_ASC : SORT_DESC]);
        
        $count = $allOrgnisaions->count();

        // ggf in helper CLass ausrangieren
        if ($searchModel->load(Yii::$app->request->post())) {
            
            Yii::$app->session['organisation_searchModel'] = $searchModel;

            if ($searchModel->validate()) {
                // get sorting code
                $sortedBy = "";
                switch ($searchModel->sortedBy) {
	                case 1:
		                $sortedBy = "id";
		                break;

                    case 2:
		                $sortedBy = "nationality_id";
		                break;

                    case 3:
		                $sortedBy = "language_id";
		                break;

                    case 4:
		                $sortedBy = "username";
		                break;
                }
            }
        }

        $pagination = new Pagination(['totalCount' => $count, 'pageSize' => 35]);
        $sortedPaginatedOrganisation = $allOrgnisaions->offset($pagination->offset)->limit($pagination->limit)->all();

        $paginatedOrganisation = Organisation::GetDetails($sortedPaginatedOrganisation, $languageID);

        // Datenbank anlegen wo das drin ist um das zu vereinfachen
        $sortOrder = [];
        $sortOrder[1] = \app\modules\community\Module::t('searchForm', 'searchForm_sortAscendLbl');
        $sortOrder[2] = \app\modules\community\Module::t('searchForm', 'searchForm_sortDescentLbl');

        $sortOrderBy = [];
        $sortOrderBy[1] = \app\modules\community\Module::t('searchForm', 'searchForm_byID');
        $sortOrderBy[2] = \app\modules\community\Module::t('searchForm', 'searchForm_byNationality');
        $sortOrderBy[3] = \app\modules\community\Module::t('searchForm', 'searchForm_byLanguage');
        $sortOrderBy[4] = \app\modules\community\Module::t('searchForm', 'searchForm_byName');

        return $this->render('organisationOverview', [
            'searchModel' => $searchModel,
            'sortOrder' => $sortOrder,
            'sortOrderBy' => $sortOrderBy,
            'pagination' => $pagination,
            'sortedPaginatedOrganisation' => $paginatedOrganisation,
        ]);
	}

    public function actionTeamOverview($page = 1)
    {
        /** Base Informations **/
        $user = Yii::$app->HelperClass->getUser();

        $languageID = Yii::$app->HelperClass->getUserLanguage($user);
        $languageLocale = Yii::$app->HelperClass->getUserLanguage($user, true);

        $searchModel = null;
        
        $searchModel = new SearchForm();

        $sortedBy = "id";

        if(Yii::$app->session['team_searchModel'])
        {
            $searchModel = Yii::$app->session['team_searchModel'];
		}

        // Ausgliedern in User Model
        $allTeams = Team::find()->where(['like', 'name', $searchModel->searchString])->orderBy([$sortedBy => ($searchModel->sortAscend == 1) ? SORT_ASC : SORT_DESC]);
        
        $count = $allTeams->count();

        // ggf in helper CLass ausrangieren
        if ($searchModel->load(Yii::$app->request->post())) {
            
            Yii::$app->session['team_searchModel'] = $searchModel;

            if ($searchModel->validate()) {
                // get sorting code
                $sortedBy = "";
                switch ($searchModel->sortedBy) {
	                case 1:
		                $sortedBy = "id";
		                break;

                    case 2:
		                $sortedBy = "nationality_id";
		                break;

                    case 3:
		                $sortedBy = "language_id";
		                break;

                    case 4:
		                $sortedBy = "username";
		                break;
                }
            }
        }


        $pagination = new Pagination(['totalCount' => $count, 'pageSize' => 35]);
        $sortedPaginatedTeams = $allTeams->offset($pagination->offset)->limit($pagination->limit)->all();

        $paginatedTeams = Team::GetDetails($sortedPaginatedTeams, $languageID);

        // Datenbank anlegen wo das drin ist um das zu vereinfachen
        $sortOrder = [];
        $sortOrder[1] = \app\modules\community\Module::t('searchForm', 'searchForm_sortAscendLbl');
        $sortOrder[2] = \app\modules\community\Module::t('searchForm', 'searchForm_sortDescentLbl');

        $sortOrderBy = [];
        $sortOrderBy[1] = \app\modules\community\Module::t('searchForm', 'searchForm_byID');
        $sortOrderBy[2] = \app\modules\community\Module::t('searchForm', 'searchForm_byNationality');
        $sortOrderBy[3] = \app\modules\community\Module::t('searchForm', 'searchForm_byLanguage');
        $sortOrderBy[4] = \app\modules\community\Module::t('searchForm', 'searchForm_byName');

        return $this->render('teamOverview', [
            'searchModel' => $searchModel,
            'sortOrder' => $sortOrder,
            'sortOrderBy' => $sortOrderBy,
            'pagination' => $pagination,
            'sortedPaginatedTeam' => $paginatedTeams,
        ]);
	}
}