<?php

namespace app\modules\miscellaneouse\models\language;

use Yii;
use yii\db\ActiveRecord;

use app\modules\miscellaneouse\models\language\Language_i18n;

/**
 * Class Language
 * @package app\modules\miscellaneouse\models
 *
 * @property int $id
 * @property string $name
 * @property string $locale
 * @property string $icon_locale
 * @property string $dt_created
 * @property string $dt_updated
 */
class Language extends ActiveRecord
{
	/**
     * @return string
     */
    public static function tableName()
    {
        return 'language';
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
			return Language_i18n::getTranslatedName($this->id, $languageID);
		}

		return $this->name;
	}

	/**
	 * @return string locale
	 */
	public function getLocale()
	{
		return $this->locale;
	}

    /**
	 * @return string icon_locale
	 */
	public function getIconLocale()
	{
		return $this->icon_locale;
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
     * Find Language by locale.
     *
     * @param string $Selectedlocale the locale
     * @return static|null the language, if a language with that Selectedlocale exists
     */
    public static function findByLocale($Selectedlocale)
    {
        return static::findOne(['locale' => $Selectedlocale]);
    }
}