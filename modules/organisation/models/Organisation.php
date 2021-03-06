<?php

namespace app\modules\organisation\models;

use yii\db\ActiveRecord;

use app\modules\miscellaneouse\models\language\Language;
use app\modules\miscellaneouse\models\nationality\Nationality;

use app\modules\organisation\models\OrganisationMember;
use app\modules\organisation\models\OrganisationSocial;

use app\modules\team\models\Team;
use app\modules\team\models\TeamRoles;
use app\modules\team\models\TeamMember;

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

    public function getOwner()
    {
        return OrganisationMember::FindOrganisationOwner($this->id);
	}

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    public function getSocialDetails()
    {
     return OrganisationSocial::findByID($this->id);
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

    public function getMember()
    {
         return OrganisationMember::findMember($this->id);
	}

    public function getManagementMember()
    {
         return OrganisationMember::findManagementMember($this->id);
	}

    public function getInvitabelMember($orgId, $teamId, $gameId, $modeId)
    {
        return OrganisationMember::findInvitabelMember($orgId, $teamId, $gameId, $modeId);
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

    public function getTeamsByUser($userId)
    {
        $orgaTeams = $this->hasMany(Team::className(), ['organisation_id' => 'id'])->all();

        $userTeams = [];

        foreach($orgaTeams as $nr => $orgaTeam)
        {
            $member = TeamMember::find()->where(['team_id' => $orgaTeam->getId()])->andWhere(['user_id' => $userId])->one();
            
            if($member != null)
            {
                $userTeams[$nr]['Id'] = $orgaTeam->getId();
                $userTeams[$nr]['Name'] = $orgaTeam->getName();
                $userTeams[$nr]['ShortCode'] = $orgaTeam->getShortcode();
                $userTeams[$nr]['Position']['Id'] = $member->getRoleId();
                $userTeams[$nr]['Position']['Name'] = TeamRoles::find()->where(['id' => $member->getRoleId()])->one()->getRoleName();
			}
		}
        
        return $userTeams;
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

           $paginatedOrganisationWithDetails[$nr]['Owner']['Name'] = $organisation->getOwner()['Name'];
           $paginatedOrganisationWithDetails[$nr]['Owner']['ID'] = $organisation->getOwner()['id'];
	    }

        return $paginatedOrganisationWithDetails;
	}

    /* Get Organisation for Details Overview */
    public static function GetOrgansiationDetails($organisationId, $languageID)
    {
        $organisation = static::findOne(['id' => $organisationId]);
        $teams = Team::find()->where(['organisation_id' => $organisation->getId()])->all();
        
        $organisationWithDetails = array();

        $organisationWithDetails['ID'] = $organisation->getId();
        $organisationWithDetails['Name'] = $organisation->getName();
        $organisationWithDetails['Description'] = $organisation->getDescription();
        $organisationWithDetails['FoundingDate'] = $organisation->getDtCreated();

           
        $organisationWithDetails['Nationality']['icon'] = $organisation->getNationality()->getIconLocale();
        $organisationWithDetails['Nationality']['name'] = $organisation->getNationality()->getName($languageID);

        $organisationWithDetails['Language']['icon'] = $organisation->getLanguage()->getIconLocale();
        $organisationWithDetails['Language']['name'] = $organisation->getLanguage()->getName($languageID);

        foreach($teams as $nr => $team)
        {
            $organisationWithDetails['Teams'][$nr]['Id'] = $team->getId();
            $organisationWithDetails['Teams'][$nr]['Name'] = $team->getName();
            $organisationWithDetails['Teams'][$nr]['ShortCode'] = $team->getShortCode();
		}

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