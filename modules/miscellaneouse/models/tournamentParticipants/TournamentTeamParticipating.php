<?php

namespace app\modules\miscellaneouse\models\tournamentParticipants;

use app\modules\team\models\Team;
use app\modules\team\models\TeamMember;

use app\modules\user\models\User;

use yii\db\ActiveRecord;
use DateTime;

/**
 * Class TournamentTeamParticipating
 * @package app\modules\miscellaneouse\models\tournamentParticipants
 *
 * @property int $tournament_id
 * @property int $team_id
 * @property bool $checked_in
 * @property string $dt_created
 * @property string $dt_updated
 */
class TournamentTeamParticipating extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'tournament_team_participating';
    }

    /*********** Base Getter ***********/

    /**
     * @return int
     */
    public function getTournamentId()
    {
        return $this->tournament_id;
    }

    /**
     * @return int
     */
    public function getTeamId()
    {
        return $this->team_id;
    }

    /**
     * @return bool
     */
    public function getIsCheckedIn()
    {
        return $this->checked_in;
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

    public static function getById($tournament_id, $team_id)
    {
        return static::find()->where(['tournament_id' => $tournament_id])->andWhere(['team_id' => $team_id])->one();
	}

    /** Get Player Penalties */
    public function getPenalties()
    {
        $penaltie = [];
        $penaltie[0]['id'] = 1;
        $penaltie[0]['name'] = 'dq';
        $penaltie[0]['weight'] = '10';
        $penaltie[0]['date'] = DateTime::createFromFormat('Y-m-d H:i:s', '2020-03-15 22:30:15')->format('d.m.Y');

        $penaltie[1]['id'] = 2;
        $penaltie[1]['name'] = 'unsportsmanlike';
        $penaltie[1]['weight'] = '7';
        $penaltie[1]['date'] = DateTime::createFromFormat('Y-m-d H:i:s', '2020-03-15 22:30:15')->format('d.m.Y');;

        return $penaltie;
	}

    /** Get Teams Partcipating with all detailes */
    public static function getTeamParticipating($tournamentId, $languageId)
    {
        $participants = static::find()->where(['tournament_id' => $tournamentId])->all();
        $detailedParticipants = [];

        foreach($participants as $nr => $participant)
        {
            $tournamentTeam = Team::find()->where(['id' => $participant->getTeamId()])->one();

            $detailedParticipants[$nr]['id'] = $tournamentTeam->getId();
            $detailedParticipants[$nr]['orgId'] = $tournamentTeam->getOrganisationId();
            $detailedParticipants[$nr]['name'] = $tournamentTeam->getName();

            $detailedParticipants[$nr]['language']['id'] = $tournamentTeam->getLanguageId();
            $detailedParticipants[$nr]['language']['name'] = $tournamentTeam->getLanguage()->getName($languageId);
            $detailedParticipants[$nr]['language']['icon'] = $tournamentTeam->getLanguage()->getIconLocale();

            $detailedParticipants[$nr]['checkInState'] = $participant->getIsCheckedIn();
            $detailedParticipants[$nr]['penalties'] = [];

            $penalties = $participant->getPenalties();
            foreach($penalties as $p_nr => $penaltie)
            {
                $detailedParticipants[$nr]['penalties'][$p_nr]['id'] = $penaltie['id'];
                $detailedParticipants[$nr]['penalties'][$p_nr]['name'] = $penaltie['name'];
                $detailedParticipants[$nr]['penalties'][$p_nr]['weight'] = $penaltie['weight'];
                $detailedParticipants[$nr]['penalties'][$p_nr]['date'] = $penaltie['date'];
			}

            $detailedParticipants[$nr]['players'] = TeamMember::FindPlayer($participant->getTeamId());
            $detailedParticipants[$nr]['substitudes'] = TeamMember::FindSubstitude($participant->getTeamId());
        }

        return $detailedParticipants;
	}

    /** Get Teams Partcipating with all detailes */
    public static function getCheckedInTeamParticipating($tournamentId)
    {
        $participants = static::find()->where(['tournament_id' => $tournamentId])->andWhere(['checked_in' => 1])->all();
        $detailedCheckedInParticipants = [];

        foreach($participants as $nr => $participant)
        {
            $tournamentTeam = Team::find()->where(['id' => $participant->getTeamId()])->one();

            $detailedCheckedInParticipants[$nr]['id'] = $tournamentTeam->getId();
            $detailedCheckedInParticipants[$nr]['orgId'] = $tournamentTeam->getOrganisationId();
            $detailedCheckedInParticipants[$nr]['name'] = $tournamentTeam->getName();
        }

        return $detailedCheckedInParticipants;
	}
}