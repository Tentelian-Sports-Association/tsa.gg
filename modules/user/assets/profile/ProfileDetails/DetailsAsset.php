<?php

namespace app\modules\user\assets\profile\profileDetails;

use yii\web\AssetBundle;

class DetailsAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/profileDetails.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}