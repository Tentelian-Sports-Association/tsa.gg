<?php

namespace app\modules\news\controllers;

use app\components\BaseController;

use DateTime;
use Yii;
use yii\data\Pagination;

class NewsController extends BaseController
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

        /** Latest News */
        $latestNews = array();

        /** 3 Latest News */
        $latestNews[0]['ID'] = 1;
        $latestNews[0]['Headline'] = "Royale News from Clash";
        $latestNews[0]['previewImage'] = "clashNews";
        $latestNews[0]['StartingDate'] = (new DateTime())->format('d.m.Y');

        $latestNews[1]['ID'] = 2;
        $latestNews[1]['Headline'] = "New Tournament Series Arrived";
        $latestNews[1]['previewImage'] = "newTournament";
        $latestNews[1]['StartingDate'] = (new DateTime())->format('d.m.Y');

        $latestNews[2]['ID'] = 3;
        $latestNews[2]['Headline'] = "The Bug is Fixed";
        $latestNews[2]['previewImage'] = "fixedBug";
        $latestNews[2]['StartingDate'] = (new DateTime())->format('d.m.Y');

        return $this->render('overview', [
            'latestNews' => $latestNews,
        ]);
	}
}