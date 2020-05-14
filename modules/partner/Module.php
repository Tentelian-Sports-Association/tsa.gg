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
            'basePath' => '@app/modules/partner/messages',
            'fileMap' => [
                'modules/partner/partner' => 'partner.php',
            ],
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