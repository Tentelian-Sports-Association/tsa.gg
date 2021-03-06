<?php

namespace app\modules\miscellaneouse\models\rules;

use app\modules\miscellaneouse\models\rules\RulesSubParagraph_i18n;

use Yii;
use yii\db\ActiveRecord;

/**
 * Class RulesParagraph
 * @package app\modules\miscellaneouse\models
 *
 * @property int $id
 * @property int $paragraph_id
 * @property int $sub_paragraph_id
 * @property string $name
 * @property string $description
 * @property string $dt_created
 * @property string $dt_updated
 */
class RulesSubParagraph extends ActiveRecord
{
	/**
     * @return string
     */
    public static function tableName()
    {
        return 'rules_sub_paragraph';
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
	public function getParagraphId()
	{
		return $this->paragraph_id;
	}

    /**
	 * @return int id
	 */
	public function getSubParagraphId()
	{
		return $this->sub_paragraph_id;
	}

	/**
	 * @return string name
	 */
	public function getName($languageID)
	{
		if(Yii::$app->language != 'en-EN')
		{
			$translatedName = RulesSubParagraph_i18n::getTranslatedName($this->id, $languageID);

			return ($translatedName) ? $translatedName : $this->name;
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
			$translatedDescription = RulesSubParagraph_i18n::getTranslatedDescription($this->id, $languageID);

			return ($translatedDescription) ? $translatedDescription : $this->description;
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