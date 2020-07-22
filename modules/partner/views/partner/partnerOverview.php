<?php

use yii\helpers\Html;

/* @var $this yii\web\View
 * @var $ourPartner array
 */

app\modules\partner\assets\PartnerOverviewAsset::register($this);

$this->title = 'TSA - Our Partners';

?>

<div class="content-partnerOverviewpage">
    <section>
        <div class="hero">
        <div class="hero-image">
            <picture>
                <source media="(min-width: 1200px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/', 'partner') . '.webp' ?>
                        type="image/jpeg">
                <source media="(min-width: 300px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/mobile/', 'partner') . '.webp' ?>
                        type="image/jpeg">
                <img src="https://via.placeholder.com/1920x500" aria-label="News Header" class="img-fluid"/>
            </picture>
        </div>
        <div class="hero-container row">
            <div class="hero-text col-lg-8">
                <h1 class="hero-title">
                    Player
                </h1>
                <p class="description" >
                    Weit hinten, hinter den Wortbergen, fern der Länder Vokalien und Konsonantien.
                </p>
            </div>
        </div>
    </div>
    </section>
    <section>
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
    </section>
</div>