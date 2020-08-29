<?php

namespace app\modules\tournament\modules\rocketLeague\models;

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
class PlayerBracketEncounter extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'rocketleague_player_bracket_encounter';
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

    /** Statistics Data */
    
    /**
     * @return int
     */
    public function getPoints()
    {
        return $this->points;
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