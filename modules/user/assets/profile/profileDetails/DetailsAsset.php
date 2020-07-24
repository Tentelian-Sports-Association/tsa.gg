<?php

namespace app\modules\user\assets\profile\profileDetails;

use yii\web\AssetBundle;

class DetailsAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/login.css'
    ];

    public $cssOptions = [
        'async' => 'false'
    ];

    public $js = [
      //'js/account-edit.js',
    ];
}
