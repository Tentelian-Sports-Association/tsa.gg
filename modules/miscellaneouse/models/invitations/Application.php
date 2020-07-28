<?php

namespace app\modules\miscellaneouse\models\invitations;

use yii\db\ActiveRecord;

/**
 * Class Organisation Application
 * @package app\modules\miscellaneouse\models
 *
 * @property int $organisation_id
 * @property int $applicant_user_id
 * @property bool $accepted
 * @property string $dt_created
 * @property string $dt_updated
 */
class Application extends ActiveRecord
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
	public function getApplicantUserId()
	{
		return $this->applicant_user_id;
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