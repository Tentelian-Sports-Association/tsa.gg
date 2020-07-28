<?php
/* @var $this yii\web\View *
 * @var $form yii\bootstrap4\ActiveForm
 * @var $languageList array
 * @var $nationalityList array
 * @var $modeList array
 * @var $gamesList array
 * @var $gameId
 * @var $model app\modules\teams\models\formModels\CreateTeamForm
 */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

\app\modules\team\assets\createEditTeam\CreateTeamAssets::register($this);

$this->title = \app\modules\team\Module::t('createTeam', 'create_title');

?>

<div class="site-create-team">
    <div class="title">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>

    <?php $form = ActiveForm::begin([
    'id' => 'edit-details-form',
    'options' => [ 'class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-lg-12\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-2 control-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'name')->textInput(['placeholder' => \app\modules\team\Module::t('createTeam', 'namePlaceholder')],["class" => 'form-control form-control-color']) ?>

        <?= $form->field($model, 'shortCode')->textInput(['placeholder' => \app\modules\team\Module::t('createTeam', 'shortCodePlaceholder')],["class" => 'form-control form-control-color']) ?>
        
        <?= $form->field($model, 'nationality_id')->dropDownList($nationalityList, ["class" => 'form-control form-control-color', 'prompt' => \app\modules\team\Module::t('createTeam', 'choose_nationality')]) ?>

        <?= $form->field($model, 'language_id')->dropDownList($languageList, ["class" => 'form-control form-control-color', 'prompt' => \app\modules\team\Module::t('createTeam', 'choose_language')]) ?>

        <?= $form->field($model, 'mode_id')->dropDownList($modeList, ["class" => 'form-control form-control-color', 'prompt' => \app\modules\team\Module::t('createTeam', 'choose_mode')]) ?>

        <?= $form->field($model, 'gameName')->textInput(["class" => 'form-control form-control-color','readonly'=> true]) ?>

        <?= Html::submitButton(\app\modules\team\Module::t('createTeam', 'save'), ['class' => 'btn btn-primary', 'name' => 'createTeam-button']) ?>

    <?php ActiveForm::end(); ?>
</div>