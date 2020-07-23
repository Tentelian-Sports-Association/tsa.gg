<?php
namespace app\modules\company\assets;

use yii\web\AssetBundle;

class PrivacyAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
    'css/privacy.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}