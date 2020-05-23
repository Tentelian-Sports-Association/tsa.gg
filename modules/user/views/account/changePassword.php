<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\modules\user\models\formModels\changePasswordForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

\app\modules\user\assets\account\changePassword\ChangePasswordAsset::register($this);

$this->title = \app\modules\user\Module::t('changePassword', 'changePassword_header');

?>

<div class="site-passwordChange">
	<div class="passwordChange">
		<h1><?= Html::encode($this->title) ?></h1>

	<?php $form = ActiveForm::begin([
	    'id' => 'passwordChange-form',
	    'options' => [ 'class' => 'form-horizontal'],
		    'fieldConfig' => [
		        'template' => "{label}\n<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-lg-12\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-2 control-label'],
		    ],
		]); ?>

        <?= $form->field($model, 'oldPassword')->passwordInput(['class' => 'form-control form-control-color']) ?>

        <?= $form->field($model, 'newPassword')->passwordInput(['class' => 'form-control form-control-color']) ?>

        <?= $form->field($model, 'newPasswordRepeat')->passwordInput(['class' => 'form-control form-control-color']) ?>

        <?= Html::submitButton(\app\modules\user\Module::t('changePassword', 'changePassword_changePasswordButton'), ['class' => 'btn btn-primary', 'name' => 'changePassword-button']) ?>

	<?php ActiveForm::end(); ?>
	
	</div>
</div>