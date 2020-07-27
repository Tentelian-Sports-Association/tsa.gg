<?php

namespace app\modules\team\assets\createEditTeam;

use yii\web\AssetBundle;

class CreateTeamAssets extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/team/create.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}