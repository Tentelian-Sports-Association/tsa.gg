<?php

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use app\widgets\Alert;

$this->title = 'Contact Us';

\app\modules\support\assets\contact\ContactAsset::register($this);

/************* Meta Index ****************/
$this->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->url]);
Yii::$app->MetaClass->writeDefaultMeta($this, $this->title, 'Need help? Contact us!', '@BettyBirnchen');
/************* End Meta Index ****************/

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
    <div class="inner-wrapper">
        <div class="py-5 bg-darkblue-2">
            <address>
                <strong>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                    </svg> E-Mail
                </strong><br>
                <a href="mailto:info@tsa.gg">info@tsa.gg</a>
            </address>
        </div>
    </div>
</div>