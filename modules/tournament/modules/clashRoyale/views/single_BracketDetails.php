<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use app\widgets\Alert;

\app\modules\tournament\assets\clashRoyale\CR_Single_BracketDetails::register($this);
?>

<div class="site-singel-bracket-details">
    <div class="inner-wrapper">
		<div class="col-12 mt-4 mb-4 pb-4">
            <input type="hidden" name="tournamentId" value="<?= $tournament->getId(); ?>">
            <input type="hidden" name="bracketId" value="<?= $bracketData['base']['id']; ?>">
            <input type="hidden" name="isTeam" value="<?= $tournament->getIsTeamTournament(); ?>">


            <!-- Clash Royale Bracket Design -->
            <div class="bg-darkblue-2 mb-4 pb-4">
                <h2 class="text-center"><?= $tournament->getName(); ?></h2>
                <h3 class="text-center"><?='Round ' . $bracketData['base']['round'] . ' - Best of ' . $bracketData['base']['bo']; ?></h3>
                <hr/>
                <div class="col-lg-12 encounterGameHeader">
                    <div class="col-lg-5 float-left">
                        <div class="col-lg-12 playerDetails">
                            <div class="col-lg-4 avatar">
                                <?= Html::img(Yii::$app->HelperClass->checkImage('/images/avatars/user/', $bracketData['blue']['participantId']) . '.webp', ['aria-label' => $bracketData['blue']['participantName']. '.webp', 'class' => 'encounterGameHeaderImageLeft', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/avatars/user/', $bracketData['blue']['participantId']) . '.png\'']) ?>		
                            </div>
                            <div class="col-lg-8 playerName float-left">
                                <div class="row">
                                    <div class="col-12 text-center crown-box">
                                        <?php if($bracketData['blue']['isWinner']) : ?>
                                            <?= Html::img(Yii::$app->HelperClass->getCrown('mid') . '.webp', ['aria-label' => '', 'class' => 'princessTower winnerCrown', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getCrown('mid') . '.png\'']) ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-12  text-center">
                                        <?= $bracketData['blue']['participantName']; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-2 float-left encounterVs text-center">
                        VS
                    </div>
                    <div class="col-lg-5 float-left">
                        <div class="col-lg-12 playerDetails">
                            <div class="col-lg-6 playerName float-left">
                                <div class="row">
                                    <div class="col-12 text-center crown-box">
                                        <?php if($bracketData['orange']['isWinner']) : ?>
                                            <?= Html::img(Yii::$app->HelperClass->getCrown('mid') . '.webp', ['aria-label' => '', 'class' => 'princessTower winnerCrown', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getCrown('mid') . '.png\'']) ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-12  text-center">
                                        <?= $bracketData['orange']['participantName']; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 avatar">
                                <?= Html::img(Yii::$app->HelperClass->checkImage('/images/avatars/user/', $bracketData['orange']['participantId']) . '.webp', ['aria-label' => $bracketData['orange']['participantName']. '.webp', 'class' => 'encounterGameHeaderImageRight', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/avatars/user/', $bracketData['orange']['participantId']) . '.png\'']) ?>		
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="text-center mb-4">
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
            
            <div class="col-lg-12 encounterBody">
                <?php for ($b=1; $b <= $bracketData['base']['bo']; $b++): ?>
                    <div class="bg-darkblue-2 mb-4 pb-4">
                        <!-- Encounter Screens -->
                        <h2 class="col-lg-12 encounterGameHeader text-center">Game <?= $b; ?></h2>

                        <!-- Encounter Data by blue Team/Player -->
                        <div class="row text-center">
                            <div class="col-5">
                                <?php foreach ($bracketData['blue']['participantData'] as $player): ?>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <div class="playerData">
                                                    <div class="playerName">
                                                        <?= $player['playerName']; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 text-center crowns">
                                                <div class="row">
                                                    <div class="col-3"></div>
                                                    <div class="col-2">
                                                        <?php if($player['encounterData'][$b-1]['crowns'] > 0) : ?>
                                                            <?= Html::img(Yii::$app->HelperClass->getCrown('left') . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getCrown('left') . '.png\'']) ?>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="col-2">
                                                        <?php if($player['encounterData'][$b-1]['crowns'] > 2) : ?>
                                                            <?= Html::img(Yii::$app->HelperClass->getCrown('mid') . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getCrown('mid') . '.png\'']) ?>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="col-2">
                                                        <?php if($player['encounterData'][$b-1]['crowns'] > 1) : ?>
                                                            <?= Html::img(Yii::$app->HelperClass->getCrown('right') . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getCrown('right') . '.png\'']) ?>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="col-3"></div>
                                                </div>
                                            </div>
                                            <div class="col-12 text-center">
                                                <!--
                                                    hier kommen die Karten immer 4 in einer reihe, 8 sind es
                                                -->
                                                <?php if(array_key_exists($b-1, $player['cardsData'])) :?>
                                                <div class="col-12">
                                                    <?= Html::img(Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_1_id']) . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_1_id']) . '.png\'']); ?>
                                                    <?= Html::img(Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_2_id']) . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_2_id']) . '.png\'']); ?>
                                                    <?= Html::img(Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_3_id']) . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_3_id']) . '.png\'']); ?>
                                                    <?= Html::img(Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_4_id']) . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_4_id']) . '.png\'']); ?>
                                                </div>
                                                <div class="col-12">
                                                    <?= Html::img(Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_5_id']) . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_5_id']) . '.png\'']); ?>
                                                    <?= Html::img(Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_6_id']) . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_6_id']) . '.png\'']); ?>
                                                    <?= Html::img(Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_7_id']) . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_7_id']) . '.png\'']); ?>
                                                    <?= Html::img(Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_8_id']) . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_8_id']) . '.png\'']); ?>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-12 text-center">
                                                <div class="row">
                                                    <div class="col-3"></div>
                                                    <div class="col-2 mt-4">
                                                        <div class="encounterField">
                                                            <?= Html::img(Yii::$app->HelperClass->getTowerImage('princess') . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getTowerImage('princess') . '.png\'']) ?>		
                                                            <span class="encounterInput"><?= $player['encounterData'][$b-1]['princess_tower_1_hitpoints']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="encounterField">
                                                            <?= Html::img(Yii::$app->HelperClass->getTowerImage('king') . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getTowerImage('king') . '.png\'']) ?>		
                                                            <span class="encounterInput"><?= $player['encounterData'][$b-1]['king_tower_hit_points']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2 mt-4">
                                                        <div class="encounterField">
                                                            <?= Html::img(Yii::$app->HelperClass->getTowerImage('princess') . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getTowerImage('princess') . '.png\'']) ?>		
                                                            <span class="encounterInput"><?= $player['encounterData'][$b-1]['princess_tower_2_hitpoints']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="col-2">
                                <?= Html::img(Yii::$app->HelperClass->getMapImage('iceworld') . '.webp', ['aria-label' => '', 'class' => 'princessTower world', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getMapImage('iceworld') . '.png\'']) ?>		
                            </div>
                            <div class="col-5">
                                <?php foreach ($bracketData['orange']['participantData'] as $player): ?>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <div class="playerData">
                                                    <div class="playerName">
                                                        <?= $player['playerName']; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 text-center crowns">
                                                <div class="row">
                                                    <div class="col-3"></div>
                                                    <div class="col-2">
                                                        <?php if($player['encounterData'][$b-1]['crowns'] > 0) : ?>
                                                            <?= Html::img(Yii::$app->HelperClass->getCrown('left') . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getCrown('left') . '.png\'']) ?>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="col-2">
                                                        <?php if($player['encounterData'][$b-1]['crowns'] > 2) : ?>
                                                            <?= Html::img(Yii::$app->HelperClass->getCrown('mid') . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getCrown('mid') . '.png\'']) ?>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="col-2">
                                                        <?php if($player['encounterData'][$b-1]['crowns'] > 1) : ?>
                                                            <?= Html::img(Yii::$app->HelperClass->getCrown('right') . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getCrown('right') . '.png\'']) ?>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="col-3"></div>
                                                </div>
                                            </div>
                                            <div class="col-12 text-center">
                                                <!--
                                                    hier kommen die Karten immer 4 in einer reihe, 8 sind es
                                                -->
                                                <?php if(array_key_exists($b-1, $player['cardsData'])) :?>
                                                    <div class="col-12">
                                                        <?= Html::img(Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_1_id']) . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_1_id']) . '.png\'']); ?>
                                                        <?= Html::img(Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_2_id']) . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_2_id']) . '.png\'']); ?>
                                                        <?= Html::img(Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_3_id']) . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_3_id']) . '.png\'']); ?>
                                                        <?= Html::img(Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_4_id']) . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_4_id']) . '.png\'']); ?>
                                                    </div>
                                                    <div class="col-12">
                                                        <?= Html::img(Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_5_id']) . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_5_id']) . '.png\'']); ?>
                                                        <?= Html::img(Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_6_id']) . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_6_id']) . '.png\'']); ?>
                                                        <?= Html::img(Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_7_id']) . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_7_id']) . '.png\'']); ?>
                                                        <?= Html::img(Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_8_id']) . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getCardImage($player['cardsData'][$b-1]['card_8_id']) . '.png\'']); ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-12 text-center">
                                                <div class="row">
                                                    <div class="col-3"></div>
                                                    <div class="col-2 mt-4">
                                                        <div class="encounterField">
                                                            <?= Html::img(Yii::$app->HelperClass->getTowerImage('princess') . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getTowerImage('princess') . '.png\'']) ?>		
                                                            <span class="encounterInput"><?= $player['encounterData'][$b-1]['princess_tower_1_hitpoints']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="encounterField">
                                                            <?= Html::img(Yii::$app->HelperClass->getTowerImage('king') . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getTowerImage('king') . '.png\'']) ?>		
                                                            <span class="encounterInput"><?= $player['encounterData'][$b-1]['king_tower_hit_points']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2 mt-4">
                                                        <div class="encounterField">
                                                            <?= Html::img(Yii::$app->HelperClass->getTowerImage('princess') . '.webp', ['aria-label' => '', 'class' => 'princessTower', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->getTowerImage('princess') . '.png\'']) ?>		
                                                            <span class="encounterInput"><?= $player['encounterData'][$b-1]['princess_tower_2_hitpoints']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        <div class="col-lg-12 encounterFooter text-center">
            <?= Html::a('Back to Tournament', ['details','gameId' => $tournament->getGameId(), 'tournamentId' => $tournament->getId()], ['class' => 'btn btn-warning outline-btn mt-4']); ?>
        </div>
    </div>
</div>

