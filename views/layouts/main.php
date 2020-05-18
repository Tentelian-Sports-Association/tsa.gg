<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);

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
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
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
        <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">

            <a class="nav-link active" href="#">Home</a>

            <a class="nav-link" href="#">News</a>
            <a class="nav-link" href="#">Communinity</a>
            <a class="nav-link" href="#">Tournaments</a>
            <a class="nav-link" href="#">Partners</a>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Sub Site 1</a>
                    <a class="dropdown-item" href="#">Sub Site 2</a>
                </div>
            </div>
            <a class="nav-link" href="#">Events</a>
            <a class="nav-link" href="#">Kontakt</a>
            <div class="account-bar d-flex justify-content-between d-xl-inline float-md-right">
                <button class="outline-btn-white">Login</button>
                <button class="outline-btn">Registrieren</button>
            </div>
        </div>
    </div>
</header>

<!-- *************** Wir sind live Bereich *************** -->
<div class="promo-banner dropdown d-block d-sm-flex align-items-center justify-content-between">
    <h3 class="promo-text d-inline"><span>* </span>wir sind jetzt live<span class="d-inline d-sm-none">!</span><span class="d-none d-sm-inline">, schau uns zu!</span></h3>
    <button type="button" class="d-inline d-sm-none float-right float-sm-none mobile-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        ^
    </button>
    <div class="col  align-items-center text-sm-right promo-links dropdown-menu" aria-labelledby="promo-banner">
        <div class="dropdown-divider d-sm-none"></div>
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
