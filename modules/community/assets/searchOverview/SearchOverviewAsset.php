<?php
namespace app\modules\community\assets\searchOverview;

use yii\web\AssetBundle;

class SearchOverviewAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		//'css/changePassword.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}