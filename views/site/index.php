<?php

use yii\helpers\Html;

/* @var $this yii\web\View
 * @var $upcomingEvents array
 * @var $tournaments array
 * @var $latestNews array
 * @var $ourPartner array
 */

$this->title = 'Tentelian Sports Association';

    \app\assets\IndexAsset::register($this);


?>

<div class="content-startpage">


    <!-- *************** Upcoming Events Bereich *************** -->
    <section class="event-hero">
        <div class="event-hero-image"  aria-labelledby='<?= $upcomingEvents['Next']['previewImage']?>' aria-describedby='bigEventContainer bigEventDescription'>
            <picture>
                <?= Html::img(Yii::$app->HelperClass->checkImage('/images/events/index/', $upcomingEvents['Next']['previewImage']) . '.webp', ['class' => 'img-fluid', 'aria-describedby' => 'bigEventContainer bigEventDescription',  'aria-label' => $upcomingEvents['Next']['Name'], 'id' => $upcomingEvents['Next']['previewImage'], 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/events/index/', $upcomingEvents['Next']['previewImage']) . '.png\'']); ?>
                <source media="(min-width: 1200px)"
                        srcset="Bild Desktop"
                        type="image/jpeg">
                <source media="(min-width: 320px)"
                        srcset="Bild mobile"
                        type="image/jpeg">
                <img src="BILD Desktop"
                     alt="Alt" />
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
                        <img src="images/icons/arrow-right.svg">
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
                                    <a href="eventlink" class="filled-btn">Is Live</a>
                                    <span class="tournament-status d-none"><?= $tournament['ID'] ?></span>
								<?php else : ?>
                                    <!-- ab hier dann datum und uhrzeit wenn es nicht live ist -->
                                    <span class="date d-inline-flex align-items-center"> <img src="images/icons/calendar.svg" class="img-fluid"><?= $tournament['StartingDate'] ?></span>
                                    <span class="starting-time d-inline-flex align-items-center"><img src="images/icons/clock.svg" class="img-fluid"> <?= $tournament['StartingTime'] ?> Uhr</span>
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
                <li class="news-item col-12 col-lg-4">
                    <!-- ID f�r den Button, funktion baue ich wenn design da -->
                    <a href="<?= $news['ID'] ?>" class="news-link">
                        <!-- Background Image, funktion zum laden baue ich wenn design da -->
                        <!--<?= $news['previewImage'] ?>-->
                        <img src="https://via.placeholder.com/570x458.png" class="img-fluid" alt="<?= $news['Headline'] ?>">

                        <span class="news-date d-inline-flex align-items-center">
                            <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25.1875 4.84375H5.8125C4.20742 4.84375 2.90625 6.14492 2.90625 7.75V25.1875C2.90625 26.7926 4.20742 28.0938 5.8125 28.0938H25.1875C26.7926 28.0938 28.0938 26.7926 28.0938 25.1875V7.75C28.0938 6.14492 26.7926 4.84375 25.1875 4.84375Z" stroke="white" stroke-width="2" stroke-linejoin="round"/>
                                <path d="M24.0868 4.84375H6.91324C3.875 4.84375 2.90625 6.66924 2.90625 8.9125V12.5938H3.875C3.875 11.625 4.84375 10.6562 5.8125 10.6562H25.1875C26.1562 10.6562 27.125 11.625 27.125 12.5938H28.0938V8.9125C28.0938 6.66924 27.125 4.84375 24.0868 4.84375Z" fill="white"/>
                                <path d="M17.9219 15.5C18.7244 15.5 19.375 14.8494 19.375 14.0469C19.375 13.2443 18.7244 12.5938 17.9219 12.5938C17.1193 12.5938 16.4688 13.2443 16.4688 14.0469C16.4688 14.8494 17.1193 15.5 17.9219 15.5Z" fill="white"/>
                                <path d="M22.7656 15.5C23.5682 15.5 24.2188 14.8494 24.2188 14.0469C24.2188 13.2443 23.5682 12.5938 22.7656 12.5938C21.9631 12.5938 21.3125 13.2443 21.3125 14.0469C21.3125 14.8494 21.9631 15.5 22.7656 15.5Z" fill="white"/>
                                <path d="M17.9219 20.3438C18.7244 20.3438 19.375 19.6932 19.375 18.8906C19.375 18.0881 18.7244 17.4375 17.9219 17.4375C17.1193 17.4375 16.4688 18.0881 16.4688 18.8906C16.4688 19.6932 17.1193 20.3438 17.9219 20.3438Z" fill="white"/>
                                <path d="M22.7656 20.3438C23.5682 20.3438 24.2188 19.6932 24.2188 18.8906C24.2188 18.0881 23.5682 17.4375 22.7656 17.4375C21.9631 17.4375 21.3125 18.0881 21.3125 18.8906C21.3125 19.6932 21.9631 20.3438 22.7656 20.3438Z" fill="white"/>
                                <path d="M8.23438 20.3438C9.03691 20.3438 9.6875 19.6932 9.6875 18.8906C9.6875 18.0881 9.03691 17.4375 8.23438 17.4375C7.43184 17.4375 6.78125 18.0881 6.78125 18.8906C6.78125 19.6932 7.43184 20.3438 8.23438 20.3438Z" fill="white"/>
                                <path d="M13.0781 20.3438C13.8807 20.3438 14.5312 19.6932 14.5312 18.8906C14.5312 18.0881 13.8807 17.4375 13.0781 17.4375C12.2756 17.4375 11.625 18.0881 11.625 18.8906C11.625 19.6932 12.2756 20.3438 13.0781 20.3438Z" fill="white"/>
                                <path d="M8.23438 25.1875C9.03691 25.1875 9.6875 24.5369 9.6875 23.7344C9.6875 22.9318 9.03691 22.2812 8.23438 22.2812C7.43184 22.2812 6.78125 22.9318 6.78125 23.7344C6.78125 24.5369 7.43184 25.1875 8.23438 25.1875Z" fill="white"/>
                                <path d="M13.0781 25.1875C13.8807 25.1875 14.5312 24.5369 14.5312 23.7344C14.5312 22.9318 13.8807 22.2812 13.0781 22.2812C12.2756 22.2812 11.625 22.9318 11.625 23.7344C11.625 24.5369 12.2756 25.1875 13.0781 25.1875Z" fill="white"/>
                                <path d="M17.9219 25.1875C18.7244 25.1875 19.375 24.5369 19.375 23.7344C19.375 22.9318 18.7244 22.2812 17.9219 22.2812C17.1193 22.2812 16.4688 22.9318 16.4688 23.7344C16.4688 24.5369 17.1193 25.1875 17.9219 25.1875Z" fill="white"/>
                                <path d="M7.75 2.90625V4.84375" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M23.25 2.90625V4.84375" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        <?= $news['StartingDate'] ?></span>
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