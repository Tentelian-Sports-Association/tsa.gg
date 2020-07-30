<?php

use yii\db\Migration;

/**
 * Class m200727_131348_teams_and_tournament_modes
 */
class m200727_131348_teams_and_tournament_modes extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Team Role
        $this->execute("
            CREATE TABLE IF NOT EXISTS `team_role` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `name` VARCHAR(45) NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC))
            ENGINE = InnoDB"
        );

        // Tournament Mode
        $this->execute("
            CREATE TABLE IF NOT EXISTS `tournament_mode` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `game_id` INT NOT NULL,
              `name` VARCHAR(255) NOT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC),
              INDEX `FK_TOURNAMENT_MODE_GAME_ID_GAME_ID_idx` (`game_id` ASC),
              CONSTRAINT `FK_TOURNAMENT_MODE_GAME_ID_GAME_ID`
                FOREIGN KEY (`game_id`)
                REFERENCES `games` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        // Team
        $this->execute("
            CREATE TABLE IF NOT EXISTS `team` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `organisation_id` INT NOT NULL,
              `game_id` INT NOT NULL,
              `language_id` INT NOT NULL,
              `nationality_id` INT NOT NULL,
              `mode_id` INT NOT NULL,
              `name` VARCHAR(255) NOT NULL,
              `shortCode` VARCHAR(45) NOT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`, `organisation_id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC),
              INDEX `FK_TEAM_ORGANISATION_IS_ORGANISATION_ID_idx` (`organisation_id` ASC),
              INDEX `FK_TEAM_GAME_ID_GAME_ID_idx` (`game_id` ASC),
              INDEX `FK_TEAM_LANGUAGE_ID_LANGUAGE_ID_idx` (`language_id` ASC),
              INDEX `FK_TEAM_NATIONALITY_ID_NATIONALITY_ID_idx` (`nationality_id` ASC),
              INDEX `FK_TEAM_MODE_ID_TOURNAMENT_MODE_ID_idx` (`mode_id` ASC),
              CONSTRAINT `FK_TEAM_ORGANISATION_IS_ORGANISATION_ID`
                FOREIGN KEY (`organisation_id`)
                REFERENCES `organisation` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_TEAM_GAME_ID_GAME_ID`
                FOREIGN KEY (`game_id`)
                REFERENCES `games` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_TEAM_LANGUAGE_ID_LANGUAGE_ID`
                FOREIGN KEY (`language_id`)
                REFERENCES `language` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_TEAM_NATIONALITY_ID_NATIONALITY_ID`
                FOREIGN KEY (`nationality_id`)
                REFERENCES `nationality` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_TEAM_MODE_ID_TOURNAMENT_MODE_ID`
                FOREIGN KEY (`mode_id`)
                REFERENCES `tournament_mode` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        // Team Member
        $this->execute("
            CREATE TABLE IF NOT EXISTS `team_member` (
              `team_id` INT NOT NULL,
              `user_id` INT NOT NULL,
              `role_id` INT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`team_id`, `user_id`),
              INDEX `FK_TEAM_MEMBER_USER_ID_USER_ID_idx` (`user_id` ASC),
              INDEX `FK_TEAM_MEMBER_ROLE_ID_TEAM_ROLES_ID_idx` (`role_id` ASC),
              CONSTRAINT `FK_TEAM_MEMBER_TEAM_ID_TEAM_ID`
                FOREIGN KEY (`team_id`)
                REFERENCES `team` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_TEAM_MEMBER_USER_ID_USER_ID`
                FOREIGN KEY (`user_id`)
                REFERENCES `user` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_TEAM_MEMBER_ROLE_ID_TEAM_ROLES_ID`
                FOREIGN KEY (`role_id`)
                REFERENCES `team_role` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // Team Member
        $this->dropTable('team_member');

        // Team
        $this->dropTable('team');

        // Tournament Mode
        $this->dropTable('tournament_mode');

        // Team Role
        $this->dropTable('team_role');
    }
}