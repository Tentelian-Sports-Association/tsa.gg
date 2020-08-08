<?php

namespace app\modules\tournament\models;

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
}