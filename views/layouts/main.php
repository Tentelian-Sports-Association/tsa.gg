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
    <div class="row">
        <div class="col-2">
            <a href="#" class="logo">
                <img src="https://via.placeholder.com/237x74.png" class="img-fluid" alt="Logo">
            </a>
        </div>
        <div class="col-10">
            <div class="navbar  navbar-expand-xl">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">Icon</span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <a class="nav-link active" href="#">Home</a>
                    <a class="nav-link" href="#">News</a>
                    <a class="nav-link" href="#">Communinity</a>
                    <a class="nav-link" href="#">Tournaments</a>
                    <a class="nav-link" href="#">Partners</a>
                    <a class="nav-link" href="#">Events</a>
                    <a class="nav-link" href="#">Kontakt</a>
                    <div class="account-bar d-inline">
                        <button class="outline-btn-white">Login</button>
                        <button class="outline-btn">Registrieren</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>



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
    <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
