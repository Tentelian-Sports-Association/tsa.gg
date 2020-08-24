<?php

namespace app\modules\tournament\models;

use app\modules\miscellaneouse\models\tournamentMode\TournamentMode;
use app\modules\miscellaneouse\models\games\Games;

use yii\db\ActiveRecord;

use DateTime;


/**
 * Class Tournament
 * @package app\modules\organisation\models
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
    public static function GetTournaments($gameId)
    {
        $tournaments = static::find()->where(['game_id' => $gameId])->andWhere(['finished' => '0'])->orderBy(['dt_starting_time' => SORT_DESC])->all();
        $sortedTournament = [];

        $currentDate = new DateTime();

        foreach($tournaments as $nr => $tournament)
        {
            $sortedTournament[$nr]['Name'] = $tournament['name'];
            $sortedTournament[$nr]['ID'] = $tournament['id'];
            $sortedTournament[$nr]['DtStart'] = DateTime::createFromFormat('Y-m-d H:i:s', $tournament['dt_starting_time'])->format('d.m.Y | H:i');
            $sortedTournament[$nr]['DtRegEnd'] = DateTime::createFromFormat('Y-m-d H:i:s', $tournament['dt_register_end'])->format('d.m.Y | H:i');
            $sortedTournament[$nr]['DtCheckIn'] = DateTime::createFromFormat('Y-m-d H:i:s', $tournament['dt_checkin_begin'])->format('d.m.Y | H:i') . ' - ' . DateTime::createFromFormat('Y-m-d H:i:s', $tournament['dt_checkin_end'])->format('H:i');

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
}