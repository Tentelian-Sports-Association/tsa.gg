<?php

/* @var $this yii\web\View *
 * @var $teamPicModel app\modules\miscellaneouse\models\formModels\ProfilePicForm
 * @var $team array,
 * @var $teamManager
 * @var $isOwner bool,
 * @var $teamMember array,
 */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

use app\widgets\Alert;

$this->title = $team['Name'] . \app\modules\team\Module::t('teamDetails', 'details_title') . '\'s Team profile';

/************* Meta Index ****************/
$this->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->url]);
Yii::$app->MetaClass->writeDefaultMeta($this, $this->title, 'Details for team ' . $team['Name'], '@BettyBirnchen');
/************* End Meta Index ****************/

\app\modules\team\assets\teamDetails\DetailsAssets::register($this);

/** Usabel Variables **/
/*
$team['ID']
$team['Name']
$team['Description']
$team['FoundingDate']
$team['Nationality']['icon']
$team['Nationality']['name']
$team['Language']['icon']
$team['Language']['name']

teamManager['id']
teamManager['Name']
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
                                    "team/edit-team",
                                    "teamId" => $team['ID']
                                ],
                                ['class' => "filled-btn btn btn-primary upload float-right",
                                    'title' => \app\modules\team\Module::t('teamDetails', 'details')
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
                                        <?= $form->field($teamPicModel, 'file')->fileInput(['id' => 'imageUpload'])
                                            ->label('<div class="upload-icon">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-camera-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                            <path fill-rule="evenodd" d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
                                                        </svg>
                                                    </div>'); 
                                        ?>
                                        <?= $form->field($teamPicModel, 'id')->hiddenInput()->label(false); ?>

                                        <!--<?= Html::submitButton(\app\modules\team\Module::t('teamDetails', 'details'), ['class' => 'btn btn-primary upload filled-btn', 'name' => 'upload-button']) ?>-->
                                        <?php ActiveForm::end(); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="avatar-preview">
                                    <?= Html::img(Yii::$app->HelperClass->checkTeamImage($team['ID'], $team['Organisation']['ID']) . '.webp',  ['width' => '120','height' => '120', 'id' => 'imagePreview', 'class' => 'rounded-circle' , 'aria-label' => $team['Name']. '.webp', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkTeamImage($team['ID'], $team['Organisation']['ID']) . '.png\'']) ?>		
                                    
                                </div>
                            </div>

                            <div class="avatarName col-10">
                                <h3 class="mb-1"><?= $team['Name'] ?></h3>
                                <ul class="personal-datalist list-inline">
                                    <li class="list-inline-item">
                                        <span class="avatar-job-title">Captain: </span><span class="ml-3 avatarID">ID: <?= $team['ID'] ?></span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span><?= Html::img(Yii::$app->HelperClass->checkNationalityImage($team['Language']['icon'], '4x3'), ['aria-label' => 'nationality Image', 'alt' => $team['Language']['name'],'class' => 'IMG']) ?> <?= $team['Language']['icon'] ?></span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span><?= Html::img(Yii::$app->HelperClass->checkNationalityImage($team['Nationality']['icon'], '4x3'), ['aria-label' => 'nationality Image', 'alt' => $team['Nationality']['name'],'class' => 'IMG']) ?> <?= $team['Nationality']['icon'] ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <!-- Teams -->
                    <div class="section-row py-5">
                        <h3 class="header">Mitglieder</h3>
                        <div class="team-block">
                            <div class="team mb-1">
                                <?php foreach($teamMember as $member) : ?>
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