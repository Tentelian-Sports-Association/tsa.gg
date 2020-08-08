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
    $openTournament['DtRedEnd'];
    $openTournament['DtCheckIn']; 
    $openTournament['RegisterOpen'];
    $openTournament['CheckInOpen'] ;
}
*/
?>