<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View
 * @var $selectedNews array
 */

$this->title = \app\modules\news\Module::t('overview', 'news_details_header');

/************* Meta Index ****************/
$this->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->url]);
Yii::$app->MetaClass->writeMetaNews($this, $selectedNews['Headline'], $selectedNews['ShortBody']);

\app\modules\news\assets\NewsDetailsAsset::register($this);


?>

<div class="news-block">
    <!-- *************** Header *************** -->
    <div class="hero">
        <div class="hero-image">
            <picture>
                <source media="(min-width: 1200px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/', 'news') . '.webp' ?>
                        type="image/jpeg">
                <source media="(min-width: 300px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/mobile/', 'news') . '.webp' ?>
                        type="image/jpeg">
                <img src="https://via.placeholder.com/1920x500" aria-label="News Header" class="img-fluid"/>
            </picture>
        </div>
        <div class="hero-container row">
            <div class="hero-text col-lg-8">
                <h1 class="hero-title">
					<?= $selectedNews['Headline'] ?>
                </h1>
                <p class="description" >
                    <?= $selectedNews['ShortBody'] ?>
                </p>
            </div>
        </div>
    </div>

    <!-- *************** Detailed News Bereich *************** -->
    <section class="news-block">
        <div class="inner-wrapper">
            <div class="news-entry">
                <div class="col-12 news-info">
                    <div class="col-6 float-left">
                        <div class="news-info-block">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            </svg>
                            <span class="text">    
                                <?= Html::a($selectedNews['Author'], ['/user/details', 'userId' => $selectedNews['AuthorID']], ['class' => '']); ?>
                            </span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-6 float-right">
                        <div class="news-info-block float-right">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                                <path fill-rule="evenodd" d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            </svg>    
                            <span class="text">
                                <?= $selectedNews['Date']?>
                            </span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="news-info-block float-right">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z"/>
                                <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                            <span class="text">
                                <?= $selectedNews['Time']?>
                            </span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 news-content">
                    <h3><?= $selectedNews['Headline']?></h3>
                    <p><?= $selectedNews['LongBody']?></p>
                </div>

            </div>
        </div>
    </section>
    <!--
    $selectedNews['ID']
    $selectedNews['CategorieID']
    $selectedNews['SubCategorieID']
    
    $selectedNews['AuthorID']
    $selectedNews['Author']
    
    $selectedNews['Headline']
    $selectedNews['ShortBody']
    $selectedNews['LongBody']
    
    $selectedNews['previewImage']
    $selectedNews['Date']
    $selectedNews['Time']
    -->
</div>