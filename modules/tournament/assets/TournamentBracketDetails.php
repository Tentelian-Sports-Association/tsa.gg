<?php
namespace app\modules\tournament\assets;

use yii\web\AssetBundle;

class TournamentBracketDetails extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/tournamentBracketDetails.css',
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}