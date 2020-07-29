<?php

/* @var $this yii\web\View *
 * @var $form yii\bootstrap\ActiveForm
 * @var $languageList array
 * @var $nationalityList array
 * @var $currentOrgaID
 * @var $model app\modules\organisation\models\DetailsForm
 */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

use app\widgets\Alert;

\app\modules\organisation\assets\createEditOrganisation\EditOrganisationAsset::register($this);

$this->title = 'Edit Details';

?>

<div class="site-edit-organisation">
    <?php $form = ActiveForm::begin([
        'id' => 'edit-details',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-7\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-2 control-label'],
		],
	]); ?>

    <div class="edit-organisation">
		<h1><?= \app\modules\organisation\Module::t('editDetails', 'editOrganisation') ?></h1>
    	<!-- Organisation -->
    	<?= $form->field($model, 'name')->textInput(["class" => 'form-control form-control-color','readonly'=> true]) ?>
    	<?= $form->field($model, 'description')->textInput(["class" => 'form-control form-control-color','readonly'=> false]) ?>
    	<?= $form->field($model, 'languageId')->dropDownList($languageList) ?>
    	<?= $form->field($model, 'headquaterId')->dropDownList($nationalityList, array("disabled" => "disabled")) ?>
	</div>

    <div class="edit-organisation-social">
		<h1><?= \app\modules\organisation\Module::t('editDetails', 'editOrgaSocials') ?></h1>

    	<!-- Organisation Details -->
    	<?= $form->field($model, 'business_mail')->textInput((empty($model->business_mail) || $model->socialEditable?
			['placeholder' => \app\modules\organisation\Module::t('editDetails', 'businessMailPlaceholder')] :
			["class" => 'form-control form-control-color', 'readonly'=> true])) ?>
		<?= $form->field($model, 'twitter_name')->textInput((empty($model->twitter_name) || $model->socialEditable?
			['placeholder' => \app\modules\organisation\Module::t('editDetails', 'twitterNamePlaceholder')] :
			["class" => 'form-control form-control-color', 'readonly'=> true])) ?>
		<?= $form->field($model, 'twitter_channel')->textInput((empty($model->twitter_channel)?
			['placeholder' => \app\modules\organisation\Module::t('editDetails', 'twitterChannelPlaceholder')] :
			["class" => 'form-control form-control-color', 'readonly'=> false])) ?>
		<?= $form->field($model, 'discord_server')->textInput((empty($model->discord_server) || $model->socialEditable?
			['placeholder' => \app\modules\organisation\Module::t('editDetails', 'discordServerPlaceholder')] :
			["class" => 'form-control form-control-color', 'readonly'=> true])) ?>
		<?= $form->field($model, 'teamspeak_server')->textInput((empty($model->teamspeak_server) || $model->socialEditable?
			['placeholder' => \app\modules\organisation\Module::t('editDetails', 'teamspeakServerPlaceholder'), 'readonly'=> true] :
			["class" => 'form-control form-control-color', 'readonly'=> true])) ?>
	</div>

	<div class="edit-organisation-payment">
		<h1><?= \app\modules\organisation\Module::t('editDetails', 'editOrgaBillingInformations') ?></h1>

		<!-- Organisation Payment -->
		<div class="edit-organisation-payment-left">
			<?= $form->field($model, 'ownerName')->textInput(['placeholder' => \app\modules\organisation\Module::t('editDetails', 'ownerNamePlaceholder'), 'readonly'=> true]) ?>
			<?= $form->field($model, 'zip_code')->textInput((empty($model->zip_code) || $model->paymentEditable?
				['placeholder' => \app\modules\organisation\Module::t('editDetails', 'zipCodePlaceholder')] :
				["class" => 'form-control form-control-color', 'readonly'=> true])) ?>
			<?= $form->field($model, 'city')->textInput((empty($model->city)?
				['placeholder' => \app\modules\organisation\Module::t('editDetails', 'cityPlaceholder')] :
				["class" => 'form-control form-control-color', 'readonly'=> true])) ?>
			<?= $form->field($model, 'street')->textInput((empty($model->street)?
				['placeholder' => \app\modules\organisation\Module::t('editDetails', 'streetPlaceholder')] :
				["class" => 'form-control form-control-color', 'readonly'=> true])) ?>
		</div>

		<div class="edit-organisation-payment-right">
			<?= $form->field($model, 'account_owner')->textInput((empty($model->account_owner)?
				['placeholder' => \app\modules\organisation\Module::t('editDetails', 'accountOwnerPlaceholder')] :
				["class" => 'form-control form-control-color', 'readonly'=> true])) ?>
			<?= $form->field($model, 'iban')->textInput((empty($model->iban)?
				['placeholder' => \app\modules\organisation\Module::t('editDetails', 'ibanPlaceholder')] :
				["class" => 'form-control form-control-color', 'readonly'=> true])) ?>
			<?= $form->field($model, 'bic')->textInput((empty($model->bic)?
				['placeholder' => \app\modules\organisation\Module::t('editDetails', 'bicPlaceholder')] :
				["class" => 'form-control form-control-color', 'readonly'=> true])) ?>
			<?= $form->field($model, 'paypal_adress')->textInput((empty($model->paypal_adress)?
				['placeholder' => \app\modules\organisation\Module::t('editDetails', 'paypalAdressPlaceholder')] :
				["class" => 'form-control form-control-color', 'readonly'=> true])) ?>
		</div>
	</div>

	<div class="edit-organisation-button">
		<div class="form-group">
			<div class="col-lg-offset-1 col-lg-11">
				<?= Html::submitButton(\app\modules\organisation\Module::t('editDetails', 'save'), ['class' => 'btn btn-primary', 'name' => 'save-credentials-button']) ?>
				<div class="placeholder"></div>
				<?= Html::a(\app\modules\organisation\Module::t('editDetails', 'backToProfile'), ['details', 'organisationId' => $currentOrgaID], ['class' => 'btn btn-primary delete', 'name' => 'backToProfile-button']); ?>
			</div>
		</div>
	</div>

    <?php ActiveForm::end(); ?>

    <div class="note"><sup>[1]</sup><?= \app\modules\organisation\Module::t('editDetails', 'note1') ?></div>
	<div class="note"><sup>[2]</sup><?= \app\modules\organisation\Module::t('editDetails', 'note2') ?></div>
</div>