<?php

namespace app\modules\user\models;

use yii\db\ActiveRecord;

/**
 * Class UserSocials
 * @package app\modules\miscellaneouse\models
 *
 * @property int $user_id
 * @property string $twitter_name
 * @property string $twitter_channel
 * @property string $discord_name
 * @property string $discord_server
 * @property string $teamspeak_server
 * @property string $dt_created
 * @property string $dt_updated
 * @property bool $editable
 */

class UserSocials extends ActiveRecord
{
	/**
     * @return string
     */
    public static function tableName()
    {
        return 'user_socials';
    }

    /*********** Base Getter ***********/

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return string
     */
    public function getTwitterName()
    {
        return $this->twitter_name;
    }

    /**
     * @return string
     */
    public function getTwitterChannel()
    {
        return $this->twitter_channel;
    }

    /**
     * @return string
     */
    public function getDiscordname()
    {
        return $this->discord_name;
    }

    /**
     * @return string
     */
    public function getDiscordServer()
    {
        return $this->discord_server;
    }

    /**
     * @return int
     */
    public function getTeamSpeakServer()
    {
        return $this->teamspeak_server;
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

    /**
     * @return bool
     */
    public function getIsEditable()
    {
        return $this->editable;
    }

    /**
     * @inheritdoc
     */
    public static function findByID($userId)
    {
        return static::findOne(['user_id' => $userId]);
    }
}