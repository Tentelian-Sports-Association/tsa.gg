<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View
 * @var $upcomingEvents array
 * @var $tournaments array
 * @var $latestNews array
 * @var $ourPartner array
 */

$this->title = 'Tentelian Sports Association';

/************* Meta Index ****************/
$this->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->url]);
Yii::$app->MetaClass->writeMetaIndex($this, $this->title);


\app\assets\IndexAsset::register($this);

?>

<div class="content-startpage">


    <!-- *************** Upcoming Events Bereich *************** -->
    <section class="event-hero">
        <div class="event-hero-image"  aria-labelledby='<?= $upcomingEvents['Next']['previewImage']?>' aria-describedby='bigEventContainer bigEventDescription'>
            <picture>
                <source media="(min-width: 1200px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/events/Index/', $upcomingEvents['Next']['previewImage']) . '.webp' ?>
                        type="image/jpeg">
                <source media="(min-width: 768px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/events/Index_768/', $upcomingEvents['Next']['previewImage']) . '.webp' ?>
                        type="image/jpeg">
                <source media="(min-width: 425px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/events/Index_425/', $upcomingEvents['Next']['previewImage']) . '.webp' ?>
                        type="image/jpeg">
                <source media="(min-width: 375px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/events/Index_375/', $upcomingEvents['Next']['previewImage']) . '.webp' ?>
                        type="image/jpeg">
                <source media="(min-width: 300px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/events/Index_300/', $upcomingEvents['Next']['previewImage']) . '.webp' ?>
                        type="image/jpeg">
                <img src=""
                     aria-label="Next Big Event Pictures" />
            </picture>

        </div>
        <div class="inner-wrapper">
            <div class="event-hero-container" id="bigEventContainer">
                <div class="event-text">
                    <h1 class="event-hero-title">
                        <?= $upcomingEvents['Next']['Name'] ?>
                    </h1>
                    <p class="description" id="bigEventDescription"><?= $upcomingEvents['Next']['shortDescription'] ?></p>
                        <?php echo Html::a(Yii::t('app', 'events_showEvent'), ["#"], ['class' => "filled-btn",'aria-label' => "Show Event Details button"]); ?>
                </div>
            </div>

            <?php if(array_key_exists("Preview",$upcomingEvents)) : ?>
                <div class="event-hero-upcoming-events d-flex">
                    <div class="d-none d-sm-inline-block upcoming-image" aria-labelledby='<?= $upcomingEvents['Preview']['previewImage']?>' aria-describedby='smallEventContainer smallEventName'>
                        <!--<?= $upcomingEvents['Next']['previewImage'] ?>-->
                        <?= Html::img(Yii::$app->HelperClass->checkImage('/images/events/index_300/', $upcomingEvents['Preview']['previewImage']) . '.webp', ['class' => 'img-fluid', 'aria-describedby' => 'smallEventContainer smallEventName',  'aria-label' => $upcomingEvents['Preview']['Name'], 'id' => $upcomingEvents['Preview']['previewImage'], 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/events/index_300/', $upcomingEvents['Preview']['previewImage']) . '.png\'']); ?>
                    </div>
                    <div class="d-inline-block upcoming-description" id="smallEventContainer">
                        <div class="inner">
                            <!-- Das angepriesene Event f�r die kleine Ecke -->
                            <span><?= Yii::t('app', 'events_upcoming') ?></span>
                            <h3 id="smallEventName"><?= $upcomingEvents['Preview']['Name'] ?></h3>
                            <!--<p><?= $upcomingEvents['Preview']['shortDescription'] ?></p>-->
                            <!-- ID für den Button, funktion baue ich wenn design da -->
                            <a href="<?= $upcomingEvents['Preview']['ID'] ?>" class="more">
                                <?php echo Html::img(Yii::$app->HelperClass->checkSVGIcons('arrow-right')); ?>

                            </a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- *************** Tournaments Bereich image hover noch einbauen *************** -->
    <section class="tournament">
        <div class="inner-wrapper">
            <h2><?= Yii::t('app', 'tournaments_header') ?></h2>
            <!-- Check if Tournaments are Availabel -->
            <?php if($tournaments) : ?>
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
                                            <span class="date d-inline-flex align-items-center"><?php echo Html::img(Yii::$app->HelperClass->checkSVGIcons('calendar'), ['class' => 'img-fluid']); ?><?= $tournament['StartingDate'] ?></span>
                                            <span class="starting-time d-inline-flex align-items-center"><?php echo Html::img(Yii::$app->HelperClass->checkSVGIcons('clock'), ['class' => 'clock']); ?><?= $tournament['StartingTime'] ?> Uhr</span>
                                        <?php endif; ?>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="d-none col-sm-4 d-sm-block d-lg-flex">
                        <!-- Image f�r Hover Image funktion zum laden baue ich wenn design da -->
                        <?= Html::img(Yii::$app->HelperClass->checkImage('/images/tournaments/index/', $tournament['HoverImage']) . '.webp', ['class' => 'img-fluid',  'aria-label' => $tournament['HoverImage'], 'id' => $tournament['HoverImage'], 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/tournaments/index/', $tournament['HoverImage']) . '.png\'']); ?>
                    </div>
                </div>
                <?php echo Html::a(Yii::t('app', 'tournaments_moreTournaments'), ["#"], ['class' => "filled-btn",'aria-label' => "show all tournaments Button"]); ?>
            <!-- If no Tournaments Availabel show what ever -->
            <?php else : ?>
            
            <?php endif; ?>
        </div>
    </section>

    <!-- *************** Latest News Bereich images noch einbauen *************** -->
    <section class="news-block bg-green">
        <div class="inner-wrapper">
            <h2><?= Yii::t('app', 'currentNews_header') ?></h2>
            <!-- Check if News are Availabel -->
            <?php if($latestNews) : ?>
                <ul class="news-list row list-unstyled">
                    <?php foreach($latestNews as $news) : ?>
                        <li class="news-item col-12 col-lg-4">
                            <?= Html::a(Html::img(Yii::$app->HelperClass->checkImage('/images/news/news/', $news['ID']) . '.webp', ['aria-label' => $news['Headline'], 'class' => 'img-fluid','onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/news/categorie/', $news['ID']) . '.png\''])		
                                        . '<span class="news-date d-inline-flex align-items-center">
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
                                                </svg>'
                                        . $news['StartingDate'] . '</span>'
                                        . '<h3 class="news-header">' . $news['Headline'] . '</h3>'
                        , ['news/news-details', 'newsId' => $news['ID']], ['class' => 'news-link']); ?>
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
                    <?php echo Html::a(Yii::t('app', 'currentNews_moreNews'), ["news"], ['class' => "outline-btn-white",'aria-label' => "Show all News Button"]); ?>
                </div>
            <!-- If no News Availabel show what ever -->
            <?php else : ?>
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
            <?php endif; ?>
        </div>
    </section>

    <!-- *************** Our Partners Bereich *************** -->
    <section class="partner-block">
        <div class="inner-wrapper">
            <h2><?= Yii::t('app', 'partnerss_ourPartners') ?></h2>
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
                <?php echo Html::a(Yii::t('app', 'partnerss_morePartners'), ["/partner/overview"], ['class' => "filled-btn",'aria-label' => "Show all Partners Button"]); ?>
            </div>
        </section>
    </div>
</div>