<?php

namespace app\modules\community\controllers;

use app\components\BaseController;

use app\modules\miscellaneouse\models\gender\Gender;
use app\modules\miscellaneouse\models\language\Language;
use app\modules\miscellaneouse\models\nationality\Nationality;

use app\modules\user\models\User;

use DateTime;
use Yii;

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
}