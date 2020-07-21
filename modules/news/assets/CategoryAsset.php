<?php
namespace app\modules\news\assets;

use yii\web\AssetBundle;

class CategoryAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/news.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}