<?php
/* @var $this yii\web\View *
 * @var $form yii\bootstrap4\ActiveForm
 * @var $tournament object
 * @var $bracketData array
 * @var $encounterScreen array
 * @var $editable bool
 * @var $myId int
 */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use app\widgets\Alert;

$this->title = $tournament->getName() . ' - Round ' . $bracketData['base']['round'] . ' - Best of ' . $bracketData['base']['bo'];//\app\modules\team\Module::t('createTeam', 'create_title');

/************* Meta Index ****************/
$this->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->url]);
Yii::$app->MetaClass->writeDefaultMeta($this, $this->title, 'Create your own Team', '@BettyBirnchen');
/************* End Meta Index ****************/

\app\modules\tournament\assets\TournamentBracketDetails::register($this);

?>
<div class="site-create-team">
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
                                    <div class="col">Points</div>
                                    <div class="col">Goals</div>
                                    <div class="col">Assists</div>
                                    <div class="col">Saves</div>
                                    <div class="col">Shots</div>
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
                                                <?php if ($editable): ?>
                                                    <input class="encounterInput" type="text" name="points[<?= $b; ?>][<?= $player['playerId']; ?>][points]" placeholder="empty" value="<?= $player['encounterData'][$b-1]['points']; ?>">
                                                <?php else: ?>
                                                    <span class="encounterInput"><?= $player['encounterData'][$b-1]['points']; ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="encounterField">
                                                <?php if ($editable): ?>
                                                    <input class="encounterInput" type="text" name="points[<?= $b; ?>][<?= $player['playerId']; ?>][goals]" placeholder="empty" value="<?= $player['encounterData'][$b-1]['goals']; ?>">
                                                <?php else: ?>
                                                    <span class="encounterInput"><?= $player['encounterData'][$b-1]['goals']; ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="encounterField">
                                                <?php if ($editable): ?>
                                                    <input class="encounterInput" type="text" name="points[<?= $b; ?>][<?= $player['playerId']; ?>][assists]" placeholder="empty" value="<?= $player['encounterData'][$b-1]['assists']; ?>">
                                                <?php else: ?>
                                                    <span class="encounterInput"><?= $player['encounterData'][$b-1]['assists']; ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="encounterField">
                                                <?php if ($editable): ?>
                                                    <input class="encounterInput" type="text" name="points[<?= $b; ?>][<?= $player['playerId']; ?>][saves]" placeholder="empty" value="<?= $player['encounterData'][$b-1]['saves']; ?>">
                                                <?php else: ?>
                                                    <span class="encounterInput"><?= $player['encounterData'][$b-1]['saves']; ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="encounterField">
                                                <?php if ($editable): ?>
                                                    <input class="encounterInput" type="text" name="points[<?= $b; ?>][<?= $player['playerId']; ?>][shots]" placeholder="empty" value="<?= $player['encounterData'][$b-1]['shots']; ?>">
                                                <?php else: ?>
                                                    <span class="encounterInput"><?= $player['encounterData'][$b-1]['shots']; ?></span>
                                                <?php endif; ?>
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
                                                <?php if ($editable): ?>
                                                    <input class="encounterInput" type="text" name="points[<?= $b; ?>][<?= $player['playerId']; ?>][points]" placeholder="empty" value="<?= $player['encounterData'][$b-1]['points']; ?>">
                                                <?php else: ?>
                                                    <span class="encounterInput"><?= $player['encounterData'][$b-1]['points']; ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="encounterField">
                                                <?php if ($editable): ?>
                                                    <input class="encounterInput" type="text" name="points[<?= $b; ?>][<?= $player['playerId']; ?>][goals]" placeholder="empty" value="<?= $player['encounterData'][$b-1]['goals']; ?>">
                                                <?php else: ?>
                                                    <span class="encounterInput"><?= $player['encounterData'][$b-1]['goals']; ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="encounterField">
                                                <?php if ($editable): ?>
                                                    <input class="encounterInput" type="text" name="points[<?= $b; ?>][<?= $player['playerId']; ?>][assists]" placeholder="empty" value="<?= $player['encounterData'][$b-1]['assists']; ?>">
                                                <?php else: ?>
                                                    <span class="encounterInput"><?= $player['encounterData'][$b-1]['assists']; ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="encounterField">
                                                <?php if ($editable): ?>
                                                    <input class="encounterInput" type="text" name="points[<?= $b; ?>][<?= $player['playerId']; ?>][saves]" placeholder="empty" value="<?= $player['encounterData'][$b-1]['saves']; ?>">
                                                <?php else: ?>
                                                    <span class="encounterInput"><?= $player['encounterData'][$b-1]['saves']; ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="encounterField">
                                                <?php if ($editable): ?>
                                                    <input class="encounterInput" type="text" name="points[<?= $b; ?>][<?= $player['playerId']; ?>][shots]" placeholder="empty" value="<?= $player['encounterData'][$b-1]['shots']; ?>">
                                                <?php else: ?>
                                                    <span class="encounterInput"><?= $player['encounterData'][$b-1]['shots']; ?></span>
                                                <?php endif; ?>
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
                    <?php if ($editable): ?>
                        <div class="col-lg-4">
                            <?= Html::submitButton("Save Results", ['class' => 'filled-btn btn btn-primary']) ?>
                        </div>
                    <?php endif; ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>