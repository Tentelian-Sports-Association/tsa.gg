<?php

namespace app\modules\miscellaneouse\models\billing;

use Yii;
use yii\db\ActiveRecord;

/**
 * Class BillingReason
 * @package app\modules\miscellaneouse\models
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $dt_created
 * @property string $dt_updated
 */
class BillingReason extends ActiveRecord
{
	/**
     * @return string
     */
    public static function tableName()
    {
        return 'billing_reason';
    }

    /**
	 * @return int id
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @return string name
	 */
	public function getName($languageID)
	{
		return $this->name;
	}

    /**
	 * @return string description
	 */
	public function getDescription($languageID)
	{
		return $this->description;
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