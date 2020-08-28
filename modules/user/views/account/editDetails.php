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
use app\widgets\Alert;

\app\modules\user\assets\account\profileDetails\EditDetailsAsset::register($this);

$this->title = \app\modules\user\Module::t('editDetails', 'editDetails_Title');

/************* Meta Index ****************/
$this->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->url]);
Yii::$app->MetaClass->writeDefaultMeta($this, $this->title, 'Edit Details for user ' . $model->username, '@BettyBirnchen');
/************* End Meta Index ****************/

?>

<div class="site-edit-details">
	<div class="inner-wrapper">
		<div class="col-12 col-lg-8">
			<?php $form = ActiveForm::begin([
				'id' => 'edit-details',
				'options' => ['class' => 'form-horizontal'],
				'fieldConfig' => [
					'template' => "{label}\n{input}\n{error}",
					'labelOptions' => ['class' => 'control-label'],
				],
			]); ?>

			<div class="edit-user">
				<h2><?= \app\modules\user\Module::t('editDetails', 'editDetails_editPlayerDetailsHeader') ?></h2>
				<!-- User -->
				<?= $form->field($model, 'username', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(["class" => 'form-control form-control-color input-default','readonly'=> true]) ?>
				<?= $form->field($model, 'email', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(["class" => 'form-control form-control-color input-default','readonly'=> true]) ?>
				<?= $form->field($model, 'birthday', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(["class" => 'form-control form-control-color input-default','readonly'=> true]) ?>
				<?= $form->field($model, 'genderId', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->dropDownList($genderList, ["class" => 'form-control form-control-color input-default']) ?>
				<?= $form->field($model, 'languageId', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->dropDownList($languageList, ["class" => 'form-control form-control-color input-default']) ?>
				<?= $form->field($model, 'nationalityId', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->dropDownList($nationalityList, [ 'class'=>'form-control form-control-color input-default','disabled' => true]) ?>
				<div class="clearfix"></div>
			</div>

			<div class="edit-user-details">
				<h2><?= \app\modules\user\Module::t('editDetails', 'editDetails_editPrivateDetailsHeader') ?></h2>

				<!-- Use Details -->
				<?= $form->field($model, 'pre_name', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(['placeholder' => \app\modules\user\Module::t('editDetails', 'editDetails_preNamePlaceholder'),'class' => 'form-control form-control-color input-default', 'readonly'=> empty($model->pre_name)? false : true]); ?>
				<?= $form->field($model, 'last_name', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(['placeholder' => \app\modules\user\Module::t('editDetails', 'editDetails_lastNamePlaceholder'), 'class' => 'form-control form-control-color input-default', 'readonly'=> empty($model->last_name)? false : true]); ?>
				<?= $form->field($model, 'zip_code', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(['placeholder' => \app\modules\user\Module::t('editDetails', 'editDetails_zipCodePlaceholder'), 'class' => 'form-control form-control-color input-default', 'readonly'=> empty($model->zip_code)? false : true]); ?>
				<?= $form->field($model, 'city', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(['placeholder' => \app\modules\user\Module::t('editDetails', 'editDetails_cityPlaceholder'), 'class' => 'form-control form-control-color input-default', 'readonly'=> empty($model->city)? false : true]); ?>
				<?= $form->field($model, 'street', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(['placeholder' => \app\modules\user\Module::t('editDetails', 'editDetails_streetPlaceholder'), 'class' => 'form-control form-control-color input-default', 'readonly'=> empty($model->street)? false : true]); ?>
				<?= $form->field($model, 'phone', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(['placeholder' => \app\modules\user\Module::t('editDetails', 'editDetails_phonePlaceholder'), 'class' => 'form-control form-control-color input-default', 'readonly'=> empty($model->phone)? false : true]); ?>
				<div class="clearfix"></div>
			</div>

			<div class="edit-user-social">
				<h2><?= \app\modules\user\Module::t('editDetails', 'editDetails_editSocialsDetailsHeader') ?></h2>
					<?= $form->field($model, 'twitter_name', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(['placeholder' => \app\modules\user\Module::t('editDetails', 'editDetails_twitterNamePlaceholder'), 'class' => 'form-control form-control-color input-default']); ?>
					<?= $form->field($model, 'twitter_channel', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(['placeholder' => \app\modules\user\Module::t('editDetails', 'editDetails_twitterChannelPlaceholder'), 'class' => 'form-control form-control-color input-default']); ?>
					<?= $form->field($model, 'discord_name', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(['placeholder' => \app\modules\user\Module::t('editDetails', 'editDetails_discordNamePlaceholder'), 'class' => 'form-control form-control-color input-default']); ?>
					<?= $form->field($model, 'discord_server', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(['placeholder' => \app\modules\user\Module::t('editDetails', 'editDetails_discordServerPlaceholder'), 'class' => 'form-control form-control-color input-default']); ?>
					<?= $form->field($model, 'teamspeak_server', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(['placeholder' => \app\modules\user\Module::t('editDetails', 'editDetails_teamspeakServerPlaceholder'), 'class' => 'form-control form-control-color input-default', 'readonly'=> true]); ?>
				<div class="clearfix"></div>
			</div>

			<div class="edit-user-button">
				<div class="form-group">
					<div class="col-12">
						<?= Html::submitButton(\app\modules\user\Module::t('editDetails', 'editDetails_save'), ['class' => 'filled-btn float-right', 'name' => 'save-credentials-button']) ?>
						<div class="placeholder"></div>
						<?= Html::a(\app\modules\user\Module::t('editDetails', 'backToProfile'), ['user/details', 'userId' => $currentUserID], ['class' => 'outline-btn btn btn-primary delete float-left', 'name' => 'backToProfile-button']); ?>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>

			<?php ActiveForm::end(); ?>
			<div class="note"><sup>[1]</sup><?= \app\modules\user\Module::t('editDetails', 'editDetails_note1') ?></div>
			<div class="note"><sup>[2]</sup><?= \app\modules\user\Module::t('editDetails', 'editDetails_note2') ?></div>
		</div>
		<div class="col-4">
			<!-- Add Ad-Banner Here -->
		</div>
	</div>
</div>