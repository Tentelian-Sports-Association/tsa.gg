<?php

namespace app\modules\miscellaneouse\models\games;

use yii\db\ActiveRecord;

/**
 * Class GamePlatforms
 * @package app\modules\miscellaneouse\models\games
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $twitter_developer_tag
 * @property string $twitter_channel
 * @property string $icon
 * @property string $dt_created
 * @property string $dt_updated
 */

class GamePlatforms extends ActiveRecord
{
	/**
     * @return string
     */
    public static function tableName()
    {
        return 'game_platforms';
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
	 * @return string name
	 */
	public function getTranslatedPlatformName($languageID)
	{


		//if($languageID != 1)
		//{
		//	return GamePlatforms_i18n::getTranslatedName($this->id, $languageID);
		//}

		return $this->name;
	}

    /**
     * @return string
     */
    public function getName($languageID)
    {
        //if($languageID != 1)
        //{
        //  return Games_i18n::getTranslatedDescription($this->id, $languageID);
        //}

        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription($id, $languageID)
    {
    	//if($languageID != 1)
		//{
		//	return GamePlatforms_i18n::getTranslatedDescription($this->id, $languageID);
		//}

        return $this->description;
    }

    /**
     * @return string
     */
    public function getTwitterDeveloper()
    {
        return $this->twitter_developer_tag;
    }

    /**
     * @return string
     */
    public function getTwitterChannel()
    {
        return $this->twitter_channel;
    }

    /**
     * @return blob screen
     */
    public function getIcon()
    {
        return $this->icon;
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
    public static function findByID($platformId)
    {
        return static::findOne(['id' => $platformId]);
    }
}