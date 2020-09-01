<?php

namespace app\modules\miscellaneouse\models\tournamentMode;

use yii\db\ActiveRecord;


/**
 * Class Tournament Mode
 * @package app\modules\miscellaneouse\models\tournamentMode
 *
 * @property int $id
 * @property int $game_id
 * @property string $name
 * @property int $minPlayer
 * @property string $dt_created
 * @property string $dt_updated
 */
class TournamentMode extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'tournament_mode';
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
     * @return int
     */
    public function getGameId()
    {
        return $this->game_id;
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
    public function getTeamSize()
    {
        return $this->minPlayer;
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