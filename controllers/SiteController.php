<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use DateTime;

use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
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
        /** Upcoming Events */
        $upcomingEvents = array();
        /** Upcoming current Event */
        $upcomingEvents['Next']['ID'] = 1;
        $upcomingEvents['Next']['Name'] = "Tentelian Royale Clash Finals";
        $upcomingEvents['Next']['shortDescription'] = "The Live Finals for our Clash Royle Championship Series (maximal 100 Zeichen)";
        $upcomingEvents['Next']['previewImage']= "clashCupFinals";
        /** Upcoming next Event */
        $upcomingEvents['Preview']['ID'] = 2;
        $upcomingEvents['Preview']['Name'] = "PeSp Masters 2020";
        $upcomingEvents['Preview']['shortDescription'] = "The return of the PeSp Masters from 2019, this year in the Munich Olympiahall";
        $upcomingEvents['Preview']['previewImage']= "clashCupFinals";

        /** Upcoming Tournaments */
        $tournaments = array();
        /** 5 Turniere die als n�chstes Stattfinden oder gerade Live sind */
        $tournaments[0]['ID'] = 1;
        $tournaments[0]['Name'] = "GERTA Cup Sason 6 Day 1";
        $tournaments[0]['Mode'] = "3 VS 3";
        $tournaments[0]['HoverImage'] = "ELGerta";
        $tournaments[0]['IsLive'] = true;
        $tournaments[0]['StartingDate'] = (new DateTime())->format('Y-m-d');
        $tournaments[0]['StartingTime'] = (new DateTime())->format('H:i');

        $tournaments[1]['ID'] = 5;
        $tournaments[1]['Name'] = "Tentelian Royale Clash Championship Series Qualifier 1";
        $tournaments[1]['Mode'] = "Team Ladder";
        $tournaments[1]['HoverImage'] = "TRCCS";
        $tournaments[1]['IsLive'] = true;
        $tournaments[1]['StartingDate'] = (new DateTime())->format('Y-m-d');
        $tournaments[1]['StartingTime'] = (new DateTime())->format('H:i');

        $tournaments[2]['ID'] = 3;
        $tournaments[2]['Name'] = "GERTA Cup Sason 6 Day 2";
        $tournaments[2]['Mode'] = "3 VS 3";
        $tournaments[2]['HoverImage'] = "RLGerta";
        $tournaments[2]['IsLive'] = false;
        $tournaments[2]['StartingDate'] = (new DateTime())->format('Y-m-d');
        $tournaments[2]['StartingTime'] = (new DateTime())->format('H:i');

        $tournaments[3]['ID'] = 2;
        $tournaments[3]['Name'] = "Tentelian Royale Clash Championship Series Qualifier 2";
        $tournaments[3]['Mode'] = "Team Ladder";
        $tournaments[3]['HoverImage'] = "TRCCS";
        $tournaments[3]['IsLive'] = false;
        $tournaments[3]['StartingDate'] = (new DateTime())->format('Y-m-d');
        $tournaments[3]['StartingTime'] = (new DateTime())->format('H:i');

        $tournaments[4]['ID'] = 4;
        $tournaments[4]['Name'] = "Bavarian Drift Masters Day 1";
        $tournaments[4]['Mode'] = "Ladder";
        $tournaments[4]['HoverImage'] = "DriftMasters";
        $tournaments[4]['IsLive'] = false;
        $tournaments[4]['StartingDate'] = (new DateTime())->format('Y-m-d');
        $tournaments[4]['StartingTime'] = (new DateTime())->format('H:i');

        /** Latest News */
        $latestNews = array();
        /** 3 Latest News */
        $latestNews[0]['ID'] = 1;
        $latestNews[0]['Headline'] = "Royale News from Clash";
        $latestNews[0]['previewImage'] = "clashNews";
        $latestNews[0]['StartingDate'] = (new DateTime())->format('Y-m-d');

        $latestNews[1]['ID'] = 2;
        $latestNews[1]['Headline'] = "New Tournament Series Arrived";
        $latestNews[1]['previewImage'] = "newTournament";
        $latestNews[1]['StartingDate'] = (new DateTime())->format('Y-m-d');

        $latestNews[2]['ID'] = 3;
        $latestNews[2]['Headline'] = "The Bug is Fixed";
        $latestNews[2]['previewImage'] = "fixedBug";
        $latestNews[2]['StartingDate'] = (new DateTime())->format('Y-m-d');

        /** Our Partners */
        $ourPartner = array();
        /** 4 Random Partners */
        $ourPartner[0]['ID'] = 1;
        $ourPartner[0]['previewImage'] = "tentelian";

        $ourPartner[1]['ID'] = 2;
        $ourPartner[1]['previewImage'] = "steelseries";

        $ourPartner[2]['ID'] = 3;
        $ourPartner[2]['previewImage'] = "gamersFinest";

        $ourPartner[3]['ID'] = 4;
        $ourPartner[3]['previewImage'] = "sommerSchnee";

        return $this->render('index',
        [
            'upcomingEvents' => $upcomingEvents,
            'tournaments' => $tournaments,
            'latestNews' => $latestNews,
            'ourPartner' => $ourPartner,
        ]);
    }
}