<?php

namespace app\modules\user\assets\account\profileDetails;

use yii\web\AssetBundle;

class EditDetailsAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/editDetails.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}