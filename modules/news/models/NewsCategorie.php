<?php

namespace app\modules\news\models;

use app\modules\news\models\NewsCategoriei18n;

use yii\db\ActiveRecord;
use Yii;

/**
 * Class NewsCategorie
 * @package app\modules\news\models
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $img
 * @property string $dt_created
 * @property string $dt_updated
 */

class NewsCategorie  extends ActiveRecord
{
	/**
     * @return string
     */
    public static function tableName()
    {
        return 'news_categorie';
    }
    
    /*********** Base Getter ***********/

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName($languageID)
    {
        if(Yii::$app->language != 'en-EN')
		{
			return NewsCategoriei18n::getTranslatedName($this->id, $languageID);
		}

        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription($languageID)
    {
        if(Yii::$app->language != 'en-EN')
		{
			return NewsCategoriei18n::getTranslatedDescription($this->id, $languageID);
		}

        return $this->description;
    }

    /**
     * @return int
     */
    public function getImgTag()
    {
        return $this->img;
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

    /************************ Functions ****************************/

    public static function GetCategories($languageID)
    {
        $categories = static::find()->orderBy(['name' => SORT_DESC])->limit(5)->all();

        $sortedCategories = [];

        foreach($categories as $nr => $categorie)
        {
            $sortedCategories[$nr]['ID'] = $categorie->getId();
            $sortedCategories[$nr]['name'] = $categorie->getName($languageID);
            $sortedCategories[$nr]['img'] = $categorie->getImgTag();
		}

        return $sortedCategories;
	}
}