<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $globalCount */
/* @var $users array */

use yii\helpers\Html;

\app\modules\community\assets\communityOverview\CommunityOverviewAsset::register($this);

$this->title = \app\modules\community\Module::t('overview', 'overview_header');

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
                    Weit hinten, hinter den Wortbergen, fern der Länder Vokalien und Konsonantien.
                </p>
            </div>
        </div>
    </div>
    <div class="community-overview">
        <div class="inner-wrapper">
            <div class="col-8">
                <ul class="list-unstyled row">
                    <li class="community-item col-12 col-lg-6">
                        <!-- User Overview -->
                        <?= Html::a(Html::img(Yii::$app->HelperClass->checkImage('/images/news/news/', 'default') . '.webp', ['aria-label' => 'User Overview', 'class' => 'img-fluid','onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/news/news/', 'default') . '.png\''])		
                                        . '<h3 class="community-header">User Overview</h3>'
                        , ['/community/user-overview'], ['class' => 'community-link']); ?>
                    </li>
                    <li class="community-item col-12 col-lg-6">
                        <!-- Orga Overview -->
                        <?= Html::a(Html::img(Yii::$app->HelperClass->checkImage('/images/news/news/', 'default') . '.webp', ['aria-label' => 'Orga Overview', 'class' => 'img-fluid','onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/news/news/', 'default') . '.png\''])		
                                        . '<h3 class="community-header">Orga Overview</h3>'
                        , ['/community/orga-overview'], ['class' => 'community-link']); ?>
                    </li>
                    <li class="community-item col-12 col-lg-6">
                        <!-- Team Overview -->
                        <?= Html::a(Html::img(Yii::$app->HelperClass->checkImage('/images/news/news/', 'default') . '.webp', ['aria-label' => 'Team Overview', 'class' => 'img-fluid','onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/news/news/', 'default') . '.png\''])		
                                        . '<h3 class="community-header">Team Overview</h3>'
                        , ['/community/team-overview'], ['class' => 'community-link']); ?>
                    </li>
                    <!-- 
                    <li class="community-item col-12 col-lg-6">

                    </li>
                    -->
                    <li class="community-item col-12 col-lg-12">
                    <!-- Add Ad-Banner here -->
                    </li>
                </ul>
            </div>
            <div class="col-4">
                <!-- Add Ad-Banner here -->
            </div>
        </div>
    </div>
</div>