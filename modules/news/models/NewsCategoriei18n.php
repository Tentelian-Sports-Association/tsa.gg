<?php

namespace app\modules\news\models;

use yii\db\ActiveRecord;


/**
 * Class NewsCategoriei18n
 * @package app\modules\news\models
 *
 * @property int $categorie_id
 * @property int $language_id
 * @property string $name
 * @property string $description
 * @property string $dt_created
 * @property string $dt_updated
 */

class NewsCategoriei18n  extends ActiveRecord
{
	/**
     * @return string
     */
    public static function tableName()
    {
        return 'news_categories_i18n';
    }
    
    /*********** Base Getter ***********/

    /**
     * @return int
     */
    public function getCategorieId()
    {
        return $this->categorie_id;
    }

    /**
     * @return int
     */
    public function getLanguageId()
    {
        return $this->language_id;
    }

    /**
     * @return string
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
		return static::find()->where(['categorie_id' => $id])->andWhere(['language_id' => $languageID])->one()->getName();
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string name
     */
    public static function getTranslatedDescription($id, $languageID)
    {
		return static::find()->where(['categorie_id' => $id])->andWhere(['language_id' => $languageID])->one()->getDescription();
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
}