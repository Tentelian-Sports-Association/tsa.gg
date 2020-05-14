<?php

namespace app\modules\partner\models;

use yii\db\ActiveRecord;

use Yii;
use DateTime;

/**
 * Class News
 * @package app\modules\partner\models
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $image
 * @property string $dt_created
 * @property string $dt_updated
 */

class Partner extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'partner';
    }

    /**
     * @return int
     */
    public function getID()
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
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
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