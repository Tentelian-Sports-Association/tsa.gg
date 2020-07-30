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

        // News Categorie
        $this->execute("
            CREATE TABLE IF NOT EXISTS `news_categorie` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `name` VARCHAR(255) NOT NULL,
              `description` VARCHAR(255) NOT NULL,
              `img` VARCHAR(45) NOT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC),
              UNIQUE INDEX `name_UNIQUE` (`name` ASC))
            ENGINE = InnoDB"
        );

        // News Sub Categorie
        $this->execute("
            CREATE TABLE IF NOT EXISTS `news_sub_categorie` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `categorie_id` INT NOT NULL,
              `name` VARCHAR(255) NOT NULL,
              `description` VARCHAR(255) NOT NULL,
              `img` VARCHAR(45) NOT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC),
              UNIQUE INDEX `name_UNIQUE` (`name` ASC),
              INDEX `FK_CATEGORIE_ID_CATEGORIE_ID_idx` (`categorie_id` ASC),
              CONSTRAINT `FK_CATEGORIE_ID_CATEGORIE_ID`
                FOREIGN KEY (`categorie_id`)
                REFERENCES `news_categorie` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        // News
        $this->execute("
            CREATE TABLE IF NOT EXISTS `news` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `categorie_id` INT NOT NULL,
              `sub_categorie_id` INT NOT NULL,
              `author_id` INT NOT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`, `categorie_id`, `sub_categorie_id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC),
              INDEX `FK_CATEGORIE_ID_CATEGORIE_ID_idx` (`categorie_id` ASC),
              INDEX `FK_AUTHOR_ID_USER_ID_idx` (`author_id` ASC),
              INDEX `FK_NEWS_SUB_CATEGORIE_ID_SUB_CATEGORIE_ID_idx` (`sub_categorie_id` ASC),
              CONSTRAINT `FK_NEWS_CATEGORIE_ID_CATEGORIE_ID`
                FOREIGN KEY (`categorie_id`)
                REFERENCES `news_categorie` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_NEWS_SUB_CATEGORIE_ID_SUB_CATEGORIE_ID`
                FOREIGN KEY (`sub_categorie_id`)
                REFERENCES `news_sub_categorie` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_NEWS_AUTHOR_ID_USER_ID`
                FOREIGN KEY (`author_id`)
                REFERENCES `user` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        // News Details
        $this->execute("
            CREATE TABLE IF NOT EXISTS `news_details` (
              `news_id` INT NOT NULL,
              `header` VARCHAR(255) NOT NULL,
              `short_body` VARCHAR(255) NOT NULL,
              `long_body` TEXT NOT NULL,
              `img` VARCHAR(45) NOT NULL,
              `twitter_post_id` TEXT NULL,
              `youtube_video_id` TEXT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`news_id`),
              UNIQUE INDEX `news_id_UNIQUE` (`news_id` ASC),
              CONSTRAINT `FK_NEWS_ID_NEWS_ID`
                FOREIGN KEY (`news_id`)
                REFERENCES `news` (`id`)
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
        // News Details
        $this->dropTable('news_details');

        // News
        $this->dropTable('news');

        // News Sub Categorie
        $this->dropTable('news_sub_categorie');

        // News Categorie
        $this->dropTable('news_categorie');

        // event_i18n
        $this->dropTable('event_i18n');

        // event
        $this->dropTable('event');
    }
}