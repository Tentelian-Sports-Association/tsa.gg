<?php

namespace app\modules\user\controllers;

use app\components\BaseController;

use app\modules\miscellaneouse\models\formModels\ProfilePicForm;

//use app\modules\user\models\User;
//use app\modules\user\models\UserDetails;
//use app\modules\user\models\UserSocials;

use app\modules\miscellaneouse\models\language\Language;

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


}