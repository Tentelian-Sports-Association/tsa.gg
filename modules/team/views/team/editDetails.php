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

\app\modules\team\assets\createEditTeam\EditTeamAssets::register($this);


$this->title = 'Edit Details';

?>
<div class="site-edit-teams">
    <?php $form = ActiveForm::begin([
        'id' => 'edit-details',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-7\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-2 control-label'],
		],
	]); ?>

    <div class="edit-team">
		<h1><?= \app\modules\team\Module::t('editTeam', 'edit_title') ?></h1>
    	<!-- Organisation -->
    	<?= $form->field($model, 'name')->textInput(["class" => 'form-control form-control-color','readonly'=> true]) ?>
    	<?= $form->field($model, 'shortCode')->textInput(["class" => 'form-control form-control-color','readonly'=> true]) ?>
    	<?= $form->field($model, 'language_id')->dropDownList($languageList) ?>
    	<?= $form->field($model, 'nationality_id')->dropDownList($nationalityList) ?>
	</div>

    <div class="edit-team-button">
		<div class="form-group">
			<div class="col-lg-offset-1 col-lg-11">
				<?= Html::submitButton(\app\modules\team\Module::t('editTeam', 'save'), ['class' => 'btn btn-primary', 'name' => 'save-credentials-button']) ?>
				<div class="placeholder"></div>
				<?= Html::a(\app\modules\team\Module::t('editTeam', 'back'), ['team-details', 'teamId' => $currentTeamID], ['class' => 'btn btn-primary delete', 'name' => 'backToProfile-button']); ?>
			</div>
		</div>
	</div>

    <?php ActiveForm::end(); ?>

</div>