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
    <div class="inner-wrapper p-3 p-md-5">
        <div class="col-12 col-lg-8 float-left">
            <div class="game-overview">
                <ul class="list-unstyled row">
                <?php foreach($gamesList as $game) : ?>
                    <?php if($game['OpenTournaments'] > 0) : ?>
                        <li class="game-item col-12 col-lg-6">
                            <!-- User Overview -->
                            <?= Html::a(Html::img(Yii::$app->HelperClass->checkImage('/images/community/', 'players') . '.webp', ['aria-label' => $game['Name'].' Overview', 'class' => 'img-fluid','onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/community/', 'players') . '.png\''])		
                                            . '<h3 class="game-header">'.$game['Name'].'</h3>'
                            , ['/tournament/overview', 'gameID' => $game['Id']], ['class' => 'game-link']); ?>
                        </li>
                        <li class="game-info col-12 col-lg-6">
                            <div>Aktive Turniere: <?= $game['OpenTournaments'] ?></div>
                            <div>Teilnehmende Teams: <?= $game['ParticipatingTeams'] ?></div>
                            <div>Teilnehmende Spieler: <?= $game['ParticipatingPlayer'] ?></div>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="col-12 col-lg-4 float-left">
            <div class="ad-block-container row">
                <div class="ad-block-item col-12">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- TSA-Community-Footer -->
                    <ins class="adsbygoogle"
                            style="display:block"
                            data-ad-client="ca-pub-8480651532892152"
                            data-ad-slot="6889561650"
                            data-ad-format="auto"
                            data-full-width-responsive="true"></ins>
                    <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-12 col-lg-12">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- TSA-Community-SideBanner -->
            <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-8480651532892152"
                data-ad-slot="2187242773"
                data-ad-format="auto"
                data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </div>
</div>