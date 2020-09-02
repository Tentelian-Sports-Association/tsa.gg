<?php

namespace app\modules\tournament\modules\rocketLeague\models;

use yii\db\ActiveRecord;
use DateTime;

use app\modules\user\models\User;

use app\modules\tournament\models\Tournament;
use app\modules\tournament\modules\rocketLeague\models\PlayerBracketEncounter;

/**
 * Class PlayerBrackets
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
class PlayerBrackets extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'rocketLeague_player_brackets';
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
        return PlayerBracketEncounter::find()->where(['id' => $this->encounter_id])->andWhere(['tournament_id' => $this->tournament_id])->andWhere(['game_round' => $round])->andWhere(['player_id' => $participant])->one();
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
    public function getPlayerParticipant1Id()
    {
        return $this->participant_1;
    }

    /**
     * @return ActiveQuery
     */
    public function getPlayerParticipant1()
    {
        return $this->hasOne(User::className(), ['id' => 'participant_1'])->one();
    }

    /**
     * @return int
     */
    public function getPlayerParticipant2Id()
    {
        return $this->participant_2;
    }

    /**
     * @return ActiveQuery
     */
    public function getPlayerParticipant2()
    {
        return $this->hasOne(User::className(), ['id' => 'participant_2'])->one();
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
        return $this->hasOne(PlayerBrackets::className(), ['id' => 'winner_bracket'])->one();
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
        return $this->hasOne(PlayerBrackets::className(), ['id' => 'looser_bracket'])->one();
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
        return $this->hasOne(User::className(), ['id' => 'winner_participant'])->one();
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

        $participant1 = $bracket->getPlayerParticipant1();
        $participant2 = $bracket->getPlayerParticipant2();

        $bracketData['base']['id'] = $bracket->getId();
        $bracketData['base']['bo'] = $bracket->getBestOf();
        $bracketData['base']['round'] = $bracket->getRound();

        $bracketData['blue']['participantId'] = $participant1->getId();
        $bracketData['blue']['participantName'] = $participant1->getUsername();
        $bracketData['blue']['participantData'][0]['playerId'] = $participant1->getId();
        $bracketData['blue']['participantData'][0]['playerName'] = $participant1->getUsername();
        $bracketData['blue']['participantData'][0]['encounterData'] = PlayerBracketEncounter::find()->where(['id' => $bracket->getEncounterId()])->andWhere(['tournament_id' => $bracket->getTournamentId()])->andWhere(['player_id' => $participant1->getId()])->orderBy(['game_round' => SORT_ASC])->all();

        $bracketData['orange']['participantId'] = $participant2->getId();
        $bracketData['orange']['participantName'] = $participant2->getUsername();
        $bracketData['orange']['participantData'][0]['playerId'] = $participant2->getId();
        $bracketData['orange']['participantData'][0]['playerName'] = $participant2->getUsername();
        $bracketData['orange']['participantData'][0]['encounterData'] = PlayerBracketEncounter::find()->where(['id' => $bracket->getEncounterId()])->andWhere(['tournament_id' => $bracket->getTournamentId()])->andWhere(['player_id' => $participant2->getId()])->orderBy(['game_round' => SORT_ASC])->all();

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

    /**
	 * @param int
	 */
	public static function clearForTournament($tournament_id)
    {
		$brackets = self::getAllByTournament($tournament_id);
		foreach ($brackets as $key => $bracket) {
			$bracket->delete();
		}
	}

    public function setParticipant($participant) {
        if($participant[0])
            $this->participant_1 = $participant[0]['id'];

        if($participant[1])
            $this->participant_2 = $participant[1]['id'];
	}

    public function getPlayers($bracket_id, $left_right)
	{
        if ('left' === $left_right) {
	        $player  = $this->getPlayerParticipant1();
	        $player_arr = [$player];
	    } else if ('right' === $left_right) {
    	    $player = $this->getPlayerParticipant2();
            $player_arr = [$player];
	    }

        return $player_arr;
	}

    /**
	 * @return array
	 */
	public function getBracketRefs()
	{
		$winner = $this->hasMany(PlayerBrackets::className(), ['winner_bracket' => 'id'])->all();
		$looser = $this->hasMany(PlayerBrackets::className(), ['looser_bracket' => 'id'])->all();

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
        $participant1 = $this->getPlayerParticipant1();
        $participant2 = $this->getPlayerParticipant2();

        $participants[0] = NULL;
        $participants[1] = NULL;

        if($participant1)
        {
            $participants[0]['id'] = $participant1->getId();
		    $participants[0]['name'] = $participant1->getUsername();
		}

        if($participant2)
        {
            $participants[1]['id'] = $participant2->getId();
		    $participants[1]['name'] = $participant2->getUsername();
		}

		return $participants;
	}

    /**
	 * @param int 
	 */
	public function movePlayersNextRound($winnerNumber) {

		$this->winner_participant = ($winnerNumber == 1)? $this->getPlayerParticipant1Id() : $this->getPlayerParticipant2Id();
		$this->update();
		
        if ($this->round === 999)
			return;

		if ($this->round === 998 && $winnerNumber == 1)
			return;

		$winnerBracket = $this->getWinnerBracket();
		$looserBracket = $this->getLooserBracket();

		$winnerBracket->setSpielerByBackRef(($winnerNumber == 1)? $this->getPlayerParticipant1Id() : $this->getPlayerParticipant2Id(), $this->getId());
		if ($looserBracket) {
			$looserBracket->setSpielerByBackRef(($winnerNumber == 1)? $this->getPlayerParticipant2Id() : $this->getPlayerParticipant1Id(), $this->getId());
		}
	}

    /**
	 * @param int
	 * @param int
	 */
	public function setSpielerByBackRef($id, $preBracketId) {
		
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
            if($this->getPlayerParticipant1Id())
            {
                $encounterParticipant1 = $this->getEncounter($this->getPlayerParticipant1Id(), $i+1);
                
                if(!$encounterParticipant1)
                {
                    $encounterParticipant1 = new PlayerBracketEncounter();
                    $encounterParticipant1->id = $this->getEncounterId();
                    $encounterParticipant1->tournament_id = $this->getTournamentId();
                    $encounterParticipant1->game_round = $i+1;
                    $encounterParticipant1->player_id = $id;
                    $encounterParticipant1->save();
				}
			}
            
            if ($this->getPlayerParticipant2Id())
            {
                $encounterParticipant2 = $this->getEncounter($this->getPlayerParticipant2Id(), $i+1);
                
                if(!$encounterParticipant2)
                {
                    $encounterParticipant2 = new PlayerBracketEncounter();
                    $encounterParticipant2->id = $this->getEncounterId();
                    $encounterParticipant2->tournament_id = $this->getTournamentId();
                    $encounterParticipant2->game_round = $i+1;
                    $encounterParticipant2->player_id = $id;
                    $encounterParticipant2->save();
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

    public function getGoals($tournament)
    {
        $encounters = PlayerBracketEncounter::find()->where(['id' => $this->encounter_id])->andWhere(['tournament_id' => $this->tournament_id])->all();

		if (count($encounters) == 0) {
			return ['left' => [], 'right' => []];
		}

		$players_left = $this->getPlayers($this->id, 'left');
		$players_right = $this->getPlayers($this->id, 'right');

		$leftGoals = [];
		$rightGoals = [];

		foreach ($encounters as $key => $encounter) {

			foreach ($players_left as $key => $player) {
                if($player)
                {
				    if ($player->getId() == $encounter->getPlayerId()) {
					    if (!isset($leftGoals[$encounter->game_round])) {
						    $leftGoals[$encounter->game_round] = 0;
					    }
					    $leftGoals[$encounter->game_round] += $encounter->goals;
				    }
                }
			}

			foreach ($players_right as $key => $player) {
            if($player)
                {
				    if ($player->getId() == $encounter->getPlayerId()) {
					    if (!isset($rightGoals[$encounter->game_round])) {
						    $rightGoals[$encounter->game_round] = 0;
					    }
					    $rightGoals[$encounter->game_round] += $encounter->goals;
				    }
                }
			}
		}

		return ['left' => $leftGoals, 'right' => $rightGoals];
	}

    public function getWins($bracket)
    {
        $encounters = PlayerBracketEncounter::find()->where(['id' => $this->encounter_id])->andWhere(['tournament_id' => $this->tournament_id])->all();
        
        if (count($encounters) == 0) {
			return NULL;
		}

        $players_left = $this->getPlayerParticipant1();
		$players_right = $this->getPlayerParticipant2();

		$leftGoals = [];
		$rightGoals = [];

		foreach ($encounters as $key => $encounter)
        {
			if ($players_left->getId() == $encounter->player_id)
            {
				$leftGoals[$encounter->getGameRound()] = $encounter->getGoals();
			}

			if ($players_right->getId() == $encounter->player_id) {
				$rightGoals[$encounter->getGameRound()] = $encounter->getGoals();
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