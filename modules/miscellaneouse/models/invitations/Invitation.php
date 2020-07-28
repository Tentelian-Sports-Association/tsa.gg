<?php

namespace app\modules\miscellaneouse\models\invitations;

use yii\db\ActiveRecord;

/**
 * Class Organisation Invitations
 * @package app\modules\miscellaneouse\models
 *
 * @property int $organisation_id
 * @property int $invited_user_id
 * @property int $inviter_user_id
 * @property bool $accepted
 * @property string $dt_created
 * @property string $dt_updated
 */
class Invitation extends ActiveRecord
{
	/**
     * @return string
     */
    public static function tableName()
    {
        return 'organisation_invitation';
    }

    /**
	 * @return int id
	 */
	public function getOrganisationId()
	{
		return $this->organisation_id;
	}

    /**
	 * @return int id
	 */
	public function getInvitedUserId()
	{
		return $this->invited_user_id;
	}

    /**
	 * @return int id
	 */
	public function getInviterId()
	{
		return $this->inviter_user_id;
	}

    /**
     * @return bool
     */
    public function getIsAccepted()
    {
        return $this->accepted;
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