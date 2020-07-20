<?php

namespace app\modules\user\models;

use yii\db\ActiveRecord;

use app\modules\miscellaneouse\models\games\GamePlatforms;
use app\modules\miscellaneouse\models\games\Games;

/**
 * Class UserGames
 * @package app\modules\user\models
 *
 * @property int $user_id
 * @property int $game_platform_id
 * @property int $game_id
 * @property string $player_id
 * @property bool $visible
 * @property string $dt_created
 * @property string $dt_updated
 * @property bool $editable
 */

class UserGames extends ActiveRecord
{
	/**
     * @return string
     */
    public static function tableName()
    {
        return 'user_games';
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return string
     */
    public function getGamePlatformId()
    {
        return $this->game_platform_id;
    }

    /**
	 * @return string name
	 */
	public function getGamePlatformName($languageID)
	{
        $platform = GamePlatforms::findByID($this->game_platform_id);
		return $platform->getTranslatedPlatformName($this->game_platform_id, $languageID);
	}

    /**
     * @return string image
     */
    public function getGamePlatformIcon()
    {
        $platform = GamePlatforms::findByID($this->game_platform_id);
        return $platform->getIcon();
    }

    /**
     * @return string
     */
    public function getGameId()
    {
        return $this->game_id;
    }

    /**
     * @return string
     */
    public function getGameName($languageID)
    {
        $game = Games::findById($this->game_id);
        return $game->getName($languageID);
    }

    /**
     * @return string
     */
    public function getGameIcon()
    {
        $game = Games::findById($this->game_id);
        return $game->getIcon();
    }

    /**
     * @return string
     */
    public function getPlayerId()
    {
        return $this->player_id;
    }

    /**
     * @return bool
     */
    public function getIsVisible()
    {
        return $this->visible;
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
     * @return bool
     */
    public function getIsEditable()
    {
        return $this->editable;
    }
}