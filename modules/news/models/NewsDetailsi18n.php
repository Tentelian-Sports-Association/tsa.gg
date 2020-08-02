<?php

namespace app\modules\news\models;

use yii\db\ActiveRecord;
use yii;


/**
 * Class NewsDetailsi18n
 * @package app\modules\news\models
 *
 * @property int $details_id
 * @property int $language_id
 * @property string $header
 * @property string $short_body
 * @property string $long_body
 * @property string $dt_created
 * @property string $dt_updated
 */

class NewsDetailsi18n  extends ActiveRecord
{
	/**
     * @return string
     */
    public static function tableName()
    {
        return 'news_details_i18n';
    }
    
    /*********** Base Getter ***********/

    /**
     * @return int
     */
    public function getDetailsId()
    {
        return $this->details_id;
    }

    /**
     * @return string
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @return string name
     */
    public static function getTranslatedHeader($id, $languageID)
    {
		return static::find()->where(['details_id' => $id])->andWhere(['language_id' => $languageID])->one()->getHeader();
    }

    /**
     * @return string
     */
    public function getShortBody()
    {
        return $this->short_body;
    }

    /**
     * @return string name
     */
    public static function getTranslatedShortBody($id, $languageID)
    {
		return static::find()->where(['details_id' => $id])->andWhere(['language_id' => $languageID])->one()->getShortBody();
    }

    /**
     * @return string
     */
    public function getLongBody()
    {
        return $this->long_body;
    }

    /**
     * @return string name
     */
    public static function getTranslatedLongBody($id, $languageID)
    {
		return static::find()->where(['details_id' => $id])->andWhere(['language_id' => $languageID])->one()->getLongBody();
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