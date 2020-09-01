<?php

use yii\db\Migration;

/**
 * Class m200819_120045_statistics_basic_informations
 */
class m200819_120045_statistics_basic_informations extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("ALTER TABLE `games` MODIFY `dt_updated` datetime NULL ON UPDATE CURRENT_TIMESTAMP()");

        // add statistics class name to games
        $this->addColumn(
            'games',
            'statisticsClassName',
            $this->string(255)->notNull()->defaultValue('-none-')->after('verification_phrase')
      	);

        // add gameTag to games
        $this->addColumn(
            'games',
            'gameTag',
            $this->string(255)->notNull()->defaultValue('-none-')->after('statisticsClassName')
      	);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // delete pssword
        $this->dropColumn(
            'games',
            'gameTag'
      	);
        
        // delete pssword
        $this->dropColumn(
            'games',
            'statisticsClassName'
      	);
    }
}