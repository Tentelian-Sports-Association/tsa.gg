<?php

namespace app\modules\tournament
rnament;

use Yii;

/**
 * Class Module
 * @package app\modules\tournament
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
 		Yii::$app->i18n->translations['modules/tournament/*'] = [
 			'class' => 'yii\i18n\PhpMessageSource',
 			'basePath' => '@app/modules/tournament/messages',
 			'fileMap' => [
 				//'modules/tournament/createTeam' => 'create.php',
 				//'modules/tournament/editTeam' => 'edit.php',
 				//'modules/tournament/teamDetails' => 'details.php',
 			],
            'on missingTranslation' => ['app\components\TranslationEventHandler', 'handleMissingTranslation']
 		];
 	}

 	/**
     * @inheritdoc
     */
 	public static function t($category, $message, $language = null, $params = [])
 	{
 		return Yii::t('modules/tournament/' . $category, $message, $params, $language);
 	}
 }