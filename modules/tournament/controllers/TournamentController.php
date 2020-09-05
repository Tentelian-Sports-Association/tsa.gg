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
        if (Yii::$app->user->isGuest) {
            Alert::addError('You are not allowed to Register to an Tournament, Please Login');
            return $this->redirect(['/user/login']);
        }

        /** Base Informations **/
        $user = Yii::$app->HelperClass->getUser();
        $languageID = Yii::$app->HelperClass->getUserLanguage($user);

        $tournament = Tournament::getTournamentById($tournamentId);
        $rules = Rules::GetRules($tournament->getRulesId(), $languageID);

        $gameClass = 'app\modules\tournament\modules\\' . Games::find('id', $tournament->getGameId())->one()->getStatisticsClass() . '\CheckEligible';
        $tournamentGameClass = new $gameClass();

        $authorizedTeams = $tournamentGameClass->checkTeamAuthorization($tournament, $user, $languageID);
        $authorizedPlayer = $tournamentGameClass->checkPlayerAuthorization($tournament->getId(), $tournament->getGameId(), $user, $languageID);

        return $this->render('tournamentRegister',
        [
            'tournament' => $tournament,
            'rules' => $rules,
            'authorizedTeams' => $authorizedTeams,
            'authorizedPlayer' => $authorizedPlayer,
        ]);
	}

    public function actionRegisterTeam($tournamentId, $teamId)
    {
        if (Yii::$app->user->isGuest) {
            Alert::addError('You are not allowed to Register to an Tournament, Please Login');
            return $this->redirect(['/user/login']);
        }

        /** Base Informations **/
        $user = Yii::$app->HelperClass->getUser();
        $languageID = Yii::$app->HelperClass->getUserLanguage($user);

        $tournament = Tournament::getTournamentById($tournamentId);
        $team = Team::findTeamById($teamId);

        if(TournamentTeamParticipating::getById($tournament->getId(), $team->getId()))
        {
            Alert::addError('Team ' . $team->getName() . ' already registered for the ' . $tournament->getName() . ' tournament');
            return $this->redirect(['register?tournamentId=' . $tournament->getId()]);
		}

        $model = new TournamentTeamParticipating();
        $model->tournament_id = $tournament->getId();
        $model->team_id = $team->getId();
        $model->checked_in = false;
        $model->readRules = true;

        if($model != null) {
            $model->save();
            Alert::addInfo('Team ' . $team->getName() . ' registered for  the ' . $tournament->getName() . ' tournament'); 
		}
        else {
	        Alert::addError('This Service is currently not availabel'); 
        }

        return $this->redirect(['register?tournamentId=' . $tournament->getId()]);
	}

    public function actionUnsubscribeTeam($tournamentId, $teamId)
    {
        if (Yii::$app->user->isGuest) {
            Alert::addError('You are not allowed to Register to an Tournament, Please Login');
            return $this->redirect(['/user/login']);
        }

        /** Base Informations **/
        $user = Yii::$app->HelperClass->getUser();
        $languageID = Yii::$app->HelperClass->getUserLanguage($user);

        $tournament = Tournament::getTournamentById($tournamentId);
        $team = Team::findTeamById($teamId);

        $model = TournamentTeamParticipating::getById($tournament->getId(), $team->getId());

        if(!$model)
        {
            Alert::addError('Team ' . $team->getName() . ' not registered for the ' . $tournament->getName() . ' tournament');
            return $this->redirect(['register?tournamentId=' . $tournament->getId()]);
		}

        if($model != null) {
            $model->delete();
            Alert::addInfo('Team ' . $team->getName() . ' unsubscribed for  the ' . $tournament->getName() . ' tournament'); 
		}
        else {
	        Alert::addError('This Service is currently not availabel'); 
        }

        return $this->redirect(['register?tournamentId=' . $tournament->getId()]);
    }

    public function actionRegisterPlayer($tournamentId)
    {
        if (Yii::$app->user->isGuest) {
            Alert::addError('You are not allowed to Register to an Tournament, Please Login');
            return $this->redirect(['/user/login']);
        }

        /** Base Informations **/
        $user = Yii::$app->HelperClass->getUser();
        $languageID = Yii::$app->HelperClass->getUserLanguage($user);

        $tournament = Tournament::getTournamentById($tournamentId);

        if(TournamentPlayerParticipating::getById($tournament->getId(), $user->getId()))
        {
            Alert::addError('You are already registered for the ' . $tournament->getName() . ' tournament');
            return $this->redirect(['register?tournamentId=' . $tournament->getId()]);
		}

        $model = new TournamentPlayerParticipating();
        $model->tournament_id = $tournament->getId();
        $model->player_id = $user->getId();
        $model->checked_in = false;
        $model->readRules = true;

        if($model != null) {
            $model->save();
            Alert::addInfo('You are registered for  the ' . $tournament->getName() . ' tournament'); 
		}
        else {
	        Alert::addError('This Service is currently not availabel'); 
        }

        return $this->redirect(['register?tournamentId=' . $tournament->getId()]);
    }

    public function actionUnsubscribePlayer($tournamentId)
    {
        if (Yii::$app->user->isGuest) {
            Alert::addError('You are not allowed to Register to an Tournament, Please Login');
            return $this->redirect(['/user/login']);
        }

        /** Base Informations **/
        $user = Yii::$app->HelperClass->getUser();
        $languageID = Yii::$app->HelperClass->getUserLanguage($user);

        $tournament = Tournament::getTournamentById($tournamentId);

        $model = TournamentPlayerParticipating::getById($tournament->getId(), $user->getId());
        if(!$model)
        {
            Alert::addError('You are not registered for the ' . $tournament->getName() . ' tournament');
            return $this->redirect(['register?tournamentId=' . $tournament->getId()]);
		}

        if($model != null) {
            $model->delete();
            Alert::addInfo('You are unsubscribed for  the ' . $tournament->getName() . ' tournament'); 
		}
        else {
	        Alert::addError('This Service is currently not availabel'); 
        }

        return $this->redirect(['register?tournamentId=' . $tournament->getId()]);
    }

    /** CheckIn */

    public function actionCheckin($gameId, $tournamentId)
    {   
        if (Yii::$app->user->isGuest) {
            Alert::addError('You are not allowed to Register to an Tournament, Please Login');
            return $this->redirect(['/user/login']);
        }

        /** Base Informations **/
        $user = Yii::$app->HelperClass->getUser();
        $languageID = Yii::$app->HelperClass->getUserLanguage($user);

        $tournament = Tournament::getTournamentById($tournamentId);

        $gameClass = 'app\modules\tournament\modules\\' . Games::find('id', $tournament->getGameId())->one()->getStatisticsClass() . '\CheckTeamEligible';
        $tournamentGameClass = new $gameClass();

        $authorizedTeams = $tournamentGameClass->checkTeamAuthorization($tournament, $user, $languageID);

        return $this->render('tournamentCheckIn',
        [
            'tournament' => $tournament,
            'authorizedTeams' => $authorizedTeams,
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

        if($tournament->getIsTeamTournament())
            $bracketData = TeamBrackets::getBracketData($bracketId);
        else 
            $bracketData = PlayerBrackets::getBracketData($bracketId);

        $encounterScreen = [];
        $editable = true;

        //print_r($bracketData);
        //die();

        return $this->render('tournamentBracketDetails',
        [
            'tournament' => $tournament,
            'bracketData' => $bracketData,
            'encounterScreen' => $encounterScreen,
            'editable' => $editable,
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
            
		}
        else
        {
            $gameBracketClass = 'app\modules\tournament\modules\\' . Games::find('id', $tournament->getGameId())->one()->getStatisticsClass() . '\models\PlayerBrackets';
            $gameEncounterClass = 'app\modules\tournament\modules\\' . Games::find('id', $tournament->getGameId())->one()->getStatisticsClass() . '\models\PlayerBracketEncounter';
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
            $bracket->movePlayersNextRound($winner);


        Alert::addSuccess('Bracket Data Saved');
        return $this->redirect(['details?tournamentId=' . $tournament->getId()]);
	}
}