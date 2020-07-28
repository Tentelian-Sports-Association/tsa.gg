<?php

namespace app\components;

use yii\i18n\MissingTranslationEvent;

class TranslationEventHandler
{
    public static function handleMissingTranslation(MissingTranslationEvent $event)
    {
        $event->translatedMessage = "No {$event->language} Translation";
        //$event->translatedMessage = \Yii::t($event->category, $event->message, null, 'en-EN');
    }
}