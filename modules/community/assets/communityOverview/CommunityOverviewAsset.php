<?php
namespace app\modules\community\assets\communityOverview;

use yii\web\AssetBundle;

class CommunityOverviewAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
 
    public $css = [
		//'css/changePassword.css'
    ];

    public $cssOptions = [
        'async' => 'true'
	];
}