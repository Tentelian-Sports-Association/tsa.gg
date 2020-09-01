<?php

namespace app\modules\company\controllers;

use app\components\BaseController;
use yii\filters\AccessControl;
use app\widgets\Alert;

/**
 * Class CompanyController
 *
 * @package app\modules\company\controllers
 */
class CompanyController extends BaseController
{
    /**
     * Impressum
     *
     * @return string
     */
    public function actionImprint()
    {
        return $this->render('imprint');
    }

    /**
     * AGB
     *
     * @return string
     */
    public function actionGtc()
    {
        return $this->render('gtc');
    }

    /**
     * Datenschutz
     *
     * @return string
     */
    public function actionPrivacy()
    {
        return $this->render('privacy');
    }

    /**
     * Aktuell ausgeschriebene Jobs
     *
     * @return string
     */
    public function actionJobs()
    {
        return $this->render('jobs');
    }
}