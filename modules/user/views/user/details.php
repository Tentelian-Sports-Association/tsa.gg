<?php

/* @var $this yii\web\View *
 * @var $profilePicModel app\modules\miscellaneouse\models\formModels\ProfilePicForm
 * @var $userInfo array - siehe UserController
 */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

use app\widgets\Alert;

\app\modules\user\assets\profile\profileDetails\DetailsAsset::register($this);

$this->title = $userInfo['user_name'] . '\'s Player profile';

?>

<div class="site-profileDetails">
    
</div>