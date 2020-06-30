<?php

namespace app\modules\organisation\assets\organisationDetails;

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