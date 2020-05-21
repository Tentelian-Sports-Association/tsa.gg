<?php

use yii\db\Migration;

/**
 * Class m200521_190007_user
 */
class m200521_190007_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Partner
        $this->execute("
            CREATE TABLE IF NOT EXISTS `user` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `username` VARCHAR(255) NOT NULL,
              `password` VARCHAR(255) NOT NULL,
              `email` VARCHAR(255) NOT NULL,
              `birthday` DATETIME NOT NULL,
              `gender_id` INT NOT NULL,
              `language_id` INT NOT NULL,
              `nationality_id` INT NOT NULL,
              `access_token` VARCHAR(255) NULL,
              `auth_key` VARCHAR(255) NULL,
              `is_password_change_required` TINYINT(1) NULL,
              `dt_created` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC),
              UNIQUE INDEX `username_UNIQUE` (`username` ASC),
              INDEX `FK_USER_GENDER_ID_GENDER_ID_idx` (`gender_id` ASC),
              INDEX `FK_USER_LANGUAGE_ID_LANGUAGE_ID_idx` (`language_id` ASC),
              INDEX `FK_USER_NATIONALITY_ID_NATIONALITY_ID_idx` (`nationality_id` ASC),
              CONSTRAINT `FK_USER_GENDER_ID_GENDER_ID`
                FOREIGN KEY (`gender_id`)
                REFERENCES `gender` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_USER_LANGUAGE_ID_LANGUAGE_ID`
                FOREIGN KEY (`language_id`)
                REFERENCES `language` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_USER_NATIONALITY_ID_NATIONALITY_ID`
                FOREIGN KEY (`nationality_id`)
                REFERENCES `nationality` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        /* Base user 'Admin' */
        $this->insert('user', [
            'username' => 'Birnchen',
            'password' => Yii::$app->getSecurity()->generatePasswordHash('Birnchen2016'),
            'email' => 'birnchen@tsa.gg',
            'language_id' => '2',
            'gender_id' => '1',
            'nationality_id' => '1',
            'birthday' => '2018-11-01'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {   
        // User Tabel
        $this->dropTable('user');
    }
}