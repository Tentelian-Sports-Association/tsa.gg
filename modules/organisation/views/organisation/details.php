<?php

/* @var $this yii\web\View *
 * @var $organisationPicModel app\modules\miscellaneouse\models\formModels\ProfilePicForm
 * @var $organisation array,
 * @var $OrganisationOwner
 * @var $isOwner bool,
 * @var $organisationSocial array,
 * @var $organisationMember array,
 */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

use app\widgets\Alert;

\app\modules\organisation\assets\organisationDetails\DetailsAssets::register($this);

//$this->title = $userInfo['user_name'] . '\'s Player profile';

/** Usabel Variables **/
/*
$organisation['ID']
$organisation['Name']
$organisation['Description']
$organisation['FoundingDate']
$organisation['Nationality']['icon']
$organisation['Nationality']['name']
$organisation['Language']['icon']
$organisation['Language']['name']

$OrganisationOwner['id']
$OrganisationOwner['Name']
*/

?>

<div class="site-profileDetails">
    <div class="avatarPanel">
		<div class="avatarSmall">
			<?= Html::img(Yii::$app->HelperClass->checkImage('/images/avatars/organisation/', $organisation['ID']) . '.webp', ['aria-labelledby' => 'PeSp Image', 'alt' => $organisation['Name']. '.webp', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/avatars/organisation/', $organisation['ID']) . '.png\'']); ?>		
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

	<div class="inner-wrapper">
        <div class="row ">
            <div class="col-12 col-lg-8 ">
                <div class="content-profileDetails bg-darkblue-2">
                    <div class="section-row avatar py-5">
						<?php if ($isOwner) : ?>
                            <?php
                            echo Html::a('Edit <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                            <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                          </svg>',
                                [
                                    "account/edit-details",
                                    "organisationId" => $organisation['ID']
                                ],
                                ['class' => "filled-btn btn btn-primary upload float-right",
                                    'title' => \app\modules\organisation\Module::t('organisationDetails', 'details')
                                ]
                            )
                            ?>
                        <?php endif; ?>
                        <div class="avatarPanel d-md-flex align-items-center ">

                            <div class="avatar-upload avatarSmall mr-md-2 ">
								<?php if ($isOwner) : ?>
                                    <div class="avatar-edit">
                                        <?php $form = ActiveForm::begin([
                                            'id' => 'profile-pic-form',
                                            'options' => ['enctype' => 'multipart/form-data'],
                                            'fieldConfig' => [
                                                'template' => "{input}\n{label}\n{error}"
                                            ],
                                        ]); ?> 
                                        <?= $form->field($organisationPicModel, 'file')->fileInput(['id' => 'imageUpload'])
                                            ->label('<div class="upload-icon">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-camera-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                            <path fill-rule="evenodd" d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
                                                        </svg>
                                                    </div>'); 
                                        ?>
                                        <?= $form->field($organisationPicModel, 'id')->hiddenInput()->label(false); ?>

                                        <!--<?= Html::submitButton(\app\modules\organisation\Module::t('organisationDetails', 'details'), ['class' => 'btn btn-primary upload filled-btn', 'name' => 'upload-button']) ?>-->
                                        <?php ActiveForm::end(); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="avatar-preview">
                                    <?= Html::img(Yii::$app->HelperClass->checkImage('/images/avatars/organisation/', $organisation['ID']) . '.webp',  ['width' => '120','height' => '120', 'id' => 'imagePreview', 'class' => 'rounded-circle' ,'aria-labelledby' => 'PeSp Image', 'alt' => $organisation['Name']. '.webp', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/avatars/organisation/', $organisation['ID']) . '.png\''] ); ?>
                                </div>
                            </div>

                            <div class="avatarName col-10">
                                <h3 class="mb-1"><?= $organisation['Name'] ?><span class="ml-3 avatarID">ID: <?= $organisation['ID'] ?></span></h3>
                                <ul class="personal-datalist list-inline">
                                    <li class="list-inline-item">
                                        <span><?= Html::img(Yii::$app->HelperClass->checkNationalityImage($organisation['Language']['icon'], '4x3'), ['aria-label' => 'nationality Image', 'alt' => $organisation['Language']['name'],'class' => 'IMG']) ?> <?= $organisation['Language']['icon'] ?></span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span><?= Html::img(Yii::$app->HelperClass->checkNationalityImage($organisation['Nationality']['icon'], '4x3'), ['aria-label' => 'nationality Image', 'alt' => $organisation['Nationality']['name'],'class' => 'IMG']) ?> <?= $organisation['Nationality']['icon'] ?></span>
                                    </li>
                                </ul>
                                <div class="avatarjob-list">
                                    <span class="avatar-job-title">Leader</span>
                                    <span class="avatar-job-title">Admin</span>
                                    <span class="avatar-job-title">Platzhalter</span>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- Orgas and Teams -->
                    <div class="section-row py-5">
                        <h3 class="header">
                            Meine Teams & Organisationen
                            <?php if ($isOwner) : ?>
                            <?php
                            echo Html::a('<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                                            <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                                        </svg>',
                                [
                                    "/organisation/create-orgnisation",
                                    //"userId" => $userInfo['user_id']
                                ],
                                ['class' => "filled-btn btn btn-primary add-btn",
                                    'title' => \app\modules\organisation\Module::t('userDetails', 'userDetails_info_editAccountDetails')
                                ]
                            )
                            ?>
                        <?php endif; ?>
                        </h3>
                        <?php foreach($ownedOrganisation as $organisation) : ?>
                        <div class="organisation-block">
                            <div class="organisation mb-5">
                                <div class="organisation-header d-flex align-items-center">
                                    <div class="col-1">
                                        <?= Html::img(Yii::$app->HelperClass->checkImage('/images/avatars/organisation/', $organisation['ID']) . '.webp',  ['class' => 'rounded-circle avatar-image', 'aria-label' => $organisation['ID']. '.webp', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/avatars/organisation/', $organisation['ID']) . '.png\''] ); ?>
                                    </div>
                                    <div class="col-11">
                                        <div class="col-12">
                                            <h4 class="float-left"><?= $organisation['Name'] ?></h4>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="col-12">
                                            <ul class="organisation-title-list list-inline float-left">
                                                <li class="list-inline-item">
                                                    <span class="organisation-title"><?= $organisation['OrganisationRole'] ?></span>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-5 row">
                                <div class="col-12 col-lg-6">
                                    <div class="team mb-4">
                                        <div class="col-2 float-left">
                                            <img src="https://via.placeholder.com/46x46.png" class="rounded-circle" >
                                        </div>
                                        <div class="col-10 float-left">
                                            <div class="col-12">
                                                <h4 class="float-left">Teamname</h4>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-12">
                                                <ul class="organisation-title-list list-inline float-left">
                                                    <li class="list-inline-item">
                                                        <span class="team-title">Leader</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="team-title">Admin</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="team-title">Platzhalter</span>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="team mb-4">
                                        <div class="col-2 float-left">
                                            <img src="https://via.placeholder.com/46x46.png" class="rounded-circle" >
                                        </div>
                                        <div class="col-10 float-left">
                                            <div class="col-12">
                                                <h4 class="float-left">Teamname</h4>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-12">
                                                <ul class="organisation-title-list list-inline float-left">
                                                    <li class="list-inline-item">
                                                        <span class="team-title">Leader</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="team-title">Admin</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="team-title">Platzhalter</span>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="team mb-4">
                                        <div class="col-2 float-left">
                                            <img src="https://via.placeholder.com/46x46.png" class="rounded-circle" >
                                        </div>
                                        <div class="col-10 float-left">
                                            <div class="col-12">
                                                <h4 class="float-left">Teamname</h4>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-12">
                                                <ul class="organisation-title-list list-inline float-left">
                                                    <li class="list-inline-item">
                                                        <span class="team-title">Leader</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="team-title">Admin</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="team-title">Platzhalter</span>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="team mb-4">
                                        <div class="col-2 float-left">
                                            <img src="https://via.placeholder.com/46x46.png" class="rounded-circle" >
                                        </div>
                                        <div class="col-10 float-left">
                                            <div class="col-12">
                                                <h4 class="float-left">Teamname</h4>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-12">
                                                <ul class="organisation-title-list list-inline float-left">
                                                    <li class="list-inline-item">
                                                        <span class="team-title">Leader</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="team-title">Admin</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="team-title">Platzhalter</span>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="team mb-4">
                                        <div class="col-2 float-left">
                                            <img src="https://via.placeholder.com/46x46.png" class="rounded-circle" >
                                        </div>
                                        <div class="col-10 float-left">
                                            <div class="col-12">
                                                <h4 class="float-left">Teamname</h4>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-12">
                                                <ul class="organisation-title-list list-inline float-left">
                                                    <li class="list-inline-item">
                                                        <span class="team-title">Leader</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="team-title">Admin</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="team-title">Platzhalter</span>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="team mb-4">
                                        <div class="col-2 float-left">
                                            <img src="https://via.placeholder.com/46x46.png" class="rounded-circle" >
                                        </div>
                                        <div class="col-10 float-left">
                                            <div class="col-12">
                                                <h4 class="float-left">Teamname</h4>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-12">
                                                <ul class="organisation-title-list list-inline float-left">
                                                    <li class="list-inline-item">
                                                        <span class="team-title">Leader</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="team-title">Admin</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="team-title">Platzhalter</span>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Game Accounts -->

                    <div class="section-row game-accounts py-5">
                        <h3 class="header">
                            <?= \app\modules\organisation\Module::t('organisationDetails', 'details') ?>
                            <?php if ($userInfo['isMySelfe']) : ?>
                                <?php
                                echo Html::a('<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                                            </svg>',
                                    [
                                        "account/add-game-account",
                                        "userId" => $userInfo['user_id']
                                    ],
                                    ['class' => "filled-btn btn btn-primary add-btn",
                                        'title' => \app\modules\organisation\Module::t('organisationDetails', 'details')
                                    ]
                                )
                                ?>
                            <?php endif; ?>
                        </h3>                                   
                        <?php foreach ($userGames as $platform) : ?>
                            <div class="games-block mb-4">
                                <div class="gameplatform mb-4">
                                    <div class="gameplatform-header d-flex align-items-center">
                                        <div class="col-1">
                                            <?= Html::img(Yii::$app->HelperClass->checkImage('/images/platforms/', $platform['icon']) . '.webp',  ['class' => 'rounded-circle avatar-image', 'aria-label' => $platform['platformName']. '.webp', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/platforms/', $platform['icon']) . '.png\''] ); ?>
                                        </div>
                                        <div class="col-11">
                                            <div class="col-12">
                                                <h4 class="float-left"><?= $platform['platformName'] ?></h4>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php foreach($platform['game'] as $game) : ?>
                                    <div class="px-5 row">
                                        <div class="col-12 col-lg-8">
                                            <div class="game mb-4">
                                                <div class="col-2 float-left">
                                                    <?= Html::img(Yii::$app->HelperClass->checkImage('/images/games/', $game['icon']) . '.webp',  ['class' => 'rounded-circle avatar-image', 'aria-label' => $platform['platformName']. '.webp', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/games/', $game['icon']) . '.png\''] ); ?>
                                                </div>
                                                <div class="col-10 float-left">
                                                    <div class="col-12 account-details">
                                                        <h4 class="float-left"><?= ($game['visible'] || $userInfo['isMySelfe'])? $game['accountId'] : 'ID Not Public' ?></h4>
                                                        <?php if ($userInfo['isMySelfe']): ?>
                                                            <?php if ($game['editable']): ?>
                                                                <?php
                                                                echo Html::a('<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                                <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"/>
                                                                                <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z"/>
                                                                            </svg>',
                                                                    [
                                                                        "account/remove-game-account",
                                                                        "gameId" => $game['id'],
                                                                        "platformId" => $platform['id'],
                                                                        "userId" => $userInfo['user_id']
                                                                    ],
                                                                    ['class' => "	btn btn-primary delete-btn float-right",
                                                                        'title' => \app\modules\organisation\Module::t('organisationDetails', 'details')
                                                                    ]
                                                                )
                                                                ?>
                                                            <?php endif; ?>
                                                            <?php
                                                                echo Html::a(($game['visible'] == 1 ? 
                                                                '<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                                    <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                                </svg>'
                                                                : 
                                                                '<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                                                    <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                                                                    <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                                                                </svg>'),
                                                                    [
                                                                        "account/toggle-game-account",
                                                                        "gameId" => $game['id'],
                                                                        "platformId" => $platform['id'],
                                                                        "userId" => $userInfo['user_id']
                                                                    ],
                                                                    ['class' => $game['visible'] == 1 ? "filled-btn btn btn-primary add-btn float-right" : "outline-btn btn btn-primary add-btn float-right",
                                                                        'title' => $game['visible'] == 1 ? \app\modules\organisation\Module::t('organisationDetails', 'details'): \app\modules\organisation\Module::t('organisationDetails', 'details')
                                                                    ]
                                                                )
                                                            ?>
                                                        <?php endif; ?>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                                
                    </div>

                    <!-- Social Media -->
                    <div class="section-row social-media-accounts py-5">
                        <h3 class="header">
                            <?= \app\modules\organisation\Module::t('organisationDetails', 'details') ?>
                        </h3>
                        <ul class="list-inline">
                            <?php if($userInfo['twitch_name']) : ?>
                                <li class="list-inline-item">
                                    <a class="d-flex align-items-center" href="https://twitch.tv/TentelianSA" target="_blank" aria-label="Twitch Button">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-2">
                                            <g clip-path="url(#clip0)">
                                                <path d="M0.893555 3.82708V19.1299H6.16347V22H9.04089L11.9137 19.129H16.2266L21.9778 13.3925V0H2.32997L0.893555 3.82708ZM4.24672 1.91125H20.0611V12.4337L16.7061 15.7813H11.4343L8.56147 18.6478V15.7813H4.24672V1.91125Z" fill="white"></path>
                                                <path d="M9.51953 5.74023H11.4354V11.4786H9.51953V5.74023Z" fill="white"></path>
                                                <path d="M14.7886 5.74023H16.7053V11.4786H14.7886V5.74023Z" fill="white"></path></g>
                                            <defs><clipPath id="clip0"><rect width="22" height="22" fill="white"></rect></clipPath></defs>
                                        </svg>
                                        Twitch
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if($userInfo['trovo_name']) : ?>
                                <li class="list-inline-item">
                                    <a class="d-flex align-items-center" href="https://trovo.live/tenteliansa" target="_blank" aria-label="Twitch Button">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-2">
                                            <g clip-path="url(#clip0)">
                                                <path d="M0.893555 3.82708V19.1299H6.16347V22H9.04089L11.9137 19.129H16.2266L21.9778 13.3925V0H2.32997L0.893555 3.82708ZM4.24672 1.91125H20.0611V12.4337L16.7061 15.7813H11.4343L8.56147 18.6478V15.7813H4.24672V1.91125Z" fill="white"></path>
                                                <path d="M9.51953 5.74023H11.4354V11.4786H9.51953V5.74023Z" fill="white"></path>
                                                <path d="M14.7886 5.74023H16.7053V11.4786H14.7886V5.74023Z" fill="white"></path></g>
                                            <defs><clipPath id="clip0"><rect width="22" height="22" fill="white"></rect></clipPath></defs>
                                        </svg>
                                        Twitch
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if($userInfo['youtube_channel']) : ?>
                                <li class="list-inline-item">
                                    <a class="d-flex align-items-center" href="https://www.youtube.com/watch?v=aDBr8jwnpbw" target="_blank" aria-label="youtube Button">
                                        <svg width="30" height="24" viewBox="0 0 30 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-2">
                                            <path d="M29.803 5.71816C29.803 3.08144 27.8635 0.960351 25.4671 0.960351C22.221 0.808594 18.9104 0.75 15.5272 0.75H14.4725C11.0975 0.75 7.78112 0.808594 4.53502 0.960937C2.1444 0.960937 0.204946 3.09375 0.204946 5.73047C0.0584618 7.81582 -0.00364759 9.90176 -0.000131968 11.9877C-0.00599134 14.0736 0.0604149 16.1615 0.199087 18.2514C0.199087 20.8881 2.13854 23.0268 4.52917 23.0268C7.93932 23.185 11.4374 23.2553 14.994 23.2494C18.5565 23.2611 22.0448 23.1869 25.4589 23.0268C27.8553 23.0268 29.7948 20.8881 29.7948 18.2514C29.9354 16.1596 29.9999 14.0736 29.994 11.9818C30.0073 9.8959 29.9436 7.80801 29.803 5.71816ZM12.1288 17.7357V6.22207L20.6249 11.976L12.1288 17.7357Z" fill="white"></path>
                                        </svg>
                                        Youtube
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if($userInfo['twitter_name']) : ?>
                                <li class="list-inline-item">
		        			        <?= Html::a('<svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-2"><path d="M22.0767 2.13092C21.2529 2.49231 20.375 2.73185 19.4598 2.84815C20.4013 2.286 21.1199 1.40262 21.4578 0.337846C20.5799 0.861231 19.6107 1.23092 18.5778 1.43723C17.7442 0.549693 16.5562 0 15.2602 0C12.7458 0 10.7215 2.04092 10.7215 4.54292C10.7215 4.90292 10.7519 5.24908 10.8267 5.57862C7.05085 5.39446 3.70977 3.58477 1.46531 0.828C1.07347 1.50785 0.843621 2.286 0.843621 3.12369C0.843621 4.69662 1.65362 6.09092 2.86101 6.89815C2.13131 6.88431 1.41547 6.67246 0.809005 6.33877C0.809005 6.35262 0.809005 6.37062 0.809005 6.38862C0.809005 8.59569 2.38331 10.4289 4.44777 10.8512C4.07808 10.9523 3.67516 11.0008 3.25701 11.0008C2.96624 11.0008 2.6727 10.9842 2.39716 10.9232C2.98562 12.7218 4.65547 14.0442 6.64101 14.0871C5.09578 15.2958 3.13377 16.0242 1.00977 16.0242C0.637313 16.0242 0.280082 16.0075 -0.0771484 15.9618C1.9347 17.2592 4.31901 18 6.89024 18C15.2478 18 19.817 11.0769 19.817 5.076C19.817 4.87523 19.8101 4.68139 19.8004 4.48892C20.7018 3.84923 21.4592 3.05031 22.0767 2.13092Z" fill="white"></path></svg> Twitter'
                                            , 'https://twitter.com/' . $userInfo['twitter_name'], ['class' => 'footer-link d-flex align-items-center', 'target' => '_blank', 'rel' =>'noopener', 'aria-label' => 'twitter', 'label' => 'twitter', 'data-size' => 'default', 'data-show-screen-name' => 'true']); ?>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>

                    <!-- Badges 
                    <div class="section-row badges-block py-5">
                        <h3 class="header">
                            <?= \app\modules\user\Module::t('userDetails', 'userDetails_badgesHeader') ?>
                        </h3>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/30x30.png" class="rounded-circle" >
                                    <h4 class="d-inline-block ml-3 mb-0">Badges 1</h4>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/30x30.png" class="rounded-circle" >
                                    <h4 class="d-inline-block ml-3 mb-0">Badges 1</h4>
                                </div>
                            </li>
                            <li class="list-inline-item ">
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/30x30.png" class="rounded-circle" >
                                    <h4 class="d-inline-block ml-3 mb-0">Badges 1</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                    -->
                </div>

            </div>

            <div class="col-12 col-lg-4">
                <!-- Coins -->
                <div class="coins-block py-5 bg-darkblue-2 ">
                    <h3 class="header">
                        <?= \app\modules\user\Module::t('userDetails', 'userDetails_coinsHeader') ?>
                    </h3>
                    <div class="coin-wallet">
                        <div class="d-flex align-items-center mb-5">
                            <img src="https://via.placeholder.com/46x46.png" class="rounded-circle" >
                            <span class="ml-3 d-inline-block"><?= ($userBalance)? $userBalance->getBalance() : 'No Coins Availabel'  ?></span>
                        </div>

                        <!-- button class="filled-btn">Abrechnung</button -->
                    </div>
                </div>

                <!-- Open Invites
                <div class="new-invites-block py-5 bg-darkblue-2 ">
                    <div class="header">
                        <?= \app\modules\user\Module::t('userDetails', 'userDetails_invitesHeader') ?>
                    </div>
                </div>
                -->
                <!-- Open Applications
                <div class="open-applications py-5 bg-darkblue-2 ">
                    <div class="header">
                        <?= \app\modules\user\Module::t('userDetails', 'userDetails_applicationsHeader') ?>
                    </div>
                </div>
                -->
                <!-- Statistics -->
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-8 ">
                <div class="ad-block-container row">
                    <div class="ad-block-item col-12">
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- tsa.gg Index Partner -->
                        <ins class="adsbygoogle"
                            style="display:block"
                            data-ad-client="ca-pub-8480651532892152"
                            data-ad-slot="6811521719"
                            data-ad-format="auto"
                            data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>