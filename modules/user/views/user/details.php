<?php

/* @var $this yii\web\View *
 * @var $profilePicModel app\modules\miscellaneouse\models\formModels\ProfilePicForm
 * @var $userInfo array - siehe UserController
 */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

use app\widgets\Alert;

\app\modules\user\assets\profile\profileDetails\DetailsAsset::register($this);

$this->title = $userInfo['user_name'] . '\'s ' . \app\modules\user\Module::t('userDetails', 'userDetails_title');

?>

<div class="site-profileDetails">
    <div class="avatarPanel">
		<div class="avatarSmall">
			<?= Html::img(Yii::$app->HelperClass->checkImage('/images/avatars/user/', $userInfo['user_id']) . '.webp', ['aria-labelledby' => 'PeSp Image', 'alt' => $userInfo['user_id']. '.webp', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/avatars/user/', $userInfo['user_id']) . '.png\'']); ?>		
		</div>
		<?php if ($userInfo['isMySelfe']) : ?>
		    <?php $form = ActiveForm::begin([
		        'id' => 'profile-pic-form',
		        'options' => ['enctype' => 'multipart/form-data'],
		        'fieldConfig' => [
		            'template' => "<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-7\">{error}</div>"
		        ],
		    ]); ?>
		    <?= $form->field($profilePicModel, 'id')->hiddenInput()->label(false); ?>
		    <?= $form->field($profilePicModel, 'file')->fileInput() ?>

		    <?= Html::submitButton(\app\modules\user\Module::t('userDetails', 'userDetails_uploadImage'), ['class' => 'btn btn-primary upload', 'name' => 'upload-button']) ?>
		    <?php ActiveForm::end(); ?>
		<?php endif; ?>
	</div>

	<?php if ($userInfo['isMySelfe']) : ?>
		<?php
			echo Html::a('',
			    [
			        "account/edit-details",
			        "userId" => $userInfo['user_id']
			    ],
			    ['class' => "btn btn-primary upload",
			        'title' => \app\modules\user\Module::t('userDetails', 'userDetails_info_editAccountDetails')
			    ]
			)
		?>
	<?php endif; ?>

	<!-- Orgas and Teams -->


	<!-- Game Accounts -->
	<div class="header">
		<?= \app\modules\user\Module::t('userDetails', 'userDetails_gameAccountHeader') ?>
		<?php if ($userInfo['isMySelfe']) : ?>
			<?php
			    echo Html::a('',
			        [
			            "account/add-game-account",
			            "userId" => $userInfo['user_id']
			        ],
			        ['class' => "btn btn-primary upload",
			            'title' => \app\modules\user\Module::t('userDetails', 'userDetails_info_addGameAccount')
			        ]
			    )
			?>
		<?php endif; ?>
	</div>
	
	
	<div>
		<?php foreach ($userGames as $games) : ?>
			<div class="gameEntry">
				<div class="gamePlatformIMG">
					<?= Html::img(Yii::$app->HelperClass->checkImage('/images/platforms/', $games['platformIcon']) . '.webp', ['aria-labelledby' => 'PeSp Image', 'alt' => $games['platformIcon'] . '.webp', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/platforms/', $games['platformIcon']) . '.png\'']); ?>		
				</div>
				<div class="gameIMG">
					<?= Html::img(Yii::$app->HelperClass->checkImage('/images/games/', $games['gameIcon']) . '.webp', ['aria-labelledby' => 'PeSp Image', 'alt' => $games['gameIcon'] . '.webp', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/games/', $games['gameIcon']) . '.png\'']); ?>		
				</div>

				<div class="userAccountID"><?= ($games['visible'] || $userInfo['isMySelfe'])? $games['playerId'] : 'ID Not Public' ?></div>
							
				<?php if ($userInfo['isMySelfe']): ?>
                    <?php
                        echo Html::a('',
                            [
                                "account/toggle-game-account",
                                "gameId" => $games['gameId'],
                                "platformId" => $games['platformId'],
								"userId" => $userInfo['user_id']
                            ],
                            ['class' => $games['visible'] == 1 ? "btn btn-primary upload" : "glyphicon glyphicon-eye-close glyphicon-game-account btn btn-primary upload",
                                'title' => $games['visible'] == 1 ? \app\modules\user\Module::t('userDetails', 'userDetails_info_gameAccountVisible') : \app\modules\user\Module::t('userDetails', 'userDetails_info_gameAccountNotVisible')
                            ]
                        )
                    ?>
					<?php if ($games['editable']): ?>
						<?php
							echo Html::a('',
								[
									"account/remove-game-account",
									"gameId" => $games['gameId'],
									"platformId" => $games['platformId'],
									"userId" => $userInfo['user_id']
								],
								['class' => "	btn btn-primary upload",
									'title' => \app\modules\user\Module::t('userDetails', 'userDetails_info_deleteGameAccount')
								]
							)
						?>
					<?php endif; ?>
                <?php endif; ?>
			</div>
		<?php endforeach; ?>
	</div>

	<!-- Social Media -->
	<div>
		<div class="header">
			<?= \app\modules\user\Module::t('userDetails', 'userDetails_socialMediaHeader') ?>
		</div>
	</div>

	<!-- Badges -->
	<div>
		<div class="header">
			<?= \app\modules\user\Module::t('userDetails', 'userDetails_badgesHeader') ?>
		</div>
	</div>

	<!-- Coins -->
	<div>
		<div class="header">
			<?= \app\modules\user\Module::t('userDetails', 'userDetails_coinsHeader') ?>
		</div>
	</div>

	<!-- Open Invites -->
	<div>
		<div class="header">
			<?= \app\modules\user\Module::t('userDetails', 'userDetails_invitesHeader') ?>
		</div>
	</div>

	<!-- Open Applications -->
	<div>
		<div class="header">
			<?= \app\modules\user\Module::t('userDetails', 'userDetails_applicationsHeader') ?>
		</div>
	</div>

	<!-- Statistics -->

</div>