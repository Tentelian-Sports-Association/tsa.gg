<?php

/* @var $this yii\web\View *
 * @var $organisationPicModel app\modules\miscellaneouse\models\formModels\ProfilePicForm
 * @var $organisation array,
 * @var $isOwner bool,
 * @var $organisationSocial array,
 * @var $organisationMember array,
 * @var $orgaInfo array - siehe OrgaController
 */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

use app\widgets\Alert;

\app\modules\user\assets\profile\profileDetails\DetailsAsset::register($this);

//$this->title = $userInfo['user_name'] . '\'s Player profile';

?>

<div class="site-profileDetails">
    <div class="avatarPanel">
		<div class="avatarSmall">
			<?= Html::img(Yii::$app->HelperClass->checkImage('/images/avatars/organisation/', $organisation['id']) . '.webp', ['aria-labelledby' => 'PeSp Image', 'alt' => $organisation['id']. '.webp', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/avatars/organisation/', $organisation['id']) . '.png\'']); ?>		
		</div>
		<?php if ($isOwner) : ?>
		    <?php $form = ActiveForm::begin([
		        'id' => 'profile-pic-form',
		        'options' => ['enctype' => 'multipart/form-data'],
		        'fieldConfig' => [
		            'template' => "<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-7\">{error}</div>"
		        ],
		    ]); ?>
		    <?= $form->field($organisationPicModel, 'id')->hiddenInput()->label(false); ?>
		    <?= $form->field($organisationPicModel, 'file')->fileInput() ?>

		    <?= Html::submitButton(Yii::t('app', 'upload'), ['class' => 'btn btn-primary upload', 'name' => 'upload-button']) ?>
		    <?php ActiveForm::end(); ?>
		<?php endif; ?>
	</div>
</div>