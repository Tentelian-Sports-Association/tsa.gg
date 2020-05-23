<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\modules\user\models\formModels\ForgotPasswordForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

\app\modules\user\assets\account\forgotPassword\ForgotPasswordAsset::register($this);

$this->title = \app\modules\user\Module::t('forgotPassword', 'forgotPassword_header');

?>

<div class="site-passwordForgotten">
	<div class="passwordForgotten">
		<h1><?= Html::encode($this->title) ?></h1>

		<?php $form = ActiveForm::begin([
		    'id' => 'passwordReset-form',
		    'options' => ['class' => 'form-horizontal'],
		    'fieldConfig' => [
		        'template' => "{label}\n<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-lg-12\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-2 control-label'],
		    ],
		]); ?>

		<?= $form->field($model, 'username')->textInput(['class' => 'form-control form-control-color']) ?>

    	<?= $form->field($model, 'email')->textInput(['class' => 'form-control form-control-color']) ?>

        <?= Html::submitButton(\app\modules\user\Module::t('forgotPassword', 'forgotPassword_forgotPasswordButton'), ['class' => 'btn btn-primary', 'name' => 'resettPassword-button']) ?>

		<?php ActiveForm::end(); ?>

	</div>
</div>