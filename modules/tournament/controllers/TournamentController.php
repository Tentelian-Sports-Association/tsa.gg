<?php

namespace app\modules\tournament\controllers;

use app\components\BaseController;
use yii\filters\AccessControl;

use app\modules\miscellaneouse\models\games\Games;

use app\modules\miscellaneouse\models\rules\Rules;


use app\modules\miscellaneouse\models\tournamentParticipants\TournamentPlayerParticipating;
use app\modules\miscellaneouse\models\tournamentParticipants\TournamentTeamParticipating;

use app\modules\tournament\models\Tournament;

use Yii;
use app\widgets\Alert;

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

            return $this->render('tournamentOverview',
            [
                'gamesList' => $gamesList,
            ]);
		}

        $choosedGame = Games::Find()->where(['id' => $gameID])->one();

        /** If game was Choosen */
        $openTournamentList = Tournament::GetTournaments($gameID);

        return $this->render('aktiveTournaments',
        [
            'choosedGame' => $choosedGame,
            'openTournamentList' => $openTournamentList,
        ]);
    }

    public function actionDetails($gameId, $tournamentId)
    {
        /** Base Informations **/
        $user = Yii::$app->HelperClass->getUser();
        $languageID = Yii::$app->HelperClass->getUserLanguage($user);

        $tournament = Tournament::find()->where(['id' => $tournamentId])->one();
        $participants = null;

        if($tournament->getIsTeamTournament())
        {
            $participants = TournamentTeamParticipating::getTeamParticipating($tournamentId, $languageID);
		}
        else
        {
            $participants = TournamentPlayerParticipating::getPlayerParticipating($tournamentId, $languageID);
        }

        $doubleEliminationData = Yii::$app->TournamentBracketClass->createBracketData($participants);

        return $this->render('tournamentDetails',
        [
            'tournament' => $tournament,
            'participants' => $participants,
            'doubleEliminationData' => $doubleEliminationData,
        ]);
	}

    public function actionRegister($gameId, $tournamentId)
    {
        if (Yii::$app->user->isGuest) {
            Alert::addError('You are not allowed to Register to an Tournament, Please Login');
            return $this->redirect(['/user/login']);
        }

        /** Base Informations **/
        $user = Yii::$app->HelperClass->getUser();
        $languageID = Yii::$app->HelperClass->getUserLanguage($user);

        $tournament = Tournament::find()->where(['id' => $tournamentId])->one();
        $rules = Rules::GetRules($tournament->getRulesId(), $languageID);

        $gameClass = 'app\modules\tournament\modules\\' . Games::find('id', $tournament->getGameId())->one()->getStatisticsClass() . '\CheckTeamEligible';
        $tournamentGameClass = new $gameClass();

        $authorizedTeams = $tournamentGameClass->checkTeamAuthorization($tournament, $user, $languageID);

        return $this->render('tournamentRegister',
        [
            'tournament' => $tournament,
            'rules' => $rules,
            'authorizedTeams' => $authorizedTeams,
        ]);
	}

    public function actionCheckin($gameId, $tournamentId)
    {
        
	}
}