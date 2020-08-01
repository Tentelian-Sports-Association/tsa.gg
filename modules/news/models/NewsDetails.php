<?php

namespace app\modules\news\models;

use app\modules\news\models\NewsDetailsi18n;

use yii\db\ActiveRecord;
use yii;


/**
 * Class NewsDetails
 * @package app\modules\news\models
 *
 * @property int $news_id
 * @property string $header
 * @property string $short_body
 * @property string $long_body
 * @property string $img
 * @property string $twitter_post_id
 * @property string $youtube_video_id
 * @property string $dt_created
 * @property string $dt_updated
 */

class NewsDetails  extends ActiveRecord
{
	/**
     * @return string
     */
    public static function tableName()
    {
        return 'news_details';
    }
    
    /*********** Base Getter ***********/

    /**
     * @return int
     */
    public function getId()
    {
        return $this->news_id;
    }

    /**
     * @return string
     */
    public function getHeader($languageID)
    {
        if(Yii::$app->language != 'en-EN')
		{
			return NewsDetailsi18n::getTranslatedHeader($this->id, $languageID);
		}

        return $this->header;
    }

    /**
     * @return string
     */
    public function getShortBody($languageID)
    {
        if(Yii::$app->language != 'en-EN')
		{
			return NewsDetailsi18n::getTranslatedShortBody($this->id, $languageID);
		}

        return $this->short_body;
    }

    /**
     * @return string
     */
    public function getLongBody($languageID)
    {
        if(Yii::$app->language != 'en-EN')
		{
			return NewsDetailsi18n::getTranslatedLongBody($this->id, $languageID);
		}

        return $this->long_body;
    }

    /**
     * @return string
     */
    public function getImgTag()
    {
        return $this->img;
    }

    /**
     * @return string
     */
    public function getTwitterId()
    {
        return $this->twitter_post_id;
    }

    /**
     * @return string
     */
    public function getYoutubeId()
    {
        return $this->youtube_video_id;
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