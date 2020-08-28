<?php
/* @var $this yii\web\View *
 * @var $form yii\bootstrap\ActiveForm
 * @var $gamesList array
 * @var $platformList array
 * @var $model app\modules\user\models\formModels\AddGameIdForm
 */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use app\widgets\Alert;

\app\modules\user\assets\account\addGameID\AddGameIDAsset::register($this);

$this->title = \app\modules\user\Module::t('addGameAccount', 'addGameAccount_header');

/************* Meta Index ****************/
$this->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->url]);
Yii::$app->MetaClass->writeDefaultMeta($this, $this->title, 'Add a game account to your profile', '@BettyBirnchen');
/************* End Meta Index ****************/

?>

<div class="site-add-gameid">
    <div class="inner-wrapper">
        <div class="addGameID bg-darkblue-2 p-5 my-5 col-12 col-lg-8">
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
                <div class="col-12">
                    <div class="float-left">
                        <?= Html::a(\app\modules\user\Module::t('addGameAccount', 'addGameAccount_backToProfile'), ['user/details', 'userId' => $currentUserID], ['class' => 'outline-btn btn btn-primary delete', 'name' => 'backToProfile-button']); ?>
                    </div>
                    <div class="float-right">
                        <?= Html::submitButton(\app\modules\user\Module::t('addGameAccount', 'addGameAccount_save'), ['class' => 'filled-btn btn btn-primary', 'name' => 'saveGameId-button']) ?>
                    </div>
                    <div class="clearfix"></div>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
        <div class="col-4">
            <!-- Add Ad-Banner here -->
        </div>

    </div>
</div>