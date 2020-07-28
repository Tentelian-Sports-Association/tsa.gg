<?php

namespace app\modules\team\controllers;

use app\components\BaseController;

use app\modules\miscellaneouse\models\formModels\ProfilePicForm;

use app\modules\miscellaneouse\models\language\Language;
use app\modules\miscellaneouse\models\nationality\Nationality;

use app\modules\organisation\models\Organisation;

use app\modules\team\models\Team;

use app\modules\team\models\formModels\CreateTeamForm;

use DateTime;
use Yii;
use yii\web\UploadedFile;

class TeamController extends BaseController
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

    public function actionDetails($teamID = 0)
    {
        /** @var Team $team */
        $team = Team::findTeamById($teamID);
        $languageID = Language::findByLocale(Yii::$app->language)->getId();

        if(!$team)
        {
            //Alert::addError('User with ID: ' . $userId . ' doesnt exists'); 
            return $this->goHome();
		}

        $teamDetails = Team::getTeamDetails($teamID, $languageID);
        $teamManager = $team->getManager();
        $teamMember = $team->getMember();

        /** @var ProfilePicForm $profilePicModel */
        $teamPicModel = new ProfilePicForm(ProfilePicForm::SCENARIO_TEAM);
        $teamPicModel->id = $teamID;

        if ($teamPicModel->load(Yii::$app->request->post())) {
            $teamPicModel->file = UploadedFile::getInstance($teamPicModel, 'file');
            if ($teamPicModel->validate()) {
                $teamPicModel->save();
            }
        }

        /** Check if User ID my own User ID */
        $isOwner = (Yii::$app->user->identity != null && Yii::$app->user->identity->getId() == $teamManager['id']) ? true : false;

        return $this->render('details', [
           'team' => $teamDetails,
           'teamManager' => $teamManager,
           'isOwner' => $isOwner,
           'teamMember' => $teamMember,
           'teamPicModel' => $teamPicModel,
        ]);
	}

    public function actionCreateTeam($gameID = 0)
    {
        
	}

    public function actionEditTeam($teamID = 0)
    {
        
	}
}