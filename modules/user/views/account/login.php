<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm; */
/* @var $model app\modules\user\models\formModel\LoginForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use app\widgets\Alert;

\app\modules\user\assets\account\login\LoginAsset::register($this);

$this->title = \app\modules\user\Module::t('login', 'login_header');

/************* Meta Index ****************/
$this->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->url]);
Yii::$app->MetaClass->writeDefaultMeta($this, $this->title, 'Login to your Account', '@BettyBirnchen');
/************* End Meta Index ****************/

?>

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
				<?= Html::a(\app\modules\user\Module::t('login', 'login_forgotPasswordButton'), ["forgot-password"], ['class' => 'passwordReset primaryColor']); ?>
            </div>
		</div>

        <div class="form-group d-flex align-items-center justify-content-between">
            <?= $form->field($model, 'rememberMe',['options' => ['class' => '']])->checkbox([
                    'template' => "{input} {label}\n{error}"
                ]); ?>

            <?= Html::submitButton(\app\modules\user\Module::t('login', 'login_loginButton'), ['class' => 'filled-btn', 'name' => 'login-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
    <div class="ad-container container px-0">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- TSA-Login-Footer -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-8480651532892152"
             data-ad-slot="3654578552"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
</div>
