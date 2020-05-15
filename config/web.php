<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'Tentelian Sports Association',
    'language' => 'en-EN',
    'basePath' => dirname(__DIR__),
    'defaultRoute' => '/site/index',
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'defaultTimeZone' => 'Europe/Berlin',
            'timeZone' => 'Europe/Berlin',
            'nullDisplay' => '',
            'dateFormat' => 'dd.MM.yyyy',
		],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'fBuLN1gyFYz1U4BMF95sUKtm2eUidzNE',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
            //'class' => 'yii\caching\MemCache',
            //'useMemcached' => true,
            //'servers' => [
            //    [
            //        'host' => '127.0.0.1',
            //        'port' => 11211
            //    ],
            //],
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'birnchen.ovh',
                'username' => "noreply@tsa.gg",
                'password' => 'Birnchen2016#',
                'port' => '25',
                'encryption' => 'tls',
            ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            // Disable r= routes
            'enablePrettyUrl' => true,
            // Disable index.php
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'fileMap' => [
                        'app' => 'app.php'
                    ],
                ],
            ]
        ],
        'MetaClass' => [
            'class' => 'app\modules\miscellaneouse\metaClass',
        ],
        'HelperClass' => [
            'class' => 'app\modules\miscellaneouse\helperClass'
        ],
    ],
    'modules' => [
        'partner' => 'app\modules\partner\Module'
	],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
