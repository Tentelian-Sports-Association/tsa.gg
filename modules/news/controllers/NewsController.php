<?php

namespace app\modules\news\controllers;

use app\components\BaseController;

use app\modules\news\models\News;
use app\modules\news\models\NewsCategorie;

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
        $latestNews = News::getLatestNews($languageID, 3);

        /** Categories */
        $categories = NewsCategorie::find()->orderBy(['name' => SORT_DESC])->limit(5)->all();

        //print_r($categories);
        //die();

        return $this->render('overview', [
            'latestNews' => $latestNews,
            'categories' => $categories,
        ]);
	}
}