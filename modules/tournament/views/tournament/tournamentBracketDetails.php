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
                        <?php if (array_key_exists($b, $encounterScreen)): ?>
                            <img class="encounterScreen" src="data:image/webp;base64,<?= $encounterScreen[$b]; ?>" alt="Screenshot Game <?= $b; ?>">
                        <?php endif; ?>
                        <?php if ($editable): ?>
                            <div class="col-lg-12 encounterScreenshot">Screenshot: <input type="file" name="screen_<?= $b; ?>"></div>
                        <?php endif; ?>

                        <!-- Encounter Data by blue Team/Player -->
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6 encounterGameBodyBlue">
                                <table class="tableBlue">
                                    <thead>
                                        <tr>
                                            <th class="player"></th>
                                            <th class="points">Points</th>
                                            <th class="goals">Goals</th>
                                            <th class="assists">Assists</th>
                                            <th class="saves">Saves</th>
                                            <th class="shots">Shots</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($bracketData['blue']['participantData'] as $player): ?>
                                            <tr>
                                                <td class="playerData">
                                                    <div class="col-lg-2 avatar">
                                                        <?= Html::img(Yii::$app->HelperClass->checkImage('/images/avatars/user/', $player['playerId']) . '.webp', ['aria-label' => $player['playerName']. '.webp', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/avatars/user/', $player['playerId']) . '.png\'']) ?>		
                                                    </div>
                                                    <div class="col-lg-10 name">
                                                        <?= $player['playerName']; ?>
                                                    </div>
                                                </td>
                                                <td class="encounterField">
                                                    <?php if ($editable): ?>
                                                        <input class="encounterInput" type="text" name="points[<?= $b; ?>][<?= $player['playerId']; ?>][points]" placeholder="empty" value="<?= $player['encounterData'][$b-1]['points']; ?>">
                                                    <?php else: ?>
                                                        <span class="encounterInput"><?= $player['encounterData'][$b-1]['points']; ?></span>
                                                    <?php endif; ?>
                                                </td>
                                                <td class="encounterField">
                                                    <?php if ($editable): ?>
                                                        <input class="encounterInput" type="text" name="points[<?= $b; ?>][<?= $player['playerId']; ?>][goals]" placeholder="empty" value="<?= $player['encounterData'][$b-1]['goals']; ?>">
                                                    <?php else: ?>
                                                        <span class="encounterInput"><?= $player['encounterData'][$b-1]['goals']; ?></span>
                                                    <?php endif; ?>
                                                </td>
                                                <td class="encounterField">
                                                    <?php if ($editable): ?>
                                                        <input class="encounterInput" type="text" name="points[<?= $b; ?>][<?= $player['playerId']; ?>][assists]" placeholder="empty" value="<?= $player['encounterData'][$b-1]['assists']; ?>">
                                                    <?php else: ?>
                                                        <span class="encounterInput"><?= $player['encounterData'][$b-1]['assists']; ?></span>
                                                    <?php endif; ?>
                                                </td>
                                                <td class="encounterField">
                                                    <?php if ($editable): ?>
                                                        <input class="encounterInput" type="text" name="points[<?= $b; ?>][<?= $player['playerId']; ?>][saves]" placeholder="empty" value="<?= $player['encounterData'][$b-1]['saves']; ?>">
                                                    <?php else: ?>
                                                        <span class="encounterInput"><?= $player['encounterData'][$b-1]['saves']; ?></span>
                                                    <?php endif; ?>
                                                </td>
                                                <td class="encounterField">
                                                    <?php if ($editable): ?>
                                                        <input class="encounterInput" type="text" name="points[<?= $b; ?>][<?= $player['playerId']; ?>][shots]" placeholder="empty" value="<?= $player['encounterData'][$b-1]['shots']; ?>">
                                                    <?php else: ?>
                                                        <span class="encounterInput"><?= $player['encounterData'][$b-1]['shots']; ?></span>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-3"></div>
                        </div>

                        
                        <!-- Encounter Data by orange Team/Player -->
                        <div class="row">
                            <div class="col-lg-3"><div class="clearfix"></div></div>
                            <div class="col-lg-6 encounterGameBodyOrange">
                                <table class="tableOrange">
                                    <thead>
                                        <tr>
                                            <th class="player"></th>
                                            <th class="points">Points</th>
                                            <th class="goals">Goals</th>
                                            <th class="assists">Assists</th>
                                            <th class="saves">Saves</th>
                                            <th class="shots">Shots</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($bracketData['orange']['participantData'] as $player): ?>
                                            <tr>
                                                <td class="playerData">
                                                    <div class="col-lg-2 avatar">
                                                        <?= Html::img(Yii::$app->HelperClass->checkImage('/images/avatars/user/', $player['playerId']) . '.webp', ['aria-label' => $player['playerName']. '.webp', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/avatars/user/', $player['playerId']) . '.png\'']) ?>		
                                                    </div>
                                                    <div class="col-lg-10 name">
                                                        <?= $player['playerName']; ?>
                                                    </div>
                                                </td>
                                                <td class="encounterField">
                                                    <?php if ($editable): ?>
                                                        <input class="encounterInput" type="text" name="points[<?= $b; ?>][<?= $player['playerId']; ?>][points]" placeholder="empty" value="<?= $player['encounterData'][$b-1]['points']; ?>">
                                                    <?php else: ?>
                                                        <span class="encounterInput"><?= $player['encounterData'][$b-1]['points']; ?></span>
                                                    <?php endif; ?>
                                                </td>
                                                <td class="encounterField">
                                                    <?php if ($editable): ?>
                                                        <input class="encounterInput" type="text" name="points[<?= $b; ?>][<?= $player['playerId']; ?>][goals]" placeholder="empty" value="<?= $player['encounterData'][$b-1]['goals']; ?>">
                                                    <?php else: ?>
                                                        <span class="encounterInput"><?= $player['encounterData'][$b-1]['goals']; ?></span>
                                                    <?php endif; ?>
                                                </td>
                                                <td class="encounterField">
                                                    <?php if ($editable): ?>
                                                        <input class="encounterInput" type="text" name="points[<?= $b; ?>][<?= $player['playerId']; ?>][assists]" placeholder="empty" value="<?= $player['encounterData'][$b-1]['assists']; ?>">
                                                    <?php else: ?>
                                                        <span class="encounterInput"><?= $player['encounterData'][$b-1]['assists']; ?></span>
                                                    <?php endif; ?>
                                                </td>
                                                <td class="encounterField">
                                                    <?php if ($editable): ?>
                                                        <input class="encounterInput" type="text" name="points[<?= $b; ?>][<?= $player['playerId']; ?>][saves]" placeholder="empty" value="<?= $player['encounterData'][$b-1]['saves']; ?>">
                                                    <?php else: ?>
                                                        <span class="encounterInput"><?= $player['encounterData'][$b-1]['saves']; ?></span>
                                                    <?php endif; ?>
                                                </td>
                                                <td class="encounterField">
                                                    <?php if ($editable): ?>
                                                        <input class="encounterInput" type="text" name="points[<?= $b; ?>][<?= $player['playerId']; ?>][shots]" placeholder="empty" value="<?= $player['encounterData'][$b-1]['shots']; ?>">
                                                    <?php else: ?>
                                                        <span class="encounterInput"><?= $player['encounterData'][$b-1]['shots']; ?></span>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-3"></div>
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