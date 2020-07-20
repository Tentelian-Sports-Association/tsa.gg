<?php

namespace app\modules\user\assets\account\changePassword;

use yii\web\AssetBundle;

class ChangePasswordAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/changePassword.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}