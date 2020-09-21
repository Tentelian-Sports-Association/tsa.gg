<?php

namespace app\modules\tournament\modules\clashRoyale;

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