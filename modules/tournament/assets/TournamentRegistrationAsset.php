<?php
namespace app\modules\tournament\assets;

use yii\web\AssetBundle;

class TournamentRegistrationAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/tournamentRegistration.css',
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}