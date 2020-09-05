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

    public function getEncounter($participant, $round)
    {
        return TeamBracketEncounter::find()->where(['id' => $this->encounter_id])->andWhere(['tournament_id' => $this->tournament_id])->andWhere(['game_round' => $round])->andWhere(['player_id' => $participant])->one();
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
        return $this->hasOne(TeamBrackets::className(), ['id' => 'winner_bracket'])->one();
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

    public static function getBracketData($bracket_id)
    {
        /** Umändern, sodass der gewinner immer im oberren bracet steht und sich dadurch die Farbe auch ändert, wie in RL */

        $bracket = static::find()->where(['id' => $bracket_id])->one();
        $bracketData = [];

        $participant1 = $bracket->getTeamParticipant1();
        $participant1_players = TeamMember::FindPlayer($bracket->getTeamParticipant1Id());
        $participant1_substitudes = TeamMember::FindSubstitude($bracket->getTeamParticipant1Id());

        $participant2 = $bracket->getTeamParticipant2();
        $participant2_players = TeamMember::FindPlayer($bracket->getTeamParticipant2Id());
        $participant2_substitudes = TeamMember::FindSubstitude($bracket->getTeamParticipant2Id());

        $bracketData['base']['id'] = $bracket->getId();
        $bracketData['base']['bo'] = $bracket->getBestOf();
        $bracketData['base']['round'] = $bracket->getRound();

        $bracketData['blue']['participantId'] = $participant1->getId();
        $bracketData['blue']['participantName'] = $participant1->getName();

        foreach($participant1_players as $pnr => $participant1_player)
        {
            $bracketData['blue']['participantData']['player'][$pnr]['playerId'] = $participant1_player['UserID'];
            $bracketData['blue']['participantData']['player'][$pnr]['playerName'] = $participant1_player['UserName'];
            $bracketData['blue']['participantData']['player'][$pnr]['encounterData'] = TeamBracketEncounter::find()->where(['id' => $bracket->getEncounterId()])->andWhere(['tournament_id' => $bracket->getTournamentId()])->andWhere(['team_id' => $participant1->getId()])->andWhere(['player_id' => $participant1_player['UserID']])->orderBy(['game_round' => SORT_ASC])->all();
		}

        foreach($participant1_substitudes as $pnr => $participant1_substitude)
        {
            $bracketData['blue']['participantData']['substitude'][$pnr]['playerId'] = $participant1_substitude['UserID'];
            $bracketData['blue']['participantData']['substitude'][$pnr]['playerName'] = $participant1_substitude['UserName'];
            $bracketData['blue']['participantData']['substitude'][$pnr]['subEncounterData'] = TeamBracketEncounter::find()->where(['id' => $bracket->getEncounterId()])->andWhere(['tournament_id' => $bracket->getTournamentId()])->andWhere(['team_id' => $participant1->getId()])->andWhere(['player_id' => $participant1_substitude['UserID']])->orderBy(['game_round' => SORT_ASC])->all();
		}

        $bracketData['orange']['participantId'] = $participant2->getId();
        $bracketData['orange']['participantName'] = $participant2->getName();

        foreach($participant2_players as $pnr => $participant2_player)
        {
            $bracketData['orange']['participantData']['player'][$pnr]['playerId'] = $participant2_player['UserID'];
            $bracketData['orange']['participantData']['player'][$pnr]['playerName'] = $participant2_player['UserName'];
            $bracketData['orange']['participantData']['player'][$pnr]['encounterData'] = TeamBracketEncounter::find()->where(['id' => $bracket->getEncounterId()])->andWhere(['tournament_id' => $bracket->getTournamentId()])->andWhere(['team_id' => $participant2->getId()])->andWhere(['player_id' => $participant2_player['UserID']])->orderBy(['game_round' => SORT_ASC])->all();
		}

        foreach($participant2_substitudes as $pnr => $participant2_substitude)
        {
            $bracketData['orange']['participantData']['substitude'][$pnr]['playerId'] = $participant2_substitude['UserID'];
            $bracketData['orange']['participantData']['substitude'][$pnr]['playerName'] = $participant2_substitude['UserName'];
            $bracketData['orange']['participantData']['substitude'][$pnr]['encounterData'] = TeamBracketEncounter::find()->where(['id' => $bracket->getEncounterId()])->andWhere(['tournament_id' => $bracket->getTournamentId()])->andWhere(['team_id' => $participant2->getId()])->andWhere(['player_id' => $participant2_substitude['UserID']])->orderBy(['game_round' => SORT_ASC])->all();
		}

        return $bracketData;
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

        $encounters = TeamBracketEncounter::getAlllByTournament($tournament_id);
        foreach ($encounters as $key => $encounter) {
			$encounter->delete();
		}
	}

    public function setParticipant($participant)
    {
        if($participant[0])
            $this->participant_1 = $participant[0]['id'];

        if($participant[1])
            $this->participant_2 = $participant[1]['id'];
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

    /**
	 * @param int 
	 */
	public function moveParticipantsNextRound($winnerNumber) {

		$this->winner_participant = ($winnerNumber == 1)? $this->getTeamParticipant1Id() : $this->getTeamParticipant2Id();
		$this->update();
		
        if ($this->round === 999)
			return;

		if ($this->round === 998 && $winnerNumber == 1)
			return;

		$winnerBracket = $this->getWinnerBracket();
		$looserBracket = $this->getLooserBracket();

		$winnerBracket->setParticipantByBackRef(($winnerNumber == 1)? $this->getTeamParticipant1Id() : $this->getTeamParticipant2Id(), $this->getId());
		if ($looserBracket) {
			$looserBracket->setParticipantByBackRef(($winnerNumber == 1)? $this->getTeamParticipant2Id() : $this->getTeamParticipant1Id(), $this->getId());
		}
	}

    /**
	 * @param int
	 * @param int
	 */
	public function setParticipantByBackRef($id, $preBracketId) {
		
		$refs = $this->getBracketRefs();

		$bracket1 = reset($refs);
		if (false === $bracket1) {
			return;
		}

		$bracket2 = next($refs);

		$set1 = true;
		$set2 = true;

		if ($bracket1['bracket']->getId() === $bracket2['bracket']->getId()) {
			if ($this->participant_1 !== NULL)
                $set1 = false;

			if ($this->participant_2 !== NULL)
				$set2 = false;
		}

		if ($bracket1['bracket']->getId() === $preBracketId && true === $set1) {
				$this->participant_1 = $id;
		}

		if ($bracket2['bracket']->getId() === $preBracketId && true === $set2) {
				$this->participant_2 = $id;
		}

        for($i = 0; $i < $this->getBestOf(); $i++)
        {
            if($this->getTeamParticipant1Id())
            {
                $players = TeamMember::FindPlayer($this->getTeamParticipant1Id());
                $substitudes = TeamMember::FindSubstitude($this->getTeamParticipant1Id());

                foreach($players as $pnr => $player)
                {
                    $encounterData = $this->getEncounter($player['UserID'], $i+1);

                    if(!$encounterData)
                    {
                        $encounterData = new TeamBracketEncounter();
                        $encounterData->id = $this->getEncounterId();
                        $encounterData->tournament_id = $this->getTournamentId();
                        $encounterData->game_round = $i+1;
                        $encounterData->team_id = $id;
                        $encounterData->player_id = $player['UserID'];
                        $encounterData->save();
					}
				}

                foreach($substitudes as $snr => $substitude)
                {
                    $encounterData = $this->getEncounter($substitude['UserID'], $i+1);

                    if(!$encounterData)
                    {
                        $encounterData = new TeamBracketEncounter();
                        $encounterData->id = $this->getEncounterId();
                        $encounterData->tournament_id = $this->getTournamentId();
                        $encounterData->game_round = $i+1;
                        $encounterData->team_id = $id;
                        $encounterData->player_id = $substitude['UserID'];
                        $encounterData->save();
					}
				}
			}
            
            if ($this->getTeamParticipant2Id())
            {
                $players = TeamMember::FindPlayer($this->getTeamParticipant2Id());
                $substitudes = TeamMember::FindSubstitude($this->getTeamParticipant2Id());

                foreach($players as $pnr => $player)
                {
                    $encounterData = $this->getEncounter($player['UserID'], $i+1);

                    if(!$encounterData)
                    {
                        $encounterData = new TeamBracketEncounter();
                        $encounterData->id = $this->getEncounterId();
                        $encounterData->tournament_id = $this->getTournamentId();
                        $encounterData->game_round = $i+1;
                        $encounterData->team_id = $id;
                        $encounterData->player_id = $player['UserID'];
                        $encounterData->save();
					}
				}

                foreach($substitudes as $snr => $substitude)
                {
                    $encounterData = $this->getEncounter($substitude['UserID'], $i+1);

                    if(!$encounterData)
                    {
                        $encounterData = new TeamBracketEncounter();
                        $encounterData->id = $this->getEncounterId();
                        $encounterData->tournament_id = $this->getTournamentId();
                        $encounterData->game_round = $i+1;
                        $encounterData->team_id = $id;
                        $encounterData->player_id = $substitude['UserID'];
                        $encounterData->save();
					}
				}
			}
		}
		
		$this->update();
	}

    /**
	 * @return boolean|int
	 */
	public function checkisFinished()
	{
		$winner = $this->getWinnerParticipant();
		if ($winner !== NULL) {
			return $winner;
		}

		$winnerBracket = $this->getWinnerBracket();
		if (false === $winnerBracket || NULL === $winnerBracket) {
			return false;
		}

		if ($winnerBracket->participant_1 != NULL && $this->participant_1 == $winnerBracket->participant_1 || $winnerBracket->participant_2 != NULL && $this->participant_1 == $winnerBracket->participant_2) {
			return 1;
		} else if ($winnerBracket->participant_1 != NULL && $this->participant_2 == $winnerBracket->participant_1 || $winnerBracket->participant_2 != NULL && $this->participant_2 == $winnerBracket->participant_2) {
			return 2;
		}

		return false;
	}

    public function getWins()
    {
        $encounters = TeamBracketEncounter::find()->where(['id' => $this->encounter_id])->andWhere(['tournament_id' => $this->tournament_id])->all();

        if (count($encounters) == 0) {
			return NULL;
		}

        $team_left = $this->getTeamParticipant1();
        $team_left_players = TeamMember::FindPlayer($this->getTeamParticipant1Id());
        $team_left_substitudes = TeamMember::FindSubstitude($this->getTeamParticipant1Id()); 

		$team_right = $this->getTeamParticipant2();
        $team_right_players = TeamMember::FindPlayer($this->getTeamParticipant2Id());
        $team_right_substitudes = TeamMember::FindSubstitude($this->getTeamParticipant2Id());

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

		$minGames = ceil($this->getBestOf() / 2);

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

        return ['left' => $leftWins, 'right' => $rightWins];
	}
}