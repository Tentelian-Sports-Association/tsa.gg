<?php

namespace app\modules\organisation\assets\organisationDetails;

use yii\web\AssetBundle;

class DetailsAssets extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/organisation.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}