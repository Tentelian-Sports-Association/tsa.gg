<?php

namespace app\modules\partner\controllers;

use app\components\BaseController;
use yii\filters\AccessControl;

use app\modules\partner\models\Partner;

use Yii;

/**
 * Class PartnerController
 *
 * @package app\modules\partner\controllers
 */
class PartnerController extends BaseController
{
    /**
     * Overview of all Partners
     *
     * @return string
     */
    public function actionOverview()
    {
         /** Base Informations **/
        $user = Yii::$app->HelperClass->getUser();
        $languageID = Yii::$app->HelperClass->getUserLanguage($user);

        /** Our Partners */
        $ourPartner = Partner::GetPartner($languageID);

        return $this->render('partnerOverview',
        [
            'ourPartner' => $ourPartner,
        ]);
    }
}