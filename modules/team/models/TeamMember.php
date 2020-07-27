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
    public function getOrganisationId()
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
}