<?php

namespace app\components;

use app\modules\tariff\models\Parameter;
use Yii;
use yii\web\Controller;

/** Helper Modules **/
//use app\modules\miscellaneouse\models\Language;


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

        //if(Yii::$app->controller->action->id !== 'construction')
            //return $this->redirect(['/construction']);

        //if(Yii::$app->controller->action->id !== 'construction')
        /*&& Yii::$app->controller->id !== 'partner'
        && Yii::$app->controller->id !== 'site'
        && Yii::$app->controller->id !== 'news'
        && Yii::$app->controller->id !== 'account'
        && Yii::$app->controller->id !== 'support')*/
        //{
            //if(Yii::$app->controller->id !== 'community' || Yii::$app->controller->action->id == 'orga-overview' || Yii::$app->controller->action->id == 'team-overview' || Yii::$app->controller->action->id == 'user-overview')
                //return $this->redirect(['/construction']);
		//}

        if(Yii::$app->user->identity != null)
            Yii::$app->language = User::findIdentity(Yii::$app->user->identity->getId())->getLanguage()->getLocale();
        
        if (!Yii::$app->user->isGuest && Yii::$app->user->getIdentity()->is_password_change_required == 1 && Yii::$app->controller->action->id !== 'change-password') {
            return $this->redirect(['/account/change-password']);
        }

        return true;
    }
}