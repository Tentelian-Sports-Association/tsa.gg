<?php

namespace app\modules\company;

use Yii;

/**
 * Class Module
 * @package app\modules\company
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
        Yii::$app->i18n->translations['modules/company/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'basePath' => '@app/modules/company/messages',
            'fileMap' => [
                'modules/company/company' => 'company.php',
 			],
            'on missingTranslation' => ['app\components\TranslationEventHandler', 'handleMissingTranslation']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function t($category, $message, $params = [], $language = null)
    {
        return Yii::t('modules/company/' . $category, $message, $params, $language);
    }
}