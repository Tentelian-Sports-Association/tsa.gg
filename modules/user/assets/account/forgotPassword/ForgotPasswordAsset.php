<?php

namespace app\modules\user\assets\account\forgotPassword;

use yii\web\AssetBundle;

class ForgotPasswordAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/forgotPassword.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}