<?php

namespace app\modules\miscellaneouse\models\rules;

use Yii;
use yii\db\ActiveRecord;

/**
 * Class RulesParagraph
 * @package app\modules\miscellaneouse\models
 *
 * @property int $id
 * @property int $rules_id
 * @property int $rules_paragraph_id
 * @property string $name
 * @property string $description
 * @property string $dt_created
 * @property string $dt_updated
 */
class RulesParagraph extends ActiveRecord
{
	/**
     * @return string
     */
    public static function tableName()
    {
        return 'rules_paragraph';
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
	public function getRulesId()
	{
		return $this->rules_id;
	}

    /**
	 * @return int id
	 */
	public function getRulesParagraphId()
	{
		return $this->rules_paragraph_id;
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
	 * @return string name
	 */
	public function getDescription($languageID)
	{
		if(Yii::$app->language != 'en-EN')
		{
            return $this->description;
			//return Nationality_i18n::getTranslatedName($this->id, $languageID);
		}

		return $this->description;
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