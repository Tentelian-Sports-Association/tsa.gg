<?php
/* @var $this yii\web\View *
 * @var $form yii\bootstrap\ActiveForm
 * @var $languageList array
 * @var $nationalityList array
 * @var $model app\modules\organisation\models\formModels\CreateOrganisationForm
 */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

\app\modules\organisation\assets\createEditOrganisation\CreateOrganisationAsset::register($this);

$this->title = \app\modules\organisation\Module::t('createOrganisation', 'header');


?>

<div class="site-create-organisation">
    <div class="title">
        <h1><?= Html::encode($this->title) ?></h1>

        <?php $form = ActiveForm::begin([
        'id' => 'edit-details-form',
        'options' => [ 'class' => 'form-horizontal'],
            'fieldConfig' => [
                'template' => "{label}\n<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-lg-12\">{error}</div>",
                'labelOptions' => ['class' => 'col-lg-2 control-label'],
            ],
        ]); ?>

        

        <?= $form->field($model, 'name')->textInput(['placeholder' => \app\modules\organisation\Module::t('createOrganisation', 'namePlaceholder')],["class" => 'form-control form-control-color']) ?>

        <?= $form->field($model, 'description')->textInput(['placeholder' => \app\modules\organisation\Module::t('createOrganisation', 'descriptionPlaceholder')],["class" => 'form-control form-control-color']) ?>

        <?= $form->field($model, 'headquater_id')->dropDownList($nationalityList, ["class" => 'form-control form-control-color', 'prompt' => \app\modules\organisation\Module::t('createOrganisation', 'choose')]) ?>

        <?= $form->field($model, 'language_id')->dropDownList($languageList, ["class" => 'form-control form-control-color', 'prompt' => \app\modules\organisation\Module::t('createOrganisation', 'choose')]) ?>

        <?= Html::submitButton(\app\modules\organisation\Module::t('createOrganisation', 'save'), ['class' => 'btn btn-primary', 'name' => 'createOrganisation-button']) ?>

    <?php ActiveForm::end(); ?>
    
    </div>
</div>