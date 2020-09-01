<?php

/* @var $this yii\web\View *
 * @var $form yii\bootstrap\ActiveForm
 * @var $genderList array
 * @var $languageList array
 * @var $nationalityList array
 * @var $model app\modules\user\models\RegisterForm
 */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Modal;
use yii\jui\DatePicker;
use app\widgets\Alert;

\app\modules\user\assets\account\register\RegisterAsset::register($this);

$this->title = \app\modules\user\Module::t('register', 'register_header');

/************* Meta Index ****************/
$this->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->url]);
Yii::$app->MetaClass->writeDefaultMeta($this, $this->title, 'Register your Account', '@BettyBirnchen');
/************* End Meta Index ****************/

?>

<div class="login-container">
    <div class="login-container-inner container d-flex align-items-center justify-content-center">
		
		<?php $form = ActiveForm::begin([
	        'id' => 'register-form',
	        'options' => ['class' => 'form-horizontal needs-validation col-12 col-lg-7 px-0','novalidate' => ' '],
	        'fieldConfig' => [
	            'template' => "{label}\n<div class=\"col-12\">{input}</div>\n<div class=\"col-12\">{error}</div>",
	            'labelOptions' => ['class' => 'col-12 control-label'],
	        ],
    	]); ?>

        <h2><?= Html::encode($this->title) ?></h2>
        <div class="form-group two-input row">
            <div class="col-12 col-lg-6">
                <?= $form->field($model, 'username')->textInput(['autofocus' => true,'class' => 'input-default form-control','required' => true]) ?>
            </div>

            <div class="col-12 col-lg-6">
                <?= $form->field($model, 'email')->textInput(['class' => 'input-default form-control','required' => true]) ?>
            </div>
        </div>

        <div class="form-group two-input row">
            <div class="col-12 col-lg-6">
                <?= $form->field($model, 'password')->passwordInput(['class' => 'input-default form-control','required' => true]) ?>
            </div>

            <div class="col-12 col-lg-6">
                <?= $form->field($model, 'passwordRepeate')->passwordInput(['class' => 'input-default form-control','required' => true]) ?>
            </div>
        </div>
        
        <div class="form-group two-input row">
            <div class="col-12 col-lg-6">
                <!--
                <label>Geburtsdatum</label>
                <input type="date" id="datepicker" class="input-default w-100" >
                -->

                <?= $form->field($model,'birthday')->widget(DatePicker::className(),[
                        'options' => ['class' => 'input-default form-control','required' => true]
                    ]) ?>
                
            </div>


            <div class="col-12 col-lg-6">
                <?= $form->field($model, 'genderId')->dropDownList($genderList, ['class' => 'select-wrapper input-default']) ?>
            </div>
        </div>

        <div class="form-group two-input row">
            <div class="col-12 col-lg-6">
                <?= $form->field($model, 'nationalityId')->dropDownList($nationalityList, ['class' => 'select-wrapper input-default']) ?>
            </div>

            <div class="col-12 col-lg-6">
                <?= $form->field($model, 'languageId')->dropDownList($languageList, ['class' => 'select-wrapper input-default']) ?>
            </div>
        </div>

        <div class="form-group">
            <div class="col d-flex justify-content-end">
                <?= Html::submitButton(\app\modules\user\Module::t('register', 'register_registerButton'), ['class' => 'filled-btn', 'name' => 'register-button']) ?>
            </div>
        </div>

    	<?php ActiveForm::end(); ?>
	</div>
    <div class="ad-block-container row">
        <div class="ad-block-item col-12">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- tsa.gg Register Footer -->
            <ins class="adsbygoogle"
                    style="display:block"
                    data-ad-client="ca-pub-8480651532892152"
                    data-ad-slot="3604082440"
                    data-ad-format="auto"
                    data-full-width-responsive="true"></ins>
            <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </div>
</div>