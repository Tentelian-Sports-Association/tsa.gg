<?php
namespace app\modules\events\assets;

use yii\web\AssetBundle;

class OverviewAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/events.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}