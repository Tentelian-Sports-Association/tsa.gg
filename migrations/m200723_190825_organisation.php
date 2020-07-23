<?php

use yii\db\Migration;

/**
 * Class m200723_190825_organisation
 */
class m200723_190825_organisation extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Billing Reason
        $this->execute("
            CREATE TABLE IF NOT EXISTS `billing_reason` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `name` VARCHAR(255) NOT NULL,
              `description` VARCHAR(255) NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC))
            ENGINE = InnoDB"
        );

        // User Balance
        $this->execute("
            CREATE TABLE IF NOT EXISTS `user_balance` (
              `user_id` INT NOT NULL,
              `current_balance` VARCHAR(255) NOT NULL DEFAULT 0,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`user_id`),
              UNIQUE INDEX `user_id_UNIQUE` (`user_id` ASC),
              CONSTRAINT `FK_USER_BALANCE_USER_ID_USER_ID`
                FOREIGN KEY (`user_id`)
                REFERENCES `user` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        // User Billing
        $this->execute("
            CREATE TABLE IF NOT EXISTS `user_billing` (
              `user_id` INT NOT NULL,
              `billing_reason_id` INT NOT NULL,
              `biling_description` VARCHAR(255) NOT NULL,
              `billing_amount` VARCHAR(255) NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`user_id`),
              INDEX `FK_USER_BILLING_BILLING_REASON_ID_BILLING_REASON_ID_idx` (`billing_reason_id` ASC),
              CONSTRAINT `FK_USER_BILLING_USER_ID_USER_ID`
                FOREIGN KEY (`user_id`)
                REFERENCES `user` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_USER_BILLING_BILLING_REASON_ID_BILLING_REASON_ID`
                FOREIGN KEY (`billing_reason_id`)
                REFERENCES `billing_reason` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        // Organisation
        $this->execute("
           CREATE TABLE IF NOT EXISTS `organisation` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `name` VARCHAR(255) NOT NULL,
              `description` VARCHAR(255) NULL,
              `headquater_id` INT NOT NULL,
              `language_id` INT NOT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC),
              UNIQUE INDEX `name_UNIQUE` (`name` ASC),
              INDEX `FK_ORGANISATION_HEADQUATER_ID_NATIONALITY_ID_idx` (`headquater_id` ASC),
              INDEX `FK_ORGANISATION_LANGUAGE_ID_LANGUAGE_ID_idx` (`language_id` ASC),
              CONSTRAINT `FK_ORGANISATION_HEADQUATER_ID_NATIONALITY_ID`
                FOREIGN KEY (`headquater_id`)
                REFERENCES `nationality` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_ORGANISATION_LANGUAGE_ID_LANGUAGE_ID`
                FOREIGN KEY (`language_id`)
                REFERENCES `language` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        // Organisation Balance
        $this->execute("
            CREATE TABLE IF NOT EXISTS `organisation_balance` (
              `organisation_id` INT NOT NULL,
              `current_balance` VARCHAR(255) NOT NULL DEFAULT 0,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`organisation_id`),
              UNIQUE INDEX `organisation_id_UNIQUE` (`organisation_id` ASC),
              CONSTRAINT `FK_ORGANISATION_BALANCE_ORGANISATION_ID_ORGANISATION_ID`
                FOREIGN KEY (`organisation_id`)
                REFERENCES `organisation` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        // Organisation Role
        $this->execute("
            CREATE TABLE IF NOT EXISTS `organisation_role` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `role` VARCHAR(255) NOT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC))
            ENGINE = InnoDB"
        );

        // Organisation Member
        $this->execute("
            CREATE TABLE IF NOT EXISTS `organisation_member` (
              `organisation_id` INT NOT NULL,
              `user_id` INT NOT NULL,
              `role_id` INT NOT NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`organisation_id`, `user_id`),
              INDEX `FK_ORGANISATION_USER_ID_USER_ID_idx` (`user_id` ASC),
              INDEX `FK_ORGANISATION_MEMBER_ROLE_ID_ROLE_ID_idx` (`role_id` ASC),
              CONSTRAINT `FK_ORGANISATION_MEMBER_ORGANISATION_ID_ORGANISATION_ID`
                FOREIGN KEY (`organisation_id`)
                REFERENCES `organisation` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_ORGANISATION_USER_ID_USER_ID`
                FOREIGN KEY (`user_id`)
                REFERENCES `user` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_ORGANISATION_MEMBER_ROLE_ID_ORGANISATION_ROLE_ID`
                FOREIGN KEY (`role_id`)
                REFERENCES `organisation_role` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        // Organisation Social
        $this->execute("
            CREATE TABLE IF NOT EXISTS `organisation_social` (
              `organisation_id` INT NOT NULL,
              `business_mail` VARCHAR(255) NULL,
              `twitter_name` VARCHAR(255) NULL,
              `twitter_channel` VARCHAR(255) NULL,
              `discord_server` VARCHAR(255) NULL,
              `teamspeak_server` VARCHAR(255) NULL,
              `editable` TINYINT NOT NULL DEFAULT 1,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`organisation_id`),
              UNIQUE INDEX `organisation_id_UNIQUE` (`organisation_id` ASC),
              CONSTRAINT `FK_ORGANISATION_SOCIAL_ORGANISATION_ID_ORGANISATION_ID`
                FOREIGN KEY (`organisation_id`)
                REFERENCES `organisation` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        // Organisation Payment
        $this->execute("
            CREATE TABLE IF NOT EXISTS `organisation_payment` (
              `organisation_id` INT NOT NULL,
              `organisation_owner_id` INT NOT NULL,
              `zip_code` VARCHAR(255) NULL,
              `city` VARCHAR(255) NULL,
              `street` VARCHAR(255) NULL,
              `paypal_adress` VARCHAR(255) NULL,
              `iban` VARCHAR(255) NULL,
              `bic` VARCHAR(255) NULL,
              `account_owner` VARCHAR(255) NULL,
              `editable` TINYINT NOT NULL DEFAULT 1,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`organisation_id`, `organisation_owner_id`),
              UNIQUE INDEX `organisation_id_UNIQUE` (`organisation_id` ASC),
              UNIQUE INDEX `organisation_owner_id_UNIQUE` (`organisation_owner_id` ASC),
              CONSTRAINT `FK_ORGANISATION_PAYMENT_ORGANISATION_ID_ORGANISATION_ID`
                FOREIGN KEY (`organisation_id`)
                REFERENCES `organisation` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_ORGANISATION_OWNER_ID_USER_ID`
                FOREIGN KEY (`organisation_owner_id`)
                REFERENCES `user` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB"
        );

        // Organisation Billing
        $this->execute("
            CREATE TABLE IF NOT EXISTS `organisation_billing` (
              `organisation_id` INT NOT NULL,
              `billing_reason_id` INT NOT NULL,
              `biling_description` VARCHAR(255) NOT NULL,
              `billing_amount` VARCHAR(255) NULL,
              `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_updated` DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`organisation_id`),
              INDEX `FK_ORGANISATION_BILLING_BILLING_REASON_BILLING_REASON_ID_idx` (`billing_reason_id` ASC),
              CONSTRAINT `FK_ORGANISATION_BILLING_ORGANISATION_ID_ORGANISATION_ID`
                FOREIGN KEY (`organisation_id`)
                REFERENCES `organisation` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_ORGANISATION_BILLING_BILLING_REASON_BILLING_REASON_ID`
                FOREIGN KEY (`billing_reason_id`)
                REFERENCES `billing_reason` (`id`)
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
        // Organisation Billing
        $this->dropTable('organisation_billing');
        // Organisation Payment
        $this->dropTable('organisation_payment');
        // Organisation Social
        $this->dropTable('organisation_social');
        // Organisation Member
        $this->dropTable('organisation_member');
        // Organisation Role
        $this->dropTable('organisation_role');
        // Organisation Balance
        $this->dropTable('organisation_balance');
        // Organisation
        $this->dropTable('organisation');
        // User Balance
        $this->dropTable('user_billing');
        // User Balance
        $this->dropTable('user_balance');
        // User Balance
        $this->dropTable('billing_reason');
    }
}