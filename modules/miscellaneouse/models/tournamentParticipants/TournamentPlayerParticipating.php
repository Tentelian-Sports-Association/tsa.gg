<?php

namespace app\modules\miscellaneouse\models\tournamentParticipants;

use app\modules\user\models\User;

use yii\db\ActiveRecord;
use DateTime;

/**
 * Class TournamentPlayerParticipating
 * @package app\modules\miscellaneouse\models\tournamentParticipants
 *
 * @property int $tournament_id
 * @property int $player_id
 * @property bool $checked_in
 * @property bool $readRules
 * @property string $dt_created
 * @property string $dt_updated
 */
class TournamentPlayerParticipating extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'tournament_player_participating';
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
    public function getPlayerId()
    {
        return $this->player_id;
    }

    /**
     * @return bool
     */
    public function getIsCheckedIn()
    {
        return $this->checked_in;
    }

    /**
     * @return bool
     */
    public function getReadRules()
    {
        return $this->readRules;
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

    public static function getById($tournament_id, $player_id)
    {
        return static::find()->where(['tournament_id' => $tournament_id])->andWhere(['player_id' => $player_id])->one();
	}

    /** Get Player Penalties */
    public function getPenalties()
    {
        $penaltie = [];
        //$penaltie[0]['id'] = 1;
        //$penaltie[0]['name'] = 'dq';
        //$penaltie[0]['weight'] = '10';
        //$penaltie[0]['date'] = DateTime::createFromFormat('Y-m-d H:i:s', '2020-03-15 22:30:15')->format('d.m.Y');

        //$penaltie[1]['id'] = 2;
        //$penaltie[1]['name'] = 'unsportsmanlike';
        //$penaltie[1]['weight'] = '7';
        //$penaltie[1]['date'] = DateTime::createFromFormat('Y-m-d H:i:s', '2020-03-15 22:30:15')->format('d.m.Y');;

        return $penaltie;
	}

    /** Get Player Partcipating with all detailes */
    public static function getPlayerParticipating($tournamentId, $languageId)
    {
        $participants = static::find()->where(['tournament_id' => $tournamentId])->all();
        $detailedParticipants = [];

        foreach($participants as $nr => $participant)
        {
            $tournamentPlayer = User::find()->where(['id' => $participant->getPlayerId()])->one();

            $detailedParticipants[$nr]['id'] = $participant->getPlayerId();
            $detailedParticipants[$nr]['name'] = $tournamentPlayer->getUsername();
            $detailedParticipants[$nr]['language']['id'] = $tournamentPlayer->getLanguageId();
            $detailedParticipants[$nr]['language']['name'] = $tournamentPlayer->getLanguage()->getName($languageId);
            $detailedParticipants[$nr]['language']['icon'] = $tournamentPlayer->getLanguage()->getIconLocale();
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

		}

        //print_r($detailedParticipants);
        //die();

        return $detailedParticipants;
	}

    /** Get Player Partcipating with all detailes */
    public static function getCheckedInPlayerParticipating($tournamentId)
    {
        $participants = static::find()->where(['tournament_id' => $tournamentId])->andWhere(['checked_in' => 1])->all();
        $detailedCheckedInParticipants = [];

        foreach($participants as $nr => $participant)
        {
            $tournamentPlayer = User::find()->where(['id' => $participant->getPlayerId()])->one();

            $detailedCheckedInParticipants[$nr]['id'] = $tournamentPlayer->getId();
            $detailedCheckedInParticipants[$nr]['name'] = $tournamentPlayer->getUsername();
		}

        return $detailedCheckedInParticipants;
	}
}