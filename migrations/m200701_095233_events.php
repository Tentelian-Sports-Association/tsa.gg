<?php

use yii\db\Migration;

/**
 * Class m200701_095233_events
 */
class m200701_095233_events extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Event
        $this->execute("
            CREATE TABLE IF NOT EXISTS `event` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `name` VARCHAR(255) NOT NULL,
              `description` TEXT NOT NULL,
              `shortDescription` VARCHAR(255) NOT NULL,
              `startingDate` DATETIME NOT NULL,
              `endDate` DATETIME NOT NULL,
              `img` VARCHAR(45) NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC))
            ENGINE = InnoDB"
        );

        // Event i18n
        $this->execute("
            CREATE TABLE IF NOT EXISTS `event_i18n` (
                `event_id` INT NOT NULL,
                `language_id` INT NOT NULL,
                `name` VARCHAR(255) NOT NULL,
                `description` TEXT NOT NULL,
                `shortDescription` VARCHAR(255) NOT NULL,
                `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
                PRIMARY KEY (`event_id`, `language_id`),
                INDEX `FK_EVENT_I18N_LANGUAGE_ID_LANGUAGE_ID_idx` (`language_id` ASC),
                CONSTRAINT `FK_EVENT_I18N_EVENT_ID_EVENT_ID`
                FOREIGN KEY (`event_id`)
                REFERENCES `event` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
                CONSTRAINT `FK_EVENT_I18N_LANGUAGE_ID_LANGUAGE_ID`
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
        // event_i18n
        $this->dropTable('event_i18n');

        // event
        $this->dropTable('event');
    }
}