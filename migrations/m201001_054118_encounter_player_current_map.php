<?php

use yii\db\Migration;

/**
 * Class m201001_054118_encounter_player_current_map
 */
class m201001_054118_encounter_player_current_map extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // add gameTag to games
        $this->addColumn(
            'clashroyale_player_bracket_encounter',
            'currentMap',
            $this->string(255)->notNull()->defaultValue('-none-')->after('princess_tower_2_hitpoints')
      	);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // delete read rules Player
        $this->dropColumn(
            'clashroyale_player_bracket_encounter',
            'currentMap'
      	);
    }
}