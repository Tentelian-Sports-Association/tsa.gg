<?php

namespace app\modules\partner\controllers;

use app\components\BaseController;
use yii\filters\AccessControl;

use app\modules\partner\models\Partner;

use Yii;
use app\widgets\Alert;

/**
 * Class PartnerController
 *
 * @package app\modules\partner\controllers
 */
class PartnerController extends BaseController
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
     * Overview of all Partners
     *
     * @return string
     */
    public function actionOverview()
    {
         /** Base Informations **/
        $user = Yii::$app->HelperClass->getUser();
        $languageID = Yii::$app->HelperClass->getUserLanguage($user);

        /** Our Partners */
        $ourPartner = Partner::GetPartner($languageID);

        return $this->render('partnerOverview',
        [
            'ourPartner' => $ourPartner,
        ]);
    }
}