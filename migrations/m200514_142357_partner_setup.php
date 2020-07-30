<?php

use yii\db\Migration;

/**
 * Class m200514_142357_partner_setup
 */
class m200514_142357_partner_setup extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Partner
        $this->execute("
            CREATE TABLE IF NOT EXISTS `partner` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `name` VARCHAR(255) NOT NULL,
              `description` TEXT NOT NULL,
              `webadresse` VARCHAR(255) NOT NULL,
              `image` VARCHAR(255) NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC))
            ENGINE = InnoDB"
        );

        $this->insertStandardPartner();

        // Partner i18n
        $this->execute("
            CREATE TABLE IF NOT EXISTS `partner_i18n` (
              `partner_id` INT NOT NULL,
              `language_id` INT NOT NULL,
              `description` TEXT NOT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`partner_id`, `language_id`),
              INDEX `FK_PARTNER_I18N_LANGUAGE_ID_LANGUAGE_ID_idx` (`language_id` ASC),
              CONSTRAINT `FK_PARTNER_I18N_PARTNER_ID_PARTNER_ID`
                FOREIGN KEY (`partner_id`)
                REFERENCES `partner` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_PARTNER_I18N_LANGUAGE_ID_LANGUAGE_ID`
                FOREIGN KEY (`language_id`)
                REFERENCES `language` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        // Translation German
        $this->inserti18nPartnerGerman();

        // Translation France
        //$this->inserti18nPartnerFrance();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // Partner
        $this->dropTable('partner_i18n');
        $this->dropTable('partner');
    }

    /** Partner Englisch */
    private function insertStandardPartner()
    {
        /** Tentelian */
        $this->insert('partner',  [
            'name' => 'Tentelian - DIE MIT DEM KOPF',
            'description' => 'Only the best for your Tentelian so that unlimited gaming is possible. Our demands are high on our gaming machines, therefore we only select the best possible components.',
            'image' => 'tentelian',
            'webadresse' => 'https://tentelian.com'
        ]);

        /** Commotron GmbH */
        $this->insert('partner',  [
            'name' => 'Commotron GmbH',
            'description' => 'As an IT service provider based in Fürstenfeldbruck near Munich, we have been supporting 2008 small, medium and large companies. You receive the complete Range of services from planning, installation, support of small and large Large projects on standard systems up to and including individual IT solutions.',
            'image' => 'commotron',
            'webadresse' => 'https://commotron.com'
        ]);

        /** Gamers Finest */
        $this->insert('partner',  [
            'name' => 'Gamers Finest',
            'description' => 'The Gamers Finest Lounge offers a cosy atmosphere, good food, cold drinks and the possibility to play Magic: The Gathering, tabletop, board, online games and much more.',
            'image' => 'gamersfinest',
            'webadresse' => 'https://www.gamers-finest.at/'
        ]);

        /** SteelSeries */
        $this->insert('partner',  [
            'name' => 'SteelSeries',
            'description' => 'SteelSeries fires the gaming industry with innovative new products designed specifically for e-sports and passionate gamers around the world.',
            'image' => 'steelseries',
            'webadresse' => 'https://steelseries.com/'
        ]);

        /** Munich eSport e.V. */
        $this->insert('partner',  [
            'name' => 'Munich eSports e.V.',
            'description' => 'Munich eSports e.V. was founded as an organization to help strengthen and grow the local esports scene, by providing an extensive community for casual gamers, competitive players and fans alike. With a string of teams successfully competing in countrywide tournaments across different game genres and tiers, as well as regular gaming events targeted at the casual audience, the club welcomes all that are interested in the world of gaming and esports.',
            'image' => 'munich_esport',
            'webadresse' => 'https://munich-esports.de'
        ]);
	}

    /** Partner Germane */
    private function inserti18nPartnerGerman()
    {
        /** Tentelian */
        $this->insert('partner_i18n',  [
            'partner_id' => 1,
            'language_id' => 2,
            'description' => 'Nur das Beste für deinen Tentelian so dass uneingeschränktes Zocken möglich ist. Unsere Ansprüche sind hoch an unsere Gaming Maschinen, deswegen wählen wir nur die bestmöglichen Komponenten aus.'
        ]);

        /** Commotron GmbH */
        $this->insert('partner_i18n',  [
            'partner_id' => 2,
            'language_id' => 2,
            'description' => 'Als IT-Dienstleister mit Sitz in Fürstenfeldbruck bei München unterstützen wir seit 2008 kleine, mittelständische und große Unternehmen. Sie erhalten das komplette Leistungsangebot von der Planung, Installation, Betreuung von Klein- und Großprojekten auf Standardsystemen bis hin zu und individuellen IT-Lösungen.'
        ]);

        /** Gamers Finest */
        $this->insert('partner_i18n',  [
            'partner_id' => 3,
            'language_id' => 2,
            'description' => 'Die Gamers Finest Lounge bietet ein gemütliches Ambiente, gute Küche, kalte Getränke und die Möglichkeit Magic: The Gathering, Tabletop-, Brett-, Onlinespiele und vieles mehr zu zocken.'
        ]);

        /** SteelSeries */
        $this->insert('partner_i18n',  [
            'partner_id' => 4,
            'language_id' => 2,
            'description' => 'SteelSeries befeuert die Gaming-Branche mit innovativen neuen Produkten, die eigens für den E-Sport und passionierte Gamer in aller Welt konzipiert wurden.'
        ]);
        
        /** Munich eSport e.V. */
        $this->insert('partner_i18n',  [
            'partner_id' => 5,
            'language_id' => 2,
            'description' => 'Munich eSports e.V. wurde als Organisation gegründet, um die lokale E-Sports-Szene zu stärken und wachsen zu lassen, indem eine umfangreiche Community für Gelegenheitsspieler, Wettkampfspieler und Fans gleichermaßen bereitgestellt wird. Mit einer Reihe von Teams, die erfolgreich an landesweiten Turnieren über verschiedene Spielgenres und Spielklassen hinweg teilnehmen, sowie regelmäßigen Spielveranstaltungen, die sich an das Gelegenheitssportpublikum richten, heißt der Verein alle willkommen, die an der Welt der Spiele und des E-Sports interessiert sind.'
        ]);
	}

    /** Partner France */
    private function inserti18nPartnerFrance()
    {
        /** Tentelian */
        $this->insert('partner_i18n',  [
            'partner_id' => 1,
            'language_id' => 3,
            'description' => 'Seulement le meilleur pour votre Tentelien afin que les jeux illimités soient possibles. Nos exigences sont élevées en ce qui concerne nos machines de jeu, c\'est pourquoi nous ne sélectionnons que les meilleurs composants possibles.'
        ]);

        /** Commotron GmbH */
        $this->insert('partner_i18n',  [
            'partner_id' => 2,
            'language_id' => 3,
            'description' => 'En tant que prestataire de services informatiques basé à Fürstenfeldbruck près de Munich, nous avons soutenu en 2008 des petites, moyennes et grandes entreprises. Vous bénéficiez d\'une gamme complète de services allant de la planification, de l\'installation, du soutien de petits et grands projets sur des systèmes standard jusqu\'aux solutions informatiques individuelles.'
        ]);

        /** Gamers Finest */
        $this->insert('partner_i18n',  [
            'partner_id' => 3,
            'language_id' => 3,
            'description' => 'Le Gamers Finest Lounge offre une atmosphère chaleureuse, de la bonne nourriture, des boissons fraîches et la possibilité de jouer à Magic : The Gathering, des jeux de table, de plateau, des jeux en ligne et bien plus encore.'
        ]);

        /** SteelSeries */
        $this->insert('partner_i18n',  [
            'partner_id' => 4,
            'language_id' => 3,
            'description' => 'SteelSeries met le feu à l\'industrie du jeu avec de nouveaux produits innovants conçus spécialement pour les sports électroniques et les joueurs passionnés du monde entier.'
        ]);
        
        /** Munich eSport e.V. */
        $this->insert('partner_i18n',  [
            'partner_id' => 5,
            'language_id' => 3,
            'description' => 'Munich eSports e.V. a été fondée en tant qu\'organisation pour aider à renforcer et à développer la scène sportive locale, en fournissant une vaste communauté pour les joueurs occasionnels, les joueurs de compétition et les fans. Avec une série d\'équipes qui participent avec succès à des tournois nationaux dans différents genres et niveaux de jeu, ainsi qu\'avec des événements de jeu réguliers destinés au public occasionnel, le club accueille tous ceux qui s\'intéressent au monde du jeu et de l\'esportif.'
        ]);
	}
}