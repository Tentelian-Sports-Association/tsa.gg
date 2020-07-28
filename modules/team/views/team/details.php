<?php

/* @var $this yii\web\View *
 * @var $teamPicModel app\modules\miscellaneouse\models\formModels\ProfilePicForm
 * @var $team array,
 * @var $teamManager
 * @var $isOwner bool,
 * @var $teamMember array,
 */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

use app\widgets\Alert;

\app\modules\team\assets\teamDetails\DetailsAssets::register($this);

//$this->title = $userInfo['user_name'] . '\'s Player profile';

/** Usabel Variables **/
/*
$team['ID']
$team['Name']
$team['Description']
$team['FoundingDate']
$team['Nationality']['icon']
$team['Nationality']['name']
$team['Language']['icon']
$team['Language']['name']

teamManager['id']
teamManager['Name']
*/

?>