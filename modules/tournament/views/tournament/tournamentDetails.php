<?php
/* @var $this yii\web\View */
/* @var $tournament array */
/* @var $rules array */
/* @var $participants array */


\app\modules\tournament\assets\TournamentDetailsAsset::register($this);


use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
?>

<div class="site-tournamentDetails">
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
    </div>

    <div class="rules">
        
    </div>

    <div class="participants">
        <?php if($tournament['isTeam']) : ?>
            <?php foreach($participants as $participant) : ?>

            <?php endforeach; ?>
        <?php else : ?>
            <?php foreach($participants as $participant) : ?>
                <div class"avatar">
                    <?= Html::img(Yii::$app->HelperClass->checkImage('/images/avatars/user/', $participant['id']) . '.webp',  ['width' => '120','height' => '120', 'id' => 'imagePreview', 'class' => 'rounded-circle' ,'aria-label' => $participant['name'] . 'Avatar Image', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/avatars/user/', $participant['id']) . '.png\''] ); ?>
                <div>
                <div class"username">
                    <?= $participant['name'] ?>
                    <?= Html::img(Yii::$app->HelperClass->checkNationalityImage($participant['language']['icon'], '4x3'), ['aria-label' => $participant['language']['name'] . 'nationality Image', 'alt' => $participant['language']['icon'],'class' => 'IMG']) ?>
                    <?= $participant['name'] ?>
                <div>
                <div class"checkinState">
                    <?= $participant['checkInState'] ?>
                <div>
                <!-- Nur Spieler selbst und Administratoren -->
                <div class"penalties">
                    <?php foreach($participant['penalties'] as $penaltie) : ?>
                        <div class"penaltiename"><?= $penaltie['name'] ?></div>
                        <div class"penaltiename"><?= $penaltie['weight'] ?></div>
                        <div class"penaltiename"><?= $penaltie['date'] ?></div>
                    <?php endforeach; ?>
                <div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <div class="brackets">
    </div>
</div>