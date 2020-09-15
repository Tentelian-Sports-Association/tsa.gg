<?php

namespace app\modules\tournament\modules\rocketLeague;

use app\modules\user\models\User;
use app\modules\user\models\UserGames;

use app\modules\miscellaneouse\models\games\GamePlatforms;

use app\modules\miscellaneouse\models\language\Language;
use app\modules\miscellaneouse\models\tournamentMode\TournamentMode;

use app\modules\miscellaneouse\models\tournamentParticipants\TournamentPlayerParticipating;
use app\modules\miscellaneouse\models\tournamentParticipants\TournamentTeamParticipating;

use app\modules\team\models\Team;
use app\modules\team\models\TeamMember;

use Yii;

/**
 * Class CheckTeamEligible
 * @package app\modules\core\miscellaneouse
 */
class CheckEligible
{
    /**
     * constructor.
     */
    public function __construct()
    {
    }

    public static function checkTeamAuthorization($tournament, $user, $languageID)
    {
        $teams = [];

        $modeMaxPlayer = TournamentMode::find()->where(['id' => $tournament->getModeId()])->one()->getTeamSize();
        $tournamentMaxSubstitudes = $tournament->getMaxPlayer() - $modeMaxPlayer;

        $managedTeams = [];

        foreach(TeamMember::find()->where(['user_id' => $user->getId()])->andWhere(['<', 'role_id', '3'])->all() as $nr => $managedTeam)
        {
            $team = Team::find()->where(['id' => $managedTeam->getTeamId()])->andWhere(['mode_id' => $tournament->getModeId()])->one();

            if($team)
                array_push($managedTeams, $team);
		}

        foreach($managedTeams as $nr => $team)
        {
            $players = TeamMember::FindPlayer($team->getId());
            $substitudes = TeamMember::FindSubstitude($team->getId());

            $teams[$nr]['teamId'] = $team->getId();
            $teams[$nr]['teamName'] = $team->getName();
            $teams[$nr]['teamOrgId'] = $team->getOrganisationId();
            $teams[$nr]['teamEligible'] = 0;

            /** Set Player Count and Check if Eligible */
            $teams[$nr]['playerCount'] = count($players);
            $teams[$nr]['maxPlayerCount'] = $tournament->getMaxPlayer() - $tournamentMaxSubstitudes;
            $teams[$nr]['playerCountEligible'] = (count($players) == ($tournament->getMaxPlayer() - $tournamentMaxSubstitudes)) ? 1 : 0;
            $teams[$nr]['playerCountEligibleError'] = '';

            if($teams[$nr]['playerCount'] < $teams[$nr]['maxPlayerCount'])
            {
                $teams[$nr]['playerCountEligibleError'] = 'You need ' . ($teams[$nr]['maxPlayerCount'] - $teams[$nr]['playerCount']) . ' more player';
			}
            else if ($teams[$nr]['playerCount'] > $teams[$nr]['maxPlayerCount'])
            {
                 $teams[$nr]['playerCountEligibleError'] = 'you have too many Players (' . ($teams[$nr]['playerCount'] - $teams[$nr]['maxPlayerCount']) . ') in your Team';
			}

            /** Set Substitude Count and Check if Eligible */
            $teams[$nr]['substitudeCount'] = count($substitudes);
            $teams[$nr]['maxSubstitudeCount'] = $tournamentMaxSubstitudes;
            $teams[$nr]['substitudeCountEligible'] = (count($substitudes) <= $tournamentMaxSubstitudes) ? 1 : 0;
            $teams[$nr]['substitudeCountEligibleError'] = '';

            if ($teams[$nr]['substitudeCount'] > $teams[$nr]['maxSubstitudeCount'])
            {
                 $teams[$nr]['substitudeCountEligibleError'] = 'you have too many Substitudes (' . ($teams[$nr]['substitudeCount'] - $teams[$nr]['maxSubstitudeCount']) . ') in your Team';
			}

            foreach($players as $pnr => $player)
            {
                $teams[$nr]['player'][$pnr]['playerId'] = $player['UserID'];
                $teams[$nr]['player'][$pnr]['playerName'] = $player['UserName'];

                $playerEligible = 0;
                
                foreach(UserGames::find()->where(['user_id' => $player['UserID']])->andWhere(['game_id' => $tournament->getGameId()])->all() as $rnr => $rocketId)
                {
                    $teams[$nr]['player'][$pnr]['gameIds'][$rnr]['gameId'] = $rocketId->getGameId();
                    $teams[$nr]['player'][$pnr]['gameIds'][$rnr]['gameName'] = $rocketId->getGameName($languageID);
                    $teams[$nr]['player'][$pnr]['gameIds'][$rnr]['gamePlayerId'] = $rocketId->getPlayerId();
                    $teams[$nr]['player'][$pnr]['gameIds'][$rnr]['platformId'] = $rocketId->getGamePlatformId();
                    $teams[$nr]['player'][$pnr]['gameIds'][$rnr]['platformName'] = $rocketId->getGamePlatformName($languageID);
                    $teams[$nr]['player'][$pnr]['gameIds'][$rnr]['platformPlayerId'] = null;
                    $teams[$nr]['player'][$pnr]['gameIds'][$rnr]['platformPlayerIdError'] = null;
                    
                    if(UserGames::find()->where(['user_id' => $player['UserID']])->andWhere(['game_id' => GamePlatforms::find()->where(['id' => $rocketId->getGamePlatformId()])->one()->getPlatformAsGameId()])->one())
                    {           
                        $teams[$nr]['player'][$pnr]['gameIds'][$rnr]['platformPlayerId'] = UserGames::find()->where(['user_id' => $player['UserID']])->andWhere(['game_id' => GamePlatforms::find()->where(['id' => $rocketId->getGamePlatformId()])->one()->getPlatformAsGameId()])->one()->getPlayerId();
					}

                    if(!$playerEligible)
                    {
                        $playerEligible = ($teams[$nr]['player'][$pnr]['gameIds'][$rnr]['gamePlayerId'] && $teams[$nr]['player'][$pnr]['gameIds'][$rnr]['platformPlayerId'])? 1 : 0;
					}

                    if(!$teams[$nr]['player'][$pnr]['gameIds'][$rnr]['platformPlayerId'])
                    {
                        $teams[$nr]['player'][$pnr]['gameIds'][$rnr]['platformPlayerIdError'] = 'No ' . $rocketId->getGamePlatformName($languageID) . ' id found';
					}

                    $teams[$nr]['player'][$pnr]['gameIds'][$rnr]['playerGameIdEligible'] = ($teams[$nr]['player'][$pnr]['gameIds'][$rnr]['gamePlayerId'] && $teams[$nr]['player'][$pnr]['gameIds'][$rnr]['platformPlayerId'])? 1 : 0;
				}

                $teams[$nr]['player'][$pnr]['playerEligible'] = $playerEligible;
                $teams[$nr]['teamEligible']= $playerEligible;
			}

            foreach($substitudes as $snr => $substitude)
            {
                $teams[$nr]['substitude'][$snr]['playerId'] = $substitude['UserID'];
                $teams[$nr]['substitude'][$snr]['playerName'] = $substitude['UserName'];

                $playerEligible = 0;

                foreach(UserGames::find()->where(['user_id' => $substitude['UserID']])->andWhere(['game_id' => $tournament->getGameId()])->all() as $rnr => $rocketId)
                {
                    $teams[$nr]['substitude'][$snr]['gameIds'][$rnr]['gameId'] = $rocketId->getGameId();
                    $teams[$nr]['substitude'][$snr]['gameIds'][$rnr]['gameName'] = $rocketId->getGameName($languageID);
                    $teams[$nr]['substitude'][$snr]['gameIds'][$rnr]['gamePlayerId'] = $rocketId->getPlayerId();
                    $teams[$nr]['substitude'][$snr]['gameIds'][$rnr]['platformId'] = $rocketId->getGamePlatformId();
                    $teams[$nr]['substitude'][$snr]['gameIds'][$rnr]['platformName'] = $rocketId->getGamePlatformName($languageID);
                    $teams[$nr]['substitude'][$snr]['gameIds'][$rnr]['platformPlayerId'] = null;
                    $teams[$nr]['substitude'][$snr]['gameIds'][$rnr]['platformPlayerIdError'] = null;

                    if(UserGames::find()->where(['user_id' => $substitude['UserID']])->andWhere(['game_id' => GamePlatforms::find()->where(['id' => $rocketId->getGamePlatformId()])->one()->getPlatformAsGameId()])->one())
                    {           
                        $teams[$nr]['substitude'][$snr]['gameIds'][$rnr]['platformPlayerId'] = UserGames::find()->where(['user_id' => $substitude['UserID']])->andWhere(['game_id' => GamePlatforms::find()->where(['id' => $rocketId->getGamePlatformId()])->one()->getPlatformAsGameId()])->one()->getPlayerId();
					}

                    if(!$playerEligible)
                    {
                        $playerEligible = ($teams[$nr]['substitude'][$snr]['gameIds'][$rnr]['gamePlayerId'] && $teams[$nr]['substitude'][$snr]['gameIds'][$rnr]['platformPlayerId'])? 1 : 0;
					}

                    if(!$teams[$nr]['substitude'][$snr]['gameIds'][$rnr]['platformPlayerId'])
                    {
                        $teams[$nr]['substitude'][$snr]['gameIds'][$rnr]['platformPlayerIdError'] = 'No ' . $rocketId->getGamePlatformName($languageID) . ' id found';
					}

                    $teams[$nr]['substitude'][$snr]['gameIds'][$rnr]['playerGameIdEligible'] = ($teams[$nr]['substitude'][$snr]['gameIds'][$rnr]['gamePlayerId'] && $teams[$nr]['substitude'][$snr]['gameIds'][$rnr]['platformPlayerId'])? 1 : 0;
				}

                $teams[$nr]['substitude'][$snr]['playerEligible'] = $playerEligible;
                $teams[$nr]['teamEligible']= $playerEligible;
			}

            if($teams[$nr]['teamEligible'])
            {
                $teams[$nr]['teamEligible'] = $teams[$nr]['teamEligible'] = ($teams[$nr]['playerCountEligible'] && $teams[$nr]['substitudeCountEligible'])? 1 : 0;     
			}

            $teams[$nr]['alreadyRegistered'] = false;
            $teams[$nr]['alreadyCheckedIn'] = false;

            if(TournamentTeamParticipating::getById($tournament->getId(), $team->getId()))
            {
                $teams[$nr]['alreadyRegistered'] = true;

                if(TournamentTeamParticipating::getById($tournament->getId(), $team->getId())->getIsCheckedIn())
                {
                    $teams[$nr]['alreadyCheckedIn'] = true;
		        }
		    }
		}

        return $teams;
	}

    public static function checkPlayerAuthorization($tournamentId, $tournamentGameId, $user, $languageID)
    {
        $player = [];

        $player['playerId'] = $user->getId();
        $player['playerName'] = $user->getUsername();

        $playerEligible = 0;

        foreach(UserGames::find()->where(['user_id' => $user->getId()])->andWhere(['game_id' => $tournamentGameId])->all() as $nr => $rocketId)
        {
            $player['gameIds'][$nr]['gameId'] = $rocketId->getGameId();
            $player['gameIds'][$nr]['gameName'] = $rocketId->getGameName($languageID);
            $player['gameIds'][$nr]['gamePlayerId'] = $rocketId->getPlayerId();
            $player['gameIds'][$nr]['platformId'] = $rocketId->getGamePlatformId();
            $player['gameIds'][$nr]['platformName'] = $rocketId->getGamePlatformName($languageID);
            $player['gameIds'][$nr]['platformPlayerId'] = null;
            $player['gameIds'][$nr]['platformPlayerIdError'] = null;

            if(UserGames::find()->where(['user_id' => $user->getId()])->andWhere(['game_id' => GamePlatforms::find()->where(['id' => $rocketId->getGamePlatformId()])->one()->getPlatformAsGameId()])->one())
            {           
                $player['gameIds'][$nr]['platformPlayerId'] = UserGames::find()->where(['user_id' => $user->getId()])->andWhere(['game_id' => GamePlatforms::find()->where(['id' => $rocketId->getGamePlatformId()])->one()->getPlatformAsGameId()])->one()->getPlayerId();
			}

            if(!$playerEligible)
            {
                $playerEligible = ($player['gameIds'][$nr]['gamePlayerId'] && $player['gameIds'][$nr]['platformPlayerId'])? 1 : 0;
			}

            if(!$player['gameIds'][$nr]['platformPlayerId'])
            {
                $player['gameIds'][$nr]['platformPlayerIdError'] = 'No ' . $rocketId->getGamePlatformName($languageID) . ' id found';
			}

            $player['gameIds'][$nr]['playerGameIdEligible'] = ($player['gameIds'][$nr]['gamePlayerId'] && $player['gameIds'][$nr]['platformPlayerId'])? 1 : 0;
		}

        $player['playerEligible'] = $playerEligible;
        $player['playerAlreadyRegistered'] = false;
        $player['alreadyCheckedIn'] = false;

        if(TournamentPlayerParticipating::getById($tournamentId, $user->getId()))
        {
            $player['playerAlreadyRegistered'] = true;

            if(TournamentPlayerParticipating::getById($tournamentId, $user->getId())->getIsCheckedIn())
            {
                $player['alreadyCheckedIn'] = true;
		    }
		}

        return $player;
    }
}