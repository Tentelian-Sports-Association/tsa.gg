<?php

use yii\db\Migration;

/**
 * Class m200808_122525_base_tournament_and_rules
 */
class m200808_122525_base_tournament_and_rules extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Rules
        $this->execute("
            CREATE TABLE IF NOT EXISTS `rules` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `game_id` INT NOT NULL,
              `name` VARCHAR(255) NOT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC),
              INDEX `FK_RULES_GAME_ID_GAMES_ID_idx` (`game_id` ASC),
              CONSTRAINT `FK_RULES_GAME_ID_GAMES_ID`
                FOREIGN KEY (`game_id`)
                REFERENCES `games` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        // Tournaments
        $this->execute("
            CREATE TABLE IF NOT EXISTS `tournament` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `name` VARCHAR(255) NOT NULL,
              `game_id` INT NOT NULL,
              `mode_id` INT NOT NULL,
              `rules_id` INT NOT NULL,
              `dt_register_begin` DATETIME NOT NULL,
              `dt_register_end` DATETIME NOT NULL,
              `dt_checkin_begin` DATETIME NOT NULL,
              `dt_checkin_end` DATETIME NOT NULL,
              `dt_starting_time` DATETIME NOT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              `finished` TINYINT NOT NULL DEFAULT 0,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC),
              INDEX `FK_TOURNAMENT_RULES_ID_RULES_ID_idx` (`rules_id` ASC),
              INDEX `FK_TOURNAMENT_GAME_ID_GAME_ID_idx` (`game_id` ASC),
              INDEX `FK_TOURNAMENT_MODE_ID_TOURNAMENT_MODE_ID_idx` (`mode_id` ASC),
              CONSTRAINT `FK_TOURNAMENT_RULES_ID_RULES_ID`
                FOREIGN KEY (`rules_id`)
                REFERENCES `rules` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_TOURNAMENT_GAME_ID_GAME_ID`
                FOREIGN KEY (`game_id`)
                REFERENCES `games` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_TOURNAMENT_MODE_ID_TOURNAMENT_MODE_ID`
                FOREIGN KEY (`mode_id`)
                REFERENCES `tournament_mode` (`id`)
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
        // Organisation application
        $this->dropTable('tournament');

        // Organisation application
        $this->dropTable('rules');
    }
}