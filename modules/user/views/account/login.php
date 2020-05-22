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
    <div class="login-container">
        <div class="login-container-inner container d-flex align-items-center justify-content-center">

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'layout' => 'horizontal',
				'options' => [
                    'class' => 'col-12 col-lg-7 px-0'
                ],
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"col-12\">{input}</div>\n<div class=\"col-12\">{error}</div>",
                    'labelOptions' => ['class' => 'control-label col-12'],
                ],
            ]); ?>
            <h2><?= Html::encode($this->title) ?></h2>
            <?= $form->field($model, 'username')->textInput(['autofocus' => true,'class' => 'input-default col-12']) ?>

            <?= $form->field($model, 'password')->passwordInput(['class' => 'input-default col-12']) ?>
            <div class="form-group row">
                <div class="col">
					<?= Html::a(\app\modules\user\Module::t('login', 'login_forgotPasswordButton'), ["password-reset"], ['class' => 'passwordReset primaryColor']); ?>
                </div>
		   </div>

            <div class="form-group d-flex align-items-center justify-content-between">
                <?= $form->field($model, 'rememberMe',['options' => ['class' => '']])->checkbox([
                        'template' => "{input} {label}\n{error}"
                    ])
                ?>

                <?= Html::submitButton(\app\modules\user\Module::t('login', 'login_loginButton'), ['class' => 'filled-btn', 'name' => 'login-button']) ?>

                <!--
                    <?= Html::a(\app\modules\user\Module::t('login', 'login_registerButton'), ['register'], ['class' => 'btn btn-primary register', 'aria-label' => 'register-button']); ?>
                -->

            </div>


            <!-- Für Registrierung -->
            <div class="form-group two-input row">
                <div class="col-12 col-lg-6">
                    <label>Username</label>
                    <input type="text" class="input-default" >
                </div>

                <div class="col-12 col-lg-6">
                    <label> E-Mail</label>
                    <input type="email" class="input-default" >
                </div>
            </div>
            <div class="form-group two-input row">
                <div class="col-12 col-lg-6">
                    <label>Passwort</label>
                    <input type="password" class="input-default" >
                </div>

                <div class="col-12 col-lg-6">
                    <label>Passwort wiederholen</label>
                    <input type="password" class="input-default" >
                </div>
            </div>
            <div class="form-group two-input row">
                <div class="col-12 col-lg-6">
                    <label>Geburtsdatum</label>
                    <input type="date" id="datepicker" class="input-default w-100" >
                </div>

                <div class="col-12 col-lg-6">
                    <label>Geschlecht</label>
                    <div class="select-wrapper">
                        <select class="input-default">
                            <option selected disabled>Auswählen</option>
                            <option>Männlich</option>
                            <option>Weiblich</option>
                        </select>
                    </div>

                </div>
            </div>
            <div class="form-group two-input row">
                <div class="col-12 col-lg-6">
                    <label>Nationalität</label>
                    <div class="select-wrapper">
                        <select class="input-default">
                            <option selected disabled>Auswählen</option>
                            <option>Deutschland</option>
                            <option>Amerika</option>
                        </select>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <label>Sprache</label>
                    <div class="select-wrapper">
                        <select class="input-default">
                            <option selected disabled>Auswählen</option>
                            <option>Deutsch</option>
                            <option>Englisch</option>
                        </select>
                    </div>
                </div>
            </div>


            <?php ActiveForm::end(); ?>
        </div>
        <div class="ad-container container px-0">
            <img src="https://via.placeholder.com/1170x264.png" class="img-fluid" alt="">
        </div>
    </div>

</div>