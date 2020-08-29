<?php
/* @var $this yii\web\View */
/* @var $tournament array */
/* @var $participants array */
/* @var $bracketData array */


\app\modules\tournament\assets\TournamentDetailsAsset::register($this);


use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use app\widgets\Alert;

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

        <!-- Den Button mittig zentrieren und sch�n machen :D -->
        <div class="rules">
            <?php
                echo Html::a('Rules',
                    [
                        "rules",
                        "rulesId" => $tournament['rules_id']
                    ],
                    ['class' => "filled-btn btn btn-primary",
                        'title' => 'Show Rules'
                    ]
                )
            ?>
        </div>

        <div class="participants mt-4 mb-4">
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
                                <?php if($participant['checkInState']) : ?>
                                    <!-- Hier haken anziegen für ist eingecheckt -->
                                    checked in
                                <?php else : ?>
                                    <!-- Hier haken anziegen für ist eingecheckt -->
                                    not checked in
                                <?php endif; ?>
                                
                            </div>
                            <!-- Nur Spieler selbst und Administratoren -->
                            <div class="col-6 penalties float-left">
                                <div class="row">
                                <?php foreach($participant['penalties'] as $penaltie) : ?>
                                    <div class="col-12">
                                        <div class="penaltiename float-left col-4"><?= $penaltie['name'] ?></div>
                                        <div class="penaltiename float-left col-4"><?= $penaltie['weight'] ?></div>
                                        <div class="penaltiename float-left col-4"><?= $penaltie['date'] ?></div>
                                    </div>
                                <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>                     
        <div class="brackets mt-4 mb-4" style="width: 100%; overflow-x: auto;">
            <div class="item">
                <div class="item-parent">
                    <p>Gewinner</p>
                </div>
                <div class="item-childrens">
                    <div class="item-child">
                        <div class="item">
                            <div class="item-parent">
                                <p>Parent X</p>
                            </div>
                            <div class="item-childrens">
                                <div class="item-child">
                                    <div class="item">
                                        <div class="item-parent">
                                            <p>Parent</p>
                                        </div>
                                        <div class="item-childrens">
                                            <div class="item-child">
                                                <p>Player 1</p>
                                            </div>
                                            <div class="item-child">
                                                <p>Player 2</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-child">
                                    <p>Player 3</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-child">
                        <div class="item">
                            <div class="item-parent">
                                <p>Parent</p>
                            </div>
                            <div class="item-childrens">
                                <div class="item-child">
                                    <div class="item">
                                        <div class="item-parent">
                                            <p>Parent</p>
                                        </div>
                                        <div class="item-childrens">
                                            <div class="item-child">
                                                <p>Player 4</p>
                                            </div>
                                            <div class="item-child">
                                                <p>Player 5</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-child">
                                    <p>Player 6</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>