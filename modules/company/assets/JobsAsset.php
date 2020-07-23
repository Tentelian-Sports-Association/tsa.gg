<?php
namespace app\modules\company\assets;

use yii\web\AssetBundle;

class JobsAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
    'css/jobs.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}