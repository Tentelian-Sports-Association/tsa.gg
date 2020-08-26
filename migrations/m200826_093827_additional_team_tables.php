<?php

use yii\db\Migration;

/**
 * Class m200826_093827_additional_team_tables
 */
class m200826_093827_additional_team_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("ALTER TABLE `team_member` DROP PRIMARY KEY, ADD PRIMARY KEY (`team_id`, `user_id`, `role_id`) USING BTREE");


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        
    }
}