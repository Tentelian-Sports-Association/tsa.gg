<?php
namespace app\modules\events\assets;

use yii\web\AssetBundle;

class DetailsAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/details.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}