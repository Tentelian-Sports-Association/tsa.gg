<?php

namespace app\modules\user\assets\account\login;

use yii\web\AssetBundle;

class LoginAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/login.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}