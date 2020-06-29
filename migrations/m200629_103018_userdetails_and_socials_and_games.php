<?php

use yii\db\Migration;

/**
 * Class m200629_103018_userdetails_and_socials_and_games
 */
class m200629_103018_userdetails_and_socials_and_games extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // User Details
        $this->execute("
           CREATE TABLE IF NOT EXISTS `user_details` (
              `user_id` INT NOT NULL,
              `pre_name` VARCHAR(255) NULL,
              `last_name` VARCHAR(255) NULL,
              `zip_code` VARCHAR(255) NULL,
              `city` VARCHAR(255) NULL,
              `street` VARCHAR(255) NULL,
              `phone` VARCHAR(255) NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              `editable` TINYINT NULL DEFAULT 0,
              PRIMARY KEY (`user_id`),
              UNIQUE INDEX `user_id_UNIQUE` (`user_id` ASC),
              CONSTRAINT `FK_USER_DETAILS_USER_ID_USER_ID`
                FOREIGN KEY (`user_id`)
                REFERENCES `user` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        // User Socials
        $this->execute("
            CREATE TABLE IF NOT EXISTS `user_socials` (
              `user_id` INT NOT NULL,
              `twitter_name` VARCHAR(255) NULL,
              `twitter_channel` TEXT NULL,
              `discord_name` VARCHAR(255) NULL,
              `discord_server` VARCHAR(255) NULL,
              `teamspeak_server` VARCHAR(255) NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              `editable` TINYINT NULL DEFAULT 0,
              PRIMARY KEY (`user_id`),
              UNIQUE INDEX `user_id_UNIQUE` (`user_id` ASC),
              CONSTRAINT `FK_USER_SOCIALS_USER_ID_USER_ID`
                FOREIGN KEY (`user_id`)
                REFERENCES `user` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        // Games
        $this->execute("
            CREATE TABLE IF NOT EXISTS `games` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `name` VARCHAR(255) NOT NULL,
              `description` TEXT NOT NULL,
              `twitter_developer_tag` VARCHAR(255) NULL,
              `twitter_game_tag` VARCHAR(255) NULL,
              `twitter_channel` VARCHAR(255) NULL,
              `img_webp` MEDIUMBLOB NULL,
              `img_png` MEDIUMBLOB NULL,
              `verification_phrase` VARCHAR(255) NOT NULL,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC))
            ENGINE = InnoDB"
        );

        // game_platforms
        $this->execute("
            CREATE TABLE IF NOT EXISTS `game_platforms` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `platform` VARCHAR(255) NOT NULL,
              `description` TEXT NOT NULL,
              `twitter_developer_tag` VARCHAR(255) NULL,
              `twitter_channel` VARCHAR(255) NULL,
              `img_webp` MEDIUMBLOB NULL,
              `img_png` MEDIUMBLOB NULL,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC))
            ENGINE = InnoDB"
        );

        // User Games
        $this->execute("
            CREATE TABLE IF NOT EXISTS `user_games` (
              `user_id` INT NOT NULL,
              `game_platform_id` INT NOT NULL,
              `game_id` INT NOT NULL,
              `player_id` VARCHAR(255) NOT NULL,
              `visible` TINYINT NULL DEFAULT 1,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              `editable` TINYINT NOT NULL DEFAULT 0,
              INDEX `FK_USER_GAMES_USER_ID_USER_ID_idx` (`user_id` ASC),
              INDEX `FK_USER_GAMES_GAME_PLATFORM_ID_GAME_PLATFORM_ID_idx` (`game_platform_id` ASC),
              INDEX `FK_USER_GAMES_GAME_ID_GAMES_ID_idx` (`game_id` ASC),
              PRIMARY KEY (`user_id`, `game_platform_id`, `game_id`),
              CONSTRAINT `FK_USER_GAMES_USER_ID_USER_ID`
                FOREIGN KEY (`user_id`)
                REFERENCES `user` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_USER_GAMES_GAME_PLATFORM_ID_GAMES_PLATFORM_ID`
                FOREIGN KEY (`game_platform_id`)
                REFERENCES `game_platforms` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_USER_GAMES_GAME_ID_GAMES_ID`
                FOREIGN KEY (`game_id`)
                REFERENCES `games` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        // Base Game standart english
        $this->insert('games',  [
            'name' => 'Rocket League',
            'description' => 'Rocket League powerd by Psyonix, Game of the Millenium',
            'twitter_developer_tag' => '@PsyonixStudios, @EpicGames',
            'twitter_game_tag' => '@RocketLeague, @RLEsports ',
            'twitter_channel' => '#RocketLeague, ',
            'verification_phrase' => '/.*#[0-9]{4}$/'
        ]);

        // Base Game standart english
        $this->insert('games',  [
            'name' => 'Fortnite',
            'description' => 'Fortnite powerd by Epic Games, Game of the Millenium',
            'twitter_developer_tag' => '@EpicGames',
            'twitter_game_tag' => '@FortniteGame',
            'twitter_channel' => '#Fortnite, ',
            'verification_phrase' => '//'
        ]);

        // Base Platform english
        $this->insert('game_platforms',  [
            'platform' => 'Steam',
            'description' => 'Steam Client for nerdic pc player',
            'twitter_developer_tag' => '@steam_games',
            'twitter_channel' => '#steam, '
        ]);

        // Base Platform english
        $this->insert('game_platforms',  [
            'platform' => 'Nintendo Switch',
            'description' => 'Switch Handheld console for freaks',
            'twitter_developer_tag' => '@NintendoSwitch, @Nintendo',
            'twitter_channel' => '#nintendo, #NintendoSwitch'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // User Socials
        $this->dropTable('user_socials');

        // User Details
        $this->dropTable('user_details');

        // User Games
        $this->dropTable('user_games');

        // User Game Platforms
        $this->dropTable('game_platforms');

        // Games
        $this->dropTable('games');
    }
}