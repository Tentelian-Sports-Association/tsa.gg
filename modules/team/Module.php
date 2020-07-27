<?php

namespace app\modules\team;

use Yii;

/**
 * Class Module
 * @package app\modules\team
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
 		Yii::$app->i18n->translations['modules/team/*'] = [
 			'class' => 'yii\i18n\PhpMessageSource',
 			'basePath' => '@app/modules/team/messages',
 			'fileMap' => [
 				//'modules/team/createOrganisation' => 'create.php',
 				//'modules/team/organisationDetails' => 'details.php',
 			],
            'on missingTranslation' => ['app\components\TranslationEventHandler', 'handleMissingTranslation']
 		];
 	}

 	/**
     * @inheritdoc
     */
 	public static function t($category, $message, $language = null, $params = [])
 	{
 		return Yii::t('modules/team/' . $category, $message, $params, $language);
 	}
 }