<?php

namespace app\modules\miscellaneouse;

use app\modules\core\models\MainTeam;
use app\modules\core\models\Nationality;
use app\modules\core\models\User;

use yii;
use yii\web\View;
use yii\helpers\Url;

/**
 * Class MetaClass
 * @package app\modules\core\miscellaneous
 */
class MetaClass
{
    /**
     * MetaClass constructor.
     */
    public function __construct() { }

    /**
     * @param View $view
     * @param string $title
     */
    public function writeMetaIndex($view, $title)
    {
        /*************** standart meta tags ***************/
        $view->registerMetaTag([
            'name' => 'description',
            'content' => 'Tentelian Sports Association - Professional Gaming for everyone - Is a Tournament Site for Player from all Countries and all Skill Levels.',
        ]); // description

        $view->registerMetaTag([
            'name' => 'author',
            'content' => 'Tentelian Sports Association',
        ]); // description

        /*************** Schema.org markup for Google+ ***************/
        $view->registerMetaTag([
            'itemprop' => 'name',
            'content' => $title,
        ]); // itemprop:name

        $view->registerMetaTag([
            'itemprop' => 'description',
            'content' => 'Tentelian Sports Association - Professional Gaming for everyone - Is a Tournament Site for Player from all Countries and all Skill Levels.',
        ]); // itemprop description

        $view->registerMetaTag([
            'itemprop' => 'image',
            //'content' => Yii::$app->HelperClass->checkImage('/images/company/', 'tsa_800x235'),
            'content' => Url::base('https') . '/images/metafiles/TSA_Logo_Schrift_right_524x273_blackbg.png',
        ]); // itemprop image

        /*************** Twitter Card Data ***************/
        /*$view->registerMetaTag([
            'name' => 'twitter:card',
            'content' => 'summary',
        ]);*/ // twitter:card - summary

        $view->registerMetaTag([
            'name' => 'twitter:card',
            'content' => 'summary_large_image',
        ]); // twitter:card - summary_large_immage

        $view->registerMetaTag([
            'name' => 'twitter:site',
            'content' => '@TentelianSA',
        ]); // twitter:site

        $view->registerMetaTag([
            'property' => 'twitter:account_id',
            'content' => '1063431775995727872'
        ]); // twitter:account_id

        $view->registerMetaTag([
            'name' => 'twitter:title',
            'content' => $title,
        ]); // twitter:title

        $view->registerMetaTag([
            'name' => 'twitter:description',
            'content' => 'Tentelian Sports Association - Professional Gaming for everyone - Is a Tournament Site for Player from all Countries and all Skill Levels.',
        ]); // twitter:description - less then 200 characters

        $view->registerMetaTag([
            'name' => 'twitter:creator',
            'content' => '@BettyBirnchen',
        ]); // twitter:creator - author

        $view->registerMetaTag([
            'name' => 'twitter:image:src',
            //'content' => Yii::$app->HelperClass->checkImage('/images/company/', 'tsa_800x235'),
            'content' => Url::base('https') . '/images/metafiles/TSA_Logo_Schrift_right_524x273_blackbg.png',
        ]); // twitter:image:src

        $view->registerMetaTag([
            'name' => 'twitter:image:alt',
            'content' => 'no pic availabel',
        ]); // twitter:image:alt

        /*************** Open Graph Data (and facebook) ***************/
        /* Open Graph Data (and facebook) */
        $view->registerMetaTag([
            'property' => 'og:title',
            'content' => $title,
        ]); // og:title

        $view->registerMetaTag([
            'property' => 'og:type',
            'content' => 'website'
        ]); // og:type

        $view->registerMetaTag([
            'property' => 'og:url',
            'content' => Url::base('https'),
        ]); // og:url

        $view->registerMetaTag([
            'property' => 'og:image',
            //'content' => Yii::$app->HelperClass->checkImage('/images/company/', 'tsa_800x235'),
            'content' => Url::base('https') . '/images/metafiles/TSA_Logo_Schrift_right_524x273_blackbg.png',
        ]); // og:image

        $view->registerMetaTag([
            'property' => 'og:image:secure_url',
            //'content' => Yii::$app->HelperClass->checkImage('/images/company/', 'tsa_800x235'),
            'content' => Url::base('https') . '/images/metafiles/TSA_Logo_Schrift_right_524x273_blackbg.png',
        ]); // og:image:secure_url

        $view->registerMetaTag([
            'property' => 'og:image:type',
            'content' => 'image/png',
        ]); // og:image:type

        $view->registerMetaTag([
            'property' => 'image:width',
            'content' => '1200',
        ]); // image:width

        $view->registerMetaTag([
            'property' => 'image:height',
            'content' => '630',
        ]); // image:height

        $view->registerMetaTag([
            'property' => 'og:image:alt',
            'content' => 'TSA Logo Large',
        ]); // og:image:alt

        $view->registerMetaTag([
            'property' => 'og:description',
            'content' => 'Tentelian Sports Association - Professional Gaming for everyone - Is a Tournament Site for Player from all Countries and all Skill Levels.',
        ]); // og:description

        $view->registerMetaTag([
            'property' => 'og:site_name',
            'content' => $title,
        ]); // og:sitename
    }

    /**
     * @param View $view
     * @param string $title
     */
    public function writeMetaNews($view, $title)
    {
        /*************** standart meta tags ***************/
        $view->registerMetaTag([
            'name' => 'description',
            'content' => 'Tentelian Sports Association - News Section - All about Gaming, eSport and our TSA Partners and Sponsors',
        ]); // description

        $view->registerMetaTag([
            'name' => 'author',
            'content' => 'Tentelian Sports Association',
        ]); // description

        /*************** Schema.org markup for Google+ ***************/
        $view->registerMetaTag([
            'itemprop' => 'name',
            'content' => $title,
        ]); // itemprop:name

        $view->registerMetaTag([
            'itemprop' => 'description',
            'content' => 'Tentelian Sports Association - News Section - All about Gaming, eSport and our TSA Partners and Sponsors',
        ]); // itemprop description

        $view->registerMetaTag([
            'itemprop' => 'image',
            //'content' => Yii::$app->HelperClass->checkImage('/images/company/', 'tsa_800x235'),
            'content' => Url::base('https') . '/images/metafiles/news_524x273.png',
        ]); // itemprop image

        /*************** Twitter Card Data ***************/
        /*$view->registerMetaTag([
            'name' => 'twitter:card',
            'content' => 'summary',
        ]);*/ // twitter:card - summary

        $view->registerMetaTag([
            'name' => 'twitter:card',
            'content' => 'summary_large_image',
        ]); // twitter:card - summary_large_immage

        $view->registerMetaTag([
            'name' => 'twitter:site',
            'content' => '@TentelianSA',
        ]); // twitter:site

        $view->registerMetaTag([
            'property' => 'twitter:account_id',
            'content' => '1063431775995727872'
        ]); // twitter:account_id

        $view->registerMetaTag([
            'name' => 'twitter:title',
            'content' => $title,
        ]); // twitter:title

        $view->registerMetaTag([
            'name' => 'twitter:description',
            'content' => 'Tentelian Sports Association - News Section - All about Gaming, eSport and our TSA Partners and Sponsors',
        ]); // twitter:description - less then 200 characters

        $view->registerMetaTag([
            'name' => 'twitter:creator',
            'content' => '@BettyBirnchen',
        ]); // twitter:creator - author

        $view->registerMetaTag([
            'name' => 'twitter:image:src',
            //'content' => Yii::$app->HelperClass->checkImage('/images/company/', 'tsa_800x235'),
            'content' => Url::base('https') . '/images/metafiles/news_524x273.png',
        ]); // twitter:image:src

        $view->registerMetaTag([
            'name' => 'twitter:image:alt',
            'content' => 'no pic availabel',
        ]); // twitter:image:alt

        /*************** Open Graph Data (and facebook) ***************/
        /* Open Graph Data (and facebook) */
        $view->registerMetaTag([
            'property' => 'og:title',
            'content' => $title,
        ]); // og:title

        $view->registerMetaTag([
            'property' => 'og:type',
            'content' => 'website'
        ]); // og:type

        $view->registerMetaTag([
            'property' => 'og:url',
            'content' => Url::base('https'),
        ]); // og:url

        $view->registerMetaTag([
            'property' => 'og:image',
            //'content' => Yii::$app->HelperClass->checkImage('/images/company/', 'tsa_800x235'),
            'content' => Url::base('https') . '/images/metafiles/news_524x273.png',
        ]); // og:image

        $view->registerMetaTag([
            'property' => 'og:image:secure_url',
            //'content' => Yii::$app->HelperClass->checkImage('/images/company/', 'tsa_800x235'),
            'content' => Url::base('https') . '/images/metafiles/news_524x273.png',
        ]); // og:image:secure_url

        $view->registerMetaTag([
            'property' => 'og:image:type',
            'content' => 'image/png',
        ]); // og:image:type

        $view->registerMetaTag([
            'property' => 'image:width',
            'content' => '1200',
        ]); // image:width

        $view->registerMetaTag([
            'property' => 'image:height',
            'content' => '630',
        ]); // image:height

        $view->registerMetaTag([
            'property' => 'og:image:alt',
            'content' => 'TSA Logo Large',
        ]); // og:image:alt

        $view->registerMetaTag([
            'property' => 'og:description',
            'content' => 'Tentelian Sports Association - News Section - All about Gaming, eSport and our TSA Partners and Sponsors',
        ]); // og:description

        $view->registerMetaTag([
            'property' => 'og:site_name',
            'content' => $title,
        ]); // og:sitename
	}
}