<?php
/* @var $this yii\web\View */
/* @var $tournament array */
/* @var $rules array */
/* @var $authorizedTeams array */
/* @var $authorizedPlayer array */
/* @var $user array */
/* @var $view string */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use app\widgets\Alert;

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

    <div class="inner-wrapper">
        <div class="rules mb-4 dark-bg pt-3 pb-3 pl-3 pr-3">
            <?php foreach($rules as $rule) : ?>
                <div class="paragraph"><span class="paragraphId"><?=  $rule['paragraphId'] ?></span> <?=  $rule['paragraphName'] ?></div>
                <div class="paragraphDescription"><?=  $rule['paragraphDescription'] ?></div>
                <?php foreach ($rule['paragraphSubParagraphs'] as $subParagraph) : ?>
                    <div class="subParagraph mt-3"><span class="paragraphId"><?=  $rule['paragraphId'] . '.' . $subParagraph['subParagraphId'] ?> </span><?=  $subParagraph['subParagraphName'] ?></div>
                    <div class="subParagraphDescription mb-3"><?=  $subParagraph['subParagraphDescription'] ?></div>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>

        <?php include $view; ?>
    </div>
</div>