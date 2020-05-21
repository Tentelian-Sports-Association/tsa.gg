<?php

namespace app\modules\miscellaneouse\models\gender;

use yii\db\ActiveRecord;

/**
 * Class Gender_i18n
 * @package app\modules\miscellaneouse\models
 *
 * @property int $gender_id
 * @property int $language_id
 * @property string $name
 */
class Gender_i18n extends ActiveRecord
{
	/**
     * @return string
     */
    public static function tableName()
    {
        return 'gender_i18n';
    }

    /**
	 * @return int id
	 */
	public function getGenderId()
	{
		return $this->gender_id;
	}

	/**
	 * @return int id
	 */
	public function getLanguageId()
	{
		return $this->language_id;
	}

	/**
	 * @return string name
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
     * @return string name
     */
    public static function getTranslatedName($id, $languageID)
    {
		return static::find()->where(['gender_id' => $id])->andWhere(['language_id' => $languageID])->one()->getName();
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