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
                `dt_created` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
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
              `dt_created` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
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
              `description` VARCHAR(255) NOT NULL,
              `twitter_developer_tag` VARCHAR(255) NULL,
              `twitter_game_tag` VARCHAR(255) NULL,
              `twitter_channel` VARCHAR(255) NULL,
              `icon` VARCHAR(45) NOT NULL,
              `verification_phrase` VARCHAR(45) NOT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NOT NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC),
              UNIQUE INDEX `name_UNIQUE` (`name` ASC))
            ENGINE = InnoDB"
        );

        // game_platforms
        $this->execute("
            CREATE TABLE IF NOT EXISTS `game_platforms` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `name` VARCHAR(255) NOT NULL,
              `description` VARCHAR(255) NOT NULL,
              `twitter_developer_tag` VARCHAR(255) NULL,
              `twitter_channel` VARCHAR(255) NULL,
              `icon` VARCHAR(45) NULL,
              `game_platformscol` VARCHAR(45) NOT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NOT NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC),
              UNIQUE INDEX `platform_UNIQUE` (`name` ASC))
            ENGINE = InnoDB"
        );

        // User Games
        $this->execute("
            CREATE TABLE IF NOT EXISTS `user_games` (
              `user_id` INT NOT NULL,
              `game_platform_id` INT NOT NULL,
              `game_id` INT NOT NULL,
              `player_id` VARCHAR(255) NOT NULL,
              `visible` TINYINT NULL,
              `dt_created` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              `editable` TINYINT NULL DEFAULT 0,
              UNIQUE INDEX `user_id_UNIQUE` (`user_id` ASC),
              PRIMARY KEY (`user_id`),
              INDEX `FK_USER_GAMES_GAME_PLATFORM_ID_GAME_PLATFORM_ID_id_idx` (`game_platform_id` ASC),
              INDEX `FK_USER_GAMES_GAME_ID_GAMES_ID_id_idx` (`game_id` ASC),
              CONSTRAINT `FK_USER_GAMES_USER_ID_USER_ID_id`
                FOREIGN KEY (`user_id`)
                REFERENCES `user` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_USER_GAMES_GAME_PLATFORM_ID_GAME_PLATFORM_ID_id`
                FOREIGN KEY (`game_platform_id`)
                REFERENCES `game_platforms` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_USER_GAMES_GAME_ID_GAMES_ID_id`
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
            'verification_phrase' => '/.*#[0-9]{4}$/',
            'icon' => 'rocketLeague'
        ]);

        // Base Game standart english
        $this->insert('games',  [
            'name' => 'Fortnite',
            'description' => 'Fortnite powerd by Epic Games, Game of the Millenium',
            'twitter_developer_tag' => '@EpicGames',
            'twitter_game_tag' => '@FortniteGame',
            'twitter_channel' => '#Fortnite, ',
            'verification_phrase' => '//',
            'icon' => 'fortnite'
        ]);

        // Base Platform english
        $this->insert('game_platforms',  [
            'name' => 'Steam',
            'description' => 'Steam Client for nerdic pc player',
            'twitter_developer_tag' => '@steam_games',
            'twitter_channel' => '#steam',
            'icon' => 'steam'
        ]);

        // Base Platform english
        $this->insert('game_platforms',  [
            'name' => 'Nintendo Switch',
            'description' => 'Switch Handheld console for freaks',
            'twitter_developer_tag' => '@NintendoSwitch, @Nintendo',
            'twitter_channel' => '#nintendo, #NintendoSwitch',
            'icon' => 'switch'
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