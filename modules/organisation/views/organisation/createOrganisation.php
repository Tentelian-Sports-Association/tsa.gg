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
use app\widgets\Alert;

$this->title = \app\modules\organisation\Module::t('createOrganisation', 'header');

/************* Meta Index ****************/
$this->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->url]);
Yii::$app->MetaClass->writeDefaultMeta($this, $this->title, 'Create your own Organisation', '@BettyBirnchen');
/************* End Meta Index ****************/

\app\modules\organisation\assets\createEditOrganisation\CreateOrganisationAsset::register($this);

?>

<div class="site-create-organisation">
    <div class="inner-wrapper">
        <div class="col-12 col-lg-8 bg-darkblue-2">
            <div class="edit-orga mt-4 mb-4">
                <h2><?= Html::encode($this->title) ?></h2>

                <?php $form = ActiveForm::begin([
                'id' => 'edit-details-form',
                'options' => [ 'class' => 'form-horizontal'],
                    'fieldConfig' => [
                        'template' => "{label}\n<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-lg-12\">{error}</div>",
                        'labelOptions' => ['class' => 'col-lg-2 control-label'],
                    ],
                ]); ?>

                    <?= $form->field($model, 'name')->textInput(['placeholder' => \app\modules\organisation\Module::t('createOrganisation', 'name_placeholder'), "class" => 'input-default']) ?>

                    <?= $form->field($model, 'description')->textInput(['placeholder' => \app\modules\organisation\Module::t('createOrganisation', 'description_placeholder'), "class" => 'input-default']) ?>

                    <?= $form->field($model, 'headquater_id')->dropDownList($nationalityList, ["class" => 'input-default', 'prompt' => \app\modules\organisation\Module::t('createOrganisation', 'choose_nationality')]) ?>

                    <?= $form->field($model, 'language_id')->dropDownList($languageList, ["class" => 'input-default', 'prompt' => \app\modules\organisation\Module::t('createOrganisation', 'choose_language')]) ?>
    
                    <?= Html::a(\app\modules\organisation\Module::t('createOrganisation', 'back'), ['/user/details', 'userId' => $currentUserID], ['class' => 'outline-btn btn btn-primary delete float-left', 'name' => 'backToProfile-button']); ?>
                    <?= Html::submitButton(\app\modules\organisation\Module::t('createOrganisation', 'create'), ['class' => 'filled-btn btn btn-primary float-right', 'name' => 'createOrganisation-button']) ?>
                    <div class="clearfix"></div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>