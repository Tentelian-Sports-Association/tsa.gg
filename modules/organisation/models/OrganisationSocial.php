<?php

namespace app\modules\organisation\models;

use yii\db\ActiveRecord;

/**
 * Class OrganisationSocial
 * @package app\modules\organisation\models
 *
 * @property int $organisation_id
 * @property string $business_mail
 * @property string $twitter_name
 * @property string $twitter_channel
 * @property string $discord_server
 * @property string $teamspeak_server
 * @property bool   $editable
 * @property string $dt_created
 * @property string $dt_updated
 */
class OrganisationSocial extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'organisation_social';
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->organisation_id;
    }

    /**
     * @return string
     */
    public function getBusinessMail()
    {
        return $this->business_mail;
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
    public function getDiscordServer()
    {
        return $this->discord_server;
    }

    /**
     * @return string
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
     * @return boos
     */
    public function getIsEditable()
    {
        return $this->editable;
    }

    /**
     * @inheritdoc
     */
    public static function findByID($orgId)
    {
        return static::findOne(['organisation_id' => $orgId]);
    }
}