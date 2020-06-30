<?php

/* @var $this yii\web\View *
 * @var $profilePicModel app\modules\miscellaneouse\models\formModels\ProfilePicForm
 * @var $userInfo array - siehe UserController
 */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

use app\widgets\Alert;

\app\modules\user\assets\profile\profileDetails\DetailsAsset::register($this);

$this->title = $userInfo['user_name'] . '\'s Player profile';

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

		    <?= Html::submitButton(Yii::t('app', 'upload'), ['class' => 'btn btn-primary upload', 'name' => 'upload-button']) ?>
		    <?php ActiveForm::end(); ?>
		<?php endif; ?>
	</div>

	<!-- Orgas and Teams -->


	<!-- Game Accounts -->
	<div class="header">
		<?= \app\modules\user\Module::t('details', 'gameAccounts') ?>
		<?php if ($userInfo['isMySelfe']) : ?>
			<?php
			    echo Html::a('',
			        [
			            "account/add-game-account",
			            "userId" => $userInfo['user_id']
			        ],
			        ['class' => "glyphicon glyphicon-pencil btn btn-primary upload",
			            'title' => "Add Game Account"
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
                                            "toggle-visibility",
                                            "gameId" => $games['gameId'],
                                            "platformId" => $games['platformId'],
											"userId" => $userInfo['user_id']
                                        ],
                                        ['class' => $games['visible'] == 1 ? "glyphicon glyphicon-eye-open glyphicon-game-account" : "glyphicon glyphicon-eye-close glyphicon-game-account",
                                            'title' => $games['visible'] == 1 ? "not visible" : "visible"
                                        ]
                                    )
                                ?>
								<?php if ($games['editable']): ?>
									<?php
										echo Html::a('',
											[
												"remove-gameid",
												"gameId" => $games['gameId'],
												"platformId" => $games['platformId'],
												"userId" => $userInfo['user_id']
											],
											['class' => "glyphicon glyphicon glyphicon-remove glyphicon-game-account",
												'title' => "delete"
											]
										)
									?>
								<?php endif; ?>
                            <?php endif; ?>
						</div>
					<?php endforeach; ?>
	</div>

	<!-- Social Media -->


	<!-- Badges -->


</div>