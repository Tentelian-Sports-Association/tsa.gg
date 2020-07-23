<?php
namespace app\modules\company\assets;

use yii\web\AssetBundle;

class ImprintAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
    'css/imprint.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}