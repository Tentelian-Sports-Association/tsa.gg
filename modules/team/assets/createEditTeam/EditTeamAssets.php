<?php

namespace app\modules\team\assets\createEditTeam;

use yii\web\AssetBundle;

class EditTeamAssets extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/team/edit.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}