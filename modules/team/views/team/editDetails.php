<?php

/* @var $this yii\web\View *
 * @var $form yii\bootstrap4\ActiveForm
 * @var $languageList array
 * @var $nationalityList array
 * @var $currentTeamID
 * @var $model app\modules\organisation\models\DetailsForm
 */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

use app\widgets\Alert;

$this->title = \app\modules\team\Module::t('editTeam', 'edit_title');

/************* Meta Index ****************/
$this->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->url]);
Yii::$app->MetaClass->writeDefaultMeta($this, $this->title, 'Edit details for team ' . $model->name, '@BettyBirnchen');
/************* End Meta Index ****************/

\app\modules\team\assets\createEditTeam\EditTeamAssets::register($this);


?>
<div class="site-edit-teams">
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

			<div class="edit-team">
				<h2><?= \app\modules\team\Module::t('editTeam', 'edit_title') ?></h2>
				<!-- Organisation -->
				<?= $form->field($model, 'name', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(["class" => 'form-control form-control-color input-default','readonly'=> true]) ?>
				<?= $form->field($model, 'shortCode', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->textInput(["class" => 'form-control form-control-color input-default','readonly'=> true]) ?>
				<?= $form->field($model, 'language_id', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->dropDownList($languageList, ["class" => 'form-control form-control-color input-default']) ?>
				<?= $form->field($model, 'nationality_id', ['options' => ['class' => 'col-12 col-lg-6 float-left']])->dropDownList($nationalityList, ["class" => 'form-control form-control-color input-default']) ?>
				<div class="clearfix"></div>
			</div>

			<div class="edit-team-button">
				<div class="form-group">
					<div class="col-lg-12">
						<?= Html::submitButton(\app\modules\team\Module::t('editTeam', 'save'), ['class' => 'filled-btn float-right', 'name' => 'save-credentials-button']) ?>
						<div class="placeholder"></div>
						<?= Html::a(\app\modules\team\Module::t('editTeam', 'back'), ['team-details', 'teamId' => $currentTeamID], ['class' => 'outline-btn btn btn-primary delete float-left', 'name' => 'backToProfile-button']); ?>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>

			<?php ActiveForm::end(); ?>
		</div>
		<div class="col-12 col-lg-4">
		</div>
	</div>
</div>