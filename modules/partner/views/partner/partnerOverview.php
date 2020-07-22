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
                <img src="https://via.placeholder.com/1920x500" aria-label="partner Header" class="img-fluid"/>
            </picture>
        </div>
        <div class="hero-container row">
            <div class="hero-text col-lg-8">
                <h1 class="hero-title">
					Partners
                </h1>
                <p class="description" >
                    Weit hinten, hinter den Wortbergen, fern der Länder Vokalien und Konsonantien.
                </p>
            </div>
        </div>
    </div>
    <section>
        <div class="inner-wrapper">
            <div class="partner-list">
                <!-- Auf der Partnerseite soll das ein bisschen abwechslungsreich sein.
                    immer abwechselnd:
                    Bild links
                    Beschreibung und �berschrift rechts
                    next
                    Bild rechts
                    beschreibung und �berschrift links -->
                <?php foreach($ourPartner as $partner) : ?>
                    <div class="partner-item">
                        <div class="row align-items-center text-center">
                            <div class="col-12 col-md-6 order-2 order-md-1">
                                <!-- M�ssen heir aber noch auf das Design warten... -->
                                <!-- name als �berschrift �ber dem langem text -->
                                <h3><?= $partner['name']?></h3>
                                <!-- beschreibung -->
                                <p><?= $partner['description']?></p>
                            </div>
                            <div class="col-12 col-md-6 order-1 order-md-2" aria-labelledby='<?= $partner['Image']?>' aria-describedby='<?= $partner['Image']?>'>
                                <!-- Background Image -->
                                <?= Html::a(Html::img(Yii::$app->HelperClass->checkImage('/images/partner/index/', $partner['Image']) . '.webp', ['class' => 'img-fluid','description' => $partner['Name'],'aria-label' => $partner['Name'], 'id' => $partner['Image'], 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/partner/index/', $partner['Image']) . '.png\'']), $partner['webadresse'], ['target'=>'_blank']); ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>