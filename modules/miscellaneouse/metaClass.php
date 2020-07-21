<?php

namespace app\modules\miscellaneouse;

use app\modules\core\models\MainTeam;
use app\modules\core\models\Nationality;
use app\modules\core\models\User;

use yii;
use yii\web\View;

/**
 * Class MetaClass
 * @package app\modules\core\miscellaneous
 */
class MetaClass
{
    /**
     * MetaClass constructor.
     */
    public function __construct()
    {

    }

    /**
     * @param View $view
     * @param string $title
     */
    public function writeMetaIndex($view, $title)
    {
        /*************** standart meta tags ***************/
        $view->registerMetaTag([
            'name' => 'description',
            'content' => 'Tentelian Sports Associationt - Professional Gaming for everyone - Is a Tournament Site for Player from all Countries and all Skill Levels.',
        ]); // description

        /*************** Schema.org markup for Google+ ***************/
        $view->registerMetaTag([
            'itemprop' => 'name',
            'content' => $title,
        ]); // itemprop:name

        $view->registerMetaTag([
            'itemprop' => 'description',
            'content' => 'Tentelian Sports Associationt - Professional Gaming for everyone - Is a Tournament Site for Player from all Countries and all Skill Levels.',
        ]); // itemprop description

        $view->registerMetaTag([
            'itemprop' => 'image',
            //'content' => Yii::$app->HelperClass->checkImage('/images/company/', 'tsa_800x235'),
            'content' => 'https://tsa.gg/images/icons/logo.svg',
        ]); // itemprop image
    }
}