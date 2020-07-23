<?php

namespace app\modules\user\models;

use yii\db\ActiveRecord;

/**
 * Class UserBilling
 * @package app\modules\organisation\models
 *
 * @property int $user_id
 * @property int $billing_reason_id
 * @property string $billing_description
 * @property string $billing_amount
 * @property string $dt_created
 * @property string $dt_updated
 */
 class UserBilling extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'user_billing';
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
    public function getReasonId()
    {
        return $this->billing_reason_id;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->billing_description;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->billing_amount;
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