<?php

namespace app\modules\partner\models;

use yii\db\ActiveRecord;

use Yii;
use DateTime;

/**
 * Class News
 * @package app\modules\partner\models
 *
 * @property int $partner_id
 * @property int $language_id
 * @property string $name
 * @property string $description
 * @property string $dt_created
 * @property string $dt_updated
 */

class Partner_i18n extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'partner_i18n';
    }

    /**
     * @return int
     */
    public function getID()
    {
        return $this->id;
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
		return static::find()->where(['partner_id' => $id])->andWhere(['language_id' => $languageID])->one()->getName();
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
		return static::find()->where(['partner_id' => $id])->andWhere(['language_id' => $languageID])->one()->getDescription();
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