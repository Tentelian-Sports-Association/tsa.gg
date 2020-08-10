<?php
/**
 * Alert partial gets all messages from session flash. All flash messages where displayed
 */
use app\assets\AppAsset;
use app\components\Constants;
use app\modules\catalog\models\SearchForm;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Html;

$session = Yii::$app->session;
$flashes = $session->getAllFlashes();

if (!empty($flashes)) {
    foreach ($flashes as $kind => $messages) {
        if ($kind == 'success') {
            foreach ($messages as $message) {
                 $this->registerJs("showSuccessMessage('$message')");
            }
        } else if ($kind == 'error') {
            foreach ($messages as $message) {
                 $this->registerJs("showErrorMessage('$message')");
            }
        } else {
            foreach ($messages as $message) {
                $this->registerJs("showInfoMessage('$message')");
            }
        }
    }
}
?>