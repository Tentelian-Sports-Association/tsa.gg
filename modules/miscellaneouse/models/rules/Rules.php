<?php

namespace app\modules\miscellaneouse\models\rules;

use Yii;
use yii\db\ActiveRecord;

/**
 * Class Rules
 * @package app\modules\miscellaneouse\models
 *
 * @property int $id
 * @property int $game_id
 * @property string $name
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
        return 'rules';
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
	public function getGameId()
	{
		return $this->game_id;
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