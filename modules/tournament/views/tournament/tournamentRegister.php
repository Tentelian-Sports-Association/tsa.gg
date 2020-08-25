<?php
/* @var $this yii\web\View */
/* @var $tournament array */
/* @var $rules array */


\app\modules\tournament\assets\TournamentRegistrationAsset::register($this);


use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
?>

<div class="site-tournamentRegistration">
	<div class="hero">
        <div class="hero-image">
            <picture>
                <source media="(min-width: 1200px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/', 'community') . '.webp' ?>
                        type="image/jpeg">
                <source media="(min-width: 300px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/mobile/', 'community') . '.webp' ?>
                        type="image/jpeg">
                <img src="<?php echo Yii::$app->HelperClass->checkImage('/images/banner/', 'community') . '.webp' ?>" aria-label="News Header" class="img-fluid"/>
            </picture>
        </div>
        <div class="hero-container row">
            <div class="hero-text col-lg-8">
                <h1 class="hero-title">
                    <?= $tournament['name'] ?>
                </h1>
                <p class="description" >
                    <?= 'Registration' ?>
                </p>
            </div>
        </div>
    </div>

    <div class="rules">
        <?php foreach($rules as $rule) : ?>
            <div class="paragraph"><div class="paragraphId"><?=  $rule['paragraphId'] ?></div><?=  $rule['paragraphName'] ?></div>
            <div class="paragraphDescription"><?=  $rule['paragraphDescription'] ?></div>
            <?php foreach ($rule['paragraphSubParagraphs'] as $subParagraph) : ?>
                <div class="subParagraph"><div class="paragraphId"><?=  $rule['paragraphId'] . '.' . $subParagraph['subParagraphId'] ?></div><?=  $subParagraph['subParagraphName'] ?></div>
                <div class="subParagraphDescription"><?=  $subParagraph['subParagraphDescription'] ?></div>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>

    <div>
    </div>
</div>