<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $globalCount */
/* @var $users array */

use yii\helpers\Html;


$this->title = \app\modules\events\Module::t('details', 'event_details_header');

/************* Meta Index ****************/
$this->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->url]);
Yii::$app->MetaClass->writeDefaultMeta($this, $this->title, \app\modules\events\Module::t('details', 'event_details_description'), '@BettyBirnchen');
/************* End Meta Index ****************/

\app\modules\events\assets\DetailsAsset::register($this);

?>