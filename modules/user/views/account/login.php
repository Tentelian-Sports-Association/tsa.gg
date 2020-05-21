<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm; */
/* @var $model app\modules\user\models\formModel\LoginForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

\app\modules\user\assets\account\login\LoginAsset::register($this);

$this->title = \app\modules\user\Module::t('login', 'login_header');

?>
<!-- Das div unten drunter einfach erstmal ignorieren -->

<div class="site-to-ignore">
    <div class="login">
        <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-7\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-2 control-label'],
        ],
    ]); ?>

    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput() ?>

    <?= $form->field($model, 'rememberMe')->checkbox(['template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>"]) ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton(\app\modules\user\Module::t('login', 'login_loginButton'), ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            <?= Html::a(\app\modules\user\Module::t('login', 'login_registerButton'), ['register'], ['class' => 'btn btn-primary register', 'aria-label' => 'register-button']); ?>

            <?= Html::a(\app\modules\user\Module::t('login', 'login_forgotPasswordButton'), ["password-reset"], ['class' => 'passwordReset']); ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>