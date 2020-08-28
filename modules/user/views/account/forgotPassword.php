<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\modules\user\models\formModels\ForgotPasswordForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use app\widgets\Alert;

\app\modules\user\assets\account\forgotPassword\ForgotPasswordAsset::register($this);

$this->title = \app\modules\user\Module::t('forgotPassword', 'forgotPassword_header');

/************* Meta Index ****************/
$this->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->url]);
Yii::$app->MetaClass->writeDefaultMeta($this, $this->title, 'Request a new Password', '@BettyBirnchen');
/************* End Meta Index ****************/

?>

<div class="login-container site-passwordForgotten">
    <div class="login-container-inner passwordForgotten container  d-flex align-items-center justify-content-center">


		<?php $form = ActiveForm::begin([
		    'id' => 'passwordReset-form',
		    'options' => ['class' => 'form-horizontal col-12 col-lg-7 px-0'],
		    'fieldConfig' => [
		        'template' => "{label}\n<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-lg-12\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-5 control-label'],
		    ],
		]); ?>
            <h2><?= Html::encode($this->title) ?></h2>
            <?= $form->field($model, 'username')->textInput(['class' => 'input-default form-control form-control-color']) ?>

            <?= $form->field($model, 'email')->textInput(['class' => 'input-default form-control form-control-color']) ?>
            <div class="form-group d-flex align-items-end justify-content-end">
				<?= Html::submitButton(\app\modules\user\Module::t('forgotPassword', 'forgotPassword_forgotPasswordButton'), ['class' => 'filled-btn', 'name' => 'resettPassword-button']) ?>

            </div>

		<?php ActiveForm::end(); ?>

	</div>
</div>