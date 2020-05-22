<?php

namespace app\modules\user\controllers;

use app\components\BaseController;

use app\modules\user\models\formModels\LoginForm;
use app\modules\user\models\formModels\RegisterForm;

use app\modules\miscellaneouse\models\gender\Gender;
use app\modules\miscellaneouse\models\language\Language;
use app\modules\miscellaneouse\models\nationality\Nationality;

use app\modules\user\models\User;

use DateTime;
use Yii;

class AccountController extends BaseController
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

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Logout action. (next)
     *
     * @return Response
     */
    public function actionRegister()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $languageID = Language::findByLocale(Yii::$app->language)->getId();

        $model =new RegisterForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->save()) {
            $this->goHome();
        }

        $genderList = [];
        foreach (Gender::find()->all() as $gender) {
            $genderList[$gender->getId()] = $gender->getName($languageID);
        }

        $languageList = [];
        foreach (Language::find()->all() as $language) {
            $languageList[$language->getId()] = $language->getName($languageID);
        }

        $nationalityList = [];
        foreach (Nationality::find()->all() as $nationality) {
            $nationalityList[$nationality->getId()] = $nationality->getName($languageID);
        }

        return $this->render('register',
            [
                'model' => $model,
                'genderList' => $genderList,
                'languageList' => $languageList,
                'nationalityList' => $nationalityList,
            ]);
    }
}