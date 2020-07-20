<?php
namespace app\modules\news\assets;

use yii\web\AssetBundle;

class NewsAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		//'css/changePassword.css'
		'css/news.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}