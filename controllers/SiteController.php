<?php

namespace app\controllers;

use app\components\BaseController;

use app\modules\partner\models\Partner;

use app\modules\events\models\Event;

use app\modules\news\models\News;

use app\modules\user\models\User;

use app\modules\tournament\models\Tournament;

use app\models\LoginForm;
use app\models\ContactForm;

use Yii;
use yii\db\Expression;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\Response;

class SiteController extends BaseController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
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
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        /** Base Informations **/
        $user = Yii::$app->HelperClass->getUser();
        
        $languageID = Yii::$app->HelperClass->getUserLanguage($user);
        $languageLocale = Yii::$app->HelperClass->getUserLanguage($user, true);

        Yii::$app->language = $languageLocale;

        /** Upcoming Events */
        $upcomingEvents = Event::getLatestEvents($languageID);        

        /** Upcoming Tournaments */
        $tournaments = Tournament::GetUpcomingTournaments();

        /** Latest News */
        $latestNews =  News::getLatestNews($languageID, 3);

        /** Our Partners */
        $ourPartner = Partner::find()->select(['id', 'image', 'name', 'webadresse'])->orderBy(new Expression('rand()'))->limit(4)->all();

        return $this->render('index',
        [
            'upcomingEvents' => $upcomingEvents,
            'tournaments' => $tournaments,
            'latestNews' => $latestNews,
            'ourPartner' => $ourPartner,
        ]);
    }

    public function actionConstruction()
    {
        return $this->render('underConstruction',
        [
        ]);
	}

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionCommunity()
    {
        return $this->redirect("community/overview");
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionNews()
    {
        return $this->redirect("news/overview");
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionPartner()
    {
        return $this->redirect("partner/overview");
    }
}