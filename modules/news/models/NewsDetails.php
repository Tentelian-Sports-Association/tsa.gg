<?php

namespace app\modules\news\models;

use yii\db\ActiveRecord;


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
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @return string
     */
    public function getShortBody()
    {
        return $this->short_body;
    }

    /**
     * @return string
     */
    public function getLongBody()
    {
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