<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/dist';
    public $css = [
        'https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,700;1,400',
		'../../../vendor/bower-asset/jquery-ui/themes/dot-luv/jquery-ui.css',
        'css/main.css'
    ];
    public $js = [
        'js/main.min.js',
    ];
}
