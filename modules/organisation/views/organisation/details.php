<?php

/* @var $this yii\web\View *
 * @var $organisationPicModel app\modules\miscellaneouse\models\formModels\ProfilePicForm
 * @var $organisation array,
 * @var $OrganisationOwner
 * @var $isOwner bool,
 * @var $organisationSocial array,
 * @var $organisationMember array,
 * @var $organisationManagementMember array,
 */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

use app\widgets\Alert;

\app\modules\organisation\assets\organisationDetails\DetailsAssets::register($this);

$this->title = $organisation['Name'] . \app\modules\organisation\Module::t('organisationDetails', 'details_header');

/** Usabel Variables **/
/*
 * $organisation['ID']
 * $organisation['Name']
 * $organisation['Description']
 * $organisation['FoundingDate']
 * $organisation['Nationality']['icon']
 * $organisation['Nationality']['name']
 * $organisation['Language']['icon']
 * $organisation['Language']['name']
 * 
 * $OrganisationOwner['id']
 * $OrganisationOwner['Name']
 * 
 * $team['Id'];
 * $team['Name'];
 * $team['ShortCode'];
 */

?>

<div class="site-profileDetails">
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
                                    "organisation/edit-details",
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
                                        <span class="avatar-job-title">Inhaber: </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span><?= Html::img(Yii::$app->HelperClass->checkNationalityImage($organisation['Language']['icon'], '4x3'), ['aria-label' => 'nationality Image', 'alt' => $organisation['Language']['name'],'class' => 'IMG']) ?> <?= $organisation['Language']['icon'] ?></span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span><?= Html::img(Yii::$app->HelperClass->checkNationalityImage($organisation['Nationality']['icon'], '4x3'), ['aria-label' => 'nationality Image', 'alt' => $organisation['Nationality']['name'],'class' => 'IMG']) ?> <?= $organisation['Nationality']['icon'] ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Foundation -->
                    <div class="section-row py-2">
                        Foundation Date: <?= $organisation['FoundingDate']; ?>
                    </div>               
                    <!-- Description -->
                    <div class="section-row py-5">
                        <h3 class="header">
                            Description
                        </h3>
                        <div class="col-12 description">
                            <?= $organisation['Description']; ?>
                        </div>
                    </div>

                    <!-- Teams -->
                    <div class="section-row py-5">
                        <h3 class="header">
                            Current Teams
                            <?php if ($isOwner) : ?>
                            <?php
                            echo Html::a('<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                                            <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                                        </svg>',
                                [
                                    "/team/create-team",
                                    "orgID" => $organisation['ID'],
                                    "gameID" => 1
                                ],
                                ['class' => "filled-btn btn btn-primary add-btn",
                                    'title' => \app\modules\organisation\Module::t('userDetails', 'userDetails_info_editAccountDetails')
                                ]
                            )
                            ?>
                        <?php endif; ?>
                        </h3>
                        <div class="team-block">
                            <div class="px-5 row">
                                <div class="col-12 col-lg-12">
                                    <?php if(array_key_exists('Teams', $organisation)) : ?>
                                        <?php foreach($organisation['Teams'] as $team) : ?>
                                        <div class="team mb-4 col-12 col-lg-6 float-left">
                                            <div class="col-2 float-left">
                                                <img src="https://via.placeholder.com/46x46.png" class="rounded-circle" >
                                            </div>
                                            <div class="col-10 float-left">
                                                <div class="col-12">
                                                    <h4 class="float-left">
                                                        <?= Html::a($team['Name'], ['/team/details', 'teamID' => $team['Id']], ['class' => '']); ?>
                                                    </h4>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-row py-5">
                        <h3 class="header">Management</h3>
                        <div class="team-block">
                            <div class="team mb-1">
                                <?php foreach($organisationManagementMember as $member) : ?>
                                    <div class="team-header d-flex align-items-center">
                                        <div class="col-1">
                                            <?= Html::img(Yii::$app->HelperClass->checkImage('/images/avatars/user/', $member['UserID']) . '.webp',  ['width' => '120','height' => '120', 'id' => 'imagePreview', 'class' => 'rounded-circle' ,'aria-labelledby' => 'PeSp Image', 'alt' => $member['UserName']. '.webp', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/avatars/user/', $member['UserID']) . '.png\''] ); ?>
                                        </div>
                                        <div class="col-11">
                                            <div class="col-12">
                                                <h4 class="float-left">
                                                    <?= Html::a( $member['UserName'], ['/user/details', 'userId' => $member['UserID']], ['class' => '']); ?>
                                                </h4>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-12">
                                                <ul class="organisation-title-list list-inline float-left">
                                                    <li class="list-inline-item">
                                                        <span class="organisation-title"></span>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="section-row py-5">
                        <h3 class="header">Mitglieder</h3>
                        <div class="team-block">
                            <div class="team mb-1">
                                <?php foreach($organisationMember as $member) : ?>
                                    <div class="team-header d-flex align-items-center">
                                        <div class="col-1">
                                            <?= Html::img(Yii::$app->HelperClass->checkImage('/images/avatars/user/', $member['UserID']) . '.webp',  ['width' => '120','height' => '120', 'id' => 'imagePreview', 'class' => 'rounded-circle' ,'aria-labelledby' => 'PeSp Image', 'alt' => $member['UserName']. '.webp', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/avatars/user/', $member['UserID']) . '.png\''] ); ?>
                                        </div>
                                        <div class="col-11">
                                            <div class="col-12">
                                                <h4 class="float-left">
                                                    <?= Html::a( $member['UserName'], ['/user/details', 'userId' => $member['UserID']], ['class' => '']); ?>
                                                </h4>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-12">
                                                <ul class="organisation-title-list list-inline float-left">
                                                    <li class="list-inline-item">
                                                        <span class="organisation-title"></span>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 col-lg-4">
                
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