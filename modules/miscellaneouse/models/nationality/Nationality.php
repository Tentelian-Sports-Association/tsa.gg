<?php

namespace app\modules\miscellaneouse\models\nationality;

use Yii;
use yii\db\ActiveRecord;

use app\modules\miscellaneouse\models\nationality\Nationality_i18n;

/**
 * Class Nationality
 * @package app\modules\miscellaneouse\models
 *
 * @property int $id
 * @property string $name
 * @property string $icon_locale
 * @property string $dt_created
 * @property string $dt_updated
 */
class Nationality extends ActiveRecord
{
	/**
     * @return string
     */
    public static function tableName()
    {
        return 'nationality';
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
            return $this->name;
			//return Nationality_i18n::getTranslatedName($this->id, $languageID);
		}

		return $this->name;
	}

    /**
	 * @return int icon_locale
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
}