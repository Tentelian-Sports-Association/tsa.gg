<?php
/* @var $this yii\web\View */
/* @var $openTournamentList array */
/* @var $choosedGame array */

use yii\helpers\Html;

$this->title = $choosedGame['name'] . \app\modules\tournament\Module::t('active', 'activeTournament_header');

/************* Meta Index ****************/
$this->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->url]);
Yii::$app->MetaClass->writeDefaultMeta($this, $this->title, \app\modules\tournament\Module::t('active', 'activeTournament_meta_description') . $choosedGame['name'], '@BettyBirnchen');
/************* End Meta Index ****************/

\app\modules\tournament\assets\ActiveTournamentAsset::register($this);

/*
foreach(openTournamentList as $openTournament)
{
    $openTournament['Name'];
    $openTournament['ID'];
    $openTournament['DtStart'];
    $openTournament['DtRegEnd'];
    $openTournament['DtCheckIn']; 
    $openTournament['RegisterOpen'];
    $openTournament['CheckInOpen'] ;
}
*/
?>

<div class="site-openTournament">
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
                    Tournaments
                </h1>
                <p class="description" >
                    Weit hinten, hinter den Wortbergen, fern der Länder Vokalien und Konsonantien.
                </p>
            </div>
        </div>
    </div>

    <!-- Open Tournaments List -->
    <div class="inner-wrapper">
        <div class="row">
            <div class="col-12 col-lg-10">
                <div class="row openTournament desktop">
                    <div class="col-12 col-md-12">
                        <div class="col-12 openTournamentBodyHead">
                            <div class="col-lg-2 tournamentName float-left"><?= \app\modules\tournament\Module::t('active', 'firstRow') ?></div>
                            <div class="col-3 col-lg-3 tournamentStart float-left"><?= \app\modules\tournament\Module::t('active', 'secondRow') ?></div>
                            <div class="col-3 col-lg-3 registerUntil float-left"><?= \app\modules\tournament\Module::t('active', 'thirdRow') ?></div>
                            <div class="col-3 col-lg-2 checkIn float-left"><?= \app\modules\tournament\Module::t('active', 'fourthRow') ?></div>
                            <div class="col-3 col-lg-3 buttons float-left"></div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                        <?php foreach ($openTournamentList as $openTournament) : ?>
                            <div class="col-12 openTournamentBody">
                                <div class="col-3 col-lg-3 float-left">
                                    <div class="username float-left">
                                        <?= Html::a($openTournament['Name'], ['details', 'gameId' => $choosedGame['id'], 'tournamentId' => $openTournament['ID']], ['class' => '']); ?>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-3 invite float-left">
                                    <?= $openTournament['DtStart'] ?>
                                </div>
                                <div class="col-3 col-lg-2 natImg float-left">
                                    <?= $openTournament['DtRegEnd'] ?>
                                </div>
                                <div class="col-3 col-lg-2 langImg float-left">
                                    <?= $openTournament['DtCheckIn'] ?>
                                </div>
                                <?php if($openTournament['RegisterOpen']) : ?>
                                    <?php
									    echo Html::a('Register',
										    [
											    "register",
											    "gameId" => $choosedGame['id'],
											    "tournamentId" => $openTournament['ID']
										    ],
										    ['class' => "filled-btn btn btn-primary",
											    'title' => 'Register for Tournament'
										    ]
									    )
								    ?>
                                <?php elseif($openTournament['CheckInOpen']) : ?>
                                <?php
									    echo Html::a('Check-In',
										    [
											    "checkin",
											    "gameId" => $choosedGame['id'],
											    "tournamentId" => $openTournament['ID']
										    ],
										    ['class' => "filled-btn btn btn-primary",
											    'title' => 'Check-In for Tournament'
										    ]
									    )
								    ?>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>