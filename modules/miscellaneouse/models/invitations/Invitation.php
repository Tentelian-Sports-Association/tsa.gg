<?php

namespace app\modules\miscellaneouse\models\invitations;

use app\modules\organisation\models\Organisation;

use app\modules\user\models\User;

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

    public function getOpenInvitations($userId)
    {
        $openInvitations = static::find()->where(['invited_user_id' => $userId])->andWhere(['IS', 'accepted', null])->orderBy(['dt_created' => SORT_ASC])->all();

        $sortedInvitation = [];

        foreach ($openInvitations  as $nr => $invitation)
        {
          $sortedInvitation[$nr]['Organisation']['ID'] = $invitation->getOrganisationId();
          $sortedInvitation[$nr]['Organisation']['Name'] = Organisation::find()->where(['id' => $invitation->getOrganisationId()])->one()->getName();

          $sortedInvitation[$nr]['Inviter']['ID'] = $invitation->getInviterId();
          $sortedInvitation[$nr]['Inviter']['Name'] = User::find()->where(['id' => $invitation->getInviterId()])->one()->getUsername();

		}

        return $sortedInvitation;
	}
}