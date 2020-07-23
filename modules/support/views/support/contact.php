<?php

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

$this->title = 'Contact Us';

\app\modules\support\assets\contact\ContactAsset::register($this);


?>

<div class="content-partnerOverviewpage">
    <!-- *************** Header *************** -->
    <div class="hero">
        <div class="hero-image">
            <picture>
                <source media="(min-width: 1200px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/', 'contact') . '.webp' ?>
                        type="image/jpeg">
                <source media="(min-width: 300px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/mobile/', 'contact') . '.webp' ?>
                        type="image/jpeg">
                <img src="<?php echo Yii::$app->HelperClass->checkImage('/images/banner/', 'partner') . '.webp' ?>" aria-label="partner Header" class="img-fluid"/>
            </picture>
        </div>
        <div class="hero-container row">
            <div class="hero-text col-lg-8">
                <h1 class="hero-title">
					<?= \app\modules\support\Module::t('contact', 'contact_header') ?>
                </h1>
                </h1>
                <p class="description" >
                    <?= \app\modules\support\Module::t('contact', 'contact_header_description') ?>
                </p>
            </div>
        </div>
    </div>
</div>