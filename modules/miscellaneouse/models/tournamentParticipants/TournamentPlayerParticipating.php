<?php

namespace app\modules\miscellaneouse\models\tournamentParticipants;

use yii\db\ActiveRecord;


/**
 * Class TournamentPlayerParticipating
 * @package app\modules\miscellaneouse\models\tournamentParticipants
 *
 * @property int $tournament_id
 * @property int $player_id
 * @property bool $checked_in
 * @property string $dt_created
 * @property string $dt_updated
 */
class TournamentPlayerParticipating extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'tournament_player_participating';
    }

    /*********** Base Getter ***********/

    /**
     * @return int
     */
    public function getTournamentId()
    {
        return $this->tournament_id;
    }

    /**
     * @return int
     */
    public function getPlayerId()
    {
        return $this->player_id;
    }

    /**
     * @return bool
     */
    public function getIsCheckedIn()
    {
        return $this->checked_in;
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