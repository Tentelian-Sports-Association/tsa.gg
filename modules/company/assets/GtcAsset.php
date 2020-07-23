<?php
namespace app\modules\company\assets;

use yii\web\AssetBundle;

class GtcAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
    'css/gtc.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}