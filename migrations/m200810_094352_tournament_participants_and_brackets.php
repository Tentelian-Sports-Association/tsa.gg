<?php

use yii\db\Migration;

/**
 * Class m200810_094352_tournament_participants_and_brackets
 */
class m200810_094352_tournament_participants_and_brackets extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // add is Team Tournament
        $this->addColumn(
            'tournament',
            'isTeam',
            $this->boolean()->notNull()->defaultValue(false)->after('rules_id')
      	);

        // add bracket set
        $this->addColumn(
            'tournament',
            'bracket_set_id',
            $this->integer()->notNull()->after('isTeam')
      	);

        // add is running
        $this->addColumn(
            'tournament',
            'running',
            $this->boolean()->notNull()->defaultValue(false)->after('dt_updated')
      	);

        // add max player to tournament
        $this->addColumn(
            'tournament',
            'maxPlayer',
            $this->integer()->Null()->defaultValue(1)->after('bracket_set_id')
      	);

        // add is invitational to tournament
        $this->addColumn(
            'tournament',
            'invitational',
            $this->boolean()->notNull()->defaultValue(false)->after('maxPlayer')
      	);

        // add has password to tournament
        $this->addColumn(
            'tournament',
            'hasPassword',
            $this->boolean()->notNull()->defaultValue(false)->after('invitational')
      	);

        // add password to tournament
        $this->addColumn(
            'tournament',
            'password',
            $this->string(255)->Null()->after('hasPassword')
      	);

        // add min player to tournament mode
        $this->addColumn(
            'tournament_mode',
            'minPlayer',
            $this->integer()->notNull()->defaultValue(0)
      	);

        // Tournament Bracket Set
        $this->execute("
            CREATE TABLE IF NOT EXISTS `tournament_bracket_set` (
              `id` INT NOT NULL AUTO_INCREMENT,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC))
            ENGINE = InnoDB"
        );

        // add foreign key for table `tournaments`
        $this->addForeignKey(
            'FK_TOURNAMENT_BRACKET_SET_TOURNAMENT_BRACKET_SET',
            'tournament',
            'bracket_set_id',
            'tournament_bracket_set',
            'id',
            'CASCADE'
        );

        // Team Participating
        $this->execute("
            CREATE TABLE IF NOT EXISTS `tournament_team_participating` (
              `tournament_id` INT NOT NULL,
              `team_id` INT NOT NULL,
              `checked_in` TINYINT NOT NULL DEFAULT 0,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`tournament_id`, `team_id`),
              INDEX `FK_TOURNAMENT_TEAM_PARTICIPATING_TEAM_ID_TEAM_ID_idx` (`team_id` ASC),
              CONSTRAINT `FK_TOURNAMENT_TEAM_PARTICIPATING_TOURNAMENT_ID_TOURNAMENT_ID`
                FOREIGN KEY (`tournament_id`)
                REFERENCES `tournament` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_TOURNAMENT_TEAM_PARTICIPATING_TEAM_ID_TEAM_ID`
                FOREIGN KEY (`team_id`)
                REFERENCES `team` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        // Player Participating
        $this->execute("
            CREATE TABLE IF NOT EXISTS `tournament_player_participating` (
              `tournament_id` INT NOT NULL,
              `player_id` INT NOT NULL,
              `checked_in` TINYINT NOT NULL DEFAULT 0,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`tournament_id`, `player_id`),
              INDEX `FK_TOURNAMENT_PLAYER_PARTICIPATING_PLAYER_ID_idx` (`player_id` ASC),
              CONSTRAINT `FK_TOURNAMENT_PLAYER_PARTICIPATING_TOURNAMENT_ID_TOURNAMENT_ID`
                FOREIGN KEY (`tournament_id`)
                REFERENCES `tournament` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_TOURNAMENT_PLAYER_PARTICIPATING_PLAYER_ID`
                FOREIGN KEY (`player_id`)
                REFERENCES `user` (`id`)
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
        $this->dropTable('tournament_player_participating');

        // Bracket set Table
        $this->dropTable('tournament_team_participating');

        // delete foreignkey for tournament
        $this->dropForeignKey(
            'FK_TOURNAMENT_BRACKET_SET_TOURNAMENT_BRACKET_SET',
            'tournament'
        );

        // Bracket set Table
        $this->dropTable('tournament_bracket_set');

        // delete min player
        $this->dropColumn(
            'tournament_mode',
            'minPlayer'
      	);

        // delete pssword
        $this->dropColumn(
            'tournament',
            'password'
      	);
        
        // delete invitational
        $this->dropColumn(
            'tournament',
            'invitational'
      	);
        
        // delete has password
        $this->dropColumn(
            'tournament',
            'hasPassword'
      	);

        // delete max player
        $this->dropColumn(
            'tournament',
            'maxPlayer'
      	);

        // delete is running
        $this->dropColumn(
            'tournament',
            'running'
      	);

        // delete bracket set
        $this->dropColumn(
            'tournament',
            'bracket_set_id'
      	);

        // delete is Team Tournament
        $this->dropColumn(
            'tournament',
            'isTeam'
      	);
    }
}