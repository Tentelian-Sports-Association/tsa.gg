<?php
/* @var $this yii\web\View *
 * @var $form yii\bootstrap\ActiveForm
 * @var $languageList array
 * @var $nationalityList array
 * @var $currentUserID
 * @var $model app\modules\organisation\models\formModels\CreateOrganisationForm
 */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

\app\modules\organisation\assets\createEditOrganisation\CreateOrganisationAsset::register($this);

$this->title = \app\modules\organisation\Module::t('createOrganisation', 'header');


?>

<div class="site-create-organisation">
    <div class="inner-wrapper">
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

            

            <?= $form->field($model, 'name')->textInput(['placeholder' => \app\modules\organisation\Module::t('createOrganisation', 'name_placeholder')],["class" => 'form-control form-control-color']) ?>

            <?= $form->field($model, 'description')->textInput(['placeholder' => \app\modules\organisation\Module::t('createOrganisation', 'description_placeholder')],["class" => 'form-control form-control-color']) ?>

            <?= $form->field($model, 'headquater_id')->dropDownList($nationalityList, ["class" => 'form-control form-control-color', 'prompt' => \app\modules\organisation\Module::t('createOrganisation', 'choose_nationality')]) ?>

            <?= $form->field($model, 'language_id')->dropDownList($languageList, ["class" => 'form-control form-control-color', 'prompt' => \app\modules\organisation\Module::t('createOrganisation', 'choose_language')]) ?>

            <?= Html::submitButton(\app\modules\organisation\Module::t('createOrganisation', 'create'), ['class' => 'btn btn-primary', 'name' => 'createOrganisation-button']) ?>
            <?= Html::a(\app\modules\organisation\Module::t('createOrganisation', 'back'), ['user/details', 'userId' => $currentUserID], ['class' => 'outline-btn btn btn-primary delete float-left', 'name' => 'backToProfile-button']); ?>

        <?php ActiveForm::end(); ?>
        
        </div>
    </div>
</div>