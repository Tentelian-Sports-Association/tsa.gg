<?php

namespace app\modules\organisation\models;

use yii\db\ActiveRecord;

use app\modules\user\models\User;

use app\modules\organisation\models\OrganisationRoles;

use app\modules\miscellaneouse\models\invitations\Invitations;

/**
 * Class OrganisationMembers
 * @package app\modules\organisation\models
 *
 * @property int $organisation_id
 * @property int $user_id
 * @property int $role_id
 * @property string $dt_created
 * @property string $dt_updated
 */
 class OrganisationMember extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'organisation_member';
    }

    /*********** Base Getter ***********/

    /**
     * @return int
     */
    public function getOrganisationId()
    {
        return $this->organisation_id;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return int
     */
    public function getRoleId()
    {
        return $this->role_id;
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
     * @return string
     */
    public function getOrganisationName($organisationId)
    {
        return Organisation::findOne(['id' => $organisationId])->getName();

        //return $this->name;
    }

    public static function FindOrganisationMember($userId, $roleID)
    {
        $organisationMemberships = OrganisationMember::find()->where(['user_id' => $userId])->andWhere(['role_id' => $roleID])->all();

        $myOrganisations = array();

        if($organisationMemberships)
        {
            foreach($organisationMemberships as $organisationMembership)
            {
                $myOrganisations[$organisationMembership->getOrganisationId()] = Organisation::findOrganisationById($organisationMembership->getOrganisationId());
			}
		}

        return $myOrganisations;
	}

    public static function FindOrganisationOwner($organisationId)
    {
        return OrganisationMember::find()->where(['organisation_id' => $organisationId])->andWhere(['role_id' => 1])->one();
	}

    public static function FindOrganisationDeputy($organisationId)
    {
        return OrganisationMember::find()->where(['organisation_id' => $organisationId])->andWhere(['role_id' => 2])->one();
	}

    public static function GetCanInvite($inviterID, $inviteUserID)
    {
        $organisations = OrganisationMember::find()->where(['user_id' => $inviterID])->andWhere(['<', 'role_id', '4'])->groupBy('organisation_id')->all();

        $detailledOrganisation = array();

        foreach($organisations as $nr => $organisation) {
            $detailledOrganisation[$nr]['ID'] = $organisation->getOrganisationId();
            $detailledOrganisation[$nr]['Name'] = $organisation->getOrganisationName($organisation->getOrganisationId());
            $detailledOrganisation[$nr]['UserID'] = $organisation->getUserId();
            $detailledOrganisation[$nr]['alreadyMember'] = (OrganisationMember::find()->where(['user_id' => $inviteUserID])->andWhere(['organisation_id' => $organisation->getOrganisationId()])->one()) ? true : false;
            $detailledOrganisation[$nr]['Invited'] = (Invitations::find()->where(['organisation_id' => $organisation->getOrganisationId()])->andWhere(['invited_user_id' => $inviteUserID])->one()) ? true : false;
		}

        return $detailledOrganisation;
	}

    public static function findMember($orgID)
    {
        $members = static::findAll(['organisation_id' => $orgID]);
        $orgMembers = array();

        foreach($members as $nr =>  $member)
        {
            $user = User::findIdentity($member->getUserId());

            $orgMembers[$nr]['UserID'] = $user->getId();
            $orgMembers[$nr]['UserName'] = $user->getUsername();
            $orgMembers[$nr]['RoleID'] = $member->getRoleId();
            $orgMembers[$nr]['RoleName'] = OrganisationRoles::getRoleByID($member->getRoleId());
		}

        return $orgMembers;
    }
}