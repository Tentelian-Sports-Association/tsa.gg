<?php

use yii\db\Migration;

/**
 * Class m200915_082533_rules_i18n
 */
class m200915_082533_rules_i18n extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Rules Paragraph
        $this->execute("
            CREATE TABLE IF NOT EXISTS `rules_paragraph_i18n` (
              `id` INT NOT NULL,
              `language_id` INT NOT NULL,
              `name` VARCHAR(255) NOT NULL,
              `description` TEXT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`, `language_id`),
              INDEX `FK_RULES_PARAGRAPH_LANGUAGE_ID_LANGUAGE_ID_idx` (`language_id` ASC),
              CONSTRAINT `FK_RULES_PARAGRAPH_I18N_ID`
                FOREIGN KEY (`id`)
                REFERENCES `rules_paragraph` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_RULES_PARAGRAPH_LANGUAGE_ID_LANGUAGE_ID`
                FOREIGN KEY (`language_id`)
                REFERENCES `language` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        // Rules Sub Paragraph
        $this->execute("
            CREATE TABLE IF NOT EXISTS `rules_sub_paragraph_i18n` (
              `id` INT NOT NULL,
              `language_id` INT NOT NULL,
              `name` VARCHAR(255) NOT NULL,
              `description` TEXT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`, `language_id`),
              INDEX `FK_RULES_SUB_PARAGRAPH_LANGUAGE_ID_LANGUAGE_ID_idx` (`language_id` ASC),
              CONSTRAINT `FK_RULES_SUB_PARAGRAPH_ID_RULES_SUB_PARAGRAPH_ID`
                FOREIGN KEY (`id`)
                REFERENCES `rules_sub_paragraph` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_RULES_SUB_PARAGRAPH_LANGUAGE_ID_LANGUAGE_ID`
                FOREIGN KEY (`language_id`)
                REFERENCES `language` (`id`)
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
        // RL Team Bracket
        $this->dropTable('rocketLeague_team_brackets');

        // RL Team Bracket
        $this->dropTable('rules_paragraph_i18n');
    }
}