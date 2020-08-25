<?php

namespace app\modules\team\models;

use yii\db\ActiveRecord;

use app\modules\user\models\User;

use app\modules\team\models\TeamRoles;

/**
 * Class TeamMember
 * @package app\modules\team\models
 *
 * @property int $team_id
 * @property int $user_id
 * @property int $role_id
 * @property string $dt_created
 * @property string $dt_updated
 */
 class TeamMember extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'team_member';
    }

    /*********** Base Getter ***********/

    /**
     * @return int
     */
    public function getTeamId()
    {
        return $this->team_id;
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

    public static function FindTeamMemberByRole($userId, $roleID)
    {
        $teamMemberships = TeamMember::find()->where(['user_id' => $userId])->andWhere(['role_id' => $roleID])->all();

        $myTeams = array();

        if($teamMemberships)
        {
            foreach($teamMemberships as $nr => $teamMembership)
            {
                $team = Team::findTeamById($teamMembership->getTeamId());
                $myOrganisations[$nr]['ID'] = $team->getId();
                $myOrganisations[$nr]['Name'] = $team->getName();
                $myOrganisations[$nr]['OrganisationRole'] = TeamRoles::find(['id' => $roleID])->one()->getRoleName();
			}
		}

        return $myOrganisations;
	}

    public static function findMember($teamID)
    {
        $members = static::findAll(['team_id' => $teamID]);
        $teamMembers = array();

        foreach($members as $nr =>  $member)
        {
            $user = User::findIdentity($member->getUserId());

            $teamMembers[$nr]['UserID'] = $user->getId();
            $teamMembers[$nr]['UserName'] = $user->getUsername();
            $teamMembers[$nr]['RoleID'] = $member->getRoleId();
            $teamMembers[$nr]['RoleName'] = TeamRoles::getRoleByID($member->getRoleId());
		}

        return $teamMembers;
    }

    public static function FindTeamManager($teamId)
    {
        $manager = TeamMember::find()->where(['team_id' => $teamId])->andWhere(['role_id' => 1])->one();

        $teamManager = [];

        $teamManager['id'] = $manager['user_id'];
        $teamManager['Name'] = User::findIdentity($manager['user_id'])->getUsername();


        return $teamManager;
	}

    public static function FindPlayer($teamId)
    {
        $players = static::find()->where(['team_id' => $teamId])->andWhere(['role_id' => 4])->all();

        $teamPlayer = array();

        foreach($players as $nr =>  $player)
        {
            $user = User::findIdentity($member->getUserId());

            $teamPlayer[$nr]['UserID'] = $user->getId();
            $teamPlayer[$nr]['UserName'] = $user->getUsername();
            $teamPlayer[$nr]['RoleID'] = $player->getRoleId();
            $teamPlayer[$nr]['RoleName'] = TeamRoles::getRoleByID($player->getRoleId());
		}

        return $teamPlayer;
	}

    public static function FindSubstitude($teamId)
    {
        $substitudes = static::find()->where(['team_id' => $teamId])->andWhere(['role_id' => 5])->all();

        $teamSubstitudes = array();

        foreach($substitudes as $nr =>  $substitude)
        {
            $user = User::findIdentity($member->getUserId());

            $teamSubstitudes[$nr]['UserID'] = $user->getId();
            $teamSubstitudes[$nr]['UserName'] = $user->getUsername();
            $teamSubstitudes[$nr]['RoleID'] = $substitude->getRoleId();
            $teamSubstitudes[$nr]['RoleName'] = TeamRoles::getRoleByID($substitude->getRoleId());
		}

        return $teamSubstitudes;
	}
}