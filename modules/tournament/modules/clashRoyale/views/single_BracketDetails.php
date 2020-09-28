<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use app\widgets\Alert;

\app\modules\tournament\assets\clashRoyale\CR_Single_BracketDetails::register($this);
?>

<div class="site-singel-bracket-details">
    <div class="inner-wrapper">

		<div class="col-10 bg-darkblue-2 mt-4 mb-4 pb-4">
            <?php $form = ActiveForm::begin([
                'id' => 'encounter-details-form',
                'options' => ['class' => 'form-vertical', 'enctype' => 'multipart/form-data']
                ]); 
            ?>
                <input type="hidden" name="tournamentId" value="<?= $tournament->getId(); ?>">
                <input type="hidden" name="bracketId" value="<?= $bracketData['base']['id']; ?>">
                <input type="hidden" name="isTeam" value="<?= $tournament->getIsTeamTournament(); ?>">


                <!-- Clash Royale Bracket Design -->


                <h2 style="text-align:center;"}><?= $tournament->getName() . ' - Round ' . $bracketData['base']['round'] . ' - Best of ' . $bracketData['base']['bo'] ?></h2>
                <div class="col-lg-12 encounterGameHeader">
                    <div class="col-lg-5 float-left">
                        <div class="col-lg-12 playerDetails">
                            <div class="col-lg-6 avatar">
                                <?= Html::img(Yii::$app->HelperClass->checkImage('/images/avatars/user/', $bracketData['blue']['participantId']) . '.webp', ['aria-label' => $bracketData['blue']['participantName']. '.webp', 'class' => 'encounterGameHeaderImageLeft', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/avatars/user/', $bracketData['blue']['participantId']) . '.png\'']) ?>		
                            </div>
                            <div class="col-lg-6 playerNameLeft"><?= $bracketData['blue']['participantName']; ?></div>
                        </div>
                    </div>
                    <div class="col-lg-2 float-left encounterVs">
                        VS
                    </div>
                    <div class="col-lg-5 float-left">
                        <div class="col-lg-12 playerDetails">
                            <div class="col-lg-6 playerNameRight"><?= $bracketData['orange']['participantName']; ?></div>
                            <div class="col-lg-6 avatar">
                                <?= Html::img(Yii::$app->HelperClass->checkImage('/images/avatars/user/', $bracketData['orange']['participantId']) . '.webp', ['aria-label' => $bracketData['orange']['participantName']. '.webp', 'class' => 'encounterGameHeaderImageRight', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/avatars/user/', $bracketData['orange']['participantId']) . '.png\'']) ?>		
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-lg-12 encounterBody">
                    <?php for ($b=1; $b <= $bracketData['base']['bo']; $b++): ?>
                        <!-- Encounter Screens -->
                        <h2 class="col-lg-12 encounterGameHeader">Game <?= $b; ?></h2>

                        <!-- Encounter Data by blue Team/Player -->
                        <div class="row text-center">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col">crowns</div>
                                    <div class="col">king_tower_hit_points</div>
                                    <div class="col">princess_tower_1_hitpoints</div>
                                    <div class="col">princess_tower_2_hitpoints</div>
                                    <div class="col">battle_time</div>
                                </div>
                            </div>
                        </div>

                        <div class="row text-center blue_bg">
                            <?php foreach ($bracketData['blue']['participantData'] as $player): ?>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col">
                                            <div class="playerData">
                                                <div class="avatar float-left">
                                                    <?= Html::img(Yii::$app->HelperClass->checkImage('/images/avatars/user/', $player['playerId']) . '.webp', ['aria-label' => $player['playerName']. '.webp', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/avatars/user/', $player['playerId']) . '.png\'']) ?>		
                                                </div>
                                                <div class="name float-left">
                                                    <?= $player['playerName']; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="encounterField">
                                                <span class="encounterInput"><?= $player['encounterData'][$b-1]['crowns']; ?></span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="encounterField">
                                                <span class="encounterInput"><?= $player['encounterData'][$b-1]['king_tower_hit_points']; ?></span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="encounterField">
                                                <span class="encounterInput"><?= $player['encounterData'][$b-1]['princess_tower_1_hitpoints']; ?></span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="encounterField">
                                                <span class="encounterInput"><?= $player['encounterData'][$b-1]['princess_tower_2_hitpoints']; ?></span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="encounterField">
                                                <span class="encounterInput"><?= $player['encounterData'][$b-1]['battle_time']; ?></span>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="row text-center orange_bg">
                            <?php foreach ($bracketData['orange']['participantData'] as $player): ?>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col">
                                            <div class="playerData">
                                                <div class="avatar float-left">
                                                    <?= Html::img(Yii::$app->HelperClass->checkImage('/images/avatars/user/', $player['playerId']) . '.webp', ['aria-label' => $player['playerName']. '.webp', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/avatars/user/', $player['playerId']) . '.png\'']) ?>		
                                                </div>
                                                <div class="name float-left">
                                                    <?= $player['playerName']; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="encounterField">
                                                <span class="encounterInput"><?= $player['encounterData'][$b-1]['crowns']; ?></span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="encounterField">
                                                <span class="encounterInput"><?= $player['encounterData'][$b-1]['king_tower_hit_points']; ?></span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="encounterField">
                                                <span class="encounterInput"><?= $player['encounterData'][$b-1]['princess_tower_1_hitpoints']; ?></span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="encounterField">
                                                <span class="encounterInput"><?= $player['encounterData'][$b-1]['princess_tower_2_hitpoints']; ?></span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="encounterField">
                                                <span class="encounterInput"><?= $player['encounterData'][$b-1]['battle_time']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endfor; ?>
                </div>

                <div class="col-lg-12 encounterFooter clearfix">
                    <div class="col-lg-5">
                        <?= Html::a('Back to Tournament', ['details','gameId' => $tournament->getGameId(), 'tournamentId' => $tournament->getId()], ['class' => 'btn btn-warning outline-btn mt-4']); ?>
                    </div>
                    <?php if (!$bracketData['base']['finished']): ?>
                    <?php
                        echo Html::a('GetData',
                            [
                                "clash-royale/fetch-player-data",
                                "tournamentId" => $tournament->getId(),
                                "bracketId" => $bracketData['base']['id']
                            ],
                            ['class' => "filled-btn btn btn-primary",
                                'title' => 'get Data'
                            ]
                        )
                    ?>
                <?php endif; ?>
                </div>

            <?php ActiveForm::end(); ?>

        </div>
	</div>
</div>