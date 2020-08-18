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
        // delete is Team Tournament
        $this->addColumn(
            'tournament',
            'isTeam',
            $this->boolean()->notNull()->defaultValue(false)
      	);

        // add bracket set
        $this->addColumn(
            'tournament',
            'bracket_set_id',
            $this->integer()->notNull()
      	);

        // Tournament Bracket Types

        // Tournament Bracket Set
        $this->execute("
            CREATE TABLE IF NOT EXISTS `mydb`.`tournament_bracket_set` (
              `id` INT NOT NULL AUTO_INCREMENT,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE)
            ENGINE = InnoDB"
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'FK_TOURNAMENT_BRACKET_SET_TOURNAMENT_BRACKET_SET',
            'tournaments',
            'tournament_bracket_set',
            'bracket_set_id',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        
        // delete bracket set
        $this->dropColumn(
            'tournament',
            'bracket_set_id'
      	);

        // Bracket Set Table
        $this->dropTable('tournament_bracket_set');

        // Bracket Type Table
        $this->dropTable('tournament_bracket_set');

        // delete is Team Tournament
        $this->dropColumn(
            'tournament',
            'isTeam'
      	);
    }
}