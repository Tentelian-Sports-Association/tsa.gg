<?php
/* @var $this yii\web\View */
/* @var $tournament array */
/* @var $rules array */
/* @var $authorizedTeams array */


\app\modules\tournament\assets\TournamentRegistrationAsset::register($this);


use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
?>

<div class="site-tournamentRegistration">
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
                <p class="description" >
                    <?= 'Registration' ?>
                </p>
            </div>
        </div>
    </div>

    <div class="rules">
        <?php foreach($rules as $rule) : ?>
            <div class="paragraph"><div class="paragraphId"><?=  $rule['paragraphId'] ?></div><?=  $rule['paragraphName'] ?></div>
            <div class="paragraphDescription"><?=  $rule['paragraphDescription'] ?></div>
            <?php foreach ($rule['paragraphSubParagraphs'] as $subParagraph) : ?>
                <div class="subParagraph"><div class="paragraphId"><?=  $rule['paragraphId'] . '.' . $subParagraph['subParagraphId'] ?></div><?=  $subParagraph['subParagraphName'] ?></div>
                <div class="subParagraphDescription"><?=  $subParagraph['subParagraphDescription'] ?></div>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>

    <div class="teams">
        <div class="col-12 col-md-12">
            <div class="col-12 userBodyHead">
                <div class="col-lg-2 teamName float-left">Team Name</div>
                <div class="col-lg-3 player float-left">
                    <div class="col-lg-3 playerName float-left">Player</div>
                    <div class="col-lg-9 gameData float-left">
                        <div class="col-lg-7 platforms float-left">Platforms</div>
                        <div class="col-lg-4 platforms float-left">State</div>
                    </div>
                </div>
                <div class="col-lg-3 substitudes float-left">
                    <div class="col-lg-3 substitudeName float-left">Substitudes</div>
                    <div class="col-lg-9 gameData float-left">
                        <div class="col-lg-7 platforms float-left">Platforms</div>
                        <div class="col-lg-4 platforms float-left">State</div>
                    </div>
                </div>
                <div class="col-lg-4 registration float-left">Registration</div>
            </div>
            <div class="clearfix"></div>
            <?php foreach($authorizedTeams as $authorizedTeam) : ?>
                <div class="col-12 userBody">
                    <!-- Team Name -->
                    <div class="col-lg-2 teamname float-left">
                        <?= $authorizedTeam['teamName']; ?>
                    </div>

                    <!-- Player Data -->
                    <div class="col-lg-3 player float-left">
                        <?php if(array_key_exists('player', $authorizedTeam)) : ?>
                            <?php foreach($authorizedTeam['player'] as $player) : ?>
                                <!-- Player Name -->
                                <div class="col-lg-3 playerName float-left">
                                    <?= $player['playerName'] ?>
                                </div>

                                <!-- Player Game Id's and Platforms -->
                                <div class="col-lg-9 gameData float-left">
                                    <?php if(array_key_exists('gameIds', $player)) : ?>
                                        <?php foreach($player['gameIds'] as $gameID) : ?>
                                            <div class="col-7 float-left">
                                                <?= $gameID['platformName'] ?>
                                            </div>
                                            <div class="col-4 gameId float-left">
                                                <?php if($gameID['playerGameIdEligible']) : ?>
                                                    <?= 'correct'; ?>
                                                <?php else : ?>
                                                    <?= 'incorrect'; ?>
                                                <?php endif; ?>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                    <!-- Substitude Data -->
                    <div class="col-lg-3 substitudes float-left">
                        <?php if(array_key_exists('substitude', $authorizedTeam)) : ?>
                            <?php foreach($authorizedTeam['substitude'] as $substitude) : ?>
                                <!-- Substitude Name -->
                                <div class="col-lg-3 playerName float-left">
                                    <?= $substitude['playerName'] ?>
                                </div>

                                <!-- Substitude Game Id's and Platforms -->
                                <div class="col-lg-9 gameData float-left">
                                    <?php if(array_key_exists('gameIds', $substitude)) : ?>
                                        <?php foreach($substitude['gameIds'] as $gameID) : ?>
                                            <div class="col-7 float-left">
                                                <?= $gameID['platformName'] ?>
                                            </div>
                                            <div class="col-4 gameId float-left">
                                                <?php if($gameID['playerGameIdEligible']) : ?>
                                                    <?= 'correct'; ?>
                                                <?php else : ?>
                                                    <?= 'incorrect'; ?>
                                                <?php endif; ?>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    
                    <!-- Team is Eligible -->
                    <div class="col-lg-4 float-left">
                        <?php if($authorizedTeam['teamEligible']) : ?>
                            <div class="col-lg-12 registration float-left">
                                button zur registration
                            </div>
                        <?php else : ?>
                            <div class="col-lg-12 registration float-left">
                                geht nicht
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="clearfix"></div>
            <?php endforeach; ?>
        </div>
    <div>
</div>