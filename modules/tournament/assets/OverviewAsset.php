<?php
namespace app\modules\tournament\assets;

use yii\web\AssetBundle;

class OverviewAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/tournament.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}