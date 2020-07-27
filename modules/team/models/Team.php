<?php

namespace app\modules\team\models;

use yii\db\ActiveRecord;

use app\modules\miscellaneouse\models\language\Language;
use app\modules\miscellaneouse\models\nationality\Nationality;


use app\modules\team\models\Team;

use DateTime;


/**
 * Class Organisation
 * @package app\modules\organisation\models
 *
 * @property int $id
 * @property int $organisation_id
 * @property int $game_id
 * @property int $language_id
 * @property int $headquater_id
 * @property int $mode_id
 * @property string $name
 * @property string $shortcode
 * @property string $dt_created
 * @property string $dt_updated
 */
class Team extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'team';
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
     * @return int
     */
    public function getOrganisationId()
    {
        return $this->organisation_id;
    }

    /**
     * @return int
     */
    public function getGameId()
    {
        return $this->game_id;
    }

    /**
     * @return int
     */
    public function getLanguageId()
    {
        return $this->language_id;
    }

    /**
     * @return int
     */
    public function getHeadquaterId()
    {
        return $this->headquater_id;
    }

    /**
     * @return int
     */
    public function getModeId()
    {
        return $this->mode_id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getShortcode()
    {
        return $this->shortcode;
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

    /*********** Get Special informations ***********/

    /**
     * @return ActiveQuery
     */
    public function getLanguage()
    {
        return $this->hasOne(Language::className(), ['id' => 'language_id'])->one();
    }

    /**
     * @return ActiveQuery
     */
    public function getNationality()
    {
        return $this->hasOne(Nationality::className(), ['id' => 'headquater_id'])->one();
    }

    /* Get Teams for Community Overview */
    public static function GetDetails($PaginatedTeams, $languageID)
    {
       $paginatedTeamsWithDetails = array();

       foreach($PaginatedTeams as $nr => $Team)
       {
           $paginatedTeamsWithDetails[$nr]['ID'] = $Team->getId();
           $paginatedTeamsWithDetails[$nr]['Name'] = $Team->getName();
           
           $paginatedTeamsWithDetails[$nr]['Nationality']['icon'] = $Team->getNationality()->getIconLocale();
           $paginatedTeamsWithDetails[$nr]['Nationality']['name'] = $Team->getNationality()->getName($languageID);

           $paginatedTeamsWithDetails[$nr]['Language']['icon'] = $Team->getLanguage()->getIconLocale();
           $paginatedTeamsWithDetails[$nr]['Language']['name'] = $Team->getLanguage()->getName($languageID);
	    }

        //print_r($paginatedUserWithDetails);
        //die();

        return $paginatedTeamsWithDetails;
	}
}