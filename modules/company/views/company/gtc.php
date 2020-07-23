<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

\app\modules\company\assets\GtcAsset::register($this);

?>

<div class="site-gtc">
	<!-- *************** Header *************** -->
    <div class="hero">
        <div class="hero-image">
            <picture>
                <source media="(min-width: 1200px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/', 'gtc') . '.webp' ?>
                        type="image/jpeg">
                <source media="(min-width: 300px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/mobile/', 'gtc') . '.webp' ?>
                        type="image/jpeg">
                <img src="<?php echo Yii::$app->HelperClass->checkImage('/images/banner/', 'events') . '.webp' ?>" aria-label="News Header" class="img-fluid"/>
                <!--<img src="assets/images/hero/herobackground.png" aria-label="News Header" class="img-fluid"/>-->
            </picture>
        </div>
        <div class="hero-container row">
            <div class="hero-text col-lg-8">
                <h1 class="hero-title">
                    AGB
                </h1>
                <p class="description" >
                    Weit hinten, hinter den Wortbergen, fern der L�nder Vokalien und Konsonantien.
                </p>
            </div>
        </div>
    </div>
    <!-- Der Text dann.... -->
	<div class="gtc">
        <div class="inner-wrapper">
        </div>
	</div>
</div>