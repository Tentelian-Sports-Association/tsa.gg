<?php

use yii\db\Migration;

/**
 * Class m200922_102823_clash_royale_integration
 */
class m200922_102823_clash_royale_integration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // CR Cards Database
        $this->execute("
            CREATE TABLE IF NOT EXISTS `clashRoyale_card_database` (
              `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
              `card_id` INT UNSIGNED NOT NULL,
              `name` VARCHAR(255) NOT NULL,
              `max_level` INT NOT NULL,
              `icon` VARCHAR(255) NOT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`))
            ENGINE = InnoDB"
        );

        // CR Player Brackets
        $this->execute("
            CREATE TABLE IF NOT EXISTS `clashRoyale_player_brackets` (
              `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
              `tournament_id` INT NOT NULL,
              `encounter_id` INT NULL,
              `round` INT NOT NULL,
              `best_of` INT NOT NULL,
              `is_winner` TINYINT NULL DEFAULT 0,
              `participant_1` INT NULL,
              `participant_2` INT NULL,
              `winner_bracket` BIGINT UNSIGNED NULL,
              `looser_bracket` BIGINT UNSIGNED NULL,
              `winner_participant` INT NULL,
              `finished` TINYINT NOT NULL DEFAULT 0,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC),
              INDEX `FK_CR_PLAYER_BRACKETS_TOURNAMENT_ID_TOURNAMENT_ID_idx` (`tournament_id` ASC),
              INDEX `FK_CR_PLAYER_BRACKETS_PARTICIPANT_1_USER_ID_idx` (`participant_1` ASC),
              INDEX `FK_CR_PLAYER_BRACKETS_PARTICIPANT_2_USER_ID_idx` (`participant_2` ASC),
              INDEX `FK_CR_PLAYER_BRACKETS_WINNER_PARTICIPANT_USER_ID_idx` (`winner_participant` ASC),
              INDEX `FK_CR_PLAYER_BRACKETS_WINNER_BRACKET_CR_PLAYER_BRACKETS_ID_idx` (`winner_bracket` ASC),
              INDEX `FK_CR_PLAYER_BRACKETS_LOOSER_BRACKET_CR_PLAYER_BRACKETS_ID_idx` (`looser_bracket` ASC),
              CONSTRAINT `FK_CR_PLAYER_BRACKETS_TOURNAMENT_ID_TOURNAMENT_ID`
                FOREIGN KEY (`tournament_id`)
                REFERENCES `tournament` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_CR_PLAYER_BRACKETS_PARTICIPANT_1_USER_ID`
                FOREIGN KEY (`participant_1`)
                REFERENCES `user` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_CR_PLAYER_BRACKETS_PARTICIPANT_2_USER_ID`
                FOREIGN KEY (`participant_2`)
                REFERENCES `user` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_CR_PLAYER_BRACKETS_WINNER_PARTICIPANT_USER_ID`
                FOREIGN KEY (`winner_participant`)
                REFERENCES `user` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_CR_PLAYER_BRACKETS_WINNER_BRACKET_CR_PLAYER_BRACKETS_ID`
                FOREIGN KEY (`winner_bracket`)
                REFERENCES `clashRoyale_player_brackets` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_CR_PLAYER_BRACKETS_LOOSER_BRACKET_CR_PLAYER_BRACKETS_ID`
                FOREIGN KEY (`looser_bracket`)
                REFERENCES `clashRoyale_player_brackets` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        // CR Player Brackets Encounter
        $this->execute("
            CREATE TABLE IF NOT EXISTS `clashRoyale_player_bracket_encounter` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `tournament_id` INT NOT NULL,
              `game_round` INT UNSIGNED NOT NULL,
              `player_id` INT NOT NULL,
              `battle_time` VARCHAR(255) NULL,
              `crowns` INT NULL,
              `king_tower_hit_points` INT NULL,
              `princess_tower_1_hitpoints` INT NULL,
              `princess_tower_2_hitpoints` INT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`, `tournament_id`, `game_round`, `player_id`),
              INDEX `FK_CR_PLAYER_BRACKET_ENCOUNTER_TOURNAMENT_ID_TOURNAMENT_ID_idx` (`tournament_id` ASC),
              INDEX `FK_CR_PLAYER_BRACKET_ENCOUNTER_PLAYER_ID_USER_ID_idx` (`player_id` ASC),
              CONSTRAINT `FK_CR_PLAYER_BRACKET_ENCOUNTER_TOURNAMENT_ID_TOURNAMENT_ID`
                FOREIGN KEY (`tournament_id`)
                REFERENCES `tournament` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_CR_PLAYER_BRACKET_ENCOUNTER_PLAYER_ID_USER_ID`
                FOREIGN KEY (`player_id`)
                REFERENCES `user` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        // add finished to rocket league Player Brackets
        $this->addColumn(
            'rocketLeague_player_brackets',
            'finished',
            $this->boolean()->notNull()->defaultValue(false)->after('winner_participant')
      	);

        // add finished to rocket league Team Brackets
        $this->addColumn(
            'rocketLeague_team_brackets',
            'finished',
            $this->boolean()->notNull()->defaultValue(false)->after('winner_participant')
      	);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // CR Player Brackets Encounter
        $this->dropTable('clashRoyale_player_brackets');
        
        // CR Player Brackets
        $this->dropTable('clashRoyale_player_brackets');

        // CR Cards Database
        $this->dropTable('clashRoyale_card_database');
    }
}