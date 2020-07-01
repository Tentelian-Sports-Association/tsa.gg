<?php

namespace app\modules\events;

use Yii;

/**
 * Class Module
 * @package app\modules\events
 */
 class Module extends \yii\base\Module
 {
 	public function init()
 	{
 		parent::init();

 		$this->registerTranslations();
 	}

 	/**
 	 * Register the module translation
 	 */
 	public function registerTranslations()
 	{
 		Yii::$app->i18n->translations['modules/events/*'] = [
 			'class' => 'yii\i18n\PhpMessageSource',
 			'basePath' => '@app/modules/events/messages',
 			'fileMap' => [
 			],
            'on missingTranslation' => ['app\components\TranslationEventHandler', 'handleMissingTranslation']
 		];
 	}

 	/**
     * @inheritdoc
     */
 	public static function t($category, $message, $language = null, $params = [])
 	{
 		return Yii::t('modules/events/' . $category, $message, $params, $language);
 	}
 }