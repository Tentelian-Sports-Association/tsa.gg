<?php
namespace app\modules\organisation\assets\createEditOrganisation;

use yii\web\AssetBundle;

class EditOrganisationAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		'css/editOrganisation.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}