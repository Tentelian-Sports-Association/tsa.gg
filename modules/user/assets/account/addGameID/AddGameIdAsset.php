<?php

namespace app\modules\user\assets\account\addGameID;

use yii\web\AssetBundle;

class AddGameIDAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/addGameId.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}