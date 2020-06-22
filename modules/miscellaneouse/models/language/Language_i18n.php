<?php

namespace app\modules\miscellaneouse\models\language;

use yii\db\ActiveRecord;
use Yii;

/**
 * Class Language_i18n
 * @package app\modules\miscellaneouse\models
 *
 * @property int $id
 * @property int $language_id
 * @property string $name
 * @property string $dt_created
 * @property string $dt_updated
 */
class Language_i18n extends ActiveRecord
{
	/**
     * @return string
     */
    public static function tableName()
    {
        return 'language_i18n';
    }

    /**
	 * @return int id
	 */
	public function getId()
	{
		return $this->id;
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
		return static::find()->where(['id' => $id])->andWhere(['language_id' => $languageID])->one()->getName();
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