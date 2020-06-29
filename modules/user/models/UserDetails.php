<?php

namespace app\modules\user\models;

use yii\db\ActiveRecord;

/**
 * Class UserDetails
 * @package app\modules\user\models\user
 *
 * @property int $user_id
 * @property string $pre_name
 * @property string $last_name
 * @property string $zip_code
 * @property string $city
 * @property string $street
 * @property string $phone
 * @property string $dt_created
 * @property string $dt_updated
 * @property bool $editable
 */

class UserDetails extends ActiveRecord
{
	/**
     * @return string
     */
    public static function tableName()
    {
        return 'user_details';
    }

    /*********** Base Getter ***********/

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return string
     */
    public function getPreName()
    {
        return $this->pre_name;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zip_code;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return int
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @return int
     */
    public function getPhone()
    {
        return $this->phone;
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

    /**
     * @return bool
     */
    public function getIsEditable()
    {
        return $this->editable;
    }

    /**
     * @inheritdoc
     */
    public static function findByID($userId)
    {
        return static::findOne(['user_id' => $userId]);
    }
}