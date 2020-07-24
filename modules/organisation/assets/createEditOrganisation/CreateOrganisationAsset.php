<?php
namespace app\modules\organisation\assets\createEditOrganisation;

use yii\web\AssetBundle;

class CreateOrganisationAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/createOrganisation.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}