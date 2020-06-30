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
 * @property string $game_platform_id
 * @property string $game_id
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
    public function getGamePlatformWebp()
    {
        $platform = GamePlatforms::findByID($this->game_platform_id);
        return $platform->getWebpImage();
    }

    /**
     * @return string image
     */
    public function getGamePlatformPng()
    {
        $platform = GamePlatforms::findByID($this->game_platform_id);
        return $platform->getPNGImage();
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
    public function getGameWebp()
    {
        $game = Games::findById($this->game_id);
        return $game->getWebpImage();
    }

    /**
     * @return string
     */
    public function getGamePng()
    {
        $game = Games::findById($this->game_id);
        return $game->getPNGImage();
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