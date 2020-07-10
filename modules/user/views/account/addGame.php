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

$this->title = \app\modules\user\Module::t('addGameAccount', 'addGameAccount_header');

?>

<div class="site-add-gameid container ">
    <div class="addGameID bg-darkblue-2 p-5 my-5">
        <h3><?= Html::encode($this->title) ?></h3>

        <?php $form = ActiveForm::begin([
            'id' => 'edit-details-form',
            'options' => [ 'class' => 'form-horizontal'],
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-lg-12\">{error}</div>",
                    'labelOptions' => ['class' => 'col control-label'],
                ],
            ]); ?>

            <div class="row">
                <div class="col-md-6">
					<?= $form->field($model, 'player_id')->textInput(['placeholder' => \app\modules\user\Module::t('addGameAccount', 'addGameAccount_gameAccountPlaceholder'), "class" => 'input-default form-control form-control-color']) ?>
					<?= $form->field($model, 'game_id')->dropDownList($gamesList, ["class" => 'input-default form-control form-control-color', 'prompt' => \app\modules\user\Module::t('addGameAccount', 'addGameAccount_chooseYourGame')]) ?>
                </div>
                <div class="col-md-6">
					<?= $form->field($model, 'visible')->checkbox() ?>

					<?= $form->field($model, 'platform_id')->dropDownList($platformList, ["class" => 'input-default form-control form-control-color', 'prompt' => \app\modules\user\Module::t('addGameAccount', 'addGameAccount_chooseYourPlatform')]) ?>

                </div>
            </div>
            <div class="text-right">
				<?= Html::a(\app\modules\user\Module::t('addGameAccount', 'addGameAccount_backToProfile'), ['user/details', 'userId' => $currentUserID], ['class' => 'outline-btn btn btn-primary delete', 'name' => 'backToProfile-button']); ?>

				<?= Html::submitButton(\app\modules\user\Module::t('addGameAccount', 'addGameAccount_save'), ['class' => 'filled-btn btn btn-primary', 'name' => 'saveGameId-button']) ?>

            </div>






       <?php ActiveForm::end(); ?>
    
    </div>
</div>