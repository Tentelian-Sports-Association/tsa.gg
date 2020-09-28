<?php

namespace app\modules\miscellaneouse\API\ClashRoyale\models;

use yii\db\ActiveRecord;

/**
 * Class CardDatabase
 * @package app\modules\miscellaneouse\API\ClashRoyale\models
 *
 * @property int $id
 * @property int $card_id
 * @property string $name
 * @property int $max_level
 * @property string $icon
 * @property string $dt_created
 * @property string $dt_updated
 */

 class CardDatabase extends ActiveRecord
{
	/**
     * @return string
     */
    public static function tableName()
    {
        return 'clashroyale_card_database';
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
    public function getCardId()
    {
        return $this->card_id;
    }

    /**
     * @return string
     */
    public function getCardName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getCardMaxLevel()
    {
        return $this->max_level;
    }

    /**
     * @return string
     */
    public function getCardIcon()
    {
        return $this->icon;
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