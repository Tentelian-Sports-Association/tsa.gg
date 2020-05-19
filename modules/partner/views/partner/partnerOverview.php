<?php

use yii\helpers\Html;

/* @var $this yii\web\View
 * @var $ourPartner array
 */


$this->title = 'TSA - Our Partners';

?>

<div class="content-partnerOverviewpage">
    
    <?php foreach($ourPartner as $partner) : ?>
        <!-- Auf der Partnerseite soll das ein bisschen abwechslungsreich sein.
             immer abwechselnd:
                Bild links
                Beschreibung und Überschrift rechts
                next
                Bild rechts
                beschreibung und Überschrift links -->
                <!-- Müssen heir aber noch auf das Design warten... -->
        <!-- name als überschrift über dem langem text -->
        <?= $partner['name']?>
        <!-- beschreibung -->
        <?= $partner['description']?>
        <div class="col partner-item" aria-labelledby='<?= $partner['Image']?>' aria-describedby='<?= $partner['Image']?>'>
            <!-- Background Image -->
            <?= Html::a(Html::img(Yii::$app->HelperClass->checkImage('/images/partner/index/', $partner['Image']) . '.webp', ['class' => 'img-fluid','description' => $partner['Name'],'aria-label' => $partner['Name'], 'id' => $partner['Image'], 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/partner/index/', $partner['Image']) . '.png\'']), $partner['webadresse'], ['target'=>'_blank']); ?>
        </div>
	<?php endforeach; ?>

</div>