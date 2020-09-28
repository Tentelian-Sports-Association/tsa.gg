<?php

namespace app\modules\tournament\modules\clashRoyale\models;

use yii\db\ActiveRecord;
use DateTime;

use app\modules\user\models\User;

use app\modules\tournament\models\Tournament;

/**
 * Class PlayerBracketEncounter
 * @package app\modules\tournament\modules\rocketLeague\models
 *
 * @property int $id
 * @property int $tournament_id
 * @property int $game_round
 * @property int $player_id
 * @property string $battle_time
 * @property int $crowns
 * @property int $king_tower_hit_points
 * @property int $princess_tower_1_hitpoints
 * @property int $princess_tower_2_hitpoints
 * @property string $dt_created
 * @property string $dt_updated
 */


class PlayerBracketEncounter extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'clashRoyale_player_bracket_encounter';
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getTournamentId()
    {
        return $this->tournament_id;
    }

    /**
     * @return ActiveQuery
     */
    public function getTournament()
    {
        return $this->hasOne(Tournament::className(), ['id' => 'tournament_id'])->one();
    }

    /**
     * @return int
     */
    public function getGameRound()
    {
        return $this->game_round;
    }

    /**
     * @return int
     */
    public function getPlayerId()
    {
        return $this->player_id;
    }

    /**
     * @return ActiveQuery
     */
    public function getPlayer()
    {
        return $this->hasOne(User::className(), ['id' => 'player_id'])->one();
    }

    /**
     * @return string
     */
    public function getDtCreated()
    {
        return $this->dt_created;
    }

    /**
     * @return string
     */
    public function getDtUpdated()
    {
        return $this->dt_updated;
    }

    /** Statistics Data */

    /**
     * @return string
     */
    public function getBattleTime()
    {
        return $this->battle_time;
    }

    /**
     * @return int
     */
    public function getCrowns()
    {
        return $this->crowns;
    }

    /**
     * @return int
     */
    public function getKingTowerHitPoints()
    {
        return $this->king_tower_hit_points;
    }

    /**
     * @return int
     */
    public function getPrincessTower1Hitpoints()
    {
        return $this->princess_tower_1_hitpoints;
    }

    /**
     * @return int
     */
    public function getPrincessTower2Hitpoints()
    {
        return $this->princess_tower_2_hitpoints;
    }


    /** Set Function */

    public function getWinner($bracket)
	{
		$encounters = self::findAll(['tournament_id' => $bracket->getTournamentId(), 'id' => $bracket->getEncounterId()]);

		if (count($encounters) == 0) {
			return false;
		}
        
		$players_left = $bracket->getPlayerParticipant1();
		$players_right = $bracket->getPlayerParticipant2();

		$leftCrowns = [];
		$rightCrowns = [];

		foreach ($encounters as $key => $encounter)
        {
			if ($players_left->getId() == $encounter->player_id)
            {
				$leftCrowns[$encounter->getGameRound()] = $encounter->getCrowns();
			}

			if ($players_right->getId() == $encounter->player_id) {
				$rightCrowns[$encounter->getGameRound()] = $encounter->getCrowns();
			}
		}

		$minGames = ceil($bracket->getBestOf() / 2);

		if (count($leftCrowns) != count($rightCrowns) || count($leftCrowns) < $minGames || count($rightCrowns) < $minGames) {
			return false;
		}

		$leftWins = 0;
		$rightWins = 0;

		foreach ($leftCrowns as $round => $value) {
			if ($leftCrowns[$round] > $rightCrowns[$round]) {
				$leftWins++;
			} else if ($leftCrowns[$round] < $rightCrowns[$round]) {
				$rightWins++;
			}
		}

		if ($leftWins == $minGames) {
			return 1;
		}

		if ($rightWins == $minGames) {
			return 2;
		}

        $allLeftCrown = 0;
        $allRightCrowns = 0;
        foreach($leftCrowns as $round => $value)
        {
            $allLeftCrown += $leftCrowns[$round];
            $allRightCrowns += $rightCrowns[$round];
		}

        if ($allLeftCrown > $allRightCrowns) {
			return 1;
		}
        
        if($allRightCrowns > $allLeftCrown)
        {
	        return 2;
        }

        $leftLife = 0;
		$rightLife = 0;

		foreach ($encounters as $key => $encounter)
        {
			if ($players_left->getId() == $encounter->player_id)
            {
				$leftLife += $encounter->getKingTowerHitPoints();
				$leftLife += $encounter->getPrincessTower1Hitpoints();
				$leftLife += $encounter->getPrincessTower2Hitpoints();
			}

			if ($players_right->getId() == $encounter->player_id) {
				$rightLife += $encounter->getKingTowerHitPoints();
				$rightLife += $encounter->getPrincessTower1Hitpoints();
				$rightLife += $encounter->getPrincessTower2Hitpoints();
			}
		}

        if ($leftLife > $rightLife) {
			return 1;
		}
        
        if($rightLife > $leftLife)
        {
	        return 2;
        }

		return false;
	}

    /** Get Functions */
    public static function getAlllByTournament($tournament_id)
    {
        return static::find()->where(['tournament_id' => $tournament_id])->all();
	}
}