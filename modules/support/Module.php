<?php

namespace app\modules\support;

use Yii;

/**
 * Class Module
 * @package app\modules\support
 */
class Module extends \yii\base\Module
{
    public function init()
    {
        parent::init();

        $this->registerTranslations();
    }

    /**
     * Registers the module translations
     */
    public function registerTranslations()
    {
        Yii::$app->i18n->translations['modules/support/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'basePath' => '@app/modules/support/messages',
            'fileMap' => [
                'modules/support/contact' => 'contact.php',
            ],
            'on missingTranslation' => ['app\components\TranslationEventHandler', 'handleMissingTranslation']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function t($category, $message, $params = [], $language = null)
    {
        return Yii::t('modules/support/' . $category, $message, $params, $language);
    }
}