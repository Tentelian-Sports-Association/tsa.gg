<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $globalCount */
/* @var $users array */

use yii\helpers\Html;


$this->title = \app\modules\community\Module::t('overview', 'overview_header');

/************* Meta Index ****************/
$this->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->url]);
Yii::$app->MetaClass->writeDefaultMeta($this, $this->title,'Our community and where they come from', '@BettyBirnchen');
/************* End Meta Index ****************/

\app\modules\community\assets\communityOverview\CommunityOverviewAsset::register($this);

?>

<div class="site-communityOverview">
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
                    Community
                </h1>
                <p class="description" >
                    <!-- Weit hinten, hinter den Wortbergen, fern der Länder Vokalien und Konsonantien. -->
                </p>
            </div>
        </div>
    </div>
    <div class="community-overview">
        <div class="inner-wrapper">
            <div class="col-12 col-lg-8 float-left">
                <ul class="list-unstyled row">
                    <li class="community-item col-12 col-lg-6">
                        <!-- User Overview -->
                        <?= Html::a(Html::img(Yii::$app->HelperClass->checkImage('/images/community/', 'players') . '.webp', ['aria-label' => 'User Overview', 'class' => 'img-fluid','onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/community/', 'players') . '.png\''])		
                                        . '<h3 class="community-header">User Overview</h3>'
                        , ['/community/user-overview'], ['class' => 'community-link']); ?>
                    </li>
                    <li class="community-item col-12 col-lg-6">
                        <!-- Orga Overview -->
                        <?= Html::a(Html::img(Yii::$app->HelperClass->checkImage('/images/community/', 'organisations') . '.webp', ['aria-label' => 'Orga Overview', 'class' => 'img-fluid','onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/community/', 'organisations') . '.png\''])		
                                        . '<h3 class="community-header">Orga Overview</h3>'
                        , ['/community/orga-overview'], ['class' => 'community-link']); ?>
                    </li>
                    <li class="community-item col-12 col-lg-6">
                        <!-- Team Overview -->
                        <?= Html::a(Html::img(Yii::$app->HelperClass->checkImage('/images/community/', 'teams') . '.webp', ['aria-label' => 'Team Overview', 'class' => 'img-fluid','onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/community/', 'teams') . '.png\''])		
                                        . '<h3 class="community-header">Team Overview</h3>'
                        , ['/community/team-overview'], ['class' => 'community-link']); ?>
                    </li>
                    <!-- 
                    <li class="community-item col-12 col-lg-6">

                    </li>
                    -->
                </ul>
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
</div>