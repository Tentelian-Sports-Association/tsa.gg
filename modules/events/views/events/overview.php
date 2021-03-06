<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $globalCount */
/* @var $users array */

use yii\helpers\Html;
use app\widgets\Alert;

$this->title = \app\modules\events\Module::t('events', 'event_overview_header');

/************* Meta Index ****************/
$this->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->url]);
Yii::$app->MetaClass->writeDefaultMeta($this, $this->title, \app\modules\events\Module::t('events', 'event_overview_description'), '@BettyBirnchen');
/************* End Meta Index ****************/

\app\modules\events\assets\OverviewAsset::register($this);

?>

<div class="site-communityOverview">
    <!-- *************** Header *************** -->
    <div class="hero">
        <div class="hero-image">
            <picture>
                <source media="(min-width: 1200px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/', 'events') . '.webp' ?>
                        type="image/jpeg">
                <source media="(min-width: 300px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/mobile/', 'events') . '.webp' ?>
                        type="image/jpeg">
                <img src="https://via.placeholder.com/1920x500" aria-label="Events Header" class="img-fluid"/>
            </picture>
        </div>
        <div class="hero-container row">
            <div class="hero-text col-lg-8">
                <h1 class="hero-title">
					<?= \app\modules\events\Module::t('events', 'event_overview_header') ?>
                </h1>
                <p class="description" >
                    <?= \app\modules\events\Module::t('events', 'event_overview_description') ?>
                </p>
            </div>
        </div>
    </div>
</div>