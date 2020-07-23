<?php

namespace app\modules\organisation\models;

use yii\db\ActiveRecord;

/**
 * Class OrganisationPayment
 * @package app\modules\organisation\models
 *
 * @property int $organisation_id
 * @property int $organisation_owner_id
 * @property string $zip_code
 * @property string $city
 * @property string $street
 * @property string $paypal_adress
 * @property string $iban
 * @property string $bic
 * @property string $account_owner
 * @property string $editable
 * @property string $dt_created
 * @property string $dt_updated
 */
class OrganisationPayment extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'organisation_payment';
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->organisation_id;
    }

    /**
     * @return int
     */
    public function getOwnerId()
    {
        return $this->organisation_owner_id;
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
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @return string
     */
    public function getPayPal()
    {
        return $this->paypal_adress;
    }

    /**
     * @return string
     */
    public function getIBAN()
    {
        return $this->iban;
    }

    /**
     * @return string
     */
    public function getBIC()
    {
        return $this->bic;
    }

    /**
     * @return string
     */
    public function getBankAccountOwner()
    {
        return $this->account_owner;
    }

    /**
     * @return string
     */
    public function getIsEditable()
    {
        return $this->editable;
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
     * @inheritdoc
     */
    public static function findByID($orgId)
    {
        return static::findOne(['organisation_id' => $orgId]);
    }
}