<?php

/* @var $this yii\web\View
 * @var $upcomingEvents array
 * @var $tournaments array
 * @var $latestNews array
 * @var $ourPartner array
 */


$this->title = 'Tentelian Sports Association';

?>

<div class="content-startpage">
    <!-- *************** Wir sind live Bereich *************** -->
    <div class="promo-banner dropdown">
        <h3 class="promo-text"><span>Icon</span>wir sind jetzt live, schau uns zu!</h3>
        <button class="dropdown-toggle" type="button" id="promo-banner" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
        </button>
        <div class="col align-items-center text-right promo-links dropdown-menu" aria-labelledby="promo-banner">
            <a href="#" class="twitch dropdown-item"><span>Logo </span>Twitch</a>
            <a href="#" class="mixer dropdown-item"><span>Logo </span>Mixer</a>
            <a href="#" class="youtube dropdown-item"><span>Logo </span>Youtube</a>
        </div>
    </div>

    <!-- *************** Upcoming Events Bereich *************** -->
    <section class="event-hero">
        <div class="event-hero-image">
            <picture>
                <!--<?= $upcomingEvents['Next']['previewImage'] ?>-->
                <source media="(min-width: 768px)"
                        srcset="https://via.placeholder.com/1920x721.png 1x, https://via.placeholder.com/1920x721.png 2x"
                        type="image/jpeg">
                <source media="(min-width: 320px)"
                        srcset="https://via.placeholder.com/375x397.png 1x, https://via.placeholder.com/320x397.png  2x"
                        type="image/jpeg">
                <img src="https://via.placeholder.com/1920x721.png"
                     alt="<?= $upcomingEvents['Next']['Name'] ?>" />
            </picture>

        </div>
        <div class="event-hero-container">
            <div class="event-text">
                <h1 class="event-hero-title">
                    <?= $upcomingEvents['Next']['Name'] ?>
                </h1>
                <p class="description"><?= $upcomingEvents['Next']['shortDescription'] ?></p>
                <a href="<?= $upcomingEvents['Next']['ID'] ?>" class="filled-btn">Zum Event</a>
            </div>
        </div>

        <div class="event-hero-upcoming-events d-flex">
            <div class="d-inline-block upcoming-image">
                <!--<?= $upcomingEvents['Next']['previewImage'] ?>-->
                <img src="https://via.placeholder.com/237x134.png" class="img-fluid">
            </div>
            <div class="d-inline-block upcoming-description">
                <div class="inner">
                    <!-- Das angepriesene Event f�r die kleine Ecke -->
                    <span>Nächstes Event</span>
                    <h3><?= $upcomingEvents['Preview']['Name'] ?></h3>
                    <!--<p><?= $upcomingEvents['Preview']['shortDescription'] ?></p>-->
                    <!-- ID f�r den Button, funktion baue ich wenn design da -->
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
                                    <span class="d-block d-sm-none"><?= $tournament['GameTag'] ?></span>

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
                <!--<img src="<?= $tournament['HoverImage'] ?>" />-->
                <img src="https://via.placeholder.com/570x395.png" class="img-fluid">
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
                <img src="https://via.placeholder.com/870x458.png?text=AD+870x458" class="img-fluid" alt="AD1">
            </div>
            <div class="ad-block-item col-12 col-sm-6">
                <img src="https://via.placeholder.com/870x458.png?text=AD+870x458" class="img-fluid" alt="AD2">
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
                <div class="col-6 col-sm-3 partner-item">
                    <!-- ID f�r den Button, funktion baue ich wenn design da -->
                    <a href="<?= $partner['id'] ?>">
                        <!-- Background Image, funktion zum laden baue ich wenn design da -->
                        <img src="https://via.placeholder.com/570x458.png" class="img-fluid" alt="<?= $partner['Image'] ?>">
                    </a>
                </div>
		    <?php endforeach; ?>
        </div>
        <div class="ad-block-container row">
            <div class="ad-block-item col">
                <img src="https://via.placeholder.com/1740x264.png?text=AD" class="img-fluid" alt="AD1">
            </div>
        </div>
        <div class="partner-footer text-center">
            <a href="#" class="outline-btn-primary">Alle Partner</a>
        </div>
    </section>

</div>