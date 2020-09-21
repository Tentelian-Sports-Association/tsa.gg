<?php

namespace app\modules\tournament\controllers;

use app\components\BaseController;
use yii\filters\AccessControl;
use Yii;
use app\widgets\Alert;

/**
 * Class PartnerController
 *
 * @package app\modules\tournament\controllers
 */
class ClashRoyaleController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behavior()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['0'],
                    ]
                ]
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /** Register */

    public function actionRegisterPlayer($tournamentId)
    {
        print_r("dies ist der Clash Royale Controller");
        die();
	}

    public function actionFetchData($tournamentId = null, $bracketId = null)
    {
        if(!$tournamentId || !$bracketId)
        {
              Alert::addError('No Tournament and Bracket Selected');
              return $this->redirect(['/tournament/overview']);
		}

        if(Yii::$app->request->post())
        {
              $this->saveBracketData(Yii::$app->request->post());
		}

        /** Base Informations **/
        $user = Yii::$app->HelperClass->getUser();
        $languageID = Yii::$app->HelperClass->getUserLanguage($user);

        $tournament = Tournament::getTournamentById($tournamentId);
        
        $bracketData = [];
        $bracketView = '';


	}
}