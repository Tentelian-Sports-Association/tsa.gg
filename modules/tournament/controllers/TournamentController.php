<?php

namespace app\modules\tournament\controllers;

use app\components\BaseController;
use yii\filters\AccessControl;

use Yii;

/**
 * Class PartnerController
 *
 * @package app\modules\partner\controllers
 */
class TournamentController extends BaseController
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

        $gameslist = [];
        $gamesList[0]['Name'] = 'Rocket Legaue';
        $gamesList[0]['Id'] = 1;
        $gamesList[0]['image'] = 'rl';
        $gamesList[0]['OpenTournaments'] = 5;
        $gamesList[0]['ParticipatingPlayer'] = 72;
        $gamesList[0]['ParticipatingTeams'] = 16;

        $gamesList[1]['Name'] = 'Clash Royale';
        $gamesList[1]['Id'] = 2;
        $gamesList[1]['image'] = 'clash';
        $gamesList[1]['OpenTournaments'] = 2;
        $gamesList[1]['ParticipatingPlayer'] = 500;
        $gamesList[1]['ParticipatingTeams'] = 128;

        $gamesList[2]['Name'] = 'Farming Simulator';
        $gamesList[2]['Id'] = 3;
        $gamesList[2]['image'] = 'farmSim';
        $gamesList[2]['OpenTournaments'] = 1;
        $gamesList[2]['ParticipatingPlayer'] = 170;
        $gamesList[2]['ParticipatingTeams'] = 32;

        /*$testTournaentList = [];

        $testTournaentList[0]['Name'] = 'TSA Royale de Clash Cup';
        $testTournaentList[0]['DtStart'] = '01.09.2020 | 16:30';
        $testTournaentList[0]['DtRedEnd'] = '01.09.2020 | 15:30';
        $testTournaentList[0]['DtCheckIn'] = '01.09.2020 | 15:30 - 16:30';
        $testTournaentList[0]['RegisterOpen'] = true;
        $testTournaentList[0]['CheckInOpen'] = false;

        $testTournaentList[1]['Name'] = 'Bayrische Drift Meisterschaft';
        $testTournaentList[1]['DtStart'] = '01.09.2020 | 16:30';
        $testTournaentList[1]['DtRedEnd'] = '01.09.2020 | 15:30';
        $testTournaentList[1]['DtCheckIn'] = '01.09.2020 | 15:30 - 16:30';
        $testTournaentList[1]['RegisterOpen'] = false;
        $testTournaentList[1]['CheckInOpen'] = true;

        $testTournaentList[1]['Name'] = 'German North Cup';
        $testTournaentList[1]['DtStart'] = '01.09.2020 | 16:30';
        $testTournaentList[1]['DtRedEnd'] = '01.09.2020 | 15:30';
        $testTournaentList[1]['DtCheckIn'] = '01.09.2020 | 15:30 - 16:30';
        $testTournaentList[1]['RegisterOpen'] = false;
        $testTournaentList[1]['CheckInOpen'] = false;*/

        
        return $this->render('overview',
        [
            'gamesList' => $gamesList,
        ]);
    }
}