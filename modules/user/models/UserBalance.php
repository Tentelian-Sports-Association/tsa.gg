<?php

namespace app\modules\user\models;

use yii\db\ActiveRecord;

/**
 * Class UserBalance
 * @package app\modules\organisation\models
 *
 * @property int $user_id
 * @property string $current_balance
 * @property string $dt_created
 * @property string $dt_updated
 */
 class UserBalance extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'user_balance';
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
    public function getBalance()
    {
        return $this->current_balance;
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