<?php

/* @var $this yii\web\View *
 * @var $form yii\bootstrap4\ActiveForm
 * @var $genderList array
 * @var $languageList array
 * @var $nationalityList array
 * @var $currentUserID
 * @var $model app\modules\miscellaneouse\models\DetailsForm
 */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

\app\modules\user\assets\account\profileDetails\EditDetailsAsset::register($this);

$this->title = \app\modules\user\Module::t('editDetails', 'editDetails_Title');

?>

<div class="site-edit-details">
	<?php $form = ActiveForm::begin([
        'id' => 'edit-details',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-7\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-2 control-label'],
		],
	]); ?>

	<div class="edit-user">
		<h1><?= \app\modules\user\Module::t('editDetails', 'editDetails_editPlayerDetailsHeader') ?></h1>
    	<!-- User -->
    	<?= $form->field($model, 'username')->textInput(["class" => 'form-control form-control-color','readonly'=> true]) ?>
    	<?= $form->field($model, 'email')->textInput(["class" => 'form-control form-control-color','readonly'=> true]) ?>
    	<?= $form->field($model, 'birthday')->textInput(["class" => 'form-control form-control-color','readonly'=> true]) ?>
		<?= $form->field($model, 'genderId')->dropDownList($genderList) ?>
    	<?= $form->field($model, 'languageId')->dropDownList($languageList) ?>
    	<?= $form->field($model, 'nationalityId')->dropDownList($nationalityList, array("disabled" => "disabled")) ?>
	</div>

	<div class="edit-user-details">
		<h1><?= \app\modules\user\Module::t('editDetails', 'editDetails_editPrivateDetailsHeader') ?></h1>

    	<!-- Use Details -->
    	<?= $form->field($model, 'pre_name')->textInput((empty($model->pre_name)?
			['placeholder' => \app\modules\user\Module::t('editDetails', 'editDetails_preNamePlaceholder')] :
			["class" => 'form-control form-control-color', 'readonly'=> true]))
		?>

		<?= $form->field($model, 'last_name')->textInput((empty($model->last_name)?
			['placeholder' => \app\modules\user\Module::t('editDetails', 'editDetails_lastNamePlaceholder')] :
			["class" => 'form-control form-control-color', 'readonly'=> true]))
		?>
		<?= $form->field($model, 'zip_code')->textInput((empty($model->zip_code)?
			['placeholder' => \app\modules\user\Module::t('editDetails', 'editDetails_zipCodePlaceholder')] :
			["class" => 'form-control form-control-color', 'readonly'=> true]))
		?>
		<?= $form->field($model, 'city')->textInput((empty($model->city)?
			['placeholder' => \app\modules\user\Module::t('editDetails', 'editDetails_cityPlaceholder')] :
			["class" => 'form-control form-control-color', 'readonly'=> true]))
		?>
		<?= $form->field($model, 'street')->textInput((empty($model->street)?
			['placeholder' => \app\modules\user\Module::t('editDetails', 'editDetails_streetPlaceholder')] :
			["class" => 'form-control form-control-color', 'readonly'=> true]))
		?>
		<?= $form->field($model, 'phone')->textInput((empty($model->phone)?
			['placeholder' => \app\modules\user\Module::t('editDetails', 'editDetails_phonePlaceholder')] :
			["class" => 'form-control form-control-color', 'readonly'=> true]))
		?>
	</div>

	<div class="edit-user-social">
		<h1><?= \app\modules\user\Module::t('editDetails', 'editDetails_editSocialsDetailsHeader') ?></h1>
	</div>

	<div class="edit-user-social-left">
		<!-- Use Details Social 1 -->
		<?= $form->field($model, 'twitter_name')->textInput(['placeholder' => \app\modules\user\Module::t('editDetails', 'editDetails_twitterNamePlaceholder')],["class" => 'form-control form-control-color']) ?>

		<?= $form->field($model, 'twitter_channel')->textInput(['placeholder' => \app\modules\user\Module::t('editDetails', 'editDetails_twitterChannelPlaceholder')],["class" => 'form-control form-control-color']) ?>
    </div>

	<div class="edit-user-social-right">
		<!-- Use Details Social 2 -->
		<?= $form->field($model, 'discord_name')->textInput(['placeholder' => \app\modules\user\Module::t('editDetails', 'editDetails_discordNamePlaceholder')],["class" => 'form-control form-control-color','readonly'=> false]) ?>

		<?= $form->field($model, 'discord_server')->textInput(['placeholder' => \app\modules\user\Module::t('editDetails', 'editDetails_discordServerPlaceholder')],["class" => 'form-control form-control-color','readonly'=> false]) ?>

		<?= $form->field($model, 'teamspeak_server')->textInput(["placeholder" => \app\modules\user\Module::t('editDetails', 'editDetails_teamspeakServerPlaceholder'), "class" => 'form-control form-control-color','readonly'=> true]) ?>
	</div>

	<div class="edit-user-button">
		<div class="form-group">
	        <div class="col-lg-offset-1 col-lg-11">
	            <?= Html::submitButton(\app\modules\user\Module::t('editDetails', 'editDetails_save'), ['class' => 'btn btn-primary', 'name' => 'save-credentials-button']) ?>
				<div class="placeholder"></div>
				<?= Html::a(\app\modules\user\Module::t('addGameID', 'backToProfile'), ['user/details', 'userId' => $currentUserID], ['class' => 'btn btn-primary delete', 'name' => 'backToProfile-button']); ?>
	        </div>
		</div>
	</div>

	<?php ActiveForm::end(); ?>
	<div class="note"><sup>[1]</sup><?= \app\modules\user\Module::t('editDetails', 'editDetails_note1') ?></div>
	<div class="note"><sup>[2]</sup><?= \app\modules\user\Module::t('editDetails', 'editDetails_note2') ?></div>

</div>