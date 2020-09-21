<?php

namespace app\modules\tournament\controllers;

use app\components\BaseController;
use yii\filters\AccessControl;
use Yii;
use app\widgets\Alert;

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

/**
 * Class PartnerController
 *
 * @package app\modules\tournament\controllers
 */
class RocketLeagueController extends BaseController
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

    /** Register/Unregister Player */

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
            return $this->redirect(['/tournament/register?tournamentId=' . $tournament->getId()]);
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

        return $this->redirect(['/tournament/register?tournamentId=' . $tournament->getId()]);
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
            return $this->redirect(['/tournament/register?tournamentId=' . $tournament->getId()]);
		}

        if($model != null) {
            $model->delete();
            Alert::addInfo('You are unsubscribed for  the ' . $tournament->getName() . ' tournament'); 
		}
        else {
	        Alert::addError('This Service is currently not availabel'); 
        }

        return $this->redirect(['/tournament/register?tournamentId=' . $tournament->getId()]);
    }

    /** Register/Unregister Team */
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
            return $this->redirect(['/tournament/register?tournamentId=' . $tournament->getId()]);
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

        return $this->redirect(['/tournament/register?tournamentId=' . $tournament->getId()]);
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
            return $this->redirect(['/tournament/register?tournamentId=' . $tournament->getId()]);
		}

        if($model != null) {
            $model->delete();
            Alert::addInfo('Team ' . $team->getName() . ' unsubscribed for  the ' . $tournament->getName() . ' tournament'); 
		}
        else {
	        Alert::addError('This Service is currently not availabel'); 
        }

        return $this->redirect(['/tournament/register?tournamentId=' . $tournament->getId()]);
    }


}