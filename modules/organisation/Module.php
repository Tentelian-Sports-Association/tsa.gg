<?php

namespace app\modules\organisation;

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
 		Yii::$app->i18n->translations['modules/organisation/*'] = [
 			'class' => 'yii\i18n\PhpMessageSource',
 			'basePath' => '@app/modules/organisation/messages',
 			'fileMap' => [
 				'modules/organisation/createOrganisation' => 'create.php',
 				'modules/organisation/organisationDetails' => 'details.php',
 			],
            'on missingTranslation' => ['app\components\TranslationEventHandler', 'handleMissingTranslation']
 		];
 	}

 	/**
     * @inheritdoc
     */
 	public static function t($category, $message, $language = null, $params = [])
 	{
 		return Yii::t('modules/organisation/' . $category, $message, $params, $language);
 	}
 }