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
    <div class="inner-wrapper">

        <div class="rules">
            
        </div>

        <div class="participants">
            <ul class="list-unstyled row">
                <?php if($tournament['isTeam']) : ?>
                    <?php foreach($participants as $participant) : ?>

                    <?php endforeach; ?>
                <?php else : ?>
                    <?php foreach($participants as $participant) : ?>
                        <div class="col-12 openTournamentBody">
                            <div class="col-2 avatar float-left">
                                <?= Html::img(Yii::$app->HelperClass->checkImage('/images/avatars/user/', $participant['id']) . '.webp',  ['width' => '120','height' => '120', 'id' => 'imagePreview', 'class' => 'rounded-circle' ,'aria-label' => $participant['name'] . 'Avatar Image', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/avatars/user/', $participant['id']) . '.png\''] ); ?>
                            </div>
                            <div class="col-2 username float-left">
                                <?= $participant['name'] ?>
                            </div>
                            <div class="col-1 lang float-left">
                            <?= Html::img(Yii::$app->HelperClass->checkNationalityImage($participant['language']['icon'], '4x3'), ['aria-label' => $participant['language']['name'] . 'nationality Image', 'alt' => $participant['language']['icon'],'class' => 'IMG']) ?>
                            </div>
                            <div class="col-1 checkinState float-left">
                                <?= $participant['checkInState'] ?>
                            </div>
                            <!-- Nur Spieler selbst und Administratoren -->
                            <div class="col-6 penalties float-left">
                                <?php foreach($participant['penalties'] as $penaltie) : ?>
                                    <div class="penaltiename"><?= $penaltie['name'] ?></div>
                                    <div class="penaltiename"><?= $penaltie['weight'] ?></div>
                                    <div class="penaltiename"><?= $penaltie['date'] ?></div>
                                <?php endforeach; ?>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="brackets">
            <div id="doubleElimination">
                <script type="text/javascript">
                    var doubleEliminationData = <?= json_encode($doubleEliminationData) ?>;

                    $(function() {
                        $('div#doubleElimination .tournament').bracket({
                            skipConsolationRound: true,
                            init: doubleEliminationData })
                        });
                </script>

                <div class="tournament">
                </div>
            </div>
        </div>
    </div>
</div>