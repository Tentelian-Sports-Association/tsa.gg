<?php

namespace app\modules\organisation\models;

use yii\db\ActiveRecord;


/**
 * Class Organisation RBAC
 * @package app\modules\organisation\models
 *
 * @property int §id
 * @property string $role
 * @property string $dt_created
 * @property string $dt_updated
 */
class OrganisationRoles extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'organisation_roles';
    }

    /*********** Base Getter ***********/

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getRoleName()
    {
        return $this->role;
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

    public static function getRoleByID($roleID)
    {
        return static::findOne(['id' => $roleID])->getRoleName();
	}
}