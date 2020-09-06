<?php
namespace app\modules\tournament\assets;

use yii\web\AssetBundle;

class TournamentCheckInAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/tournamentCheckIn.css',
        'css/tournamentRegistration.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}