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
use app\widgets\Alert;

$this->title = \app\modules\team\Module::t('createTeam', 'create_title');

/************* Meta Index ****************/
$this->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->url]);
Yii::$app->MetaClass->writeDefaultMeta($this, $this->title, 'Create your own Team', '@BettyBirnchen');
/************* End Meta Index ****************/

\app\modules\team\assets\createEditTeam\CreateTeamAssets::register($this);

?>

<div class="site-create-team">
    <div class="inner-wrapper">
        <div class="col-10 bg-darkblue-2 mt-4 mb-4 pb-4">
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

                <?= $form->field($model, 'name')->textInput(["class" => 'input-default', 'placeholder' => \app\modules\team\Module::t('createTeam', 'namePlaceholder')],["class" => 'form-control form-control-color']) ?>

                <?= $form->field($model, 'shortCode')->textInput(["class" => 'input-default', 'placeholder' => \app\modules\team\Module::t('createTeam', 'shortCodePlaceholder')],["class" => 'form-control form-control-color']) ?>
                
                <?= $form->field($model, 'nationality_id')->dropDownList($nationalityList, ["class" => 'form-control form-control-color input-default', 'prompt' => \app\modules\team\Module::t('createTeam', 'choose_nationality')]) ?>

                <?= $form->field($model, 'language_id')->dropDownList($languageList, ["class" => 'form-control form-control-color input-default', 'prompt' => \app\modules\team\Module::t('createTeam', 'choose_language')]) ?>

                <?= $form->field($model, 'mode_id')->dropDownList($modeList, ["class" => 'form-control form-control-color input-default', 'prompt' => \app\modules\team\Module::t('createTeam', 'choose_mode')]) ?>

                <?= $form->field($model, 'gameName')->textInput(["class" => 'form-control form-control-color input-default','readonly'=> true]) ?>

                <?= Html::submitButton(\app\modules\team\Module::t('createTeam', 'save'), ['class' => 'filled-btn float-right', 'name' => 'createTeam-button']) ?>
                <div class="clearfix"></div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>