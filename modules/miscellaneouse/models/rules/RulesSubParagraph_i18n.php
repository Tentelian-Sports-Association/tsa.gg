<?php

namespace app\modules\miscellaneouse\models\rules;

use Yii;
use yii\db\ActiveRecord;

/**
 * Class RulesParagraph
 * @package app\modules\miscellaneouse\models
 *
 * @property int $id
 * @property int $language_id
 * @property string $name
 * @property string $description
 * @property string $dt_created
 * @property string $dt_updated
 */
class RulesSubParagraph_i18n extends ActiveRecord
{
	/**
     * @return string
     */
    public static function tableName()
    {
        return 'rules_sub_paragraph_i18n';
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
        $name = static::find()->where(['id' => $id])->andWhere(['language_id' => $languageID])->one();

        if($name)
        {
            return $name->getName();
		}
		return null;
    }

    /**
	 * @return string name
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
        $description = static::find()->where(['id' => $id])->andWhere(['language_id' => $languageID])->one();
        
        if($description)
        {
            return $description->getDescription();
		}

		return null;
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