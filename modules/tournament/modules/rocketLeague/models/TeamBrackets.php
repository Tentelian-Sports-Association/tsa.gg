<?php

namespace app\modules\tournament\modules\rocketLeague\models;

use yii\db\ActiveRecord;
use DateTime;

use app\modules\team\models\Team;
use app\modules\team\models\TeamMember;

use app\modules\tournament\models\Tournament;
use app\modules\tournament\modules\rocketLeague\models\TeamBracketEncounter;

/**
 * Class TeamBrackets
 * @package app\modules\tournament\modules\rocketLeague\models
 *
 * @property int $id
 * @property int $tournament_id
 * @property int $encounter_id
 * @property int $round
 * @property int $best_of
 * @property bool $is_winner
 * @property int $participant_1
 * @property int $participant_2
 * @property int $winner_bracket
 * @property int $looser_bracket
 * @property int $winner_participant
 * @property string $dt_created
 * @property string $dt_updated
 */
class TeamBrackets extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'rocketLeague_team_brackets';
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
    public function getEncounterId()
    {
        return $this->encounter_id;
    }

    /**
     * @return int
     */
    public function getRound()
    {
        return $this->round;
    }

    /**
     * @return int
     */
    public function getBestOf()
    {
        return $this->best_of;
    }

    /**
     * @return bool
     */
    public function getIsWinnerBracket()
    {
        return $this->is_winner;
    }

    /**
     * @return int
     */
    public function getTeamParticipant1Id()
    {
        return $this->participant_1;
    }

    /**
     * @return ActiveQuery
     */
    public function getTeamParticipant1()
    {
        return $this->hasOne(Team::className(), ['id' => 'participant_1'])->one();
    }

    public function getTeamParticipant1Player()
    {
        $player = TeamMember::FindPlayer($this->getTeamParticipant1Id());
        $substitudes = TeamMember::FindSubstitude($this->getTeamParticipant1Id());

        return array_merge($player, $substitudes);
	}

    /**
     * @return int
     */
    public function getTeamParticipant2Id()
    {
        return $this->participant_2;
    }

    /**
     * @return ActiveQuery
     */
    public function getTeamParticipant2()
    {
        return $this->hasOne(Team::className(), ['id' => 'participant_2'])->one();
    }

    public function getTeamParticipant2Player()
    {
        $player = TeamMember::FindPlayer($this->getTeamParticipant2Id());
        $substitudes = TeamMember::FindSubstitude($this->getTeamParticipant2Id());

        return array_merge($player, $substitudes);
	}

    /**
     * @return int
     */
    public function getWinnerBracketId()
    {
        return $this->winner_bracket;
    }

    /**
     * @return ActiveQuery
     */
    public function getWinnerBracket()
    {
        return $this->hasOne(TeamBracketEncounter::className(), ['id' => 'winner_bracket'])->one();
    }

    /**
     * @return int
     */
    public function getLooserBracketId()
    {
        return $this->looser_bracket;
    }

    /**
     * @return ActiveQuery
     */
    public function getLooserBracket()
    {
        return $this->hasOne(TeamBrackets::className(), ['id' => 'looser_bracket'])->one();
    }

    /**
     * @return int
     */
    public function getWinnerParticipantId()
    {
        return $this->winner_participant;
    }

    /**
     * @return ActiveQuery
     */
    public function getWinnerParticipant()
    {
        return $this->hasOne(Team::className(), ['id' => 'winner_participant'])->one();
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

    
    
    public function getByTournament($tournament_id)
	{
		return $this->find()->where(['tournament_id' => $tournament_id])->all();
	}
    
    /** static functions */
    /** Brackets and Other Stuff */

    public static function getById($bracket_id)
    {
        return static::find()->where(['id' => $bracket_id])->one();
	}

    /**
	 * @param int
	 * @return static|null
	 */
	public static function getAllByTournament($tournament_id)
	{
		return static::find()->where(['tournament_id' => $tournament_id])->all();
	}

    public static function getAllByTournamentFormatted($tournament_id)
    {
        $brackets = self::getAllByTournament($tournament_id);
		$out = [
			'winner' => [],
			'looser' => [],
		];

		$startTime = NULL;
		$firstBracket = reset($brackets);

		if (false !== $firstBracket) {
			$tournament = $firstBracket->getTournament();
			$startTime = new \DateTime($tournament->getStartingTime());
		}

		foreach ($brackets as $key => $bracket) {

			$firstLevel = ($bracket->getIsWinnerBracket()) ? 'winner' : 'looser';
			$secondLevel = $bracket->getRound();
			$secondLevel = ($secondLevel === 998) ? 'Finale' : $secondLevel;
			$secondLevel = ($secondLevel === 999) ? 'Finale (optional)' : $secondLevel;

			if (!array_key_exists($secondLevel, $out[$firstLevel])) {
				$out[$firstLevel][$secondLevel] = ['startTime' => '', 'brackets' => []];
			}

			$out[$firstLevel][$secondLevel]['brackets'][] = $bracket;
		}

		if (count($out['winner']) == 0) {
			return $out;
		}

		$bracketSet = $tournament->getBracketSet();

		$winnerKeys = array_keys($out['winner']);
		$looserKeys = array_keys($out['looser']);

		$maxLooserRound = ($bracketSet->getIsDoubleElimination()) ? $looserKeys : $winnerKeys;

		$allKeys = array_merge($winnerKeys, $looserKeys);

		foreach ($allKeys as $key => $keyVal)
        {

            

			if ($keyVal == 'Finale') {
				$keyRound = $maxLooserRound[0] + 1;
			} else if ($keyVal == 'Finale (optional)') {
				$keyRound = $maxLooserRound[0] + 2;
			} else {
				$keyRound = $keyVal;
			}

			$keyRound--;

			$min = $keyRound * 30;

			if ($keyVal == 'Finale') {
				$min+= 15;
			}
			if ($keyVal == 'Finale (optional)') {
				$min+= 30;
			}

			$interval = new \DateInterval('PT' . $min . 'M');
			$startTime->add($interval);
			if (array_key_exists($keyVal, $out['winner'])) {
				$out['winner'][$keyVal]['startTime'] = $startTime->format('H:i');
			}
			if (array_key_exists($keyVal, $out['looser'])) {
				$out['looser'][$keyVal]['startTime'] = $startTime->format('H:i');
			}
			$startTime->sub($interval);
		}

		return $out;
	}

    public static function clearForTournament($tournament_id)
    {
		$brackets = self::getAllByTournament($tournament_id);
		foreach ($brackets as $key => $bracket) {
			$bracket->delete();
		}
	}

    public function setParticipant($participant)
    {
        if($participant[0])
            $this->participant_1 = $participant[0]['id'];

        if($participant[1])
            $this->participant_2 = $participant[1]['id'];
	}

    public function getPlayers($bracket_id, $left_right)
	{
        if ('left' === $left_right) {
	        $player  =  $this->getTeamParticipant1Player();
	        $player_arr = $player;
	    } else if ('right' === $left_right) {
    	    $player = $this->getTeamParticipant2Player();
            $player_arr = $player;
	    }

        return $player_arr;
	}

    /**
	 * @return array
	 */
	public function getBracketRefs()
	{
		$winner = $this->hasMany(TeamBrackets::className(), ['winner_bracket' => 'id'])->all();
		$looser = $this->hasMany(TeamBrackets::className(), ['looser_bracket' => 'id'])->all();

		$brackets = [];
		while ($tmp = array_shift($looser)) {
			$brackets[] = ['type' => 'looser', 'bracket' => $tmp];
		}
		while ($tmp = array_shift($winner)) {
			$brackets[] = ['type' => 'winner', 'bracket' => $tmp];
		}

		return $brackets;
	}

    public function getParticipants()
	{
        $participant1 = $this->getTeamParticipant1();
        $participant2 = $this->getTeamParticipant2();

        $participants[0] = NULL;
        $participants[1] = NULL;

        if($participant1)
        {
            $participants[0]['id'] = $participant1->getId();
		    $participants[0]['name'] = $participant1->getName();
		}

        if($participant2)
        {
            $participants[1]['id'] = $participant2->getId();
		    $participants[1]['name'] = $participant2->getName();
		}

		return $participants;
	}

    //public function movePlayersNextRound($winnerNumber)
    //public function setSpielerByBackRef($id, $preBracketId)

    /**
	 * @return boolean|int
	 */
	public function checkisFinished()
	{
		$winner = $this->getWinnerParticipant();
		if ($winner !== NULL) {
			return $winner;
		}

		$type = 'user';
		$winnerBracket = $this->getWinnerBracket();
		if (false === $winnerBracket || NULL === $winnerBracket) {
			return false;
		}

		if ($type === 'user') {

			if ($winnerBracket->participant_1 != NULL && $this->participant_1 == $winnerBracket->participant_1 || $winnerBracket->participant_2 != NULL && $this->participant_1 == $winnerBracket->participant_2) {
				return 1;
			} else if ($winnerBracket->participant_1 != NULL && $this->participant_2 == $winnerBracket->participant_1 || $winnerBracket->participant_2 != NULL && $this->participant_2 == $winnerBracket->participant_2) {
				return 2;
			} 
        }

		return false;
	}

    public function getGoals($tournament)
    {
        //$encounters = self::findAll(['tournament_id' => $tournament_id, 'bracket_id' => $bracket_id]);
        $encounters = TeamBracketEncounter::find()->where(['id' => $this->encounter_id])->andWhere(['tournament_id' => $this->tournament_id])->all();

		if (count($encounters) == 0) {
			return ['left' => [], 'right' => []];
		}

		$players_left = $this->getPlayers($this->id, 'left');
		$players_right = $this->getPlayers($this->id, 'right');

		$leftGoals = [];
		$rightGoals = [];

		foreach ($encounters as $key => $encounter)
        {
			foreach ($players_left as $key => $player)
            {
				if ($player['UserID'] == $encounter->getPlayerId()) {
					if (!isset($leftGoals[$encounter->game_round])) {
						$leftGoals[$encounter->game_round] = 0;
					}
					$leftGoals[$encounter->game_round] += $encounter->goals;
				}
			}

			foreach ($players_right as $key => $player) {
				if ($player['UserID'] == $encounter->getPlayerId()) {
					if (!isset($rightGoals[$encounter->game_round])) {
						$rightGoals[$encounter->game_round] = 0;
					}
					$rightGoals[$encounter->game_round] += $encounter->goals;
				}
			}
		}

		return ['left' => $leftGoals, 'right' => $rightGoals];
	}
}