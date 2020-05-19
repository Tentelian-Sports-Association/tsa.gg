<?php

use yii\helpers\Html;

/* @var $this yii\web\View
 * @var $upcomingEvents array
 * @var $tournaments array
 * @var $latestNews array
 * @var $ourPartner array
 */

 \app\modules\partner\assets\PartnerOverviewAsset::register($this);

$this->title = 'Tentelian Sports Association';

?>

<div class="content-startpage">


    <!-- *************** Upcoming Events Bereich *************** -->
    <section class="event-hero">
        <div class="event-hero-image"  aria-labelledby='<?= $upcomingEvents['Next']['previewImage']?>' aria-describedby='bigEventContainer bigEventDescription'>
            <picture>
                <?= Html::img(Yii::$app->HelperClass->checkImage('/images/events/index/', $upcomingEvents['Next']['previewImage']) . '.webp', ['class' => 'img-fluid', 'aria-describedby' => 'bigEventContainer bigEventDescription',  'aria-label' => $upcomingEvents['Next']['Name'], 'id' => $upcomingEvents['Next']['previewImage'], 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/events/index/', $upcomingEvents['Next']['previewImage']) . '.png\'']); ?>
            </picture>

        </div>
        <div class="event-hero-container" id="bigEventContainer">
            <div class="event-text">
                <h1 class="event-hero-title">
                    <?= $upcomingEvents['Next']['Name'] ?>
                </h1>
                <p class="description" id="bigEventDescription"><?= $upcomingEvents['Next']['shortDescription'] ?></p>
                <a href="<?= $upcomingEvents['Next']['ID'] ?>" class="filled-btn">Zum Event</a>
            </div>
        </div>

        <div class="event-hero-upcoming-events d-flex">
            <div class="d-none d-sm-inline-block upcoming-image" aria-labelledby='<?= $upcomingEvents['Preview']['previewImage']?>' aria-describedby='smallEventContainer smallEventName'>
                <!--<?= $upcomingEvents['Next']['previewImage'] ?>-->
                <?= Html::img(Yii::$app->HelperClass->checkImage('/images/events/index_preview/', $upcomingEvents['Preview']['previewImage']) . '.webp', ['class' => 'img-fluid', 'aria-describedby' => 'smallEventContainer smallEventName',  'aria-label' => $upcomingEvents['Preview']['Name'], 'id' => $upcomingEvents['Preview']['previewImage'], 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/events/index_preview/', $upcomingEvents['Preview']['previewImage']) . '.png\'']); ?>
            </div>
            <div class="d-inline-block upcoming-description" id="smallEventContainer">
                <div class="inner">
                    <!-- Das angepriesene Event f�r die kleine Ecke -->
                    <span>Nächstes Event</span>
                    <h3 id="smallEventName"><?= $upcomingEvents['Preview']['Name'] ?></h3>
                    <!--<p><?= $upcomingEvents['Preview']['shortDescription'] ?></p>-->
                    <!-- ID für den Button, funktion baue ich wenn design da -->
                    <a href="<?= $upcomingEvents['Preview']['ID'] ?>" class="more">
                        >
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- *************** Tournaments Bereich *************** -->
    <section class="tournament">
        <h2>Aktive Turniere</h2>
        <div class="tournament-container row">
            <div class="col-12 col-sm-8">
                <ul class="tournament-list list-unstyled">
					<?php foreach($tournaments as $tournament) : ?>
                        <li class="d-sm-flex align-items-center">
                            <div class="col-12 col-sm-8 tournament-description">
                                <div class="row">
                                    <!-- Für Mobile-->
                                    <span class="d-block d-sm-none gamertag"><?= $tournament['GameTag'] ?></span>
                                    <!-- Für Mobile END-->
                                    <span class="tournament-title col col-sm-7"><?= $tournament['Name'] ?></span>
                                    <span class="tournament-mode col-sm-5 d-none d-sm-inline text-right align-self-center"><?= $tournament['Mode'] ?></span>
                                </div>
                            </div>


                            <div class="col-sm-4 tournament-time">
                                <span class="d-inline d-sm-none tournament-mode"><?= $tournament['Mode'] ?></span>
                                <!-- Check if Live or in the Future -->
								<?php if($tournament['IsLive']) : ?>
                                    <!-- ab hier dann die Button geschichte das man direkt auf den  Turnierbaum kommt -->
                                    <span class="tournament-status"><?= $tournament['ID'] ?></span>
								<?php else : ?>
                                    <!-- ab hier dann datum und uhrzeit wenn es nicht live ist -->
                                    <span class="date"><?= $tournament['StartingDate'] ?></span>
                                    <span class="starting-time"><?= $tournament['StartingTime'] ?></span>
								<?php endif; ?>

                            </div>

                        </li>
					<?php endforeach; ?>
                </ul>
            </div>
            <div class="d-none col-sm-4 d-sm-flex">
                <!-- Image f�r Hover Image funktion zum laden baue ich wenn design da -->
                <?= Html::img(Yii::$app->HelperClass->checkImage('/images/tournaments/index/', $tournament['HoverImage']) . '.webp', ['class' => 'img-fluid',  'aria-label' => $tournament['HoverImage'], 'id' => $tournament['HoverImage'], 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/tournaments/index/', $tournament['HoverImage']) . '.png\'']); ?>
            </div>
        </div>

        <a href="<?= $upcomingEvents['Next']['ID'] ?>" class="filled-btn">Alle Turniere</a>
    </section>

    <!-- *************** Latest News Bereich *************** -->
    <section class="news-block bg-green">
        <h2>Aktuelle News</h2>
        <ul class="news-list row list-unstyled">
			<?php foreach($latestNews as $news) : ?>
                <li class="news-item col-12 col-sm-4">
                    <!-- ID f�r den Button, funktion baue ich wenn design da -->
                    <a href="<?= $news['ID'] ?>" class="news-link">
                        <!-- Background Image, funktion zum laden baue ich wenn design da -->
                        <!--<?= $news['previewImage'] ?>-->
                        <img src="https://via.placeholder.com/570x458.png" class="img-fluid" alt="<?= $news['Headline'] ?>">

                        <span class="news-date"><?= $news['StartingDate'] ?></span>
                        <h3 class="news-header"><?= $news['Headline'] ?></h3>
                    </a>
                </li>
			<?php endforeach; ?>
        </ul>
        <div class="ad-block-container row">
            <div class="ad-block-item col-12 col-sm-6">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- tsa.gg Index News Ad Left -->
                <ins class="adsbygoogle"
                    style="display:block"
                    data-ad-client="ca-pub-8480651532892152"
                    data-ad-slot="7168004119"
                    data-ad-format="auto"
                    data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <div class="ad-block-item col-12 col-sm-6">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- tsa.gg Index News Ad Right -->
                <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-client="ca-pub-8480651532892152"
                        data-ad-slot="4621731829"
                        data-ad-format="auto"
                        data-full-width-responsive="true"></ins>
                <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
        <div class="news-footer text-center">
            <a href="#" class="outline-btn-white">Alle News</a>
        </div>
    </section>

    <!-- *************** Our Partners Bereich *************** -->
    <section class="partner-block">
        <h2>Unsere Partner</h2>
        <div class="row">
			<?php foreach($ourPartner as $partner) : ?>
                <div class="col-6 col-sm-3 partner-item" aria-labelledby='<?= $partner['image']?>' aria-describedby='<?= $partner['image']?>'>
                    <!-- Background Image -->
                    <?= Html::a(Html::img(Yii::$app->HelperClass->checkImage('/images/partner/index/', $partner['image']) . '.webp', ['class' => 'img-fluid','description' => $partner['name'],'aria-label' => $partner['name'], 'id' => $partner['image'], 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/partner/index/', $partner['image']) . '.png\'']), $partner['webadresse'], ['target'=>'_blank']); ?>
                </div>
			<?php endforeach; ?>
        </div>
        <div class="ad-block-container row">
            <div class="ad-block-item col-12">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- tsa.gg Index Partner -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-8480651532892152"
                     data-ad-slot="6811521719"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>
                     (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
        <div class="partner-footer text-center">
            <?php echo Html::a('Alle Partner', ["/partner/overview"], ['class' => "outline-btn",'aria-label' => "alle Partner"]); ?>
        </div>
    </section>
</div>