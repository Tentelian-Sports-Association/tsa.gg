<?php

namespace app\modules\miscellaneouse\models\gender;

use Yii;
use yii\db\ActiveRecord;

use app\modules\miscellaneouse\models\gender\Gender_i18n;

/**
 * Class Gender
 * @package app\modules\miscellaneouse\models
 *
 * @property int $id
 * @property string $name
 * @property string $gender_icon
 * @property string $dt_created
 * @property string $dt_updated
 */
class Gender extends ActiveRecord
{
	/**
     * @return string
     */
    public static function tableName()
    {
        return 'gender';
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
		if(Yii::$app->language != 'en-EN')
		{
			return Gender_i18n::getTranslatedName($this->id, $languageID);
		}

		return $this->name;
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