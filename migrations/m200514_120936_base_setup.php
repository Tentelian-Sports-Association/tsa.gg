<?php

use yii\db\Migration;

/**
 * Class m200514_120936_base_setup
 */
class m200514_120936_base_setup extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Language
        $this->execute("
            CREATE TABLE IF NOT EXISTS `language` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `name` VARCHAR(255) NOT NULL,
              `locale` VARCHAR(255) NOT NULL,
              `icon_locale` VARCHAR(45) NOT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC),
              UNIQUE INDEX `name_UNIQUE` (`name` ASC),
              UNIQUE INDEX `locale_UNIQUE` (`locale` ASC))
            ENGINE = InnoDB"
        );

        $this->insertStandardLanguage();

        // Language i18n
        $this->execute("
            CREATE TABLE IF NOT EXISTS `language_i18n` (
              `id` INT NOT NULL,
              `language_id` INT NOT NULL,
              `name` VARCHAR(255) NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`, `language_id`),
              INDEX `FK_LANGUAGE_I18N_LANGUAGE_ID_LANGUAGE_ID_idx` (`language_id` ASC),
              CONSTRAINT `FK_LANGUAGE_I18N_ID_LANGUAGE_ID`
                FOREIGN KEY (`id`)
                REFERENCES `language` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_LANGUAGE_I18N_LANGUAGE_ID_LANGUAGE_ID`
                FOREIGN KEY (`language_id`)
                REFERENCES `language` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        $this->inserti18nLanguage();

        // Gender
        $this->execute("
            CREATE TABLE IF NOT EXISTS `gender` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `name` VARCHAR(45) NOT NULL,
              `gender_icon` VARCHAR(255) NOT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC),
              UNIQUE INDEX `name_UNIQUE` (`name` ASC))
            ENGINE = InnoDB"
        );

        $this->insertStandardGender();

        // Gender i18n
        $this->execute("
            CREATE TABLE IF NOT EXISTS `gender_i18n` (
              `gender_id` INT NOT NULL,
              `language_id` INT NOT NULL,
              `name` VARCHAR(255) NOT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`gender_id`, `language_id`),
              UNIQUE INDEX `name_UNIQUE` (`name` ASC),
              INDEX `FK_GENDER_I18N_LANGUAGE_ID_LANGUAGE_ID_idx` (`language_id` ASC),
              CONSTRAINT `FK_GENDER_I18N_GENDER_ID_GENDER_ID`
                FOREIGN KEY (`gender_id`)
                REFERENCES `gender` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_GENDER_I18N_LANGUAGE_ID_LANGUAGE_ID`
                FOREIGN KEY (`language_id`)
                REFERENCES `language` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        $this->inserti18nGender();

        // Nationality
        $this->execute("
            CREATE TABLE IF NOT EXISTS `nationality` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `name` VARCHAR(255) NOT NULL,
              `icon_locale` VARCHAR(45) NOT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC),
              UNIQUE INDEX `name_UNIQUE` (`name` ASC),
              UNIQUE INDEX `icon_locale_UNIQUE` (`icon_locale` ASC))
            ENGINE = InnoDB"
        );

        $this->insertStandardNationality();

        // Nationality i18n
        $this->execute("
            CREATE TABLE IF NOT EXISTS `nationality_i18n` (
              `nationality_id` INT NOT NULL,
              `language_id` INT NOT NULL,
              `name` VARCHAR(255) NOT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`nationality_id`, `language_id`),
              INDEX `FK_NATIONALITY_I18N_LANGUAGE_ID_LANGUAGE_ID_idx` (`language_id` ASC),
              CONSTRAINT `FK_NATIONALITY_I18N_NATIONALITY_ID_NATIONALITY_ID`
                FOREIGN KEY (`nationality_id`)
                REFERENCES `nationality` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_NATIONALITY_I18N_LANGUAGE_ID_LANGUAGE_ID`
                FOREIGN KEY (`language_id`)
                REFERENCES `language` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        $this->inserti18nNationality();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // Nationality
        $this->dropTable('nationality_i18n');
        $this->dropTable('nationality');
        
        // Gender
        $this->dropTable('gender_i18n');
        $this->dropTable('gender');

        // Language
        $this->dropTable('language_i18n');
        $this->dropTable('language');
    }

    /** Language i18n */
    private function insertStandardLanguage()
    {
        // Base languages as standard English
        $this->insert('language',  [
            'name' => 'English',
            'locale' => 'en-EN',
            'icon_locale' => 'gb'
        ]);

        $this->insert('language',  [
            'name' => 'German',
            'locale' => 'de-DE',
            'icon_locale' => 'de'
        ]);

        $this->insert('language',  [
            'name' => 'French',
            'locale' => 'fr-FR',
            'icon_locale' => 'fr'
        ]);
	}

    private function inserti18nLanguage()
    {
        // i18n German Translation for Languages
        $this->insert('language_i18n',  [
            'id' => '1',
            'language_id' => '2',
            'name' => 'Englisch'
        ]);

        $this->insert('language_i18n',  [
            'id' => '2',
            'language_id' => '2',
            'name' => 'Deutsch'
        ]);

        $this->insert('language_i18n',  [
            'id' => '3',
            'language_id' => '2',
            'name' => 'Französisch'
        ]);

        // i18n French Translation for Languages
        $this->insert('language_i18n',  [
            'id' => '1',
            'language_id' => '3',
            'name' => 'Anglais'
        ]);

        $this->insert('language_i18n',  [
            'id' => '2',
            'language_id' => '3',
            'name' => 'Allemand'
        ]);

        $this->insert('language_i18n',  [
            'id' => '3',
            'language_id' => '3',
            'name' => 'Français'
        ]);
	}

    /** Gender i18n */
    private function insertStandardGender()
    {
        // Base Gender as standart English
        $this->insert('gender',  [
            'name' => 'Male',
            'gender_icon' => 'male'
        ]);

        $this->insert('gender',  [
            'name' => 'Female',
            'gender_icon' => 'female'
        ]);

        $this->insert('gender',  [
            'name' => 'Other',
            'gender_icon' => 'other'
        ]);
	}

    private function inserti18nGender()
    {
        // i18n German Translation for Gender
        $this->insert('gender_i18n',  [
            'gender_id' => '1',
            'language_id' => '2',
            'name' => 'Männlich'
        ]);

        $this->insert('gender_i18n',  [
            'gender_id' => '2',
            'language_id' => '2',
            'name' => 'Weiblich'
        ]);

        $this->insert('gender_i18n',  [
            'gender_id' => '3',
            'language_id' => '2',
            'name' => 'Divers'
        ]);

        // i18n French Translation for Gender
        $this->insert('gender_i18n',  [
            'gender_id' => '1',
            'language_id' => '3',
            'name' => 'Mâle'
        ]);

        $this->insert('gender_i18n',  [
            'gender_id' => '2',
            'language_id' => '3',
            'name' => 'Féminin'
        ]);

        $this->insert('gender_i18n',  [
            'gender_id' => '3',
            'language_id' => '3',
            'name' => 'Différents'
        ]);
	}

    private function insertStandardNationality()
    {
        // Base Nationality as Standart English
        $this->insert('nationality',  [
            'name' => 'Aland Islands',
            'icon_locale' => 'ax'
        ]);
        
        $this->insert('nationality',  [
            'name' => 'Albania',
            'icon_locale' => 'al'
        ]);
        
        $this->insert('nationality',  [
            'name' => 'Andorra',
            'icon_locale' => 'ad'
        ]);

        $this->insert('nationality',  [
            'name' => 'Austria',
            'icon_locale' => 'at'
        ]);

        $this->insert('nationality',  [
            'name' => 'Belarus',
            'icon_locale' => 'by'
        ]);

        $this->insert('nationality',  [
            'name' => 'Belgium',
            'icon_locale' => 'be'
        ]);

        $this->insert('nationality',  [
            'name' => 'Bosnia and Herzegovina',
            'icon_locale' => 'ba'
        ]);

        $this->insert('nationality',  [
            'name' => 'Bulgaria',
            'icon_locale' => 'bg'
        ]);

        $this->insert('nationality',  [
            'name' => 'Croatia',
            'icon_locale' => 'hr'
        ]);

        $this->insert('nationality',  [
            'name' => 'Cyprus',
            'icon_locale' => 'cy'
        ]);

        $this->insert('nationality',  [
            'name' => 'Czech Republic',
            'icon_locale' => 'cz'
        ]);

        $this->insert('nationality',  [
            'name' => 'Denmark',
            'icon_locale' => 'dk'
        ]);

        $this->insert('nationality',  [
            'name' => 'England',
            'icon_locale' => 'gb-eng'
        ]);

        $this->insert('nationality',  [
            'name' => 'Estonia',
            'icon_locale' => 'ee'
        ]);

        $this->insert('nationality',  [
            'name' => 'Faroe Islands',
            'icon_locale' => 'fo'
        ]);

        $this->insert('nationality',  [
            'name' => 'Finland',
            'icon_locale' => 'fi'
        ]);

        $this->insert('nationality',  [
            'name' => 'France',
            'icon_locale' => 'fr'
        ]);

        $this->insert('nationality',  [
            'name' => 'Germany',
            'icon_locale' => 'de'
        ]);

        $this->insert('nationality',  [
            'name' => 'Gibraltar',
            'icon_locale' => 'gi'
        ]);

        $this->insert('nationality',  [
            'name' => 'Greece',
            'icon_locale' => 'gr'
        ]);

        $this->insert('nationality',  [
            'name' => 'Guernsey',
            'icon_locale' => 'gg'
        ]);

        $this->insert('nationality',  [
            'name' => 'Holy See',
            'icon_locale' => 'va'
        ]);

        $this->insert('nationality',  [
            'name' => 'Hungary',
            'icon_locale' => 'hu'
        ]);

        $this->insert('nationality',  [
            'name' => 'Iceland',
            'icon_locale' => 'is'
        ]);

        $this->insert('nationality',  [
            'name' => 'Ireland',
            'icon_locale' => 'ie'
        ]);

        $this->insert('nationality',  [
            'name' => 'Isle of Man',
            'icon_locale' => 'im'
        ]);

        $this->insert('nationality',  [
            'name' => 'Italy',
            'icon_locale' => 'it'
        ]);

        $this->insert('nationality',  [
            'name' => 'Jersey',
            'icon_locale' => 'je'
        ]);

        $this->insert('nationality',  [
            'name' => 'Kosovo',
            'icon_locale' => 'xk'
        ]);

        $this->insert('nationality',  [
            'name' => 'Latvia',
            'icon_locale' => 'lv'
        ]);

        $this->insert('nationality',  [
            'name' => 'Liechtenstein',
            'icon_locale' => 'li'
        ]);

        $this->insert('nationality',  [
            'name' => 'Lithuania',
            'icon_locale' => 'lt'
        ]);

        $this->insert('nationality',  [
            'name' => 'Luxembourg',
            'icon_locale' => 'lu'
        ]);

        $this->insert('nationality',  [
            'name' => 'Malta',
            'icon_locale' => 'mt'
        ]);

        $this->insert('nationality',  [
            'name' => 'Moldova',
            'icon_locale' => 'md'
        ]);

        $this->insert('nationality',  [
            'name' => 'Monaco',
            'icon_locale' => 'mc'
        ]);

        $this->insert('nationality',  [
            'name' => 'Montenegro',
            'icon_locale' => 'me'
        ]);

        $this->insert('nationality',  [
            'name' => 'Netherlands',
            'icon_locale' => 'nl'
        ]);

        $this->insert('nationality',  [
            'name' => 'North Macedonia',
            'icon_locale' => 'mk'
        ]);

        $this->insert('nationality',  [
            'name' => 'Nothern Ireland',
            'icon_locale' => 'gb-nir'
        ]);

        $this->insert('nationality',  [
            'name' => 'Norway',
            'icon_locale' => 'no'
        ]);

        $this->insert('nationality',  [
            'name' => 'Poland',
            'icon_locale' => 'pl'
        ]);

        $this->insert('nationality',  [
            'name' => 'Portugal',
            'icon_locale' => 'pt'
        ]);

        $this->insert('nationality',  [
            'name' => 'Romania',
            'icon_locale' => 'ro'
        ]);

        $this->insert('nationality',  [
            'name' => 'Russia',
            'icon_locale' => 'ru'
        ]);

        $this->insert('nationality',  [
            'name' => 'San Marino',
            'icon_locale' => 'sm'
        ]);

        $this->insert('nationality',  [
            'name' => 'Scotland',
            'icon_locale' => 'gb-sct'
        ]);

        $this->insert('nationality',  [
            'name' => 'Serbia',
            'icon_locale' => 'rs'
        ]);

        $this->insert('nationality',  [
            'name' => 'Slovakia',
            'icon_locale' => 'sk'
        ]);

        $this->insert('nationality',  [
            'name' => 'Slovenia',
            'icon_locale' => 'si'
        ]);

        $this->insert('nationality',  [
            'name' => 'Spain',
            'icon_locale' => 'es'
        ]);

        $this->insert('nationality',  [
            'name' => 'Svalbard and Jan Mayen',
            'icon_locale' => 'sj'
        ]);

        $this->insert('nationality',  [
            'name' => 'Sweden',
            'icon_locale' => 'SE'
        ]);

        $this->insert('nationality',  [
            'name' => 'Switzerland',
            'icon_locale' => 'ch'
        ]);

        $this->insert('nationality',  [
            'name' => 'Ukraine',
            'icon_locale' => 'us'
        ]);

        $this->insert('nationality',  [
            'name' => 'United Kingdom',
            'icon_locale' => 'gb'
        ]);

        $this->insert('nationality',  [
            'name' => 'Wales',
            'icon_locale' => 'gb-wls'
        ]);
	}

    private function inserti18nNationality()
    {
        
	}
}