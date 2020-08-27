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
                <div class="col-lg-2 teamName float-left"><?= 'Team name' ?></div>
                <div class="col-4 col-lg-4 playerName float-left"><?= 'Player name' ?></div>
                <div class="col-6 col-lg-6 substitudes float-left"><?= 'Registered Platform' ?></div>      
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <?php foreach($authorizedTeams as $authorizedTeam) : ?>
                <div class="col-12 userBody">
                    <div class="col-lg-2 id float-left">
                        <?= $authorizedTeam['teamName']; ?>
                    </div>
                    <div class="col-8 col-lg-8 float-left">
                        <?php if(array_key_exists('player', $authorizedTeam)) : ?>
                            <?php foreach($authorizedTeam['player'] as $player) : ?>
                                <div class="col-4 float-left"> <?= $player['playerName'] ?>
                                </div>
                                <div class="col-8 float-left">
                                    <?php if(array_key_exists('gameIds', $player)) : ?>
                                        <?php foreach($player['gameIds'] as $gameID) : ?>
                                            <div class="col-12 float-left">
                                                <div class="col-5 float-left">
                                                    <?= $gameID['platformName'] ?>
                                                </div>
                                                <div class="col-7 float-left">
                                                    <?php if($gameID['playerGameIdEligible']) : ?>
                                                        <?= 'correct'; ?>
                                                    <?php else : ?>
                                                        <?= 'incorrect'; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <div class="col-6 col-lg-6 substitudes float-left">
                                            <div class="col-12 float-left">
                                                No game id set
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <?php if(array_key_exists('substitude', $authorizedTeam)) : ?>
                            <?php foreach($authorizedTeam['substitude'] as $player) : ?>
                                <div class="col-4 float-left"> <?= $player['playerName'] ?>
                                </div>
                                <div class="col-8 float-left">
                                    <?php if(array_key_exists('gameIds', $player)) : ?>
                                        <?php foreach($player['gameIds'] as $gameID) : ?>
                                            <div class="col-12 float-left">
                                                <div class="col-5 float-left">
                                                    <?= $gameID['platformName'] ?>
                                                </div>
                                                <div class="col-7 float-left">
                                                    <?php if($gameID['playerGameIdEligible']) : ?>
                                                        <?= 'correct'; ?>
                                                    <?php else : ?>
                                                        <?= 'incorrect'; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <div class="col-6 col-lg-6 substitudes float-left">
                                            <div class="col-12 float-left">
                                                No game id set
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>