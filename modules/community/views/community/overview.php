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

    <div class="container">
        <!-- User Overview -->
		<?php echo Html::a(\app\modules\community\Module::t('overview', 'overview_users'), ["/community/user-overview"], ['class' => 'footer-link d-flex align-items-center', 'aria-label' => "User Overview"]); ?>
        <!-- Orga Overview -->
		<?= Html::a(\app\modules\community\Module::t('overview', 'overview_organisations'), ["#"], ['class' => 'footer-link d-flex align-items-center', 'target'=>'_blank', 'aria-label' => "User Overview"]); ?>

        <!-- Team Overview -->
		<?= Html::a(\app\modules\community\Module::t('overview', 'overview_teams'), ["#"], ['class' => 'footer-link d-flex align-items-center', 'aria-label' => "User Overview"]); ?>
    </div>
</div>