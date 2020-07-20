<?php
/**
 * Created by PhpStorm.
 * User: Isabella Neufeld
 * Date: 25.05.2018
 * Time: 12:48
 */

use app\modules\user\models\User;
use yii\helpers\Html;

/**
 * @var $user
 * @var $password
 */
?>
<main>
    <table cellspacing="0" cellpadding="0" style="font-family: Calibri; font-size: 12pt;">
        <tr>
            <td>Hallo <?= $user->getUsername() ?>,<br><br><br></td>
        </tr>
        <tr>
            <td>Dein Passwort wurde geändert. Mit dem Klick auf
                den nachstehenden Link wirst du auf eine Seite geführt, auf der du dein Passwort eingeben kannst.<br><br>
            </td>
        </tr>
        <tr>
            <td>
                <a href= <?= Yii::$app->urlManager->createAbsoluteUrl(['account/login']); ?>>Link</a><br><br>
            </td>
        </tr>
        <tr>
            <td><?= \app\modules\user\Module::t('forgotPassword', 'mailer_username') . ': ' . $user->getUsername(); ?><br></td>
        </tr>
        <tr>
            <td><?= \app\modules\user\Module::t('forgotPassword', 'mailer_password') . ': ' . $password ?><br><br></td>
        </tr>
    </table>
</main>