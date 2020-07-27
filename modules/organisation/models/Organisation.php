<?php

namespace app\modules\organisation\models;

use yii\db\ActiveRecord;

use app\modules\miscellaneouse\models\language\Language;
use app\modules\miscellaneouse\models\nationality\Nationality;

use app\modules\teams\models\Team;

use DateTime;


/**
 * Class Organisation
 * @package app\modules\organisation\models
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $headquater_id
 * @property int $language_id
 * @property string $dt_created
 * @property string $dt_updated
 */
class Organisation extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'organisation';
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
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
    public function getLanguageId()
    {
        return $this->language_id;
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

    /**
     * @return ActiveQuery
     * @param string $organisationName the username
     * @return static|null the organisation, if a user with that username exists
     */
    public static function findByOrganisationName($organisationName)
    {
        return static::findOne(['name' => $organisationName]);
    }

    public static function findOrganisationById($organisationId)
    {
        return static::findOne(['id' => $organisationId]);
    }

    /* Get Organisation for Community Overview */
    public static function GetDetails($paginatedOrganisation, $languageID)
    {
       $paginatedOrganisationWithDetails = array();

       foreach($paginatedOrganisation as $nr => $organisation)
       {
           $paginatedOrganisationWithDetails[$nr]['ID'] = $organisation->getId();
           $paginatedOrganisationWithDetails[$nr]['Name'] = $organisation->getName();
           
           $paginatedOrganisationWithDetails[$nr]['Nationality']['icon'] = $organisation->getNationality()->getIconLocale();
           $paginatedOrganisationWithDetails[$nr]['Nationality']['name'] = $organisation->getNationality()->getName($languageID);

           $paginatedOrganisationWithDetails[$nr]['Language']['icon'] = $organisation->getLanguage()->getIconLocale();
           $paginatedOrganisationWithDetails[$nr]['Language']['name'] = $organisation->getLanguage()->getName($languageID);
	    }

        //print_r($paginatedUserWithDetails);
        //die();

        return $paginatedOrganisationWithDetails;
	}

    /* Get Organisation for Details Overview */
    public static function GetOrgansiationDetails($organisationId, $languageID)
    {
        $organisation = static::findOne(['id' => $organisationId]);
        
        $organisationWithDetails = array();

        $organisationWithDetails['ID'] = $organisation->getId();
        $organisationWithDetails['Name'] = $organisation->getName();
           
        $organisationWithDetails['Nationality']['webp'] = $organisation->getNationality()->getWebpImage();
        $organisationWithDetails['Nationality']['png'] = $organisation->getNationality()->getPNGImage();
        $organisationWithDetails['Nationality']['name'] = $organisation->getNationality()->getName($languageID);

        $organisationWithDetails['Language']['webp'] = $organisation->getLanguage()->getWebpImage();
        $organisationWithDetails['Language']['png'] = $organisation->getLanguage()->getPNGImage();
        $organisationWithDetails['Language']['name'] = $organisation->getLanguage()->getName($languageID);

        return $organisationWithDetails;
	}

    public static function FindTeams($organisationId, $currentGames, $languageID)
    {
        $teams = Team::FindAll(['organisation_id' => $organisationId]);

        $sortedTeams = array();

        foreach($currentGames as $nr => $game) {

            $teamsCounter = 0;

            $sortedTeams[$nr]['GameID'] = $game['ID'];
            $sortedTeams[$nr]['GameName'] = $game['Name'];
            $sortedTeams[$nr]['GameIMG']['webp'] = $game['IMG']['webp'];
            $sortedTeams[$nr]['GameIMG']['png'] = $game['Name'];
              
            foreach($teams as $tnr => $team) {
                if($team->getGameId() == $game['ID'] && $team->getIsModeActive($team->getModeId())) {
                    $sortedTeams[$nr]['Team'][$tnr]['Active'] = $team->getIsModeActive($team->getModeId());
                    $sortedTeams[$nr]['Team'][$tnr]['Mode'] = $team->getModeId();
                    $sortedTeams[$nr]['Team'][$tnr]['ID'] = $team->getId();
                    $sortedTeams[$nr]['Team'][$tnr]['Name'] = $team->getName();
                    $sortedTeams[$nr]['Team'][$tnr]['ShortCode'] = $team->getShortCode();
                    $sortedTeams[$nr]['Team'][$tnr]['CreationDate'] = DateTime::createFromFormat('Y-m-d H:i:s', $team->getDtCreated())->format('Y-m-d');
                    $sortedTeams[$nr]['Team'][$tnr]['Nationality']['webp'] = $team->getNationality()->getWebpImage();
                    $sortedTeams[$nr]['Team'][$tnr]['Nationality']['png']  = $team->getNationality()->getPNGImage();
                    $sortedTeams[$nr]['Team'][$tnr]['Nationality']['name'] = $team->getNationality()->getName($languageID);
                    $sortedTeams[$nr]['Team'][$tnr]['Language']['webp'] = $team->getLanguage()->getWebpImage();
                    $sortedTeams[$nr]['Team'][$tnr]['Language']['png']  = $team->getLanguage()->getPNGImage();
                    $sortedTeams[$nr]['Team'][$tnr]['Language']['name'] = $team->getLanguage()->getName($languageID);

                    $teamsCounter++;
				}
			}

            $sortedTeams[$nr]['Counter'] = $teamsCounter;
		}

        return $sortedTeams;
	}
}