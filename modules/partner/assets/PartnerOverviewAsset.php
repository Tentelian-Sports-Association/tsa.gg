<?php

namespace app\modules\partner\assets;

use yii\web\AssetBundle;

class PartnerOverviewAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/partner.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}