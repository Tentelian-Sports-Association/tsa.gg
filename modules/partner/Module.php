<?php

namespace app\modules\partner;

use Yii;

/**
 * Class Module
 * @package app\modules\partner
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
        Yii::$app->i18n->translations['modules/partner/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'basePath' => '@app/modules/partner/messages',
            'fileMap' => [
                'modules/partner/partner' => 'partner.php',
            ],
            'on missingTranslation' => ['app\components\TranslationEventHandler', 'handleMissingTranslation']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function t($category, $message, $params = [], $language = null)
    {
        return Yii::t('modules/partner/' . $category, $message, $params, $language);
    }
}