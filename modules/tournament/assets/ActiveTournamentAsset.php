<?php
namespace app\modules\tournament\assets;

use yii\web\AssetBundle;

class ActiveTournamentAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/activetournament.css',
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}