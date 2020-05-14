<?php

/* @var $this yii\web\View
 * @var $upcomingEvents array
 * @var $tournaments array
 * @var $latestNews array
 * @var $ourPartner array
 */

$this->title = 'Startpage';
?>

<div class="site-index">

    <!-- *************** Upcoming Events Bereich *************** -->
    <section class="event-hero">
        <div class="event-hero-image">
            <picture>
                <!--<?= $upcomingEvents['Next']['previewImage'] ?>-->
                <img src="https://via.placeholder.com/1920x721.png" class="img-fluid">
            </picture>

        </div>
        <div class="event-hero-container">
            <div class="row">
                <div class="col-8 offset-1">
                    <h1 class="event-hero-title">
                        <?= $upcomingEvents['Next']['Name'] ?>
                    </h1>
                    <p class="description"><?= $upcomingEvents['Next']['shortDescription'] ?></p>
                    <a href="<?= $upcomingEvents['Next']['ID'] ?>" class="filled-btn">Zum Event</a>
                </div>
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
        <h3>Aktive Turniere</h3>
        <div class="tournament-container row">
            <div class="col-8">
                <ul class="tournament-list list-unstyled">
					<?php foreach($tournaments as $tournament) : ?>
                        <li class="d-flex align-items-center">
                            <div>
                                <span class="tournament-title"><?= $tournament['Name'] ?></span>
                                <span class="tournament-mode"><?= $tournament['Mode'] ?></span>
                            </div>

                            <!-- F�r Mobile-->
                            <span class="d-xs-block d-sm-none"><?= $tournament['GameTag'] ?></span>

                            <!-- Check if Live or in the Future -->
							<?php if($tournament['IsLive']) : ?>
                                <!-- ab hier dann die Button geschichte das man direkt auf den  Turnierbaum kommt -->
                                <div><?= $tournament['ID'] ?></div>
							<?php else : ?>
                                <!-- ab hier dann datum und uhrzeit wenn es nicht live ist -->
                                <span class="date"><?= $tournament['StartingDate'] ?></span>
                                <span class="starting-time"><?= $tournament['StartingTime'] ?></span>
							<?php endif; ?>

                        </li>
					<?php endforeach; ?>
                </ul>
            </div>
            <div class="col-4">
                <!-- Image f�r Hover Image funktion zum laden baue ich wenn design da -->
                <!--<img src="<?= $tournament['HoverImage'] ?>" />-->
                <img src="https://via.placeholder.com/570x395.png" class="img-fluid">
            </div>
        </div>

        <a href="<?= $upcomingEvents['Next']['ID'] ?>" class="filled-btn">Alle Turniere</a>
    </section>


    <!-- *************** Latest News Bereich *************** -->
    <?php foreach($latestNews as $news) : ?>
         <!-- Background Image, funktion zum laden baue ich wenn design da -->
        <div><?= $news['previewImage'] ?></div>
        <div><?= $news['Headline'] ?></div>
        <div><?= $news['StartingDate'] ?></div>
        <!-- ID f�r den Button, funktion baue ich wenn design da -->
        <div><?= $news['ID'] ?></div>
    <?php endforeach; ?>

    <!-- *************** Our Partners Bereich *************** -->
    <?php foreach($ourPartner as $partner) : ?>
        <!-- Background Image, funktion zum laden baue ich wenn design da -->
        <div><?= $partner['previewImage'] ?></div>
        <!-- ID f�r den Button, funktion baue ich wenn design da -->
        <div><?= $partner['ID'] ?></div>
    <?php endforeach; ?>
</div>