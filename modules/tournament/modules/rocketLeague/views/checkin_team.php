<?php
/* @var $this yii\web\View */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use app\widgets\Alert;
?>

<div class="row">
    <div class="col-12 col-lg-12">
        <div class="row openTournament desktop">
            <div class="col-12 col-md-12">
                <?php if($user) : ?>
                    <?php if($authorizedTeams) : ?>
                        <div class="col-12 tournamentRegistrationBodyHead">
                            <div class="col-lg-2 teamName float-left">Team Name</div>
                            <div class="col-lg-4 player float-left">
                                <div class="col-lg-2 playerName float-left">Player</div>
                                <div class="col-lg-10 gameData float-left">
                                    <div class="col-lg-12 platform float-left">
                                        <div class="col-lg-5 platformName float-left">Platforms</div>
                                        <div class="col-lg-7 platforms float-left">State</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 substitudes float-left">
                                <div class="col-lg-2 substitudeName float-left">Substitudes</div>
                                <div class="col-lg-10 gameData float-left">
                                    <div class="col-lg-12 platform float-left">
                                        <div class="col-lg-5 platforms float-left">Platforms</div>
                                        <div class="col-lg-7 platforms float-left">State</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 registration float-left">Registration</div>
                        </div>
                        <div class="clearfix"></div>
                        <?php foreach($authorizedTeams as $authorizedTeam) : ?>
                            <div class="col-12 tournamentRegistrationBody">
                                <!-- Team Name -->
                                <div class="col-lg-2 teamname float-left">
                                    <?= Html::img(Yii::$app->HelperClass->checkTeamImage($authorizedTeam['teamId'], $authorizedTeam['teamOrgId']) . '.webp', ['aria-label' => $authorizedTeam['teamName']. '.webp', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkTeamImage($authorizedTeam['teamId'],  $authorizedTeam['teamOrgId']) . '.png\'']) ?>
                                    <?= Html::a($authorizedTeam['teamName'], ['/team/details', 'teamID' => $authorizedTeam['teamId']], ['class' => '']); ?>
                                </div>

                                <!-- Player Data -->
                                <div class="col-lg-4 player float-left">
                                    <?php if(array_key_exists('player', $authorizedTeam)) : ?>
                                        <div class="row">
                                            <?php foreach($authorizedTeam['player'] as $player) : ?>
                                            <div class="col-12 mt-2">
                                                <!-- Player Name -->
                                                <div class="col-lg-2 playerName float-left">
                                                    <div class="avatar float-left">
                                                        <?= Html::img(Yii::$app->HelperClass->checkImage('/images/avatars/user/', $player['playerId']) . '.webp', ['aria-label' => $player['playerName']. '.webp', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/avatars/user/', $player['playerId']) . '.png\'']) ?>
                                                    </div>
                                                    <?= Html::a($player['playerName'], ['/user/details', 'userId' => $player['playerId']], ['class' => '']); ?>
                                                </div>

                                                <!-- Player Game Id's and Platforms -->
                                                <div class="col-lg-10 gameData float-left">
                                                    <?php if(array_key_exists('gameIds', $player)) : ?>
                                                        <?php foreach($player['gameIds'] as $gameID) : ?>
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
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php else : ?>
                                        <div class="col-lg-12 platform float-left">
                                            <?= 'no Player found' ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <!-- Substitude Data -->
                                <div class="col-lg-4 substitudes float-left">
                                    <?php if(array_key_exists('substitude', $authorizedTeam)) : ?>
                                        <div class="row">
                                            <?php foreach($authorizedTeam['substitude'] as $substitude) : ?>
                                            <div class="col-12 mt-2">
                                                <!-- Substitude Name -->
                                                <div class="col-lg-2 playerName float-left">
                                                    <div class="avatar float-left">
                                                        <?= Html::img(Yii::$app->HelperClass->checkImage('/images/avatars/user/', $substitude['playerId']) . '.webp', ['aria-label' => $substitude['playerName']. '.webp', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/avatars/user/', $substitude['playerId']) . '.png\'']); ?>
                                                    </div>
                                                    <?= Html::a($substitude['playerName'], ['/user/details', 'userId' => $substitude['playerId']], ['class' => '']); ?>
                                                </div>

                                                <!-- Substitude Game Id's and Platforms -->
                                                <div class="col-lg-10 gameData float-left">
                                                    <?php if(array_key_exists('gameIds', $substitude)) : ?>
                                                        <?php foreach($substitude['gameIds'] as $gameID) : ?>
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
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php else : ?>
                                        <div class="col-lg-12 platform float-left">
                                            <?= 'no Substitudes found' ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                
                                <!-- Team is Eligible -->
                                <div class="col-lg-2 float-left">
                                    <?php if($authorizedTeam['teamEligible']) : ?>
                                        <?php if(!$authorizedTeam['alreadyCheckedIn']) : ?>
                                            <div class="col-lg-12 registration float-left">
                                                <?php
                                                echo Html::a('Checkin',
                                                    [
                                                        "rocket-league/checkin-team",
                                                        "tournamentId" => $tournament->getId(),
                                                        "teamId" => $authorizedTeam['teamId'],
                                                    ],
                                                    ['class' => "filled-btn btn btn-primary",
                                                        'title' => 'Register for Tournament'
                                                    ]
                                                )
                                            ?>
                                            </div>
                                        <?php else : ?>
                                            <?php
                                                echo Html::a('Checkout',
                                                    [
                                                        "rocket-league/checkout-team",
                                                        "tournamentId" => $tournament->getId(),
                                                        "teamId" => $authorizedTeam['teamId'],
                                                    ],
                                                    ['class' => "filled-btn btn btn-primary",
                                                        'title' => 'Register for Tournament'
                                                    ]
                                                )
                                            ?>
                                        <?php endif; ?>
                                    <?php else : ?>
                                        <div class="col-lg-12 registration float-left">
                                            <div>
                                                <?= $authorizedTeam['playerCountEligibleError']; ?>
                                            </div>
                                            <div>
                                                <?= $authorizedTeam['substitudeCountEligibleError']; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <div class="col-12 tournamentRegistrationBodyHead">
                            <div style="text-align:center;">
                            <?= 'You have no Team for checkin'; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php else : ?>
                    <div class="col-12 tournamentRegistrationBodyHead">
                        <div style="text-align:center;">
                            <?= 'Please check if you are logged in'; ?>
                        </div>
                    </div>
                <?php endif; ?>
            <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>