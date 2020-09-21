<?php
/* @var $this yii\web\View */
/* @var $tournament array */
/* @var $authorizedTeams array */
/* @var $authorizedPlayer array */
/* @var $user array */
/* @var $view string */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use app\widgets\Alert;

\app\modules\tournament\assets\TournamentCheckInAsset::register($this);


?>
<div class="site-tournamentCheckIn">
	<div class="hero">
        <div class="hero-image">
            <picture>
                <source media="(min-width: 1200px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/', 'community') . '.webp' ?>
                        type="image/jpeg">
                <source media="(min-width: 300px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/mobile/', 'community') . '.webp' ?>
                        type="image/jpeg">
                <img src="<?php echo Yii::$app->HelperClass->checkImage('/images/banner/', 'community') . '.webp' ?>" aria-label="News Header" class="img-fluid"/>
            </picture>
        </div>
        <div class="hero-container row">
            <div class="hero-text col-lg-8">
                <h1 class="hero-title">
                    <?= $tournament['name'] ?>
                </h1>
                <p class="description" >
                    <?= 'CheckIn' ?>
                </p>
            </div>
        </div>
    </div>

    <div class="inner-wrapper">
        <?php include $view; ?>
    </div>
</div>