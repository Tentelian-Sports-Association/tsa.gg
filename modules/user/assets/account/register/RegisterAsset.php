<?php

namespace app\modules\user\assets\account\register;

use yii\web\AssetBundle;

class RegisterAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/login.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}