<?php

namespace app\modules\tournament\models;

use yii\db\ActiveRecord;
use DateTime;

use app\modules\miscellaneouse\models\tournamentMode\TournamentMode;

use app\modules\miscellaneouse\models\tournamentParticipants\TournamentPlayerParticipating;
use app\modules\miscellaneouse\models\tournamentParticipants\TournamentTeamParticipating;

use app\modules\miscellaneouse\models\games\Games;

use app\modules\tournament\models\BracketSet;

use app\modules\user\models\User;


/**
 * Class Tournament
 * @package app\modules\tournament\models
 *
 * @property int $id
 * @property string $name
 * @property int $game_id
 * @property int $mode_id
 * @property int $rules_id
 * @property string $dt_register_begin
 * @property string $dt_register_end
 * @property string $dt_checkin_begin
 * @property string $dt_checkin_end
 * @property string $dt_starting_time
 * @property bool $finished
 * @property bool $running
 * @property bool $isTeam
 * @property int $bracket_set_id
 * @property int $maxPlayer
 * @property string $dt_created
 * @property string $dt_updated
 */
class Tournament extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'tournament';
    }

    /*********** Base Getter ***********/

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getGameId()
    {
        return $this->game_id;
    }

    /**
     * @return int
     */
    public function getModeId()
    {
        return $this->mode_id;
    }

    public function getModeName()
    {
        return TournamentMode::find()->where(['id' => $this->mode_id])->one()->getName();
	}

    /**
     * @return int
     */
    public function getRulesId()
    {
        return $this->rules_id;
    }

    /**
     * @return string
     */
    public function getRegisterBegin()
    {
        return $this->dt_register_begin;
    }
    
    /**
     * @return string
     */
    public function getRegisterEnd()
    {
        return $this->dt_register_end;
    }
    
    /**
     * @return string
     */
    public function getCheckinBegin()
    {
        return $this->dt_checkin_begin;
    }
    
    /**
     * @return string
     */
    public function getCheckinEnd()
    {
        return $this->dt_checkin_end;
    }
    
    /**
     * @return string
     */
    public function getStartingTime()
    {
        return $this->dt_starting_time;
    }

    /**
     * @return bool
     */
    public function getIsFinished()
    {
        return $this->finished;
    }

    /**
     * @return bool
     */
    public function getIsRunning()
    {
        return $this->running;
    }

    /**
     * @return bool
     */
    public function getIsTeamTournament()
    {
        return $this->isTeam;
    }

    /**
     * @return int
     */
    public function getBracketSetID()
    {
        return $this->bracket_set_id;
    }

    /**
     * @return int
     */
    public function getBracketSet()
    {
        return $this->hasOne(BracketSet::className(), ['id' => 'bracket_set_id'])->one();
    }

    /**
     * @return string
     */
    public function getMaxPlayer()
    {
        return $this->maxPlayer;
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

    /** Get Active Tournaments */
    public static function GetTournaments($gameId, $userId)
    {
        $tournaments = static::find()->where(['game_id' => $gameId])->andWhere(['finished' => '0'])->orderBy(['dt_starting_time' => SORT_DESC])->all();
        $sortedTournament = [];

        $currentDate = new DateTime();

        foreach($tournaments as $nr => $tournament)
        {
            $sortedTournament[$nr]['Name'] = $tournament->getName();
            $sortedTournament[$nr]['ID'] = $tournament->getId();
            $sortedTournament[$nr]['DtStart'] = DateTime::createFromFormat('Y-m-d H:i:s', $tournament['dt_starting_time'])->format('d.m.Y | H:i');
            $sortedTournament[$nr]['DtRegEnd'] = DateTime::createFromFormat('Y-m-d H:i:s', $tournament['dt_register_end'])->format('d.m.Y | H:i');
            $sortedTournament[$nr]['DtCheckIn'] = DateTime::createFromFormat('Y-m-d H:i:s', $tournament['dt_checkin_begin'])->format('d.m.Y | H:i') . ' - ' . DateTime::createFromFormat('Y-m-d H:i:s', $tournament['dt_checkin_end'])->format('H:i');
            $sortedTournament[$nr]['IsRunning'] = $tournament->getIsRunning();
            $sortedTournament[$nr]['IsTeam'] = $tournament->getIsTeamTournament();
            $sortedTournament[$nr]['CanCheckIn'] = NULL;

            /** Check registration time*/
            $registerBegin = new DateTime($tournament['dt_register_begin']);
            $registerEnd = new DateTime($tournament['dt_register_end']);


            if(($currentDate->getTimestamp() >= $registerBegin->getTimestamp()) && ($currentDate->getTimestamp() <= $registerEnd->getTimestamp())) {
                $sortedTournament[$nr]['RegisterOpen'] = 1;
			}
            else {
                $sortedTournament[$nr]['RegisterOpen'] = 0;
            }

            /** Check Checkin time */
            $checkInBegin = new DateTime($tournament['dt_checkin_begin']);
            $checkInEnd = new DateTime($tournament['dt_checkin_end']);

            if(($currentDate->getTimestamp() >= $checkInBegin->getTimestamp()) && ($currentDate->getTimestamp() <= $checkInEnd->getTimestamp())) {
                $sortedTournament[$nr]['CheckInOpen'] = 1;
			}
            else {
                $sortedTournament[$nr]['CheckInOpen'] = 0;
            }
		} 

        return $sortedTournament;
	}

    public static function GetRunningTournaments($gameId)
    {
        return static::find()->where(['game_id' => $gameId])->andWhere(['finished' => '0'])->andWhere(['running' => '1'])->all();
	}

    public static function GetUpcomingTournaments()
    {
        $tournaments = static::find()->where(['finished' => '0'])->orderBy(['dt_starting_time' => SORT_DESC])->limit(5)->all();
        $sortedTournament = [];

        $currentDate = new DateTime();

        foreach($tournaments as $nr => $tournament)
        {
            $sortedTournament[$nr]['ID'] = $tournament->getId();
            $sortedTournament[$nr]['GameID'] = $tournament->getGameId();
            $sortedTournament[$nr]['Name'] = $tournament->getName();
            $sortedTournament[$nr]['Mode'] = $tournament->getModeName();
            $sortedTournament[$nr]['GameTag'] = Games::find()->where(['id' => $tournament->getGameId()])->one()->getGameTag();
            $sortedTournament[$nr]['HoverImage'] = $tournament->getId();

            /** Check if Tournament is Live */
            $Begin = new DateTime($tournament->getStartingTime());

            if(($currentDate->getTimestamp() >= $Begin->getTimestamp())) {
                $sortedTournament[$nr]['IsLive'] = 1;
			}
            else {
                $sortedTournament[$nr]['IsLive'] = 0;
            }

            $sortedTournament[$nr]['StartingDate'] = DateTime::createFromFormat('Y-m-d H:i:s', $tournament->getStartingTime())->format('d.m.Y');
            $sortedTournament[$nr]['StartingTime'] = DateTime::createFromFormat('Y-m-d H:i:s', $tournament->getStartingTime())->format('H:i');
		}
        return $sortedTournament;
    }

    public static function getTournamentById($tournament_id)
    {
        return static::find()->where(['id' => $tournament_id])->one();
	}

    public function getPlayerParticipants()
    {
        return $this->hasMany(User::className(), ['id' => 'player_id'])->viaTable('tournament_player_participating', ['tournament_id' => 'id'])->all();
    }

    /** Get Brackets */
    public function getTournamentTreeData()
    {
        $game = 'app\modules\tournament\modules\\' . Games::find('id', $this->id)->one()->getStatisticsClass() . '\models\\' . (($this->isTeam) ? 'TeamBrackets' : 'PlayerBrackets');
        $gameClass = new $game();

        $brackets = $gameClass->getByTournament($this->id);

        $tournamentTreeData = [
			'winner' => [],
			'looser' => [],
		];

        $startTime = NULL;
		$firstBracket = reset($brackets);

        if ($firstBracket) {
			$startTime = new \DateTime($this->dt_starting_time);
		}

        foreach ($brackets as $key => $bracket) {

			$firstLevel = ($bracket->getIsWinnerBracket()) ? 'winner' : 'looser';
			$secondLevel = $bracket->getRound();
			$secondLevel = ($secondLevel === 998) ? 'Finale' : $secondLevel;
			$secondLevel = ($secondLevel === 999) ? 'Finale (optional)' : $secondLevel;

			if (!array_key_exists($secondLevel, $tournamentTreeData[$firstLevel])) {
				$tournamentTreeData[$firstLevel][$secondLevel] = ['startTime' => '', 'brackets' => []];
			}

			$tournamentTreeData[$firstLevel][$secondLevel]['brackets'][] = $bracket;
		}

        if (count($tournamentTreeData['winner']) == 0) {
			return $tournamentTreeData;
		}

        $bracketSet = $this->getBracketSet();

		$winnerKeys = array_keys($tournamentTreeData['winner']);
		$looserKeys = array_keys($tournamentTreeData['looser']);

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
				$min += 15;
			}
			if ($keyVal == 'Finale (optional)') {
				$min += 30;
			}

			$interval = new \DateInterval('PT' . $min . 'M');
			$startTime->add($interval);
			if (array_key_exists($keyVal, $tournamentTreeData['winner'])) {
				$tournamentTreeData['winner'][$keyVal]['startTime'] = $startTime->format('H:i');
			}
			if (array_key_exists($keyVal, $tournamentTreeData['looser'])) {
				$tournamentTreeData['looser'][$keyVal]['startTime'] = $startTime->format('H:i');
			}
			$startTime->sub($interval);
		}

        return $tournamentTreeData;
	}
}