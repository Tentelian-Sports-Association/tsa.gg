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
 * @property bool $isDoubleElimination
 * @property bool $hasBracketReset
 * @property int $preRoundsBo


 * @property string $dt_created
 * @property string $dt_updated
 */
class BracketSet extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'tournament_bracket_set';
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function getIsDoubleElimination()
    {
        return true;//$this->isDoubleElimination;
    }

    /**
     * @return bool
     */
    public function getHasBracketReset()
    {
        return true;//$this->hasBracketReset;
    }

    /**
     * @return int
     */
    public function getbaseRoundTime()
    {
        return 30;
    }

    /** Winner Brackets */

    /**
     * @return int
     */
    public function getWinnerPreRoundBO()
    {
        return 3;
    }

    /**
     * @return int
     */
    public function getWinnerQuaterFinaleBO()
    {
        return 3;
    }

    /**
     * @return int
     */
    public function getWinnerHalfFinaleBO()
    {
        return 3;
    }

    /**
     * @return int
     */
    public function getWinnerFinaleBO()
    {
        return 5;
    }

    /** Looser Brackets */

    /**
     * @return int
     */
    public function getLooserPreRoundBO()
    {
        return 3;
    }

    /**
     * @return int
     */
    public function getLooserQuaterFinaleBO()
    {
        return 3;
    }

    /**
     * @return int
     */
    public function getLooserHalfFinaleBO()
    {
        return 3;
    }

    /**
     * @return int
     */
    public function getLooserFinaleBO()
    {
        return 3;
    }
}