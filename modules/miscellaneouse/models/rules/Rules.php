<?php

namespace app\modules\miscellaneouse\models\rules;

use app\modules\miscellaneouse\models\rules\RulesParagraph;
use app\modules\miscellaneouse\models\rules\RulesSubParagraph;

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
class Rules extends ActiveRecord
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

    public static function GetRules($id, $languageId)
    {
        $rulesSet = Rules::find()->where(['id' => $id])->one();
        $rulesParagraph = RulesParagraph::find()->where(['rules_id' => $rulesSet->getId()])->orderBy(['rules_paragraph_id' => SORT_ASC])->all();

        $rules = [];

        foreach($rulesParagraph as $rpnr => $paragraph)
        {
            $rules[$rpnr]['paragraphId'] = $paragraph->getRulesParagraphId();
            $rules[$rpnr]['paragraphName'] = $paragraph->getName($languageId);
            $rules[$rpnr]['paragraphDescription'] = $paragraph->getDescription($languageId);

            $rules[$rpnr]['paragraphSubParagraphs'] = [];

            $rulesSubParagraphs = RulesSubParagraph::find()->where(['paragraph_id' => $paragraph->getId()])->orderBy(['sub_paragraph_id' => SORT_ASC])->all();
            foreach($rulesSubParagraphs as $rspnr => $subParagraph)
            {
                $rules[$rpnr]['paragraphSubParagraphs'][$rspnr]['subParagraphId'] = $subParagraph->getSubParagraphId();
                $rules[$rpnr]['paragraphSubParagraphs'][$rspnr]['subParagraphName'] = $subParagraph->getName($languageId);
                $rules[$rpnr]['paragraphSubParagraphs'][$rspnr]['subParagraphDescription'] = $subParagraph->getDescription($languageId);
			}
		}


        return $rules;
	}
}