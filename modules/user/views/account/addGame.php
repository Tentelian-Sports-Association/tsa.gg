<?php
/* @var $this yii\web\View *
 * @var $form yii\bootstrap\ActiveForm
 * @var $gamesList array
 * @var $platformList array
 * @var $model app\modules\user\models\formModels\AddGameIdForm
 */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

\app\modules\user\assets\account\addGameID\AddGameIDAsset::register($this);

$this->title = \app\modules\user\Module::t('addGameID', 'header');

?>

<div class="site-add-gameid">
    <div class="addGameID">
        <h1><?= Html::encode($this->title) ?></h1>

        <?php $form = ActiveForm::begin([
            'id' => 'edit-details-form',
            'options' => [ 'class' => 'form-horizontal'],
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-lg-12\">{error}</div>",
                    'labelOptions' => ['class' => 'col-lg-2 control-label'],
                ],
            ]); ?>

        

            <?= $form->field($model, 'player_id')->textInput(['placeholder' => \app\modules\user\Module::t('addGameID', 'player_idPlaceholder')],["class" => 'form-control form-control-color']) ?>
            
            <?= $form->field($model, 'visible')->checkbox() ?>

            <?= $form->field($model, 'game_id')->dropDownList($gamesList, ["class" => 'form-control form-control-color', 'prompt' => \app\modules\user\Module::t('addGameID', 'choose')]) ?>

            <?= $form->field($model, 'platform_id')->dropDownList($platformList, ["class" => 'form-control form-control-color', 'prompt' => \app\modules\user\Module::t('addGameID', 'choose')]) ?>

            <?= Html::submitButton(\app\modules\user\Module::t('addGameID', 'save'), ['class' => 'btn btn-primary', 'name' => 'saveGameId-button']) ?>
            <?= Html::a(\app\modules\user\Module::t('addGameID', 'backToProfile'), ['profile-details', 'userId' => $currentUserID], ['class' => 'btn btn-primary delete', 'name' => 'backToProfile-button']); ?>

        <?php ActiveForm::end(); ?>
    
    </div>
</div>