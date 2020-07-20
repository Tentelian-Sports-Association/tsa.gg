<?php

namespace app\modules\news;

use Yii;

/**
 * Class Module
 * @package app\modules\user
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
 		Yii::$app->i18n->translations['modules/news/*'] = [
 			'class' => 'yii\i18n\PhpMessageSource',
 			'basePath' => '@app/modules/news/messages',
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
 		return Yii::t('modules/news/' . $category, $message, $params, $language);
 	}
 }