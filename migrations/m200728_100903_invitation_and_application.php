<?php

use yii\db\Migration;

/**
 * Class m200728_100903_invitation_and_application
 */
class m200728_100903_invitation_and_application extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Organisation invitation
        $this->execute("
            CREATE TABLE IF NOT EXISTS `organisation_invitation` (
              `organisation_id` INT NOT NULL,
              `invited_user_id` INT NOT NULL,
              `inviter_user_id` INT NOT NULL,
              `accepted` TINYINT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`organisation_id`, `invited_user_id`, `inviter_user_id`),
              INDEX `FK_ORGANISATION_INVITATION_INVITED_USER_ID_USER_ID_idx` (`invited_user_id` ASC),
              INDEX `FK_ORGANISATION_INVITATION_INVITER_USER_ID_UDER_ID_idx` (`inviter_user_id` ASC),
              CONSTRAINT `FK_ORGANISATION_INVITATION_ORGANISATION_ID_ORGANISATION_ID`
                FOREIGN KEY (`organisation_id`)
                REFERENCES `organisation` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_ORGANISATION_INVITATION_INVITED_USER_ID_USER_ID`
                FOREIGN KEY (`invited_user_id`)
                REFERENCES `user` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_ORGANISATION_INVITATION_INVITER_USER_ID_UDER_ID`
                FOREIGN KEY (`inviter_user_id`)
                REFERENCES `user` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        // Organisation application
        $this->execute("
            CREATE TABLE IF NOT EXISTS `organisation_application` (
              `organisation_id` INT NOT NULL,
              `applicant_user_id` INT NOT NULL,
              `accepted` TINYINT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`organisation_id`, `applicant_user_id`),
              INDEX `FK_ORGANISATION_APPLICANT_USER_ID_USER_ID_idx` (`applicant_user_id` ASC),
              CONSTRAINT `FK_ORGANISATION_APPLICATION_ORGANISATION_ID_ORGANISATION_ID`
                FOREIGN KEY (`organisation_id`)
                REFERENCES `organisation` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_ORGANISATION_APPLICANT_USER_ID_USER_ID`
                FOREIGN KEY (`applicant_user_id`)
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
        // Organisation application
        $this->dropTable('organisation_application');

        // Organisation invitation
        $this->dropTable('organisation_invitation');
    }
}