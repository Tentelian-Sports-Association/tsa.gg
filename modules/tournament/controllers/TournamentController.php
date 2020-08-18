<?php

namespace app\modules\tournament\controllers;

use app\components\BaseController;
use yii\filters\AccessControl;

use app\modules\miscellaneouse\models\games\Games;

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
     * Overview of Games with Tournaments
     *
     * @return string
     */
    public function actionOverview($gameID = 0)
    {
        /** Base Informations **/
        $user = Yii::$app->HelperClass->getUser();
        $languageID = Yii::$app->HelperClass->getUserLanguage($user);

        /** If no Games was Choosen (normal Overview) */
        if($gameID == 0)
        {
            $gamesList = Games::getGameWithTournaments($languageID);

            return $this->render('overview',
            [
                'gamesList' => $gamesList,
            ]);
		}

        $choosedGame = Games::Find()->where(['id' => $gameID])->one();

        /** If game was Choosen */
        $openTournamentList = [];

        $testTournaentList[0]['Name'] = 'TSA Royale de Clash Cup';
        $testTournaentList[0]['ID'] = 1;
        $testTournaentList[0]['DtStart'] = '01.09.2020 | 16:30';
        $testTournaentList[0]['DtRedEnd'] = '01.09.2020 | 15:30';
        $testTournaentList[0]['DtCheckIn'] = '01.09.2020 | 15:30 - 16:30';
        $testTournaentList[0]['RegisterOpen'] = true;
        $testTournaentList[0]['CheckInOpen'] = false;

        $testTournaentList[1]['Name'] = 'Bayrische Drift Meisterschaft';
        $testTournaentList[0]['ID'] = 2;
        $testTournaentList[1]['DtStart'] = '01.09.2020 | 16:30';
        $testTournaentList[1]['DtRedEnd'] = '01.09.2020 | 15:30';
        $testTournaentList[1]['DtCheckIn'] = '01.09.2020 | 15:30 - 16:30';
        $testTournaentList[1]['RegisterOpen'] = false;
        $testTournaentList[1]['CheckInOpen'] = true;

        $testTournaentList[1]['Name'] = 'German North Cup';
        $testTournaentList[0]['ID'] = 3;
        $testTournaentList[1]['DtStart'] = '01.09.2020 | 16:30';
        $testTournaentList[1]['DtRedEnd'] = '01.09.2020 | 15:30';
        $testTournaentList[1]['DtCheckIn'] = '01.09.2020 | 15:30 - 16:30';
        $testTournaentList[1]['RegisterOpen'] = false;
        $testTournaentList[1]['CheckInOpen'] = false;

        return $this->render('aktiveTournaments',
        [
            'choosedGame' => $choosedGame,
            'openTournamentList' => $openTournamentList,
        ]);
    }

    public function actionTest()
    {
        

        return $this->render('test',
        [
            //'choosedGame' => $choosedGame,
            //'openTournamentList' => $openTournamentList,
        ]);
	}
}