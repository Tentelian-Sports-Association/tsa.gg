<?php

use yii\db\Migration;

/**
 * Class m200825_085023_additional_tables_for_tournaments
 */
class m200825_085023_additional_tables_for_tournaments extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // add read rules Player
        $this->addColumn(
            'tournament_player_participating',
            'readRules',
            $this->boolean()->notNull()->defaultValue(false)->after('checked_in')
      	);

        // add read rules Team
        $this->addColumn(
            'tournament_team_participating',
            'readRules',
            $this->boolean()->notNull()->defaultValue(false)->after('checked_in')
      	);

        // Rules Paragraph
        $this->execute("
            CREATE TABLE IF NOT EXISTS `rules_paragraph` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `rules_id` INT NOT NULL,
              `rules_paragraph_id` INT NOT NULL,
              `name` VARCHAR(255) NOT NULL,
              `description` TEXT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`, `rules_id`, `rules_paragraph_id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC),
              CONSTRAINT `FK_RULES_PARAGRAPH_RULES_ID`
                FOREIGN KEY (`rules_id`)
                REFERENCES `rules` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        // Rules Sub Paragraph
        $this->execute("
            CREATE TABLE IF NOT EXISTS `rules_sub_paragraph` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `paragraph_id` INT NOT NULL,
              `sub_paragraph_id` INT NOT NULL,
              `name` VARCHAR(255) NOT NULL,
              `description` TEXT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`, `paragraph_id`, `sub_paragraph_id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC),
              CONSTRAINT `FK_RULES_SUB_PARAGRAPH_PARAGRAPH_ID_RULES_PARAGRAPH_ID`
                FOREIGN KEY (`paragraph_id`)
                REFERENCES `rules_paragraph` (`id`)
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
        $this->dropTable('rules_sub_paragraph');

        // Bracket set Table
        $this->dropTable('rules_paragraph');

        // delete read rules Team
        $this->dropColumn(
            'tournament_team_participating',
            'readRules'
      	);

        // delete read rules Player
        $this->dropColumn(
            'tournament_player_participating',
            'readRules'
      	);
    }
}