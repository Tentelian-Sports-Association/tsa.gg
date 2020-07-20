<?php

namespace app\modules\miscellaneouse\models\nationality;

use yii\db\ActiveRecord;

/**
 * Class Nationality_i18n
 * @package app\modules\miscellaneouse\models\nationaility
 *
 * @property int $nationality_id
 * @property int $language_id
 * @property string $name
 */
class Nationality_i18n extends ActiveRecord
{
	/**
     * @return string
     */
    public static function tableName()
    {
        return 'nationality_i18n';
    }

    /**
	 * @return int nationality_id
	 */
	public function getNationalityId()
	{
		return $this->nationality_id;
	}

	/**
	 * @return int language_id
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
		return static::find()->where(['nationality_id' => $id])->andWhere(['language_id' => $languageID])->one()->getName();
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