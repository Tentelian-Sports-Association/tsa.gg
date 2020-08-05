<?php
/* @var $this yii\web\View */
/* @var $gamesList array */

use yii\helpers\Html;


$this->title = \app\modules\tournament\Module::t('overview', 'overview_header');

/************* Meta Index ****************/
$this->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->url]);
Yii::$app->MetaClass->writeDefaultMeta($this, $this->title, \app\modules\tournament\Module::t('overview', 'overview_meta_description'), '@BettyBirnchen');
/************* End Meta Index ****************/

\app\modules\tournament\assets\OverviewAsset::register($this);

/*
foreach($gamesList as $game)
{
    $game['Name'];
    $game['Id'];
    $game['image'];
    $game['OpenTournaments'];
    $game['ParticipatingPlayer'];
    $game['ParticipatingTeams'];
}
*/
?>
<div class="site-tournamentOverview">
	<!-- *************** Header *************** -->
    <div class="hero">
        <div class="hero-image">
            <picture>
                <source media="(min-width: 1200px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/', 'community') . '.webp' ?>
                        type="image/jpeg">
                <source media="(min-width: 300px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/mobile/', 'community') . '.webp' ?>
                        type="image/jpeg">
                <img src="https://via.placeholder.com/1920x500" aria-label="News Header" class="img-fluid"/>
            </picture>
        </div>
        <div class="hero-container row">
            <div class="hero-text col-lg-8">
                <h1 class="hero-title">
                    <?= \app\modules\tournament\Module::t('overview', 'overview_header'); ?>
                </h1>
                <p class="description" >
                    <?= \app\modules\tournament\Module::t('overview', 'overview_meta_description'); ?>
                </p>
            </div>
        </div>
    </div>
    <!-- *************** Spiele mit offenen Turnieren *************** -->
</div>