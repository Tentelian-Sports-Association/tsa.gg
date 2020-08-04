<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = \app\modules\company\Module::t('company', 'jobs_header');

/************* Meta Index ****************/
$this->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->url]);
Yii::$app->MetaClass->writeDefaultMeta($this, $this->title, \app\modules\company\Module::t('company', 'jobs_description'), '@BettyBirnchen');
/************* End Meta Index ****************/

\app\modules\company\assets\JobsAsset::register($this);

?>

<div class="site-jobs">
	<!-- *************** Header *************** -->
    <div class="hero">
        <div class="hero-image">
            <picture>
                <source media="(min-width: 1200px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/', 'jobs') . '.webp' ?>
                        type="image/jpeg">
                <source media="(min-width: 300px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/mobile/', 'jobs') . '.webp' ?>
                        type="image/jpeg">
                <img src="<?php echo Yii::$app->HelperClass->checkImage('/images/banner/', 'events') . '.webp' ?>" aria-label="News Header" class="img-fluid"/>
                <!--<img src="assets/images/hero/herobackground.png" aria-label="News Header" class="img-fluid"/>-->
            </picture>
        </div>
        <div class="hero-container row">
            <div class="hero-container row">
            <div class="hero-text col-lg-8">
                <h1 class="hero-title">
                    <?= \app\modules\company\Module::t('company', 'jobs_header') ?>
                </h1>
                <p class="description" >
                    <?= \app\modules\company\Module::t('company', 'jobs_description') ?>
                </p>
            </div>
        </div>
        </div>
    </div>
    <!-- Der Text dann.... -->
	<div class="jobs">
        <div class="inner-wrapper">
            <p>Steve Jobs war leider in letzter zeit nicht hier....</p>
        </div>
	</div>
</div>