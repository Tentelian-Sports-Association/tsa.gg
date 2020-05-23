<?php

namespace app\components;

use app\modules\tariff\models\Parameter;
use Yii;
use yii\web\Controller;

/** Helper Modules **/
use app\modules\miscellaneouse\models\Language;


use app\modules\user\models\User;

class BaseController extends Controller
{

    /**
     * Checks if a password change is required. If yes, the user will get redirected to the password change site until he changes his password.
     *
     * @param \yii\base\Action $action
     * @return bool|\yii\web\Response
     * @throws \yii\web\BadRequestHttpException
     * @throws \Throwable
     */
    public function beforeAction($action)
    {
        if (!parent::beforeAction($action)) {
            return false;
        }

        if(Yii::$app->user->identity != null)
            Yii::$app->language = User::findIdentity(Yii::$app->user->identity->getId())->getLanguage()->getLocale();
        

        if (!Yii::$app->user->isGuest && Yii::$app->user->getIdentity()->is_password_change_required == 1 && Yii::$app->controller->action->id !== 'password-change') {
            return $this->redirect(['/account/password-change']);
        }

        return true;
    }
}