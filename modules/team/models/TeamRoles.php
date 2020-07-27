<?php

namespace app\modules\team\models;

use yii\db\ActiveRecord;


/**
 * Class Team RBAC
 * @package app\modules\team\models
 *
 * @property int §id
 * @property string $name
 * @property string $dt_created
 * @property string $dt_updated
 */
class TeamRoles extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'team_role';
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
        return $this->name;
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