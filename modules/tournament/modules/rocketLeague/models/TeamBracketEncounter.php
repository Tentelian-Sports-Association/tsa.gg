<?php

namespace app\modules\tournament\modules\rocketLeague\models;

use yii\db\ActiveRecord;
use DateTime;

use app\modules\user\models\User;

use app\modules\team\models\TeamMember;

use app\modules\tournament\models\Tournament;

/**
 * Class TeamBracketEncounter
 * @package app\modules\tournament\modules\rocketLeague\models
 *
 * @property int $id
 * @property int $tournament_id
 * @property int $game_round
 * @property int $team_id
 * @property int $player_id
 * @property int $points
 * @property int $goals
 * @property int $assist
 * @property int $saves
 * @property int $shots
 * @property int $balltouches
 * @property int $cartouches
 * @property int $demos
 * @property string $dt_created
 * @property string $dt_updated
 */
class TeamBracketEncounter extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'rocketleague_team_bracket_encounter';
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
    public function getTeamId()
    {
        return $this->team_id;
    }

    /**
     * @return ActiveQuery
     */
    public function getTeam()
    {
        return $this->hasOne(Team::className(), ['id' => 'team_id'])->one();
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

    /** Statistics Data */
    
    /**
     * @return int
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @return int
     */
    public function getGoals()
    {
        return $this->goals;
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

    /**
	 * @param int
	 * @param array
	 */
	public function setData($pointsArr)
	{
		// im Array müssen die gleichen Felder sein, wie hier beschrieben:
		// points, goals, assists, saves, shots
		foreach ($pointsArr as $key => $value) {
			$this->$key = $value;
		}
	}

    public function getWinner($bracket)
	{
		$encounters = self::findAll(['tournament_id' => $bracket->getTournamentId(), 'id' => $bracket->getEncounterId()]);

		if (count($encounters) == 0) {
			return false;
		}
        
		$team_left = $bracket->getTeamParticipant1();
        $team_left_players = TeamMember::FindPlayer($bracket->getTeamParticipant1Id());
        $team_left_substitudes = TeamMember::FindSubstitude($bracket->getTeamParticipant1Id()); 

		$team_right = $bracket->getTeamParticipant2();
        $team_right_players = TeamMember::FindPlayer($bracket->getTeamParticipant2Id());
        $team_right_substitudes = TeamMember::FindSubstitude($bracket->getTeamParticipant2Id());

		$leftGoals = [];
		$rightGoals = [];

        foreach ($encounters as $key => $encounter)
        {
            if($team_left && $team_left->getId() == $encounter->getTeamId())
            {
                foreach($team_left_players as $trnr => $team_left_player)
                {
                    if(array_key_exists($encounter->getGameRound(), $leftGoals))
                        $leftGoals[$encounter->getGameRound()] += $encounter->getGoals();
                    else
                        $leftGoals[$encounter->getGameRound()] = $encounter->getGoals();
				}
			}

            if($team_right && $team_right->getId() == $encounter->getTeamId())
            {
                foreach($team_right_players as $trnr => $team_right_player)
                {
                    if(array_key_exists($encounter->getGameRound(), $rightGoals))
                        $rightGoals[$encounter->getGameRound()] += $encounter->getGoals();
                    else
                        $rightGoals[$encounter->getGameRound()] = $encounter->getGoals();
                }
			}
		}

		$minGames = ceil($bracket->getBestOf() / 2);

		if (count($leftGoals) != count($rightGoals)) {
			return false;
		}

		if (count($leftGoals) < $minGames) {
			return false;
		}

		$leftWins = 0;
		$rightWins = 0;

		foreach ($leftGoals as $round => $value) {
			if ($leftGoals[$round] > $rightGoals[$round]) {
				$leftWins++;
			} else if ($leftGoals[$round] < $rightGoals[$round]) {
				$rightWins++;
			}
		}

		if ($leftWins == $minGames) {
			return 1;
		}

		if ($rightWins == $minGames) {
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