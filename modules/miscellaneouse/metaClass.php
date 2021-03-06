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

    public function writeDefaultMeta($view, $title, $description, $twitterCreator)
    {
        /*************** standart meta tags ***************/
        $view->registerMetaTag([
            'name' => 'description',
            'content' => $description,
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
            'content' => $description,
        ]); // itemprop description

        /*************** Twitter Card Data ***************/
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
            'content' => $description,
        ]); // twitter:description - less then 200 characters

        $view->registerMetaTag([
            'name' => 'twitter:creator',
            'content' => $twitterCreator,
        ]); // twitter:creator - author

        /*************** Open Graph Data (and facebook) ***************/
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
            'content' => Url::base('https') . Yii::$app->request->url,
        ]); // og:url

        $view->registerMetaTag([
            'property' => 'og:image:type',
            'content' => 'image/png',
        ]); // og:image:type

        $view->registerMetaTag([
            'property' => 'og:description',
            'content' => $description,
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
    public function writeMetaIndex($view)
    {

        /*************** Schema.org markup for Google+ ***************/
        $view->registerMetaTag([
            'itemprop' => 'image',
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
            'name' => 'twitter:image:src',
            'content' => Url::base('https') . '/images/metafiles/TSA_Logo_Schrift_right_524x273_blackbg.webp',
        ]); // twitter:image:src

        $view->registerMetaTag([
            'name' => 'twitter:image:alt',
            'content' => Url::base('https') . '/images/metafiles/TSA_Logo_Schrift_right_524x273_blackbg.png',
        ]); // twitter:image:alt

        /*************** Open Graph Data (and facebook) ***************/
        $view->registerMetaTag([
            'property' => 'og:image',
            'content' => Url::base('https') . '/images/metafiles/TSA_Logo_Schrift_right_524x273_blackbg.png',
        ]); // og:image

        $view->registerMetaTag([
            'property' => 'og:image:secure_url',
            'content' => Url::base('https') . '/images/metafiles/TSA_Logo_Schrift_right_524x273_blackbg.png',
        ]); // og:image:secure_url

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
    }

    /**
     * @param View $view
     * @param string $title
     */
    public function writeMetaNews($view)
    {
        /*************** Schema.org markup for Google+ ***************/
        $view->registerMetaTag([
            'itemprop' => 'image',
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
            'name' => 'twitter:image:src',
            'content' => Url::base('https') . '/images/metafiles/news_524x273.webp',
        ]); // twitter:image:src

        $view->registerMetaTag([
            'name' => 'twitter:image:alt',
            'content' => Url::base('https') . '/images/metafiles/news_524x273.png',
        ]); // twitter:image:alt

        /*************** Open Graph Data (and facebook) ***************/
        /* Open Graph Data (and facebook) */
        $view->registerMetaTag([
            'property' => 'og:image',
            'content' => Url::base('https') . '/images/metafiles/news_524x273.png',
        ]); // og:image

        $view->registerMetaTag([
            'property' => 'og:image:secure_url',
            'content' => Url::base('https') . '/images/metafiles/news_524x273.png',
        ]); // og:image:secure_url

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
            'content' => 'TSA News Logo',
        ]); // og:image:alt


	}

    public function writeMetaPartner($view)
    {
        /*************** Schema.org markup for Google+ ***************/
        $view->registerMetaTag([
            'itemprop' => 'image',
            'content' => Url::base('https') . '/images/metafiles/Partner_524x273.png',
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
            'name' => 'twitter:image:src',
            'content' => Url::base('https') . '/images/metafiles/Partner_524x273.webp',
        ]); // twitter:image:src

        $view->registerMetaTag([
            'name' => 'twitter:image:alt',
            'content' => Url::base('https') . '/images/metafiles/Partner_524x273.png',
        ]); // twitter:image:alt

        /*************** Open Graph Data (and facebook) ***************/
        /* Open Graph Data (and facebook) */
        $view->registerMetaTag([
            'property' => 'og:image',
            'content' => Url::base('https') . '/images/metafiles/Partner_524x273.png',
        ]); // og:image

        $view->registerMetaTag([
            'property' => 'og:image:secure_url',
            'content' => Url::base('https') . '/images/metafiles/Partner_524x273.png',
        ]); // og:image:secure_url

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
            'content' => 'TSA News Logo',
        ]); // og:image:alt
	}
}