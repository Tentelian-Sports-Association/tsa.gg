<?php

namespace app\modules\tournament\controllers;

use app\components\BaseController;
use yii\filters\AccessControl;

use app\modules\miscellaneouse\models\games\Games;

use app\modules\miscellaneouse\models\rules\Rules;


use app\modules\miscellaneouse\models\tournamentParticipants\TournamentPlayerParticipating;
use app\modules\miscellaneouse\models\tournamentParticipants\TournamentTeamParticipating;

use app\modules\tournament\models\Tournament;

use app\modules\team\models\Team;

use app\modules\tournament\modules\rocketLeague\models\TeamBrackets;
use app\modules\tournament\modules\rocketLeague\models\TeamBracketEncounter;

use app\modules\tournament\modules\rocketLeague\models\PlayerBrackets;
use app\modules\tournament\modules\rocketLeague\models\PlayerBracketEncounter;


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

        $choosedGame = Games::findByID($gameID);

        /** If game was Choosen */
        $openTournamentList = Tournament::GetTournaments($gameID);

        return $this->render('aktiveTournaments',
        [
            'choosedGame' => $choosedGame,
            'openTournamentList' => $openTournamentList,
        ]);
    }

    public function actionDetails($tournamentId)
    {
        /** Base Informations **/
        $user = Yii::$app->HelperClass->getUser();
        $languageID = Yii::$app->HelperClass->getUserLanguage($user);

        $tournament = Tournament::getTournamentById($tournamentId);

        $participants = null;

        if($tournament->getIsTeamTournament())
        {
            $participants = TournamentTeamParticipating::getTeamParticipating($tournamentId, $languageID);
            $bracketData = TeamBrackets::getAllByTournamentFormatted($tournamentId);
		}
        else
        {
            $participants = TournamentPlayerParticipating::getPlayerParticipating($tournamentId, $languageID);
            $bracketData = PlayerBrackets::getAllByTournamentFormatted($tournamentId);
		}

        $temp = $tournament->getTournamentTreeData();
        
        return $this->render('tournamentDetails',
        [
            'tournament' => $tournament,
            'participants' => $participants,
            'bracketData' => $bracketData,
        ]);
	}

    public function actionCreateBrackets($tournamentId)
    {
        $tournament = Tournament::getTournamentById($tournamentId);
        
        $game = 'app\modules\tournament\modules\\' . Games::findByID($tournament->getGameId())->getStatisticsClass() . '\CreateBrackets';
        $gameClass = new $game();

        if($tournament->getIsTeamTournament())
        {
            $checkedInParticipants = TournamentTeamParticipating::getCheckedInTeamParticipating($tournamentId);
		}
        else
        {
            $checkedInParticipants = TournamentPlayerParticipating::getCheckedInPlayerParticipating($tournamentId);
        }

        $bracketData = $gameClass->CreateBrackets($checkedInParticipants, $tournament->getId());

        return $this->redirect(['details?gameId='. $tournament->getGameId() . '&tournamentId=' . $tournament->getId()]);
	}

    /** Register */

    public function actionRegister($tournamentId)
    {
        /** Base Informations **/
        $user = Yii::$app->HelperClass->getUser();
        $languageID = Yii::$app->HelperClass->getUserLanguage($user);

        $tournament = Tournament::getTournamentById($tournamentId);
        $rules = Rules::GetRules($tournament->getRulesId(), $languageID);

        $gameClass = 'app\modules\tournament\modules\\' . Games::find()->where(['id' => $tournament->getGameId()])->one()->getStatisticsClass() . '\CheckEligible';
        $tournamentGameClass = new $gameClass();

        $authorizedTeams = [];
        $authorizedPlayer = [];
        $view = '';

        if($user)
        {
            if($tournament->getIsTeamTournament())
            {
                $authorizedTeams = $tournamentGameClass->checkTeamAuthorization($tournament, $user, $languageID);
                $view = Yii::$app->basePath.'/modules/tournament/modules/' . Games::find()->where(['id' => $tournament->getGameId()])->one()->getStatisticsClass() . '/views/registration_team.php';
			}
            else
            {
                $authorizedPlayer = $tournamentGameClass->checkPlayerAuthorization($tournament->getId(), $tournament->getGameId(), $user, $languageID);
                $view = Yii::$app->basePath.'/modules/tournament/modules/' . Games::find()->where(['id' => $tournament->getGameId()])->one()->getStatisticsClass() . '/views/registration_player.php';
			}
        }

        return $this->render('tournamentRegister',
        [
            'tournament' => $tournament,
            'rules' => $rules,
            'authorizedTeams' => $authorizedTeams,
            'authorizedPlayer' => $authorizedPlayer,
            'user' => $user,
            'view' => $view,
        ]);
	}

    /** CheckIn */

    public function actionCheckin($tournamentId)
    {   
        /** Base Informations **/
        $user = Yii::$app->HelperClass->getUser();
        $languageID = Yii::$app->HelperClass->getUserLanguage($user);

        $tournament = Tournament::getTournamentById($tournamentId);
        $rules = Rules::GetRules($tournament->getRulesId(), $languageID);

        $gameClass = 'app\modules\tournament\modules\\' . Games::find()->where(['id' => $tournament->getGameId()])->one()->getStatisticsClass() . '\CheckEligible';
        $tournamentGameClass = new $gameClass();

        $authorizedTeams = [];
        $authorizedPlayer = [];
        $view = '';

        if($user)
        {
            if($tournament->getIsTeamTournament())
            {
                $authorizedTeams = $tournamentGameClass->checkTeamAuthorization($tournament, $user, $languageID);
                $view = Yii::$app->basePath.'/modules/tournament/modules/' . Games::find()->where(['id' => $tournament->getGameId()])->one()->getStatisticsClass() . '/views/checkin_team.php';
			}
            else
            {
                $authorizedPlayer = $tournamentGameClass->checkPlayerAuthorization($tournament->getId(), $tournament->getGameId(), $user, $languageID);
                $view = Yii::$app->basePath.'/modules/tournament/modules/' . Games::find()->where(['id' => $tournament->getGameId()])->one()->getStatisticsClass() . '/views/checkin_player.php';
			}
        }

        return $this->render('tournamentCheckIn',
        [
            'tournament' => $tournament,
            'authorizedTeams' => $authorizedTeams,
            'authorizedPlayer' => $authorizedPlayer,
            'view' => $view,
            'user' => $user,
        ]);
	}

    /** Brackets */

    public function actionBracketDetails($tournamentId = null, $bracketId = null)
    {
        if(!$tournamentId || !$bracketId)
        {
              Alert::addError('No Tournament and Bracket Selected');
              return $this->redirect(['overview']);
		}

        if(Yii::$app->request->post())
        {
              $this->saveBracketData(Yii::$app->request->post());
		}

        /** Base Informations **/
        $user = Yii::$app->HelperClass->getUser();
        $languageID = Yii::$app->HelperClass->getUserLanguage($user);

        $tournament = Tournament::getTournamentById($tournamentId);
        
        $bracketData = [];
        $bracketView = '';

        if($tournament->getIsTeamTournament())
        {
            $bracketData = TeamBrackets::getBracketData($bracketId);
            $bracketView = Yii::$app->basePath.'/modules/tournament/modules/' .  Games::find()->where(['id' => $tournament->getGameId()])->one()->getStatisticsClass() . '/views/team_BracketDetails.php';
		}
        else
        {
            $bracketData = PlayerBrackets::getBracketData($bracketId);
            $bracketView = Yii::$app->basePath.'/modules/tournament/modules/' . Games::find()->where(['id' => $tournament->getGameId()])->one()->getStatisticsClass() . '/views/single_BracketDetails.php';
		}

        $encounterScreen = [];
        $editable = false;

        //$url = Yii::$app->basePath.'/modules/tournament/modules/rocketLeague/views/single_BracketDetails.php';

        return $this->render('tournamentBracketDetails',
        [
            'tournament' => $tournament,
            'bracketData' => $bracketData,
            'encounterScreen' => $encounterScreen,
            'editable' => $editable,
            'bracketView' => $bracketView,
            'myId' => $user->getId(),
        ]);
	}

    /** In Rocket League Class ausgliedern */
    private function saveBracketData($bracketData)
    {
        $tournament = Tournament::getTournamentById($bracketData['tournamentId']);
        $gameBracketClass = '';
        $gameEncounterClass = '';

        if($bracketData['isTeam'])
        {
            $gameBracketClass = 'app\modules\tournament\modules\\' . Games::find()->where(['id' => $tournament->getGameId()])->one()->getStatisticsClass() . '\models\TeamBrackets';
            $gameEncounterClass = 'app\modules\tournament\modules\\' . Games::find()->where(['id' => $tournament->getGameId()])->one()->getStatisticsClass() . '\models\TeamBracketEncounter';
		}
        else
        {
            $gameBracketClass = 'app\modules\tournament\modules\\' . Games::find()->where(['id' => $tournament->getGameId()])->one()->getStatisticsClass() . '\models\PlayerBrackets';
            $gameEncounterClass = 'app\modules\tournament\modules\\' . Games::find()->where(['id' => $tournament->getGameId()])->one()->getStatisticsClass() . '\models\PlayerBracketEncounter';
        }

        $tournamentBracketClass = new $gameBracketClass();
        $bracket = $tournamentBracketClass::getById($bracketData['bracketId']);

        $tournamentEncounterClass = new $gameEncounterClass();

        foreach ($bracketData['points'] as $gameRound => $playerArr)
        {
            foreach ($playerArr as $playerId => $points)
            {
                if($bracketData['isTeam'])
                {
                    $encounterBracket = $bracket->getEncounter($playerId, $gameRound);

                    $encounterBracket->setData($points);
                    $encounterBracket->save();
				}
                else
                {
                    $encounterBracket = $bracket->getEncounter($playerId, $gameRound);
                    
                    $encounterBracket->setData($points);
                    $encounterBracket->save();
                }
            }
		}

        $winner = $tournamentEncounterClass->getWinner($bracket);

        if($winner)
            $bracket->moveParticipantsNextRound($winner);


        Alert::addSuccess('Bracket Data Saved');
        return $this->redirect(['details?tournamentId=' . $tournament->getId()]);
	}
}