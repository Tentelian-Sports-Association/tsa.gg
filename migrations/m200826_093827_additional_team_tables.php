<?php

use yii\db\Migration;

/**
 * Class m200826_093827_additional_team_tables
 */
class m200826_093827_additional_team_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("ALTER TABLE `team_member` DROP PRIMARY KEY, ADD PRIMARY KEY (`team_id`, `user_id`, `role_id`) USING BTREE");

        // RL Bracket encounter table
        $this->execute("
            CREATE TABLE IF NOT EXISTS `rocketleague_player_bracket_encounter` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `tournament_id` INT NOT NULL,
              `game_round` INT UNSIGNED NOT NULL,
              `player_id` INT NOT NULL,
              `points` INT NULL,
              `goals` INT NULL,
              `assists` INT NULL,
              `saves` INT NULL,
              `shots` INT NULL,
              `balltouches` INT NULL,
              `cartouches` INT NULL,
              `demos` INT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`, `tournament_id`, `game_round`, `player_id`),
              INDEX `FK_RL_PLAYER_BRACKET_ENCOUNTER_TOURNAMENT_ID_TOURNAMENT_ID_idx` (`tournament_id` ASC),
              INDEX `FK_RL_PLAYER_BRACKET_ENCOUNTER_PLAYER_ID_USER_ID_idx` (`player_id` ASC),
              CONSTRAINT `FK_RL_PLAYER_BRACKET_ENCOUNTER_TOURNAMENT_ID_TOURNAMENT_ID`
                FOREIGN KEY (`tournament_id`)
                REFERENCES `tournament` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_RL_PLAYER_BRACKET_ENCOUNTER_PLAYER_ID_USER_ID`
                FOREIGN KEY (`player_id`)
                REFERENCES `user` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        // RL Bracket encounter table
        $this->execute("
            CREATE TABLE IF NOT EXISTS `rocketLeague_player_brackets` (
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
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC),
              INDEX `FK_ROCKETLEAGUE_PLAYER_BRACKETS_TOURNAMENT_ID_TOURNAMENT_ID_idx` (`tournament_id` ASC),
              INDEX `FK_RL_PLAYER_BRACKETS_PARTICIPANT_1_USER_ID_idx` (`participant_1` ASC),
              INDEX `FK_RL_PLAYER_BRACKETS_PARTICIPANT_2_USER_ID_idx` (`participant_2` ASC),
              INDEX `FK_RL_PLAYER_BRACKETS_WINNER_USER_ID_idx` (`winner_participant` ASC),
              INDEX `FK_RL_PLAYER_BRACKETS_WINNER_BRACKET_RL_PLAYER_BRACKETS_ID_idx` (`winner_bracket` ASC),
              INDEX `FK_RL_PLAYER_BRACKETS_LOOSER_BRACKET_RL_PLAYER_BRACKETS_ID_idx` (`looser_bracket` ASC),
              CONSTRAINT `FK_RL_PLAYER_BRACKETS_TOURNAMENT_ID_TOURNAMENT_ID`
                FOREIGN KEY (`tournament_id`)
                REFERENCES `tournament` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_RL_PLAYER_BRACKETS_PARTICIPANT_1_USER_ID`
                FOREIGN KEY (`participant_1`)
                REFERENCES `user` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_RL_PLAYER_BRACKETS_PARTICIPANT_2_USER_ID`
                FOREIGN KEY (`participant_2`)
                REFERENCES `user` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_RL_PLAYER_BRACKETS_WINNER_PARTICIPANT_USER_ID`
                FOREIGN KEY (`winner_participant`)
                REFERENCES `user` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_RL_PLAYER_BRACKETS_WINNER_BRACKET_RL_PLAYER_BRACKETS_ID`
                FOREIGN KEY (`winner_bracket`)
                REFERENCES `rocketLeague_player_brackets` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_RL_PLAYER_BRACKETS_LOOSER_BRACKET_RL_PLAYER_BRACKETS_ID`
                FOREIGN KEY (`looser_bracket`)
                REFERENCES `rocketLeague_player_brackets` (`id`)
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
        // Bracket set Table
        $this->dropTable('rocketLeague_player_brackets');

        // RL Bracket encounter table
        $this->dropTable('rocketleague_player_bracket_encounter');
    }
}