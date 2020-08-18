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

        $openTournamentList[0]['Name'] = 'TSA Royale de Clash Cup';
        $openTournamentList[0]['ID'] = 1;
        $openTournamentList[0]['DtStart'] = '01.09.2020 | 16:30';
        $openTournamentList[0]['DtRedEnd'] = '01.09.2020 | 15:30';
        $openTournamentList[0]['DtCheckIn'] = '01.09.2020 | 15:30 - 16:30';
        $openTournamentList[0]['RegisterOpen'] = true;
        $openTournamentList[0]['CheckInOpen'] = false;

        $openTournamentList[1]['Name'] = 'Bayrische Drift Meisterschaft';
        $openTournamentList[1]['ID'] = 2;
        $openTournamentList[1]['DtStart'] = '01.09.2020 | 16:30';
        $openTournamentList[1]['DtRedEnd'] = '01.09.2020 | 15:30';
        $openTournamentList[1]['DtCheckIn'] = '01.09.2020 | 15:30 - 16:30';
        $openTournamentList[1]['RegisterOpen'] = false;
        $openTournamentList[1]['CheckInOpen'] = true;

        $openTournamentList[2]['Name'] = 'German North Cup';
        $openTournamentList[2]['ID'] = 3;
        $openTournamentList[2]['DtStart'] = '01.09.2020 | 16:30';
        $openTournamentList[2]['DtRedEnd'] = '01.09.2020 | 15:30';
        $openTournamentList[2]['DtCheckIn'] = '01.09.2020 | 15:30 - 16:30';
        $openTournamentList[2]['RegisterOpen'] = false;
        $openTournamentList[2]['CheckInOpen'] = false;

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