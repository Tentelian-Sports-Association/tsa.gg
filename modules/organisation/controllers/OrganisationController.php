<?php

namespace app\modules\organisation\controllers;

use app\components\BaseController;

use app\modules\miscellaneouse\models\formModels\ProfilePicForm;

use app\modules\miscellaneouse\models\language\Language;
use app\modules\miscellaneouse\models\nationality\Nationality;

use app\modules\organisation\models\Organisation;

use app\modules\organisation\models\formModels\CreateOrganisationForm;
use app\modules\organisation\models\formModels\CreateOrganisation;

use DateTime;
use Yii;

class OrganisationController extends BaseController
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

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionCreateOrgnisation()
    {
        /** @var Language $languageID */
        $languageID = Language::findByLocale(Yii::$app->language)->getId();

        if (Yii::$app->user->isGuest || Yii::$app->user->identity == null) {
            return $this->goHome();
        }

        $model = new CreateOrganisationForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->save()) {
            return $this->redirect(['/user/details?userId=' . Yii::$app->user->identity->getId()]);
        }

        $languageList = [];
        foreach (Language::find()->all() as $language) { $languageList[$language->getId()] = $language->getName($languageID); }

        $nationalityList = [];
        foreach (Nationality::find()->all() as $nationality) { $nationalityList[$nationality->getId()] = $nationality->getName($languageID); }

        return $this->render('createOrganisation', [
            'model' => $model,
            'languageList' => $languageList,
            'nationalityList' => $nationalityList,
            'currentUserID' => Yii::$app->user->identity->getId(),
        ]);
    }

    public function actionDetails($organisationId = 0)
    {
        /** @var User $user */
        $organisation = Organisation::findOrganisationById($organisationId);
        $languageID = Language::findByLocale(Yii::$app->language)->getId();

        

        if(!$organisation)
        {
            //Alert::addError('User with ID: ' . $userId . ' doesnt exists'); 
            return $this->goHome();
		}

        $OrganisationOwner = $organisation->getOwner();
        $organisationMember = $organisation->getMember();
        $organisationSocial = $organisation->getSocialDetails();

        /** Check if User ID my own User ID */
        $isOwner = (Yii::$app->user->identity != null && Yii::$app->user->identity->getId() == $OrganisationOwner->getUserId()) ? true : false;

        return $this->render('details', [
            'organisation' => $organisation,
            'isOwner' => $isOwner,
            'organisationSocial' => $organisationSocial,
            'organisationMember' => $organisationMember,
        ]);
	}
}