<?php

use yii\db\Migration;

/**
 * Class m200701_095233_events
 */
class m200701_095233_events_and_news extends Migration
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

        $this->baseCategories();

        // News Categorie i18n
        $this->execute("
            CREATE TABLE IF NOT EXISTS `news_categories_i18n` (
              `categorie_id` INT NOT NULL,
              `language_id` INT NOT NULL,
              `name` VARCHAR(255) NOT NULL,
              `description` VARCHAR(255) NOT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`categorie_id`, `language_id`),
              INDEX `FK_NEWS_CATEGORIE_I18N_LANGUAGE_ID_LANGUAGE_ID_idx` (`language_id` ASC),
              CONSTRAINT `FK_NEWS_CATEGORIE_I18N_CATEGORIE_ID_NEWS_CATEGORIE_ID`
                FOREIGN KEY (`categorie_id`)
                REFERENCES `news_categorie` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_NEWS_CATEGORIE_I18N_LANGUAGE_ID_LANGUAGE_ID`
                FOREIGN KEY (`language_id`)
                REFERENCES `language` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        $this->baseCategoriesi18nGerman();

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

        $this->baseSubCategories();

        // News Sub Categorie i18n
        $this->execute("
            CREATE TABLE IF NOT EXISTS `news_sub_categories_i18n` (
              `sub_categorie_id` INT NOT NULL,
              `language_id` INT NOT NULL,
              `name` VARCHAR(255) NOT NULL,
              `description` VARCHAR(255) NOT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`sub_categorie_id`, `language_id`),
              INDEX `FK_NEWS_SUB_CATEGORIE_LANGUAGE_ID_LANGUAGE_ID_idx` (`language_id` ASC),
              CONSTRAINT `FK_NEWS_SUB_CATEGORIE_I18N_SUBCATEGORIEID_NEWS_SUBCATEGORIE_ID`
                FOREIGN KEY (`sub_categorie_id`)
                REFERENCES `news_sub_categorie` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_NEWS_SUB_CATEGORIE_LANGUAGE_ID_LANGUAGE_ID`
                FOREIGN KEY (`language_id`)
                REFERENCES `language` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        $this->baseSubCategoriesi18nGerman();

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

        // News Details i18n
        $this->execute("
            CREATE TABLE IF NOT EXISTS `news_details_i18n` (
              `details_id` INT NOT NULL,
              `language_id` INT NOT NULL,
              `header` VARCHAR(255) NOT NULL,
              `short_body` VARCHAR(255) NOT NULL,
              `long_body` TEXT NOT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`details_id`, `language_id`),
              INDEX `FK_NEWS_DETAILS_I18N_LANGUAGE_ID_LANGUAGE_ID_idx` (`language_id` ASC),
              CONSTRAINT `FK_NEWS_DETAILS_I18N_DETAILS_ID_DETAILS_ID`
                FOREIGN KEY (`details_id`)
                REFERENCES `news_details` (`news_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_NEWS_DETAILS_I18N_LANGUAGE_ID_LANGUAGE_ID`
                FOREIGN KEY (`language_id`)
                REFERENCES `language` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        $this->addNews();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // News Details i18n
        $this->dropTable('news_details_i18n');

        // News Details
        $this->dropTable('news_details');

        // News
        $this->dropTable('news');

        // News Sub Categorie
        $this->dropTable('news_sub_categories_i18n');

        // News Sub Categorie
        $this->dropTable('news_sub_categorie');

        // News Categorie I18N
        $this->dropTable('news_categories_i18n');

        // News Categorie
        $this->dropTable('news_categorie');

        // event_i18n
        $this->dropTable('event_i18n');

        // event
        $this->dropTable('event');
    }

    private function baseCategories()
    {
        // Base Kategorie Technique
        $this->insert('news_categorie',  [
            'name' => 'Technique',
            'description' => 'Everything concerning the technology\'s of TSA',
            'img' => 'tsa_technic'
        ]);

        // Base Kategorie Partners and Sponsors
        $this->insert('news_categorie',  [
            'name' => 'Partners and Sponsors',
            'description' => 'News about our partners and sponsors',
            'img' => 'tsa_partners_sponsors'
        ]);

        // Base Kategorie Games
        $this->insert('news_categorie',  [
            'name' => 'Games',
            'description' => 'Everything about our games and it\'s community',
            'img' => 'tsa_games'
        ]);
	}

    private function baseCategoriesi18nGerman()
    {
        // i18n German Translation for Categories
        $this->insert('news_categories_i18n',  [
            'categorie_id' => '1',
            'language_id' => '2',
            'name' => 'Technik',
            'description' => 'Alles über die Technologien der TSA'
        ]);

        // i18n German Translation for Categories
        $this->insert('news_categories_i18n',  [
            'categorie_id' => '2',
            'language_id' => '2',
            'name' => 'Partner und Sponsoren',
            'description' => 'Neuigkeiten über unsere Partner und Sponsoren'
        ]);

        // i18n German Translation for Categories
        $this->insert('news_categories_i18n',  [
            'categorie_id' => '3',
            'language_id' => '2',
            'name' => 'Games',
            'description' => 'Alles über unsere Spiele und ihre Community'
        ]);
	}

    private function baseSubCategories()
    {
        // Base Kategorie Technique -> Website
        $this->insert('news_sub_categorie',  [
            'categorie_id' => '1',
            'name' => 'Website',
            'description' => 'Everything about the development of the website',
            'img' => 'tsa_technic_website'
        ]);

        // Base Kategorie Partner and Sponsors -> Partner
        $this->insert('news_sub_categorie',  [
            'categorie_id' => '2',
            'name' => 'Partners',
            'description' => 'Everything about our partners',
            'img' => 'tsa_partners'
        ]);

        // Base Kategorie Partner and Sponsors -> Sponsors
        $this->insert('news_sub_categorie',  [
            'categorie_id' => '2',
            'name' => 'Sponsors',
            'description' => 'Everything about our sponsors',
            'img' => 'tsa_sponsors'
        ]);

        // Base Kategorie Games -> Clash Royale
        $this->insert('news_sub_categorie',  [
            'categorie_id' => '3',
            'name' => 'Clash Royale',
            'description' => 'All About Clash Royale what is important',
            'img' => 'tsa_games_clash'
        ]);

        // Base Kategorie Games -> Rocket League
        $this->insert('news_sub_categorie',  [
            'categorie_id' => '3',
            'name' => 'Rocket League',
            'description' => 'All About Rocket League what is important',
            'img' => 'tsa_games_rl'
        ]);

        // Base Kategorie Games -> DR!FT
        $this->insert('news_sub_categorie',  [
            'categorie_id' => '3',
            'name' => 'DR!FT',
            'description' => 'All About DR!FT what is important',
            'img' => 'tsa_games_drift'
        ]);

        // Base Kategorie Games -> Farming Simulator
        $this->insert('news_sub_categorie',  [
            'categorie_id' => '3',
            'name' => 'Farming Simulator',
            'description' => 'All About Farming Simulator what is important',
            'img' => 'tsa_games_farmsim'
        ]);

        // Base Kategorie Games -> SSBU
        $this->insert('news_sub_categorie',  [
            'categorie_id' => '3',
            'name' => 'Super Smash Bros. Ultimate',
            'description' => 'All About SSBU what is important',
            'img' => 'tsa_games_ssbu'
        ]);
	}

    private function baseSubCategoriesi18nGerman()
    {
        // i18n German Translation for Sub Categories -> Website
        $this->insert('news_sub_categories_i18n',  [
            'sub_categorie_id' => '1',
            'language_id' => '2',
            'name' => 'Webseite',
            'description' => 'Alles über die Entwicklung der Website'
        ]);

        // i18n German Translation for Sub Categories -> Partner
        $this->insert('news_sub_categories_i18n',  [
            'sub_categorie_id' => '2',
            'language_id' => '2',
            'name' => 'Partner',
            'description' => 'Alles über unsere Partner'
        ]);

        // i18n German Translation for Sub Categories -> Sponsors
        $this->insert('news_sub_categories_i18n',  [
            'sub_categorie_id' => '3',
            'language_id' => '2',
            'name' => 'Sponsoren',
            'description' => 'Alles über unsere Sponsoren'
        ]);

        // i18n German Translation for Sub Categories -> Clash Royale
        $this->insert('news_sub_categories_i18n',  [
            'sub_categorie_id' => '4',
            'language_id' => '2',
            'name' => 'Clash Royale',
            'description' => 'Alles über Clash Royale, was wichtig ist'
        ]);

        // i18n German Translation for Sub Categories -> Rocket League
        $this->insert('news_sub_categories_i18n',  [
            'sub_categorie_id' => '5',
            'language_id' => '2',
            'name' => 'Rocket League',
            'description' => 'Alles über Rocket League, was wichtig ist'
        ]);

        // i18n German Translation for Sub Categories -> DR!FT
        $this->insert('news_sub_categories_i18n',  [
            'sub_categorie_id' => '6',
            'language_id' => '2',
            'name' => 'DR!FT',
            'description' => 'Alles über DR!FT, was wichtig ist'
        ]);

        // i18n German Translation for Sub Categories -> Farming Simulator
        $this->insert('news_sub_categories_i18n',  [
            'sub_categorie_id' => '7',
            'language_id' => '2',
            'name' => 'Farming Simulator',
            'description' => 'Alles über Farming Simulator, was wichtig ist'
        ]);

        // i18n German Translation for Sub Categories -> SSBU
        $this->insert('news_sub_categories_i18n',  [
            'sub_categorie_id' => '8',
            'language_id' => '2',
            'name' => 'Super Smash Bros. Ultimate',
            'description' => 'Alles über SSBU, was wichtig ist'
        ]);
	}

    public function addNews()
    {
        // News -> Munich eSports
        $this->insert('news',  [
            'categorie_id' => '2',
            'sub_categorie_id' => '2',
            'author_id' => '1',
            'dt_created' => '2019-10-01 12:00:00'
        ]);

        // News Details -> Munich eSports
        $this->insert('news_details',  [
            'news_id' => '1',
            'header' => 'Teaming up with Munich eSports',
            'short_body' => 'eSport with heart from Bavaria',
            'long_body' => 'Establishing esports in society - from the heart of Bavaria. That’s the mission statement Munich eSports e.V. was founded on. And that’s why, in the future we will be partnering up to expand our reach and bring esports to as many people as possible.</p>'
                . 'Munich eSports was founded in 2019 by a group of university students and has since expanded rapidly. With competitive teams in games like CS:GO, League of Legends and many more, the organization does not only support its players but rather focuses on working with and for the community. Local events and nation wide tournaments are held with passion and have for some time now been organized with our input and support.</p>'
                . 'This is why we have planned a lot of exciting projects for the future that will combine our strengths and opportunities to bring you the best esports experience you can get. From joint tournaments to streaming and productions, through online and offline events, TSA and Munich eSports will work on established and new projects. Not enough? Alright here are some more specific spoilers on what you can expect:</p>'
                . '<ul>'
                    . '<li>Online and offline Smash tournaments with our custom tournament software</li>'
                    . '<li>up-and-coming caster talents through the Caster Academy and Agency</li>'
                    . '<li>Tournament production and Live Streaming directly from a location in Munich</li>'
                . '</ul></p>'
                . '<a href="https://www.munich-esports.de/">>>> click here to go to the website <<<</a>',
            'img' => 'teamup_munichesports',
            'dt_created' => '2019-10-01 12:00:00'
        ]);

        // News Details i18n -> Munich eSports
        $this->insert('news_details_i18n',  [
            'details_id' => '1',
            'language_id' => '2',
            'header' => 'Zusammenarbeit mit Munich eSports',
            'short_body' => 'eSport mit Herz aus Bayern',
            'long_body' => 'Etablierung von Esport in der Gesellschaft - aus dem Herzen Bayerns. Das ist das Leitbild auf dem München eSports e.V. gegründet wurde. Aus diesem Grund werden wir uns in Zukunft zusammenschließen, um unsere Reichweite auszubauen und Esport zu möglichst vielen Menschen zu bringen.</p>'
                . 'Munich eSports wurde 2019 aus einer Hochschulgruppe heraus gegründet und ist seitdem rasant gewachsen. Mit wettbewerbsfähigen Teams in Spielen wie CS: GO, League of Legends und vielen anderen unterstützt die Organisation nicht nur ihre Spieler, sondern konzentriert sich auf die Arbeit mit und für die Community. Lokale Veranstaltungen und landesweite Turniere werden mit Leidenschaft abgehalten und werden seit einiger Zeit mit unserem Input und unserer Unterstützung organisiert.</p>'
                . 'Aus diesem Grund haben wir für die Zukunft viele spannende Projekte geplant, die unsere Stärken und Möglichkeiten kombinieren, um euch das bestmögliche Esport Erlebnis zu bieten. Von gemeinsamen Turnieren, über Streaming und Produktionen, bis hin zu Online- und Offline-Events werden TSA und Munich eSports an etablierten und neuen Projekten arbeiten. Nicht genug? Okay, hier sind einige spezifische Spoiler, was ihr erwarten können:</p>'
                . '<ul>'
                    . '<li>Online- und Offline-Smash-Turniere mit unserer eigenen Turniere Software</li>'
                    . '<li>Förderung von Nachwuchstalenten durch die Caster Academy and Agency</li>'
                    . '<li>Turnier Produktionen und Live-Streaming direkt von einem Standort in München</li>'
                . '</ul></p>'
                . '<a href="https://www.munich-esports.de/">>> hier geht es zur Webseite <<</a>',
            'dt_created' => '2019-10-01 12:00:00'
        ]);

        // News -> Cuby Systems
        $this->insert('news',  [
            'categorie_id' => '2',
            'sub_categorie_id' => '3',
            'author_id' => '1',
            'dt_created' => '2020-07-01 12:00:00'
        ]);

        // News Details -> Cuba Systems
        $this->insert('news_details',  [
            'news_id' => '2',
            'header' => 'We welcome a new partner',
            'short_body' => 'We welcome the Pace Media Development GmbH to the TSA family',
            'long_body' => 'A high standard in production has always been a staple for our tournament coverage. Therefore we have always been working hard behind the scenes to keep or technology and methods at the highest level possible. For future streams we are happy to announce to be partnering up with Cuba Broadcast, a supplier of the latest broadcasting software, used in television and livestreaming production. This technology will enable us to improve, simplify and therefore enhance the coverage of our tournaments. We are confident that every participant and viewer will be surprised by the visible improvements to our streaming quality thanks to the software provided by Cuba Broadcast. For more detailed information on their product:</p>'
                . '<a href="https://cuba-broadcast.com/">>>>click here to go to the website <<<</a>',
            'img' => 'teamup_cubabroadcasting',
            'dt_created' => '2020-07-01 12:00:00'
        ]);

        // News Details i18n -> Cuba Systems
        $this->insert('news_details_i18n',  [
            'details_id' => '2',
            'language_id' => '2',
            'header' => 'Wir begrüßen einen neuen Partner',
            'short_body' => 'Wir begrüßen die Pace Media Development GmbH in der TSA-Familie',
            'long_body' => 'Ein hoher Standard in der Produktion ist seit jeher ein Kennzeichen unserer Turnier Übertragungen und Livestreams. Deshalb haben wir hinter den Kulissen hart daran gearbeitet, unsere Arbeitsweisen und Technologien auf dem höchstmöglichen Stand zu halten. Wir freuen uns ankündigen zu können, dass wir für zukünftige Produktionen eine Partnerschaft mit Cuba Productions eingehen, dem Hersteller einer State of the Art Broadcasting Software, die für Livestreaming und TV-Produktionen eingesetzt wird. Diese Technologie wird uns erlauben, unsere Streams zu verfeinern, vereinfachen und damit zu verbessern. Wir sind zuversichtlich, dass jeder Involvierte und Zuschauer von den Verbesserungen der Produktionsqualität überrascht sein wird, die wir dank der Software von Cuba Broadcast erreichen können.Für mehr Informationen zu dem Produkt:</p>'
                . '<a href="https://cuba-broadcast.com/">>>> hier geht es zur Webseite <<<</a>',
            'dt_created' => '2020-07-01 12:00:00'
        ]);

        // News -> DR!FT Lizenz
        $this->insert('news',  [
            'categorie_id' => '3',
            'sub_categorie_id' => '6',
            'author_id' => '1',
            'dt_created' => '2020-07-23 13:00:00'
        ]);

        // News Details -> DR!FT Lizenz
        $this->insert('news_details',  [
            'news_id' => '3',
            'header' => 'DR!FT Licensed',
            'short_body' => 'Licensed Tournament organizer for DR!FT',
            'long_body' => 'Games like League of Legends and Counter Strike have been leading the traditional esports scene for a long time. Dr!ft however brings competitive digital gaming to a whole other level. The innovative project began in 2003 and has since heavily increased in popularity. Several awards as well as an ever growing community underline the quality of this hybrid game. The concept of controlling small model cars with a smartphone on every thinkable race course has earned the game a spot at the top of the hybrid games ranking.</p>'
                . 'From now on TSA will be eligible to hold its own Dr!ft tournaments thanks to the acquisition of an official Tournament licence. This will offer us the option to expand our events and community towards a whole new but already established target group. Our custom software will be able to fully support all facets of Dr!ft, from race organization to stat tracking and evaluation. We are looking forward some great upcoming tournaments revolving around this hybrid racing experience.</p>'
                . '<a href="https://www.sturmkind.com/">>>> click here to go to the website <<<</a>',
            'img' => 'teamup_munichesports',
            'dt_created' => '2020-07-23 13:00:00'
        ]);

        // News Details i18n -> DR!FT Lizenz
        $this->insert('news_details_i18n',  [
            'details_id' => '3',
            'language_id' => '2',
            'header' => 'Dr!ft Lizenziert',
            'short_body' => 'Lizenzierter Turnierveranstalter für Dr!ft',
            'long_body' => 'Spieletitel wie League of Legends und Counter Strike führen seit jeher die traditionelle esports Szene an. Im Gegensatz dazu bringt Dr!ft kompetitives, digitales Gaming auf ein ganz neues Level. Das innovative Projekt begann in 2003 und hat seitdem eine stark ansteigende Popularität erfahren. Viele Auszeichnungen und eine konstant wachsende Community unterstreichen die Qualität dieses Hybrid Games. Das Konzept, kleine Modellautos per Smartphone auf jeder erdenklichen Strecke gegeneinander antreten zu lassen hat sich damit einen Spitzenplatz auf der Liste der Hybrid Games verdient.</p>'
                . 'Wir sind daher sehr stolz, in Zukunft, dank der Akquisition einer offiziellen Turnierlizenz, eigene Dr!ft Turniere organisieren und veranstalten zu können. Dadurch eröffnet sich uns die Möglichkeit, unsere Events und Community durch eine neue, bereits etablierte Zielgruppe ausbauen zu können. Unsere eigene Software wird dazu fähig sein, alle Facetten von Dr!ft, von Turnierorganisation bis hin zu Datenanalyse, zu unterstützen und integrieren. Wir freuen uns über kommende, spannende Turniere rund um diese Hybrid Gaming Experience.</p>'
                . '<a href="https://www.sturmkind.com/">>> hier geht es zur Webseite <<</a>',
            'dt_created' => '2020-07-23 13:00:00'
        ]);
	}
}