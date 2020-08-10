<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;

use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

app\assets\AppAsset::register($this);

$user = Yii::$app->HelperClass->getUser();

$controllerID = \Yii::$app->controller->id;

$weAreLive = array();
$weAreLive['twitch']['channellink'] = 'https://twitch.tv/TentelianSA';
$weAreLive['twitch']['svg']= '<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)">
                                <path d="M0.893555 3.82708V19.1299H6.16347V22H9.04089L11.9137 19.129H16.2266L21.9778 13.3925V0H2.32997L0.893555 3.82708ZM4.24672 1.91125H20.0611V12.4337L16.7061 15.7813H11.4343L8.56147 18.6478V15.7813H4.24672V1.91125Z" fill="white"/>
                                <path d="M9.51953 5.74023H11.4354V11.4786H9.51953V5.74023Z" fill="white"/>
                                <path d="M14.7886 5.74023H16.7053V11.4786H14.7886V5.74023Z" fill="white"/></g>
                                <defs><clipPath id="clip0"><rect width="22" height="22" fill="white"/></clipPath></defs></svg>';
$weAreLive['Mixer']['channellink'] = 'https://mixer.com/TentelianSA';
$weAreLive['Mixer']['svg'] = '<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.90518 1.8519C3.15307 0.759709 1.67558 0.589391 0.712064 1.52563C-0.119262 2.34849 -0.185119 3.73822 0.487768 4.71704L4.82861 10.9716L0.461521 17.2831C-0.211366 18.2619 -0.158394 19.6517 0.685817 20.4745C1.64886 21.4108 3.12682 21.2405 3.87893 20.1483L9.97453 11.3405C10.1196 11.1276 10.1196 10.83 9.97453 10.6171L3.90518 1.8519Z" fill="white"/>
                                <path d="M18.0895 1.8519C18.8426 0.759709 20.322 0.589391 21.2868 1.52563C22.1193 2.34849 22.1852 3.73822 21.5114 4.71704L17.1648 10.9716L21.5377 17.2831C22.2115 18.2619 22.1584 19.6517 21.3131 20.4745C20.3488 21.4108 18.8689 21.2405 18.1158 20.1483L12.0255 11.3261C11.8802 11.1132 11.8802 10.8157 12.0255 10.6028L18.0895 1.8519Z" fill="white"/></svg>';
$weAreLive['Youtube']['channellink'] = 'https://www.youtube.com/watch?v=aDBr8jwnpbw';
$weAreLive['Youtube']['svg'] = '<svg width="30" height="24" viewBox="0 0 30 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M29.803 5.71816C29.803 3.08144 27.8635 0.960351 25.4671 0.960351C22.221 0.808594 18.9104 0.75 15.5272 0.75H14.4725C11.0975 0.75 7.78112 0.808594 4.53502 0.960937C2.1444 0.960937 0.204946 3.09375 0.204946 5.73047C0.0584618 7.81582 -0.00364759 9.90176 -0.000131968 11.9877C-0.00599134 14.0736 0.0604149 16.1615 0.199087 18.2514C0.199087 20.8881 2.13854 23.0268 4.52917 23.0268C7.93932 23.185 11.4374 23.2553 14.994 23.2494C18.5565 23.2611 22.0448 23.1869 25.4589 23.0268C27.8553 23.0268 29.7948 20.8881 29.7948 18.2514C29.9354 16.1596 29.9999 14.0736 29.994 11.9818C30.0073 9.8959 29.9436 7.80801 29.803 5.71816ZM12.1288 17.7357V6.22207L20.6249 11.976L12.1288 17.7357Z" fill="white"/></svg>';
$weAreLive['Twitter']['channellink'] = 'https://twitter.com/TentelianSA';
$weAreLive['Twitter']['svg'] = '<svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.0767 2.13092C21.2529 2.49231 20.375 2.73185 19.4598 2.84815C20.4013 2.286 21.1199 1.40262 21.4578 0.337846C20.5799 0.861231 19.6107 1.23092 18.5778 1.43723C17.7442 0.549693 16.5562 0 15.2602 0C12.7458 0 10.7215 2.04092 10.7215 4.54292C10.7215 4.90292 10.7519 5.24908 10.8267 5.57862C7.05085 5.39446 3.70977 3.58477 1.46531 0.828C1.07347 1.50785 0.843621 2.286 0.843621 3.12369C0.843621 4.69662 1.65362 6.09092 2.86101 6.89815C2.13131 6.88431 1.41547 6.67246 0.809005 6.33877C0.809005 6.35262 0.809005 6.37062 0.809005 6.38862C0.809005 8.59569 2.38331 10.4289 4.44777 10.8512C4.07808 10.9523 3.67516 11.0008 3.25701 11.0008C2.96624 11.0008 2.6727 10.9842 2.39716 10.9232C2.98562 12.7218 4.65547 14.0442 6.64101 14.0871C5.09578 15.2958 3.13377 16.0242 1.00977 16.0242C0.637313 16.0242 0.280082 16.0075 -0.0771484 15.9618C1.9347 17.2592 4.31901 18 6.89024 18C15.2478 18 19.817 11.0769 19.817 5.076C19.817 4.87523 19.8101 4.68139 19.8004 4.48892C20.7018 3.84923 21.4592 3.05031 22.0767 2.13092Z" fill="white"/></svg>';
$weAreLive['Discord']['channellink'] = 'https://discord.gg/rk3qd9U';
$weAreLive['Discord']['channellinkCommunity'] = 'https://discord.gg/rk3qd9U';
$weAreLive['Discord']['svg'] = '<svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)">
                                    <path d="M3.431 20.3128H17.0959L16.4433 18.1997L18.0044 19.5395L19.4352 20.8217L22.0418 23V2.37187C21.9767 1.08962 20.8727 0 19.5042 0L3.43579 0.002875C2.06825 0.002875 0.958496 1.09442 0.958496 2.37667V17.94C0.958496 19.2922 2.06633 20.3128 3.431 20.3128ZM13.5395 5.44621L13.5079 5.45771L13.5194 5.44621H13.5395ZM6.22646 6.66233C7.98308 5.38392 9.61129 5.44525 9.61129 5.44525L9.74258 5.57463C7.59304 6.08733 6.61841 7.04758 6.61841 7.04758C6.61841 7.04758 6.87908 6.92013 7.33429 6.72558C10.2294 5.58708 13.391 5.6695 16.3177 7.11083C16.3177 7.11083 15.3412 6.21287 13.3239 5.63787L13.5021 5.4625C13.781 5.46346 15.2568 5.51521 16.8362 6.67C16.8362 6.67 18.6033 9.68875 18.6033 13.3975C18.5449 13.3266 17.507 14.9941 14.8361 15.0516C14.8361 15.0516 14.3838 14.5398 14.0618 14.0933C15.6239 13.6447 16.2085 12.7477 16.2085 12.7477C15.6957 13.0707 15.2281 13.2624 14.8486 13.454C14.265 13.7109 13.6804 13.8374 13.0967 13.9668C10.3329 14.4152 8.78137 13.6649 7.31512 13.0697L6.81391 12.8148C6.81391 12.8148 7.39754 13.7118 8.89733 14.1603C8.50346 14.6098 8.11341 15.1206 8.11341 15.1206C5.4435 15.0573 4.46983 13.3898 4.46983 13.3898C4.46983 9.67533 6.22646 6.66233 6.22646 6.66233Z" fill="white"/>
                                    <path d="M13.7118 12.239C14.3932 12.239 14.9481 11.664 14.9481 10.9548C14.9481 10.2504 14.3961 9.67542 13.7118 9.67542V9.67829C13.0333 9.67829 12.4775 10.2514 12.4756 10.9605C12.4756 11.664 13.0305 12.239 13.7118 12.239Z" fill="white" />
                                    <path d="M9.28606 12.239C9.96743 12.239 10.5223 11.664 10.5223 10.9548C10.5223 10.2504 9.97127 9.67542 9.28989 9.67542L9.28606 9.67829C8.60468 9.67829 8.0498 10.2514 8.0498 10.9605C8.0498 11.664 8.60468 12.239 9.28606 12.239Z" fill="white" /></g>
                                    <defs><clipPath id="clip0"><rect width="23" height="23" fill="white"/></clipPath></defs></svg>';
//$weAreLive['Liquipedia']['channellink'] = 'https://liquipedia.net/rocketleague/Tentelian_Sports_Association';
//$weAreLive['Liquipedia']['svg'] = '<svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
//                                    <path d="M22.0767 2.13092C21.2529 2.49231 20.375 2.73185 19.4598 2.84815C20.4013 2.286 21.1199 1.40262 21.4578 0.337846C20.5799 0.861231 19.6107 1.23092 18.5778 1.43723C17.7442 0.549693 16.5562 0 15.2602 0C12.7458 0 10.7215 2.04092 10.7215 4.54292C10.7215 4.90292 10.7519 5.24908 10.8267 5.57862C7.05085 5.39446 3.70977 3.58477 1.46531 0.828C1.07347 1.50785 0.843621 2.286 0.843621 3.12369C0.843621 4.69662 1.65362 6.09092 2.86101 6.89815C2.13131 6.88431 1.41547 6.67246 0.809005 6.33877C0.809005 6.35262 0.809005 6.37062 0.809005 6.38862C0.809005 8.59569 2.38331 10.4289 4.44777 10.8512C4.07808 10.9523 3.67516 11.0008 3.25701 11.0008C2.96624 11.0008 2.6727 10.9842 2.39716 10.9232C2.98562 12.7218 4.65547 14.0442 6.64101 14.0871C5.09578 15.2958 3.13377 16.0242 1.00977 16.0242C0.637313 16.0242 0.280082 16.0075 -0.0771484 15.9618C1.9347 17.2592 4.31901 18 6.89024 18C15.2478 18 19.817 11.0769 19.817 5.076C19.817 4.87523 19.8101 4.68139 19.8004 4.48892C20.7018 3.84923 21.4592 3.05031 22.0767 2.13092Z" fill="white"/></svg>';
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154875807-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-154875807-1');
        gtag('set', {'user_id': '<?php echo (!$user)? null : $user->getId(); ?>'}); // Legen Sie die User ID mithilfe des Parameters "user_id" des angemeldeten Nutzers fest.
    </script>
    <!-- End Global site tag (gtag.js) - Google Analytics -->
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-P9VSMDX');</script>
	<!-- End Google Tag Manager -->

    <!-- Write Metatags und diverses andere -->
    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>
    <!-- End Metatags und diverses andere -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= Url::base('https') . '/apple-touch-icon.png' ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= Url::base('https') . '/favicon-32x32.png' ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= Url::base('https') . '/favicon-16x16.png' ?>">
    <link rel="manifest" href="<?= Url::base('https') . '/site.webmanifest' ?>">
    <link rel="mask-icon" href="<?= Url::base('https') . '/safari-pinned-tab.svg' ?>" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9VSMDX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php $this->beginBody() ?>
<header class="d-flex align-items-center">
    <div class="navbar  navbar-expand-xl w-100  d-sm-flex align-items-center justify-content-between">
        <?php echo Html::a(Html::img(Yii::$app->HelperClass->checkSVGIcons('TSA_Logo_Schrift_Nebeneinander')), ["/index"], ['class' => 'logo', 'aria-label' => "Tentelian Sports Asscoiation"]); ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <?= Html::img(Yii::$app->HelperClass->checkSVGIcons('burgermenu'),['aria-label' => 'burgermenu']); ?>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <?php echo Html::a(Yii::t('app', 'navbar_home'), ["/index"], ['class' => ($controllerID == 'site' ? "nav-link active" : "nav-link" ),'aria-label' => "Home Button"]); ?>
            <?php echo Html::a(Yii::t('app', 'navbar_news'), ["/news/overview"], ['class' => ($controllerID == 'news' ? "nav-link active" : "nav-link" ),'aria-label' => "News Button"]); ?>
            <?php echo Html::a(Yii::t('app', 'navbar_community'), ["/community/overview"], ['class' => ($controllerID == 'community' ? "nav-link active" : "nav-link" ),'aria-label' => "Community Button"]); ?>
            <?php echo Html::a(Yii::t('app', 'navbar_tournaments'), ["/tournament/overview"], ['class' => ($controllerID == 'tournaments' ? "nav-link active" : "nav-link" ),'aria-label' => "Tournaments Button"]); ?>
            <?php echo Html::a(Yii::t('app', 'navbar_partners'), ["/partner/overview"], ['class' => ($controllerID == 'partner' ? "nav-link active" : "nav-link" ),'aria-label' => "Partners Button"]); ?>
            <!--?php echo Html::a(Yii::t('app', 'navbar_events'), ["/events/overview"], ['class' => ($controllerID == 'events' ? "nav-link active" : "nav-link" ),'aria-label' => "Events Button"]); ?-->
            <?php echo Html::a(Yii::t('app', 'navbar_contact'), ["/support/contact"], ['class' => ($controllerID == 'support' ? "nav-link active" : "nav-link" ),'aria-label' => "Contact Button"]); ?>

            <div class="account-bar d-flex justify-content-between d-xl-inline float-md-right">
                <?php if(!$user) : ?>
                    <?= Html::button(Yii::t('app', 'navbar_login'), ArrayHelper::merge(['onclick'=> "window.location.href = '" . Url::to(['/account/login']). "';"], ['class' => "outline-btn-white",'aria-label' => "Login Button"])); ?>
                    <?= Html::button(Yii::t('app', 'navbar_register'), ArrayHelper::merge(['onclick'=> "window.location.href = '" . Url::to(['/account/register']). "';"], ['class' => "outline-btn",'aria-label' => "Register Button"])); ?>
                <?php else : ?>
                    <div class="mobile">
                        <?php echo Html::a(Yii::t('app', 'navbar_account'), ["/user/details", 'userId' => $user->getId()], ['class' => "nav-link", 'aria-label' => "Profile Button"]); ?>
                        <?php echo Html::a(Yii::t('app', 'navbar_logout'), ["/account/logout"], ['aria-label' => "Logout Button"]); ?>
                    </div>
                    <div class="logged-in dropdown">
                        <div class="user-image d-inline-block float-left">
							<?= Html::img(Yii::$app->HelperClass->checkImage('/images/avatars/user/', $user->getId()) . '.webp', ['aria-labelledby' => 'PeSp Image', 'alt' => $user->getId(). '.webp', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/avatars/user/', $user->getId()) . '.png\'']); ?>
                        </div>
                        <button class="btn dropdown-toggle" type="button" id="usermenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							<?= $user->getUsername() ?>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu text-center w-100" aria-labelledby="usermenu">
							<li>
								<?= Html::button(Yii::t('app', 'navbar_account'), ArrayHelper::merge(['onclick'=> "window.location.href = '" . Url::to(['/user/details', 'userId' => $user->getId()]). "';"], ['class' => "outline-btn-white",'aria-label' => "Login Button"])); ?>
                            </li>
                            <li>
								<?= Html::button(Yii::t('app', 'navbar_logout'), ArrayHelper::merge(['onclick'=> "window.location.href = '" . Url::to(['/account/logout']). "';"], ['class' => "outline-btn-white",'aria-label' => "Login Button"])); ?>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>

<!-- *************** Wir sind live Bereich (anpassen das nur gezeigt wird wenn wir live sind *************** -->
<?php if(Yii::$app->HelperClass->getTwitchOnlineStat()) : ?>
    <div class="promo-banner dropdown position-relative d-block d-lg-flex align-items-center justify-content-between">
        <div class="inner-wrapper">
            <h3 class="promo-text d-inline-flex align-items-center">
                <?= Html::img(Yii::$app->HelperClass->checkSVGIcons('redcircle'), ['class' => 'img-fluid', 'aria-label' => 'we are live']); ?><?= Yii::t('app', 'promotion_nowLive1') ?><span class="d-inline d-lg-none">!</span><span class="d-none d-md-inline"><?= Yii::t('app', 'promotion_nowLive2') ?></span></h3>
            <button type="button" class="d-inline d-lg-none float-right float-lg-none mobile-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= Html::img(Yii::$app->HelperClass->checkSVGIcons('smallarrow-down'), ['class' => 'img-fluid', 'aria-label' => 'show where we are']); ?>
            </button>
            <div class="col float-right align-items-center text-lg-right promo-links dropdown-menu" aria-labelledby="promo-banner">
                <div class="dropdown-divider d-lg-none"></div>
                <?= Html::a($weAreLive['twitch']['svg'] . 'Twitch', $weAreLive['twitch']['channellink'], ['class' => 'twitch dropdown-item d-inline-flex align-items-center', 'target'=>'_blank', 'aria-label' => "Twitch Button"]); ?>
                <!--?= Html::a($weAreLive['Mixer']['svg'] . 'Mixer', $weAreLive['Mixer']['channellink'], ['class' => 'mixer dropdown-item d-inline-flex align-items-center', 'target'=>'_blank', 'aria-label' => "Mixer Button"]); ?-->
                <!--?= Html::a($weAreLive['Youtube']['svg'] . 'Youtube', $weAreLive['Youtube']['channellink'], ['class' => 'youtube dropdown-item d-inline-flex align-items-center', 'target'=>'_blank', 'aria-label' => "Youtube Button"]); ?-->
            </div>
        </div>
    </div>
<?php endif; ?>

<!-- Hier später wieder die sachen für den Alert einfügen -->

<?= $content ?>

<footer class="footer">
    <div class="footer-content row">
        <div class="col-xl-4 col-md-12 first-col">
            <?= Html::img(Yii::$app->HelperClass->checkImage('/images/icons/', 'TSA_Logo_Schrift_right_238x70'). '.webp',['class' => 'img-fluid logo', 'aria-label' => 'Tentelian Sports Association']); ?>
            <p><?= Yii::t('app', 'footer_copyright') ?><?= date('Y') ?></p>
            <?php echo Html::a(Yii::t('app', 'footer_contact'), ["/support/contact"], ['class' => "filled-btn",'aria-label' => "Body Contact Button"]); ?>
        </div>
        <div class="col-xl-2 col-md-6 second-col">
            <nav class="footer_menu">
                <nav class="drop-down-menu">
                    <input type="checkbox" class="activate" id="accordion-1" name="accordion-1">
                    <label for="accordion-1" class="menu-title"><?= Yii::t('app', 'footer_areasHeader'); ?></label>
                    
                    <i class="ion-arrow-down-b"></i>
                    
                    <div class="drop-down">
                        <?php echo Html::a(Yii::t('app', 'footer_areasHome'), ["/site/index"], ['class' => "footer-link d-block",'aria-label' => "Home Button"]); ?>
                        <?php echo Html::a(Yii::t('app', 'footer_areasNews'), ["/news/overview"], ['class' => "footer-link d-block",'aria-label' => "News Button"]); ?>
                        <?php echo Html::a(Yii::t('app', 'footer_areasPlayer'), ["/community/user-overview"], ['class' => "footer-link d-block",'aria-label' => "Player Button"]); ?>
                        <?php echo Html::a(Yii::t('app', 'footer_areasTeams'), ["#"], ['class' => "footer-link d-block",'aria-label' => "Teams Button"]); ?>
                        <?php echo Html::a(Yii::t('app', 'footer_areasOrganisations'), ["#"], ['class' => "footer-link d-block",'aria-label' => "Organisations Button"]); ?>
                        <?php echo Html::a(Yii::t('app', 'footer_areasTournaments'), ["#"], ['class' => "footer-link d-block",'aria-label' => "Tournaments Button"]); ?>
                        <?php echo Html::a(Yii::t('app', 'footer_areasPartner'), ["/partner/overview"], ['class' => "footer-link d-block",'aria-label' => "Partners Button"]); ?>
                    </div>
                </nav>
            </nav>
            <div class="desktop-menu">
                <h3 class="footer-header"><?= Yii::t('app', 'footer_areasHeader'); ?></h3>
                <?php echo Html::a(Yii::t('app', 'footer_areasHome'), ["/site/index"], ['class' => "footer-link d-block",'aria-label' => "Home Button"]); ?>
                <?php echo Html::a(Yii::t('app', 'footer_areasNews'), ["/news/overview"], ['class' => "footer-link d-block",'aria-label' => "News Button"]); ?>
                <?php echo Html::a(Yii::t('app', 'footer_areasPlayer'), ["/community/user-overview"], ['class' => "footer-link d-block",'aria-label' => "Player Button"]); ?>
                <?php echo Html::a(Yii::t('app', 'footer_areasTeams'), ["#"], ['class' => "footer-link d-block",'aria-label' => "Teams Button"]); ?>
                <?php echo Html::a(Yii::t('app', 'footer_areasOrganisations'), ["#"], ['class' => "footer-link d-block",'aria-label' => "Organisations Button"]); ?>
                <?php echo Html::a(Yii::t('app', 'footer_areasTournaments'), ["#"], ['class' => "footer-link d-block",'aria-label' => "Tournaments Button"]); ?>
                <?php echo Html::a(Yii::t('app', 'footer_areasPartner'), ["/partner/overview"], ['class' => "footer-link d-block",'aria-label' => "Partners Button"]); ?>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 third-col">
            <nav class="footer_menu">
                <nav class="drop-down-menu">
                    <input type="checkbox" class="activate" id="accordion-2" name="accordion-2">
                    <label for="accordion-2" class="menu-title"><?= Yii::t('app', 'footer_legalHeader') ?></label>
                    
                    <i class="ion-arrow-down-b"></i>
                    
                    <div class="drop-down">
                        <?php echo Html::a(Yii::t('app', 'footer_legalImprint'), ["/company/imprint"], ['class' => "footer-link d-block",'aria-label' => "Imprint Button"]); ?>
                        <?php echo Html::a(Yii::t('app', 'footer_legalPrivacy'), ["/company/privacy"], ['class' => "footer-link d-block",'aria-label' => "Privacy Button"]); ?>
                        <?php echo Html::a(Yii::t('app', 'footer_legalGTC'), ["/company/gtc"], ['class' => "footer-link d-block",'aria-label' => "GTC Button"]); ?>
                        <?php echo Html::a(Yii::t('app', 'footer_legalJobs'), ["/company/jobs"], ['class' => "footer-link d-block",'aria-label' => "Jobs Button"]); ?>
                    </div>
                </nav>
            </nav>
            <div class="desktop-menu">
                <h3 class="footer-header"><?= Yii::t('app', 'footer_legalHeader') ?></h3>
                <?php echo Html::a(Yii::t('app', 'footer_legalImprint'), ["/company/imprint"], ['class' => "footer-link d-block",'aria-label' => "Imprint Button"]); ?>
                <?php echo Html::a(Yii::t('app', 'footer_legalPrivacy'), ["/company/privacy"], ['class' => "footer-link d-block",'aria-label' => "Privacy Button"]); ?>
                <?php echo Html::a(Yii::t('app', 'footer_legalGTC'), ["/company/gtc"], ['class' => "footer-link d-block",'aria-label' => "GTC Button"]); ?>
                <?php echo Html::a(Yii::t('app', 'footer_legalJobs'), ["/company/jobs"], ['class' => "footer-link d-block",'aria-label' => "Jobs Button"]); ?>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 fourth-col">
            <nav class="footer_menu">
                <nav class="drop-down-menu">
                    <input type="checkbox" class="activate" id="accordion-3" name="accordion-3">
                    <label for="accordion-3" class="menu-title"><?= Yii::t('app', 'footer_socialMediaHeader') ?></label>
                    
                    <i class="ion-arrow-down-b"></i>
                    
                    <div class="drop-down">
                        <?= Html::a($weAreLive['twitch']['svg'] . 'Twitch', $weAreLive['twitch']['channellink'], ['class' => 'footer-link d-flex align-items-center', 'target'=>'_blank', 'aria-label' => "Twitch Button"]); ?>
                        <!--?= Html::a($weAreLive['Mixer']['svg'] . 'Mixer', $weAreLive['Mixer']['channellink'], ['class' => 'footer-link d-flex align-items-center', 'target'=>'_blank', 'aria-label' => "Mixer Button"]); ?-->
                        <?= Html::a($weAreLive['Youtube']['svg'] . 'Youtube', $weAreLive['Youtube']['channellink'], ['class' => 'footer-link d-flex align-items-center', 'target'=>'_blank','aria-label' => "youtube Button"]); ?>
                        <?= Html::a($weAreLive['Twitter']['svg'] . 'Twitter', $weAreLive['Twitter']['channellink'], ['class' => 'footer-link d-flex align-items-center', 'target'=>'_blank','aria-label' => "Twitter Button"]); ?>
                        <?= Html::a($weAreLive['Discord']['svg'] . 'TSA-Tournaments', $weAreLive['Discord']['channellink'], ['class' => 'footer-link d-flex align-items-center', 'target'=>'_blank', 'aria-label' => "TSA-Tournaments Discord Button"]); ?>
                        <?= Html::a($weAreLive['Discord']['svg'] . 'TSA-Community', $weAreLive['Discord']['channellinkCommunity'], ['class' => 'footer-link d-flex align-items-center', 'target'=>'_blank', 'aria-label' => "TSA-Community Discord Button"]); ?>
                        <!--?= Html::a($weAreLive['Liquipedia']['svg'] . 'Liquipedia', $weAreLive['Liquipedia']['channellink'], ['class' => 'footer-link d-flex align-items-center', 'target'=>'_blank', 'aria-label' => "Liquipedia Button"]); ?-->
                    </div>
                </nav>
            </nav>
            <div class="desktop-menu">
                <h3 class="footer-header"><?= Yii::t('app', 'footer_socialMediaHeader') ?></h3>
                <?= Html::a($weAreLive['twitch']['svg'] . 'Twitch', $weAreLive['twitch']['channellink'], ['class' => 'footer-link d-flex align-items-center', 'target'=>'_blank', 'aria-label' => "Twitch Button"]); ?>
                <!--?= Html::a($weAreLive['Mixer']['svg'] . 'Mixer', $weAreLive['Mixer']['channellink'], ['class' => 'footer-link d-flex align-items-center', 'target'=>'_blank', 'aria-label' => "Mixer Button"]); ?-->
                <?= Html::a($weAreLive['Youtube']['svg'] . 'Youtube', $weAreLive['Youtube']['channellink'], ['class' => 'footer-link d-flex align-items-center', 'target'=>'_blank','aria-label' => "youtube Button"]); ?>
                <?= Html::a($weAreLive['Twitter']['svg'] . 'Twitter', $weAreLive['Twitter']['channellink'], ['class' => 'footer-link d-flex align-items-center', 'target'=>'_blank','aria-label' => "Twitter Button"]); ?>
                <?= Html::a($weAreLive['Discord']['svg'] . 'TSA-Tournaments', $weAreLive['Discord']['channellink'], ['class' => 'footer-link d-flex align-items-center', 'target'=>'_blank', 'aria-label' => "TSA-Tournaments Discord Button"]); ?>
                <?= Html::a($weAreLive['Discord']['svg'] . 'TSA-Community', $weAreLive['Discord']['channellinkCommunity'], ['class' => 'footer-link d-flex align-items-center', 'target'=>'_blank', 'aria-label' => "TSA-Community Discord Button"]); ?>
                <!--?= Html::a($weAreLive['Liquipedia']['svg'] . 'Liquipedia', $weAreLive['Liquipedia']['channellink'], ['class' => 'footer-link d-flex align-items-center', 'target'=>'_blank', 'aria-label' => "Liquipedia Button"]); ?-->
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
