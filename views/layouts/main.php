<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\widgets\Breadcrumbs;

use app\assets\AppAsset;

use yii\helpers\Html;

AppAsset::register($this);

$user = null;

$weAreLive = array();
$weAreLive['twitch']['channellink'] = "https://twitch.tv/TentelianSA";
$weAreLive['Mixer']['channellink'] = "https://mixer.com/TentelianSA";
$weAreLive['Youtube']['channellink'] = "https://www.youtube.com/watch?v=aDBr8jwnpbw";

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

    <!-- Write Metatags und diverses andere -->
    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>
    <!-- End Metatags und diverses andere -->


</head>
<body>
<?php $this->beginBody() ?>
<header class="d-flex align-items-center">
    <div class="navbar  navbar-expand-xl w-100  d-sm-flex align-items-center justify-content-between">
        <a href="#" class="logo">
            <img src="https://via.placeholder.com/237x74.png" class="img-fluid" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <?php echo Html::a(Yii::t('app', 'nabvar_home'), ["/site/index"], ['class' => "nav-link active",'aria-label' => "Home Button"]); ?>
            <?php echo Html::a(Yii::t('app', 'navbar_news'), ["#"], ['class' => "nav-link",'aria-label' => "News Button"]); ?>
            <?php echo Html::a(Yii::t('app', 'navbar_community'), ["#"], ['class' => "nav-link",'aria-label' => "Community Button"]); ?>
            <?php echo Html::a(Yii::t('app', 'navbar_tournaments'), ["#"], ['class' => "nav-link",'aria-label' => "Tournaments Button"]); ?>
            <?php echo Html::a(Yii::t('app', 'navbar_partners'), ["/partner/overview"], ['class' => "nav-link",'aria-label' => "Partners Button"]); ?>
            <?php echo Html::a(Yii::t('app', 'navbar_events'), ["#"], ['class' => "nav-link",'aria-label' => "Events Button"]); ?>
            <?php echo Html::a(Yii::t('app', 'navbar_contact'), ["#"], ['class' => "nav-link",'aria-label' => "Contact Button"]); ?>
            <div class="account-bar d-flex justify-content-between d-xl-inline float-md-right">
                <button class="outline-btn-white">Login</button>
                <button class="outline-btn">Registrieren</button>
            </div>
        </div>
    </div>
</header>

<!-- *************** Wir sind live Bereich *************** -->
<div class="promo-banner dropdown d-block d-lg-flex align-items-center justify-content-between">
    <h3 class="promo-text d-inline"><span>* </span>wir sind jetzt live<span class="d-inline d-lg-none">!</span><span class="d-none d-md-inline">, schau uns zu!</span></h3>
    <button type="button" class="d-inline d-lg-none float-right float-lg-none mobile-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        ^
    </button>
    <div class="col  align-items-center text-lg-right promo-links dropdown-menu" aria-labelledby="promo-banner">
        <div class="dropdown-divider d-lg-none"></div>
        <a href="#" class="twitch dropdown-item"><span>I </span>Twitch</a>
        <a href="#" class="mixer dropdown-item"><span>I </span>Mixer</a>
        <a href="#" class="youtube dropdown-item"><span>I </span>Youtube</a>
    </div>
</div>

<!--
<div class="breadcrumb">
    <?= Breadcrumbs::widget([
    'itemTemplate' => "\n\t<li class=\"breadcrumb-item\"><i>{link}</i></li>\n", // template for all links
    'activeItemTemplate' => "\t<li class=\"breadcrumb-item active\">{link}</li>\n", // template for the active link
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>
    <?= Alert::widget() ?>
</div>
-->
<?= $content ?>



<footer class="footer">
    <div class="row">
        <div class="col-sm-5 first-col">
            <img src="https://via.placeholder.com/368x109.png" class="img-fluid logo">
            <p>&copy; My Company <?= date('Y') ?></p>
            <a href="#" class="filled-btn">Kontakt</a>
        </div>
        <div class="col-sm-2 second-col">
            <h3 class="footer-header">Bereiche</h3>
            <a href="#" class="footer-link d-block">Startseite </a>
            <a href="#" class="footer-link d-block"">News</a>
            <a href="#" class="footer-link d-block">Player</a>
            <a href="#" class="footer-link d-block">Teams</a>
            <a href="#" class="footer-link d-block">Turniere</a>
            <a href="#" class="footer-link d-block">Partner</a>
        </div>
        <div class="col-sm-2 third-col">
            <h3 class="footer-header">Rechtliches</h3>
            <a href="#" class="footer-link d-block">Impressum</a>
            <a href="#" class="footer-link d-block"">Datenschutz</a>
            <a href="#" class="footer-link d-block">AGB</a>
        </div>
        <div class="col-sm-2 fourth-col">
            <h3 class="footer-header">Social Media</h3>
            <a href="#" class="footer-link d-block">Icon Twitch</a>
            <a href="#" class="footer-link d-block">Icon Mixer</a>
            <a href="#" class="footer-link d-block">Icon Youtube</a>
            <a href="#" class="footer-link d-block">Icon Twitter</a>
            <a href="#" class="footer-link d-block">Icon Discord</a>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
