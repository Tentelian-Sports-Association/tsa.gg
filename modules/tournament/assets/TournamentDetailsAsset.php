<?php
namespace app\modules\tournament\assets;

use yii\web\AssetBundle;

class TournamentDetailsAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/tournamentdetails.css',
        'css/jquery.bracket.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];

    public $js = [
        'js/tournament/jquery.bracket.min.js'
    ];

    public $jsOptions = [
        'async' => 'true'
	];
}