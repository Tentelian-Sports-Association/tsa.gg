<?php

use yii\db\Migration;

/**
 * Class m200521_190007_user
 */
class m200521_190007_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // User
        $this->execute("
            CREATE TABLE IF NOT EXISTS `user` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `username` VARCHAR(255) NOT NULL,
              `password` VARCHAR(255) NOT NULL,
              `email` VARCHAR(255) NOT NULL,
              `birthday` DATETIME NOT NULL,
              `gender_id` INT NOT NULL,
              `language_id` INT NOT NULL,
              `nationality_id` INT NOT NULL,
              `access_token` VARCHAR(255) NULL,
              `auth_key` VARCHAR(255) NULL,
              `is_password_change_required` TINYINT(1) NULL,
              `dt_created` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC),
              UNIQUE INDEX `username_UNIQUE` (`username` ASC),
              INDEX `FK_USER_GENDER_ID_GENDER_ID_idx` (`gender_id` ASC),
              INDEX `FK_USER_LANGUAGE_ID_LANGUAGE_ID_idx` (`language_id` ASC),
              INDEX `FK_USER_NATIONALITY_ID_NATIONALITY_ID_idx` (`nationality_id` ASC),
              CONSTRAINT `FK_USER_GENDER_ID_GENDER_ID`
                FOREIGN KEY (`gender_id`)
                REFERENCES `gender` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_USER_LANGUAGE_ID_LANGUAGE_ID`
                FOREIGN KEY (`language_id`)
                REFERENCES `language` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_USER_NATIONALITY_ID_NATIONALITY_ID`
                FOREIGN KEY (`nationality_id`)
                REFERENCES `nationality` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

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

        // Base Game Roket League standart english
        $this->insert('games',  [
            'name' => 'Rocket League',
            'description' => 'Rocket League powerd by Psyonix, Game of the Millenium',
            'twitter_developer_tag' => '@PsyonixStudios, @EpicGames',
            'twitter_game_tag' => '@RocketLeague, @RLEsports ',
            'twitter_channel' => '#RocketLeague',
            'verification_phrase' => '/.*#[0-9]{4}$/',
            'icon' => 'rocketLeague'
        ]);

        // Base Game DR!FT standart english
        $this->insert('games',  [
            'name' => 'DR!FT',
            'description' => 'Drive your Car with your Mobile Phone',
            'twitter_developer_tag' => '',
            'twitter_game_tag' => '',
            'twitter_channel' => '#driftgaming',
            'verification_phrase' => '//',
            'icon' => 'drift'
        ]);

        // Base Game Clash Royale standart english
        $this->insert('games',  [
            'name' => 'Clash Royale',
            'description' => 'Clash Royale, the Handy Game for eSport enthusiast',
            'twitter_developer_tag' => '',
            'twitter_game_tag' => '',
            'twitter_channel' => '#ClashRoyale',
            'verification_phrase' => '//',
            'icon' => 'clash_royale'
        ]);

        // Base Game Farming Simulator standart english
        $this->insert('games',  [
            'name' => 'Farming Simulator',
            'description' => 'Team up with your Friends and Farm as is the last day',
            'twitter_developer_tag' => '',
            'twitter_game_tag' => '',
            'twitter_channel' => '#farmingSimulator',
            'verification_phrase' => '//',
            'icon' => 'farm_sim'
        ]);

        // Base Game SSBU standart english
        $this->insert('games',  [
            'name' => 'Super Smash Bros. Ultimate',
            'description' => 'SSBU for Live',
            'twitter_developer_tag' => '',
            'twitter_game_tag' => '',
            'twitter_channel' => '#fssbu',
            'verification_phrase' => '//',
            'icon' => 'ssbu'
        ]);

        // Base Platform Steam standart english
        $this->insert('game_platforms',  [
            'name' => 'Steam',
            'description' => 'Steam Client for nerdic pc player',
            'twitter_developer_tag' => '@steam_games',
            'twitter_channel' => '#steam',
            'icon' => 'steam'
        ]);

        // Base Platform Nintendo Switch english
        $this->insert('game_platforms',  [
            'name' => 'Nintendo Switch',
            'description' => 'Switch Handheld console for freaks',
            'twitter_developer_tag' => '@NintendoSwitch, @Nintendo',
            'twitter_channel' => '#nintendo, #NintendoSwitch',
            'icon' => 'switch'
        ]);

        // Base Platform Epic Games english
        $this->insert('game_platforms',  [
            'name' => 'Epic Games',
            'description' => 'Epic for the win',
            'twitter_developer_tag' => '',
            'twitter_channel' => '',
            'icon' => 'epic'
        ]);

        // Base Platform Mobile Androide english
        $this->insert('game_platforms',  [
            'name' => 'Mobile Androide',
            'description' => 'Android is noice',
            'twitter_developer_tag' => '',
            'twitter_channel' => '',
            'icon' => 'mobile_androide'
        ]);

        // Base Platform Mobile Apple english
        $this->insert('game_platforms',  [
            'name' => 'Mobile Apple',
            'description' => 'Appl is joah',
            'twitter_developer_tag' => '',
            'twitter_channel' => '',
            'icon' => 'mobile_apple'
        ]);

        // Base Platform Play Station 4 english
        $this->insert('game_platforms',  [
            'name' => 'Play Station 4',
            'description' => 'Play with the Station',
            'twitter_developer_tag' => '',
            'twitter_channel' => '',
            'icon' => 'ps_4'
        ]);

        // Base Platform Microsoft X-Box One english
        $this->insert('game_platforms',  [
            'name' => 'XBox One',
            'description' => 'MiCroSoft',
            'twitter_developer_tag' => '',
            'twitter_channel' => '',
            'icon' => 'xbox_one'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {   
        // User Games
        $this->dropTable('user_games');

        // User Game Platforms
        $this->dropTable('game_platforms');

        // Games
        $this->dropTable('games');

        // User Socials
        $this->dropTable('user_socials');

        // User Details
        $this->dropTable('user_details');

        // User
        $this->dropTable('user');
    }
}