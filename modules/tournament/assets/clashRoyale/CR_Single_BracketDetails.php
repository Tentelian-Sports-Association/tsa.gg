<?php
namespace app\modules\tournament\assets\clashRoyale;

use yii\web\AssetBundle;

class CR_Single_BracketDetails extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/cr_single_bracketDetails.css',
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}