<?php

/* @var $this yii\web\View *
 * @var $profilePicModel app\modules\miscellaneouse\models\formModels\ProfilePicForm
 * @var $userInfo array - siehe UserController
 */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

use app\widgets\Alert;

\app\modules\user\assets\profile\profileDetails\DetailsAsset::register($this);
$user = Yii::$app->HelperClass->getUser();
$this->title = $userInfo['user_name'] . '\'s ' . \app\modules\user\Module::t('userDetails', 'userDetails_title');

?>

<div class="site-profileDetails p-3 p-md-5">
    <div class="inner-wrapper">
        <div class="row">
            <div class="col-md-8 ">
                <div class="inner-container bg-darkblue-2">
                    <div class="section-row avatar py-5">
                        <div class="avatarPanel d-md-flex align-items-center ">

                            <div class="avatarSmall mr-md-2 ">
                                <a href="#" class="change-image">
                                    <?= Html::img(Yii::$app->HelperClass->checkImage('/images/avatars/user/', $userInfo['user_id']) . '.webp',  ['width' => '120','height' => '120','class' => 'rounded-circle' ,'aria-labelledby' => 'PeSp Image', 'alt' => $userInfo['user_id']. '.webp', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/avatars/user/', $userInfo['user_id']) . '.png\''] ); ?>
                                </a>
                            </div>

                            <div class="avatarName col-6">
                                <h3 class="mb-1"><?= $userInfo['user_name'] ?><span class="ml-3 avatarID">ID: <?= $userInfo['user_id'] ?></span></h3>
                                <ul class="personal-datalist list-inline">
                                    <li class="list-inline-item">
                                        <span><?= $userInfo['age'] ?> Jahre alt </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span><?= $userInfo['language_img'] ?> <?= $userInfo['language'] ?></span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span><?= $userInfo['nationality_img'] ?> <?= $userInfo['nationality'] ?></span>
                                    </li>
                                </ul>
                                <div class="avatarjob-list">
                                    <span class="avatar-job-title">Leader</span>
                                    <span class="avatar-job-title">Admin</span>
                                    <span class="avatar-job-title">Platzhalter</span>
                                </div>

                            </div>



                            <?php if ($userInfo['isMySelfe']) : ?>
                                <?php $form = ActiveForm::begin([
                                    'id' => 'profile-pic-form',
                                    'options' => ['enctype' => 'multipart/form-data'],
                                    'fieldConfig' => [
                                        'template' => "<div class=\"col-12\">{input}</div>\n<div class=\"col-lg-7\">{error}</div>"
                                    ],
                                ]); ?>
                                <?= $form->field($profilePicModel, 'id')->hiddenInput()->label(false); ?>
                                <?= $form->field($profilePicModel, 'file')->fileInput() ?>

                                <?= Html::submitButton(\app\modules\user\Module::t('userDetails', 'userDetails_uploadImage'), ['class' => 'btn btn-primary upload filled-btn', 'name' => 'upload-button']) ?>
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
                                ['class' => "filled-btn btn btn-primary upload",
                                    'title' => \app\modules\user\Module::t('userDetails', 'userDetails_info_editAccountDetails')
                                ]
                            )
                            ?>
                        <?php endif; ?>
                    </div>


                    <!-- Orgas and Teams -->
                    <div class="section-row py-5">
                        <h3 class="header mb-5">
                            Meine Teams & Organisationen
                        </h3>
                        <div class="organisation-block">
                            <div class="organisation mb-5">
                                <div class="organisation-header d-flex align-items-center">
                                    <img src="https://via.placeholder.com/46x46.png" class="rounded-circle" >
                                    <h3 class="d-inline-block mb-2 ml-3">Organisationsname</h3>
                                </div>
                                <ul class="organisation-title-list list-inline">
                                    <li class="list-inline-item">
                                        <span class="organisation-title">Leader</span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span class="organisation-title">Admin</span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span class="organisation-title">Platzhalter</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="px-5 row">
                                <div class="col-sm-6">
                                    <div class="team mb-4">
                                        <div class="team-header d-flex align-items-center">
                                            <img src="https://via.placeholder.com/46x46.png" class="rounded-circle" >
                                            <h4 class="d-inline-block ml-3">Teamname</h4>
                                        </div>
                                        <ul class="team-title-list list-inline">
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
                                    </div>
                                    <div class="team mb-4">
                                        <div class="team-header d-flex align-items-center">
                                            <img src="https://via.placeholder.com/46x46.png" class="rounded-circle"  >
                                            <h4 class="d-inline-block ml-3">Teamname</h4>
                                        </div>
                                        <ul class="team-title-list list-inline">
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
                                    </div>
                                    <div class="team mb-4">
                                        <div class="team-header d-flex align-items-center">
                                            <img src="https://via.placeholder.com/46x46.png" class="rounded-circle"  >
                                            <h4 class="d-inline-block ml-3">Teamname</h4>
                                        </div>
                                        <ul class="team-title-list list-inline">
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
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="team mb-4">
                                        <div class="team-header d-flex align-items-center">
                                            <img src="https://via.placeholder.com/46x46.png" class="rounded-circle"  >
                                            <h4 class="d-inline-block ml-3">Teamname</h4>
                                        </div>
                                        <ul class="team-title-list list-inline">
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
                                    </div>
                                    <div class="team mb-4">
                                        <div class="team-header d-flex align-items-center">
                                            <img src="https://via.placeholder.com/46x46.png" class="rounded-circle"  >
                                            <h4 class="d-inline-block ml-3">Teamname</h4>
                                        </div>
                                        <ul class="team-title-list list-inline">
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
                                    </div>
                                    <div class="team mb-4">
                                        <div class="team-header d-flex align-items-center">
                                            <img src="https://via.placeholder.com/46x46.png" class="rounded-circle"  >
                                            <h4 class="d-inline-block ml-3">Teamname</h4>
                                        </div>
                                        <ul class="team-title-list list-inline">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Game Accounts -->

                    <div class="section-row game-accounts py-5">
                        <h3 class="header">
                            <?= \app\modules\user\Module::t('userDetails', 'userDetails_gameAccountHeader') ?>
                            <?php if ($userInfo['isMySelfe']) : ?>
                                <?php
                                echo Html::a('',
                                    [
                                        "account/add-game-account",
                                        "userId" => $userInfo['user_id']
                                    ],
                                    ['class' => "filled-btn btn btn-primary upload",
                                        'title' => \app\modules\user\Module::t('userDetails', 'userDetails_info_addGameAccount')
                                    ]
                                )
                                ?>
                            <?php endif; ?>
                        </h3>
                        <div class="games-block">
                            <div class="gameplatform mb-5">
                                <div class="gameplatform-header d-flex align-items-center">
                                    <img src="https://via.placeholder.com/46x46.png" class="rounded-circle" >
                                    <h3 class="d-inline-block mb-2 ml-3">Steam</h3>
                                </div>
                            </div>
                            <div class="px-5 row">
                                <div class="col-sm-6">
                                    <div class="game mb-4">
                                        <div class="game-header d-flex align-items-center">
                                            <img src="https://via.placeholder.com/46x46.png" class="rounded-circle" >
                                            <h4 class="d-inline-block ml-3">Rocket League</h4>
                                        </div>
                                    </div>
                                    <div class="game mb-4">
                                        <div class="game-header d-flex align-items-center">
                                            <img src="https://via.placeholder.com/46x46.png" class="rounded-circle"  >
                                            <h4 class="d-inline-block ml-3">DR!IFT</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php foreach ($userGames as $games) : ?>
                            <div class="gameEntry d-flex align-items-center">
                                <div class="gamePlatformIMG">

                                    <!-- Html::img(Yii::$app->HelperClass->checkImage('/images/platforms/', $games['platformIcon']) . '.webp', ['aria-labelledby' => 'PeSp Image', 'alt' => $games['platformIcon'] . '.webp', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/platforms/', $games['platformIcon']) . '.png\'']);

                                    -->
                                </div>

                                <div class="userAccountID d-inline-block">
                                    <?= ($games['visible'] || $userInfo['isMySelfe'])? $games['playerId'] : 'ID Not Public' ?>
                                </div>

                                <?php if ($userInfo['isMySelfe']): ?>
                                    <?php
                                        echo Html::a('',
                                            [
                                                "account/toggle-game-account",
                                                "gameId" => $games['gameId'],
                                                "platformId" => $games['platformId'],
                                                "userId" => $userInfo['user_id']
                                            ],
                                            ['class' => $games['visible'] == 1 ? "filled-btn btn btn-primary upload" : "glyphicon glyphicon-eye-close glyphicon-game-account btn btn-primary upload",
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
                    <div class="section-row social-media-accounts py-5">
                        <div class="header mb-4">
                            <?= \app\modules\user\Module::t('userDetails', 'userDetails_socialMediaHeader') ?>
                        </div>
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

                    <!-- Badges -->
                    <div class="section-row badges-block py-5">
                        <div class="header mb-4">
                            <?= \app\modules\user\Module::t('userDetails', 'userDetails_badgesHeader') ?>
                        </div>
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
                </div>

            </div>

            <div class="col-md-4 bg-darkblue-2 px-5 d-inline-block h-75">
                <div class="inner-container">
                    <!-- Coins -->
                    <div class="coins-block py-5">
                        <h3 class="header">
                            <?= \app\modules\user\Module::t('userDetails', 'userDetails_coinsHeader') ?>
                        </h3>
                        <div class="coin-wallet">
                            <div class="d-flex align-items-center mb-5">
                                <img src="https://via.placeholder.com/46x46.png" class="rounded-circle" >
                                <span class="ml-3 d-inline-block">100.000 Coins</span>
                            </div>

                            <button class="filled-btn">Abrechnung</button>
                        </div>
                    </div>

                    <!-- Open Invites
                    <div class="new-invites-block py-5">
                        <div class="header">
                            <?= \app\modules\user\Module::t('userDetails', 'userDetails_invitesHeader') ?>
                        </div>
                    </div>
                    -->
                    <!-- Open Applications
                    <div class="open-applications py-5">
                        <div class="header">
                            <?= \app\modules\user\Module::t('userDetails', 'userDetails_applicationsHeader') ?>
                        </div>
                    </div>
                    -->
                    <!-- Statistics -->
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-8 ">
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