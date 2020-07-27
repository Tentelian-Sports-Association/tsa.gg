<?php

namespace app\modules\team\assets\teamDetails;

use yii\web\AssetBundle;

class DetailsAssets extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/team/details.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}