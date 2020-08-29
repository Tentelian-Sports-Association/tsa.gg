<?php
namespace app\modules\tournament\assets;

use yii\web\AssetBundle;

class TournamentDetailsAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/tournamentDetails.css',
        'css/bracket.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}