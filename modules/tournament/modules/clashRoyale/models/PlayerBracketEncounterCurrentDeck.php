<?php

namespace app\modules\tournament\modules\clashRoyale\models;

use yii\db\ActiveRecord;
use DateTime;

use app\modules\user\models\User;

use app\modules\tournament\models\Tournament;

/**
 * Class PlayerBracketEncounterCurrentDeck
 * @package app\modules\tournament\modules\rocketLeague\models
 *
 * @property int $player_id
 * @property int $tournament_id
 * @property int $encounter_id
 * @property int $encounter_round
 * @property int $card_1_id
 * @property int $card_2_id
 * @property int $card_3_id
 * @property int $card_4_id
 * @property int $card_5_id
 * @property int $card_6_id
 * @property int $card_7_id
 * @property int $card_8_id
 * @property string $battle_time
 * @property string $dt_created
 * @property string $dt_updated
 */

class PlayerBracketEncounterCurrentDeck extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'clashRoyale_player_current_encounter_deck';
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
    public function getEncounterRound()
    {
        return $this->encounter_round;
    }

    /**
     * @return int
     */
    public function getCard1Id()
    {
        return $this->card_1_id;
    }

    /**
     * @return int
     */
    public function getCard2Id()
    {
        return $this->card_2_id;
    }

    /**
     * @return int
     */
    public function getCard3Id()
    {
        return $this->card_3_id;
    }

    /**
     * @return int
     */
    public function getCard4Id()
    {
        return $this->card_4_id;
    }

    /**
     * @return int
     */
    public function getCard5Id()
    {
        return $this->card_5_id;
    }

    /**
     * @return int
     */
    public function getCard6Id()
    {
        return $this->card_6_id;
    }

    /**
     * @return int
     */
    public function getCard7Id()
    {
        return $this->card_7_id;
    }

    /**
     * @return int
     */
    public function getCard8Id()
    {
        return $this->card_8_id;
    }
}