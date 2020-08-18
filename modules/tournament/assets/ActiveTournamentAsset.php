<?php
namespace app\modules\tournament\assets;

use yii\web\AssetBundle;

class ActiveTournamentAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/tournament.css',
        '../../../vendor\bower-asset\jquery-bracket\jquery.bracket.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];

    public $js = [
        '../../../vendor\bower-asset\jquery-bracket\jquery.bracket.js'
    ];
}