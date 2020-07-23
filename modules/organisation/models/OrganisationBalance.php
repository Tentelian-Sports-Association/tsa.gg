<?php

namespace app\modules\organisation\models;

use yii\db\ActiveRecord;

/**
 * Class OrganisationBalance
 * @package app\modules\organisation\models
 *
 * @property int $organisation_id
 * @property string $current_balance
 * @property string $dt_created
 * @property string $dt_updated
 */
 class OrganisationBalance extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'organisation_balance';
    }

    /*********** Base Getter ***********/

    /**
     * @return int
     */
    public function getOrganisationId()
    {
        return $this->organisation_id;
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