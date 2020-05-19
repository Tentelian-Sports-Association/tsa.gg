<?php

namespace app\modules\partner\controllers;

use app\components\BaseController;
use yii\filters\AccessControl;

use app\modules\partner\models\Partner;

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
        /** Our Partners */
        $ourPartner = Partner::find()->all();

        return $this->render('partnerOverview',
        [
            'ourPartner' => $ourPartner,
        ]);
    }
}