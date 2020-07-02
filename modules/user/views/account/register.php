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

use kartik\date\DatePicker;

//print_r(Yii::$app->params['bsVersion']);
//die();

\app\modules\user\assets\account\register\RegisterAsset::register($this);

$this->title = \app\modules\user\Module::t('register', 'register_header');

?>

<div class="login-container">
    <div class="login-container-inner container d-flex align-items-center justify-content-center">
		
		<?php $form = ActiveForm::begin([
	        'id' => 'register-form',
	        'options' => ['class' => 'form-horizontal'],
	        'fieldConfig' => [
	            'template' => "{label}\n<div class=\"col-12\">{input}</div>\n<div class=\"col-12\">{error}</div>",
	            'labelOptions' => ['class' => 'col-12 control-label'],
	        ],
    	]); ?>

        <h2><?= Html::encode($this->title) ?></h2>
        <div class="form-group two-input row">
            <div class="col-12 col-lg-6">
                <?= $form->field($model, 'username')->textInput(['autofocus' => true,'class' => 'input-default ']) ?>
            </div>

            <div class="col-12 col-lg-6">
                <?= $form->field($model, 'email')->textInput(['class' => 'input-default ']) ?>
            </div>
        </div>

        <div class="form-group two-input row">
            <div class="col-12 col-lg-6">
                <?= $form->field($model, 'password')->passwordInput(['class' => 'input-default']) ?>
            </div>

            <div class="col-12 col-lg-6">
                <?= $form->field($model, 'passwordRepeate')->passwordInput(['class' => 'input-default ']) ?>
            </div>
        </div>
        
        <div class="form-group two-input row">
            <div class="col-12 col-lg-6">
                <!--
                <label>Geburtsdatum</label>
                <input type="date" id="datepicker" class="input-default w-100" >
                -->

                <?= $form->field($model, 'birthday')->widget(DatePicker::className(), [
        		    'options' => [
            		    'class' => 'form-control form-control-color input-default'
        		    ],
        		    'pluginOptions' => [
            		    'autoclose' => true,
            		    'format' => 'dd.mm.yyyy'
        		    ]
    		    ]); ?>
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
    <div class="ad-container container px-0">
        <img src="https://via.placeholder.com/1170x264.png" class="img-fluid" alt="">
    </div>
</div>