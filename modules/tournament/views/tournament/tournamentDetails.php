<?php
/* @var $this yii\web\View */
/* @var $tournament array */
/* @var $participants array */
/* @var $bracketData array */

\app\modules\tournament\assets\TournamentDetailsAsset::register($this);

use app\modules\tournament\modules\rocketLeague\models\PlayerBracketEncounter;

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
        <div class="hero-container row">
            <div class="hero-text col-lg-8">
                <h1 class="hero-title">
                    <?= $tournament['name'] ?>
                </h1>
            </div>
        </div>
    </div>

    <div class="inner-wrapper">

        <!-- Den Button mittig zentrieren und sch�n machen :D -->
        <?php if (Yii::$app->user->identity != NULL && Yii::$app->user->identity->getId() <= 4 && !$tournament['running']) : ?>
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
        <?php endif; ?>

        <div class="participants mt-4 mb-4">
            <ul class="list-unstyled row">
                <?php if($tournament['isTeam']) : ?>
                    <?php foreach($participants as $team) : ?>
                        <div class="col-12 col-md-10 openTournamentBody">
                            <div class="col-1 avatar float-left">
                                <?= Html::img(Yii::$app->HelperClass->checkTeamImage($team['id'], $team['orgId']) . '.webp', ['width' => '120','height' => '120', 'id' => 'imagePreview', 'class' => 'rounded-circle' ,'aria-label' => $team['name'] . 'Avatar Image', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkTeamImage($team['id'], $team['orgId']) . '.png\'']) ?>		
                            </div>
                            <div class="col-2 teamname float-left">
                                <?= Html::a($team['name'], ['/team/details', 'teamID' => $team['id']], ['class' => '']); ?>
                            </div>
                            <div class="col-1 lang float-left">
                                <?= Html::img(Yii::$app->HelperClass->checkNationalityImage($team['language']['icon'], '4x3'), ['aria-label' => $team['language']['name'] . 'nationality Image', 'alt' => $team['language']['icon'],'class' => 'IMG']) ?>
                            </div>
                            <div class="col-2 player float-left">
                                <?php foreach($team['players'] as $player) : ?>
                                    <div class="col-12 player float-left">
                                        <?= Html::a($player['UserName'], ['/user/details', 'userId' => $player['UserName']], ['class' => '']); ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="col-2 substitudes float-left">
                                <?php foreach($team['substitudes'] as $player) : ?>
                                    <div class="col-12 player float-left">
                                        <?= Html::a($player['UserName'], ['/user/details', 'userId' => $player['UserName']], ['class' => '']); ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="col-1 checkinState float-left">
                                <?php if($team['checkInState']) : ?>
                                    <!-- Hier haken anziegen für ist eingecheckt -->
                                    checked in
                                <?php else : ?>
                                    <!-- Hier haken anziegen für ist eingecheckt -->
                                    not checked in
                                <?php endif; ?>
                            </div>
                            <!-- Nur Spieler selbst und Administratoren -->
                            <div class="col-3 penalties float-left">
                                <div class="row">
                                <?php foreach($team['penalties'] as $penaltie) : ?>
                                    <div class="col-12">
                                        <div class="penaltiename float-left col-5"><?= $penaltie['name'] ?></div>
                                        <div class="penaltiename float-left col-1"><?= $penaltie['weight'] ?></div>
                                        <div class="penaltiename float-left col-3"><?= $penaltie['date'] ?></div>
                                    </div>
                                <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <?php foreach($participants as $player) : ?>
                        <div class="col-12 col-md-9 openTournamentBody">
                            <div class="col-2 avatar float-left">
                                <?= Html::img(Yii::$app->HelperClass->checkImage('/images/avatars/user/', $player['id']) . '.webp',  ['width' => '120','height' => '120', 'id' => 'imagePreview', 'class' => 'rounded-circle' ,'aria-label' => $player['name'] . 'Avatar Image', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/avatars/user/', $player['id']) . '.png\''] ); ?>
                            </div>
                            <div class="col-2 username float-left">
                                <?= Html::a($player['name'], ['/user/details', 'userId' => $player['name']], ['class' => '']); ?>
                            </div>
                            <div class="col-1 lang float-left">
                                <?= Html::img(Yii::$app->HelperClass->checkNationalityImage($player['language']['icon'], '4x3'), ['aria-label' => $player['language']['name'] . 'nationality Image', 'alt' => $player['language']['icon'],'class' => 'IMG']) ?>
                            </div>
                            <div class="col-1 checkinState float-left">
                                <?php if($player['checkInState']) : ?>
                                    <!-- Hier haken anziegen für ist eingecheckt -->
                                    checked in
                                <?php else : ?>
                                    <!-- Hier haken anziegen für ist eingecheckt -->
                                    not checked in
                                <?php endif; ?>
                            </div>
                            <!-- Nur Spieler selbst und Administratoren -->
                            <div class="col-5 penalties float-left">
                                <div class="row">
                                <?php foreach($player['penalties'] as $penaltie) : ?>
                                    <div class="col-12">
                                        <div class="penaltiename float-left col-4"><?= $penaltie['name'] ?></div>
                                        <div class="penaltiename float-left col-1"><?= $penaltie['weight'] ?></div>
                                        <div class="penaltiename float-left col-3"><?= $penaltie['date'] ?></div>
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

        <!-- Test Button -->
        <?php if (Yii::$app->user->identity != NULL && Yii::$app->user->identity->getId() <= 4 && !$tournament['running']) : ?>
            <div class="rules">
                <?php
                    echo Html::a('Create Brackets',
                        [
                            "create-brackets",
                            "tournamentId" => $tournament['id']
                        ],
                        ['class' => "filled-btn btn btn-primary",
                            'title' => 'Show Rules'
                        ]
                    )
                ?>
            </div>
        <?php endif; ?>

        <!-- Tournament Brackets -->
        <?php if($tournament['running']) : ?>
            <div class="brackets mt-4 mb-4" style="width: 100%; overflow-x: auto;">
                <h3>Bracket</h3>
                <div class="winnerBracket row">
                    <?php 
                        $last_round = 1;
                        foreach ($bracketData['winner'] as $round => $roundBrackets): 
                    ?>
                        <?php 
                            $firstBracket = reset($roundBrackets['brackets']);
                            if(((int)$last_round - (int)$round) <= 0 && (int)$last_round != 1 ) {
                        ?>
                            <div class="bracketRound">
                            <?php foreach ($roundBrackets['brackets'] as $bracketKey => $bracket): ?>
                                <div class="round-empty">
                                    <div class="bracket-empty-box">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </div>
                        <?php
                            }
                            $last_round = $round;
                            if (strpos($round, 'Finale') !== false) { 
                        ?>
                            <div class="bracketRound">
                            <?php foreach ($roundBrackets['brackets'] as $bracketKey => $bracket): ?>
                                <div class="round-empty">
                                    <div class="bracket-empty-box">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </div>
                        <?php
                            }            
                        ?>
                        <div class="bracketRound">
                            <div class="roundTitle">
                                <?=  'Round ' . $round; ?>
                            </div>
                            <div class="roundTitle">
                                <?= 'Best of ' . $firstBracket->getBestOf(); ?>
                            </div>
                            <div class="roundTitle">
                                <?= 'Start: ' . $roundBrackets['startTime']; ?>
                            </div>
                            <?php foreach ($roundBrackets['brackets'] as $bracketKey => $bracket): ?>
                                <?php
                                    $bracketFinished = $bracket->checkisFinished();
                                    $class1 = '';
                                    $class2 = '';
                                    if ($bracketFinished === 1) {
                                        $class1 = 'winner';
                                        $class2 = 'looser';
                                    } else if ($bracketFinished === 2) {
                                        $class1 = 'looser';
                                        $class2 = 'winner';
                                    }

                                    $bracketEncounter = $bracket->getEncounterId();

                                    $freewin['id'] = NULL;
                                    $freewin['name'] = 'FREILOS';

                                    $bracketParticipants = $bracket->getParticipants();
                                    $bracketParticipants[0] = ($bracketParticipants[0] === NULL) ? $freewin : $bracketParticipants[0];
                                    $bracketParticipants[1] = ($bracketParticipants[1] === NULL) ? $freewin : $bracketParticipants[1];

                                    $participant1 = $bracketParticipants[0];
                                    $participant2 = $bracketParticipants[1];
                                

                                    //if ($participant1 === 'FREILOS' || $participant2 === 'FREILOS')  {
                                        //$noWinnerBrackets[] = $bracket->getEncounterId();
                                        //continue;
                                    //}

                                    if (strpos($round, 'Finale') !== false) {
                                        $rundenInfo = 'Finale';
                                    } else {
                                        $rundenInfo = 'R' . $round . str_pad($bracketEncounter, 2, '0', STR_PAD_LEFT);
                                    }

                                    $goals = $bracket->getWins();
                                ?>
                                <div class="bracket mb-4 round-<?= $round ?>">
                                    <?= Html::a('<div class="bracket-box">'
                                        .'<div class="bracketParticipant' .$class1 . '">'		
                                            . $participant1['name']
                                            . '<div class="takeWinner" style="float:right;">'
                                                . '<div class="goals" style="float:left;">0</div>'
                                            . '</div>'
                                        . '</div>'
                                        . '<div class="bracketParticipant' .$class2 . '">'
                                        . $participant2['name']
                                            . '<div class="takeWinner" style="float:right;">'
                                                . '<div class="goals" style="float:left;">0</div>'
                                            . '</div>'
                                        . '</div>'
                                    . '</div>'
                                    , ['bracket-details', 'tournamentId' => $bracket['tournament_id'], 'bracketId' => $bracket['id']]); ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="looserBracket row">
                    <div class="bracketRound"></div>
                    <?php foreach ($bracketData['looser'] as $round => $roundBrackets): ?>
                        <?php $firstBracket = reset($roundBrackets['brackets']); ?>
                        <div class="bracketRound round-<?= $round ?>">
                            <?php foreach ($roundBrackets['brackets'] as $bracketKey => $bracket): ?>
                                <?php
                                    $bracketFinished = $bracket->checkisFinished();
                                    $class1 = '';
                                    $class2 = '';
                                    if ($bracketFinished === 1) {
                                        $class1 = 'winner';
                                        $class2 = 'looser';
                                    } else if ($bracketFinished === 2) {
                                        $class1 = 'looser';
                                        $class2 = 'winner';
                                    }

                                    $freewin['id'] = NULL;
                                    $freewin['name'] = 'FREILOS';

                                    $bracketEncounter = $bracket->getEncounterId();
                                    $bracketParticipants = $bracket->getParticipants();
                                    $bracketParticipants[0] = ($bracketParticipants[0] === NULL) ? $freewin : $bracketParticipants[0];
                                    $bracketParticipants[1] = ($bracketParticipants[1] === NULL) ? $freewin : $bracketParticipants[1];

                                    $participant1 = $bracketParticipants[0];
                                    $participant2 = $bracketParticipants[1];

                                    /*$participant1Bracket = explode(' ', $participant1);
                                    $search = array_pop($participant1Bracket);

                                    if (in_array($search, $noWinnerBrackets)) {
                                        $participant1 = 'FREILOS';
                                    }

                                    $participant2Bracket = explode(' ', $participant2);
                                    $search = array_pop($participant2Bracket);
                                    if (in_array($search, $noWinnerBrackets)) {
                                        $participant2 = 'FREILOS';
                                    }

                                    if ($participant1 === 'FREILOS' && $participant2 === 'FREILOS') {
                                        $noWinnerBrackets[] = $bracket->getEncounterId();
                                        continue;
                                    }*/

                                    //$goals= $bracket->getGoals($tournament);
                                    $goals = $bracket->getWins($tournament);
                                ?>
                                <div class="bracket mb-4">
                                    <?= Html::a('<div class="bracket-box">'
                                        .'<div class="bracketParticipant' .$class1 . '">'		
                                            . $participant1['name']
                                            . '<div class="takeWinner" style="float:right;">'
                                                . '<div class="goals" style="float:left;">0</div>'
                                            . '</div>'
                                        . '</div>'
                                        . '<div class="bracketParticipant' .$class2 . '">'
                                        . $participant2['name']
                                            . '<div class="takeWinner" style="float:right;">'
                                                . '<div class="goals" style="float:left;">0</div>'
                                            . '</div>'
                                        . '</div>'
                                    . '</div>'
                                    , ['bracket-details', 'tournamentId' => $bracket['tournament_id'], 'bracketId' => $bracket['id']]); ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>