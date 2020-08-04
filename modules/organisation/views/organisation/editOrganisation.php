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

$this->title = \app\modules\organisation\Module::t('editDetails', 'editOrganisation_header');

/************* Meta Index ****************/
$this->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->url]);
Yii::$app->MetaClass->writeDefaultMeta($this, $this->title, 'Edit details for Organisation ' . $model->name, '@BettyBirnchen');
/************* End Meta Index ****************/

\app\modules\organisation\assets\createEditOrganisation\EditOrganisationAsset::register($this);

?>

<div class="site-edit-organisation">
	<div class="inner-wrapper">
		<div class="col-12 col-lg-8 bg-darkblue-2">
			<?php $form = ActiveForm::begin([
				'id' => 'edit-details',
				'options' => ['class' => 'form-horizontal'],
				'fieldConfig' => [
					'template' => "{label}\n{input}\n{error}",
					'labelOptions' => ['class' => 'col-lg-6 control-label'],
				],
			]); ?>

			<div class="edit-organisation col-12">
				<h2><?= \app\modules\organisation\Module::t('editDetails', 'editOrganisation') ?></h2>
				<!-- Organisation -->
				<?= $form->field($model, 'name', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(["class" => 'form-control form-control-color input-default','readonly'=> true]) ?>
				<?= $form->field($model, 'description', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(["class" => 'form-control form-control-color input-default','readonly'=> false]) ?>
				<?= $form->field($model, 'languageId', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->dropDownList($languageList, ["class" => 'form-control form-control-color input-default']) ?>
				<?= $form->field($model, 'headquaterId', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->dropDownList($nationalityList, ["class" => 'form-control form-control-color input-default'], array("disabled" => "disabled")) ?>
				<div class="clearfix"></div>
			</div>

			<div class="edit-organisation-social col-12">
				<h2><?= \app\modules\organisation\Module::t('editDetails', 'editOrgaSocials') ?></h2>

				<!-- Organisation Details -->
				<?= $form->field($model, 'business_mail', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(['class' => 'form-control form-control-color input-default'], (empty($model->business_mail) || $model->socialEditable?
					['placeholder' => \app\modules\organisation\Module::t('editDetails', 'businessMailPlaceholder')] :
					["class" => 'form-control form-control-color', 'readonly'=> true])) ?>
				<?= $form->field($model, 'twitter_name', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(['class' => 'form-control form-control-color input-default'], (empty($model->twitter_name) || $model->socialEditable?
					['placeholder' => \app\modules\organisation\Module::t('editDetails', 'twitterNamePlaceholder')] :
					["class" => 'form-control form-control-color', 'readonly'=> true])) ?>
				<?= $form->field($model, 'twitter_channel', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(['class' => 'form-control form-control-color input-default'], (empty($model->twitter_channel)?
					['placeholder' => \app\modules\organisation\Module::t('editDetails', 'twitterChannelPlaceholder')] :
					["class" => 'form-control form-control-color', 'readonly'=> false])) ?>
				<?= $form->field($model, 'discord_server', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(['class' => 'form-control form-control-color input-default'], (empty($model->discord_server) || $model->socialEditable?
					['placeholder' => \app\modules\organisation\Module::t('editDetails', 'discordServerPlaceholder')] :
					["class" => 'form-control form-control-colort', 'readonly'=> true])) ?>
				<?= $form->field($model, 'teamspeak_server', ['options' => ['class' => 'col-12 col-lg-6 float-left ']])->textInput(['class' => 'form-control form-control-color input-default'], (empty($model->teamspeak_server) || $model->socialEditable?
					['placeholder' => \app\modules\organisation\Module::t('editDetails', 'teamspeakServerPlaceholder'), 'readonly'=> true] :
					["class" => 'form-control input-default', 'readonly'=> true])) ?>
				<div class="clearfix"></div>
			</div>

			<div class="edit-organisation-payment col-12">
				<h2><?= \app\modules\organisation\Module::t('editDetails', 'editOrgaBillingInformations') ?></h2>

				<!-- Organisation Payment -->
				<div class="edit-organisation-payment-left">
					<?= $form->field($model, 'ownerName', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(['class' => 'form-control form-control-color input-default'], ['placeholder' => \app\modules\organisation\Module::t('editDetails', 'ownerNamePlaceholder'), 'readonly'=> true]) ?>
					<?= $form->field($model, 'zip_code', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(['class' => 'form-control form-control-color input-default'], (empty($model->zip_code) || $model->paymentEditable?
						['placeholder' => \app\modules\organisation\Module::t('editDetails', 'zipCodePlaceholder')] :
						["class" => 'form-control form-control-color', 'readonly'=> true])) ?>
					<?= $form->field($model, 'city', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(['class' => 'form-control form-control-color input-default'], (empty($model->city)?
						['placeholder' => \app\modules\organisation\Module::t('editDetails', 'cityPlaceholder')] :
						["class" => 'form-control form-control-color ', 'readonly'=> true])) ?>
					<?= $form->field($model, 'street', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(['class' => 'form-control form-control-color input-default'], (empty($model->street)?
						['placeholder' => \app\modules\organisation\Module::t('editDetails', 'streetPlaceholder')] :
						["class" => 'form-control form-control-color', 'readonly'=> true])) ?>
					<div class="clearfix"></div>
				</div>

				<div class="edit-organisation-payment-right">
					<?= $form->field($model, 'account_owner', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(['class' => 'form-control form-control-color input-default'], (empty($model->account_owner)?
						['placeholder' => \app\modules\organisation\Module::t('editDetails', 'accountOwnerPlaceholder')] :
						["class" => 'form-control form-control-color', 'readonly'=> true])) ?>
					<?= $form->field($model, 'iban', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(['class' => 'form-control form-control-color input-default'], (empty($model->iban)?
						['placeholder' => \app\modules\organisation\Module::t('editDetails', 'ibanPlaceholder')] :
						["class" => 'form-control form-control-color', 'readonly'=> true])) ?>
					<?= $form->field($model, 'bic', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(['class' => 'form-control form-control-color input-default'], (empty($model->bic)?
						['placeholder' => \app\modules\organisation\Module::t('editDetails', 'bicPlaceholder')] :
						["class" => 'form-control form-control-color', 'readonly'=> true])) ?>
					<?= $form->field($model, 'paypal_adress', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(['class' => 'form-control form-control-color input-default'], (empty($model->paypal_adress)?
						['placeholder' => \app\modules\organisation\Module::t('editDetails', 'paypalAdressPlaceholder')] :
						["class" => 'form-control form-control-color', 'readonly'=> true])) ?>
					<div class="clearfix"></div>
				</div>
			</div>

			<div class="edit-organisation-button">
				<div class="form-group">
					<div class="col-lg-12">
						<?= Html::submitButton(\app\modules\organisation\Module::t('editDetails', 'save'), ['class' => 'filled-btn float-right', 'name' => 'save-credentials-button']) ?>
						<div class="placeholder"></div>
						<?= Html::a(\app\modules\organisation\Module::t('editDetails', 'backToProfile'), ['details', 'organisationId' => $currentOrgaID], ['class' => 'outline-btn btn btn-primary delete float-left', 'name' => 'backToProfile-button']); ?>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>

			<?php ActiveForm::end(); ?>
		</div>
		<div class="col-lg-12">
			<div class="note"><sup>[1]</sup><?= \app\modules\organisation\Module::t('editDetails', 'note1') ?></div>
			<div class="note"><sup>[2]</sup><?= \app\modules\organisation\Module::t('editDetails', 'note2') ?></div>
		</div>
		<div class="col-12 col-lg-4">
		</div>
	</div>
</div>