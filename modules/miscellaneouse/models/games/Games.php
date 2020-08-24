<?php

namespace app\modules\miscellaneouse\models\games;

use yii\db\ActiveRecord;

use app\modules\tournament\models\Tournament;

use app\modules\team\models\TeamMember;

use app\modules\miscellaneouse\models\tournamentParticipants\TournamentTeamParticipating;
use app\modules\miscellaneouse\models\tournamentParticipants\TournamentPlayerParticipating;

/**
 * Class Games
 * @package app\modules\miscellaneouse\models\games
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $twitter_developer_tag
 * @property string $twitter_game_tag
 * @property string $twitter_channel
 * @property string $icon
 * @propertx string $verification_phrase
 * @property string $statisticsClassName
 * @property string $gameTag
 * @property string $dt_created
 * @property string $dt_updated
 */

class Games extends ActiveRecord
{
	/**
     * @return string
     */
    public static function tableName()
    {
        return 'games';
    }

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
    public function getName($languageID)
    {
        //if($languageID != 1)
        //{
        //  return Games_i18n::getTranslatedDescription($this->id, $languageID);
        //}

        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription($languageID)
    {
    	//if($languageID != 1)
		//{
		//	return Games_i18n::getTranslatedDescription($this->id, $languageID);
		//}

        return $this->description;
    }

    /**
     * @return string
     */
    public function getTwitterDeveloper()
    {
        return $this->twitter_developer_tag;
    }

    /**
     * @return string
     */
    public function getTwitterGame()
    {
        return $this->twitter_game_tag;
    }

    /**
     * @return string
     */
    public function getTwitterChannel()
    {
        return $this->twitter_channel;
    }

    /**
     * @return blob screen
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @return string
     */
    public function getVerificationPhrase()
    {
        return $this->verification_phrase;
	}

    /**
     * @return string
     */
    public function getStatisticsClass()
    {
        return $this->statisticsClassName;
	}

    /**
     * @return string
     */
    public function getGameTag()
    {
        return $this->gameTag;
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

    /**
     * @inheritdoc
     */
    public static function findByID($gameID)
    {
        return static::findOne(['id' => $gameID]);
    }

    public static function GetCurrentGames($languageID)
    {
        $games = static::find()->all();
        $detailledGames = array();

        //foreach($games  as $nr => $game)
        //{
        //      $detailledGames[$nr]['ID'] = $game->getId();
        //      $detailledGames[$nr]['Name'] = $game->getName($languageID);
        //      $detailledGames[$nr]['IMG']['webp'] = $game->getWebpImage();
        //      $detailledGames[$nr]['IMG']['png'] = $game->getPNGImage();
		//}

        return $detailledGames;
	}

    public static function getGameWithTournaments($languageID)
    {
        $games = static::find()->all();

        $gamesWithTournaments = [];

        foreach($games as $nr => $game)
        {
            $gamesWithTournaments[$nr]['Name'] = $game->getName($languageID);
            $gamesWithTournaments[$nr]['Id'] = $game->getId();
            $gamesWithTournaments[$nr]['image'] = $game->getIcon();

            $gamesWithTournaments[$nr]['OpenTournaments'] = Tournament::find()->where(['game_id' => $game->getId()])->andWhere(['finished' => '0'])->count();

            if($gamesWithTournaments[$nr]['OpenTournaments'] > 0)
            {
                $gamesWithTournaments[$nr]['ParticipatingPlayer'] = 0;
                $gamesWithTournaments[$nr]['ParticipatingTeams'] = 0;
                
                $openTournaments = Tournament::find()->where(['game_id' => $game->getId()])->andWhere(['finished' => '0'])->all();

                foreach($openTournaments as $openTournament)
                {
                    if($openTournament->getIsTeamTournament())
                    {
                        $tournamentTeams = TournamentTeamParticipating::find()->where(['tournament_id' => $openTournament->getId()])->all();

                        $gamesWithTournaments[$nr]['ParticipatingTeams'] += count($tournamentTeams);

                        foreach($tournamentTeams as $tournamentTeam)
                        {
                            $gamesWithTournaments[$nr]['ParticipatingPlayer'] += TeamMember::find()->where(['team_id' => $tournamentTeam->getTeamId()])->andWhere(['>', 'role_id', '3'])->count();
					    }
					}
                    else
                    {
                        $gamesWithTournaments[$nr]['ParticipatingPlayer'] += TournamentPlayerParticipating::find()->where(['tournament_id' => $openTournament->getId()])->count();
                    }

				}
			}
		}

        return $gamesWithTournaments;
	}
}