<?php

use yii\db\Migration;

/**
 * Class m200929_120110_encounter_player_current_deck
 */
class m200929_120110_encounter_player_current_deck extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // CR Player bracket current Deck
        $this->execute("
            CREATE TABLE IF NOT EXISTS `clashRoyale_player_current_encounter_deck` (
              `player_id` INT NOT NULL,
              `tournament_id` INT NOT NULL,
              `encounter_id` INT NOT NULL,
              `encounter_round` INT UNSIGNED NOT NULL,
              `card_1_id` INT NOT NULL,
              `card_2_id` INT NOT NULL,
              `card_3_id` INT NOT NULL,
              `card_4_id` INT NOT NULL,
              `card_5_id` INT NOT NULL,
              `card_6_id` INT NOT NULL,
              `card_7_id` INT NOT NULL,
              `card_8_id` INT NOT NULL,
              `battle_time` VARCHAR(255) NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`player_id`, `tournament_id`, `encounter_id`, `encounter_round`),
              INDEX `FK_PLAYER_CED_TOURNAMENT_ID_TOURNAMENT_ID_idx` (`tournament_id` ASC),
              INDEX `FK_PLAYER_CED_ENC_ID_CR_PLAYER_BRACKET_ENC_ID_idx` (`encounter_id` ASC),
              CONSTRAINT `FK_PLAYER_CED_PLAYER_ID_USER_ID`
                FOREIGN KEY (`player_id`)
                REFERENCES `user` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_PLAYER_CED_TOURNAMENT_ID_TOURNAMENT_ID`
                FOREIGN KEY (`tournament_id`)
                REFERENCES `tournament` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_PLAYER_CED_ENC_ID_CR_PLAYER_BRACKET_ENC_ID`
                FOREIGN KEY (`encounter_id`)
                REFERENCES `clashRoyale_player_bracket_encounter` (`id`)
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
        // CR Player Brackets Encounter
        $this->dropTable('clashRoyale_player_current_encounter_deck');
    }
}