<?php

/* @var $this yii\web\View
 * @var $upcomingEvents array
 * @var $tournaments array
 * @var $latestNews array
 * @var $ourPartner array
 */

$this->title = 'Tentelian Sports Association';
?>

<div class="site-index">
    <!-- *************** Upcoming Events Bereich *************** -->

    <!-- Das Nächste anstehende Event für die Große anzeige -->
    <div><?= $upcomingEvents['Next']['Name'] ?></div>
    <div><?= $upcomingEvents['Next']['shortDescription'] ?></div>
    <!-- Background Image, funktion zum laden baue ich wenn design da -->
    <div><?= $upcomingEvents['Next']['previewImage'] ?></div>
    <!-- ID für den Button, funktion baue ich wenn design da -->
    <div><?= $upcomingEvents['Next']['ID'] ?></div>

    <!-- Das angepriesene Event für die kleine Ecke -->
    <div><?= $upcomingEvents['Preview']['Name'] ?></div>
    <div><?= $upcomingEvents['Preview']['shortDescription'] ?></div>
    <!-- Background Image, funktion zum laden baue ich wenn design da -->
    <div><?= $upcomingEvents['Preview']['previewImage'] ?></div>
    <!-- ID für den Button, funktion baue ich wenn design da -->
    <div><?= $upcomingEvents['Preview']['ID'] ?></div>

    <!-- *************** Tournaments Bereich *************** -->
    <?php foreach($tournaments as $tournament) : ?>
        <div><?= $tournament['Name'] ?></div>
        <div><?= $tournament['Mode'] ?></div>
        <!-- Für Mobile-->
        <div><?= $tournament['GameTag'] ?></div>
        <!-- Check if Live or in the Future -->
        <?php if($tournament['IsLive']) : ?>
            <!-- ab hier dann die Button geschichte das man direkt auf den  Turnierbaum kommt -->
            <div><?= $tournament['ID'] ?></div>
        <?php else : ?>
            <!-- ab hier dann datum und uhrzeit wenn es nicht live ist -->
            <div><?= $tournament['StartingDate'] ?></div>
            <div><?= $tournament['StartingTime'] ?></div>
        <?php endif; ?>
        <!-- Image für Hover Image funktion zum laden baue ich wenn design da -->
        <div><?= $tournament['HoverImage'] ?></div>
    <?php endforeach; ?>

    <!-- *************** Latest News Bereich *************** -->
    <?php foreach($latestNews as $news) : ?>
         <!-- Background Image, funktion zum laden baue ich wenn design da -->
        <div><?= $news['previewImage'] ?></div>
        <div><?= $news['Headline'] ?></div>
        <div><?= $news['StartingDate'] ?></div>
        <!-- ID für den Button, funktion baue ich wenn design da -->
        <div><?= $news['ID'] ?></div>
    <?php endforeach; ?>

    <!-- *************** Our Partners Bereich *************** -->
    <?php foreach($ourPartner as $partner) : ?>
        <!-- Background Image, funktion zum laden baue ich wenn design da -->
        <div><?= $partner['Image'] ?></div>
        <!-- ID für den Button, funktion baue ich wenn design da -->
        <div><?= $partner['id'] ?></div>
    <?php endforeach; ?>
</div>