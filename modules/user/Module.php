<?php

namespace app\modules\user;

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
 		Yii::$app->i18n->translations['modules/user/*'] = [
 			'class' => 'yii\i18n\PhpMessageSource',
 			'basePath' => '@app/modules/user/messages',
 			'fileMap' => [
 				'modules/user/login' => 'login.php',
 				'modules/user/register' => 'register.php',
                'modules/user/changePassword' => 'changePassword.php',
                'modules/user/forgotPassword' => 'forgotPassword.php',
                'modules/user/addGameAccount' => 'addGameAccount.php',
                'modules/user/userDetails' => 'userDetails.php',
                'modules/user/editDetails' => 'editDetails.php',
 			],
            'on missingTranslation' => ['app\components\TranslationEventHandler', 'handleMissingTranslation']
 		];


 	}

 	/**
     * @inheritdoc
     */
 	public static function t($category, $message, $language = null, $params = [])
 	{
 		return Yii::t('modules/user/' . $category, $message, $params, $language);
 	}
 }