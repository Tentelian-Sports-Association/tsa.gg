<?php
/* @var $this yii\web\View */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use app\widgets\Alert;

\app\modules\tournament\assets\TournamentRegistrationAsset::register($this);

?>

<div class="row">
    <div class="col-12 col-lg-12">
        <div class="row openTournament desktop">
            <div class="col-12 col-md-12">
                <?php if($user) : ?>
                    <?php if($authorizedPlayer) : ?>
                        <div class="col-12 tournamentRegistrationBodyHead">
                            <div class="col-lg-4 player float-left">
                                <div class="col-lg-2 playerName float-left">Player</div>
                                <div class="col-lg-10 gameData float-left">
                                    <div class="col-lg-12 platform float-left">
                                        <div class="col-lg-5 platformName float-left">Platforms</div>
                                        <div class="col-lg-7 platforms float-left">State</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 registration float-left">Registration</div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-12 tournamentRegistrationBody">
                            <!-- Player Data -->
                            <div class="col-lg-4 player float-left">
                                <!-- Player Name -->
                                <div class="col-lg-2 playerName float-left">
                                    <div class="avatar float-left">
                                        <?= Html::img(Yii::$app->HelperClass->checkImage('/images/avatars/user/', $authorizedPlayer['playerId']) . '.webp', ['aria-label' => $authorizedPlayer['playerName']. '.webp', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/avatars/user/', $authorizedPlayer['playerId']) . '.png\'']) ?>
                                    </div>
                                    <?= Html::a($authorizedPlayer['playerName'], ['/user/details', 'userId' => $authorizedPlayer['playerId']], ['class' => '']); ?>
                                </div>

                                <!-- Player Game Id's and Platforms -->
                                <div class="col-lg-10 gameData float-left">
                                    <?php if(array_key_exists('gameIds', $authorizedPlayer)) : ?>
                                        <?php foreach($authorizedPlayer['gameIds'] as $gameID) : ?>
                                            <div class="col-lg-12 platform <?= ($gameID['playerGameIdEligible'])? '':'bg-red' ?> float-left">
                                                <div class="col-5 platformName float-left">
                                                    <?= $gameID['platformName'] ?>
                                                </div>
                                                <div class="col-7 gameId float-left">
                                                    <?php if($gameID['playerGameIdEligible']) : ?>
                                                        <?= 'correct'; ?>
                                                    <?php else : ?>
                                                        <?= $gameID['platformPlayerIdError']; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <div class="col-lg-12 platform float-left">
                                            <?= 'no Rocket League Id\'s found' ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            
                            <!-- Player is Eligible -->
                            <div class="col-lg-2 float-left">
                                <?php if($authorizedPlayer['playerEligible']) : ?>
                                    <?php if(!$authorizedPlayer['playerAlreadyRegistered']) : ?>
                                        <div class="col-lg-12 registration float-left">
                                            <?php
                                                echo Html::a('Register',
                                                    [
                                                        "rocket-league/register-player",
                                                        "tournamentId" => $tournament->getId()
                                                    ],
                                                    ['class' => "filled-btn btn btn-primary",
                                                        'title' => 'Register for Tournament'
                                                    ]
                                                )
                                            ?>
                                        </div>
                                    <?php else : ?>
                                        <div class="col-lg-12 registration float-left">
                                            <?php
                                                echo Html::a('Unsubscribe',
                                                    [
                                                        "rocket-league/unsubscribe-player",
                                                        "tournamentId" => $tournament->getId()
                                                    ],
                                                    ['class' => "filled-btn btn btn-primary",
                                                        'title' => 'Register for Tournament'
                                                    ]
                                                )
                                            ?>
                                        </div>
                                    <?php endif; ?>
                                <?php else : ?>
                                    <div class="col-lg-12 registration float-left">
                                        <?= '- registration not Possible -' ?>
                                    </div>
                                <?php endif; ?>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    <?php endif; ?>
                    <div class="clearfix"></div>
                <?php else : ?>
                    <div class="col-12 tournamentRegistrationBodyHead">
                        <div style="text-align:center;">
                            <?= 'Please check if you are logged in'; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>