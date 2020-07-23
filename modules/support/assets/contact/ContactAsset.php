<?php

namespace app\modules\support\assets\contact;

use yii\web\AssetBundle;

class ContactAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/contact.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}