<?php

use yii\helpers\Html;

/* @var $this yii\web\View
 * @var $ourPartner array
 */

$this->title = 'Our Partners';

/************* Meta Index ****************/
$this->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->url]);
Yii::$app->MetaClass->writeMetaPartner($this, $this->title, 'We present our partners and sponsors: Tentelian, Steelseries, Commotron GmbH, Gamers Finest Salzburg, Pace Media Development GmbH');

app\modules\partner\assets\PartnerOverviewAsset::register($this);

?>

<div class="content-partnerOverviewpage">
    <!-- *************** Header *************** -->
    <div class="hero">
        <div class="hero-image">
            <picture>
                <source media="(min-width: 1200px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/', 'partner') . '.webp' ?>
                        type="image/jpeg">
                <source media="(min-width: 300px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/mobile/', 'partner') . '.webp' ?>
                        type="image/jpeg">
                <img src="<?php echo Yii::$app->HelperClass->checkImage('/images/banner/', 'partner') . '.webp' ?>" aria-label="partner Header" class="img-fluid"/>
            </picture>
        </div>
        <div class="hero-container row">
            <div class="hero-text col-lg-8">
                <h1 class="hero-title">
					<?= \app\modules\partner\Module::t('partner', 'our_partners') ?>
                </h1>
                <p class="description" >
                    <?= \app\modules\partner\Module::t('partner', 'our_partners_description') ?>
                </p>
            </div>
        </div>
    </div>
    <section>
        <div class="inner-wrapper">
            <div class="partner-list">
                <?php foreach($ourPartner as $partner) : ?>
                    <div class="partner-item">
                        <div class="row align-items-center text-center">
                            <div class="col-12 col-md-6 order-2 order-md-1">
                                <h3><?= $partner['name']?></h3>
                                <p><?= $partner['description']?></p>
                            </div>
                            <div class="col-12 col-md-6 order-1 order-md-2" aria-labelledby='<?= $partner['Image']?>' aria-describedby='<?= $partner['Image']?>'>
                                <?= Html::a(Html::img(Yii::$app->HelperClass->checkImage('/images/partner/index/', $partner['Image']) . '.webp', ['class' => 'img-fluid','description' => $partner['Name'],'aria-label' => $partner['Name'], 'id' => $partner['Image'], 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/partner/index/', $partner['Image']) . '.png\'']), $partner['webadresse'], ['target'=>'_blank']); ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>