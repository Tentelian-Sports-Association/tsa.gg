<?php
/* @var $this yii\web\View *
 * @var $form yii\bootstrap4\ActiveForm
 * @var $tournament object
 * @var $bracketData array
 * @var $encounterScreen array
 * @var $editable bool
 * @var $bracketView string
 * @var $myId int
 */

//use yii\helpers\Html;
//use yii\bootstrap4\ActiveForm;
//use app\widgets\Alert;

$this->title = $tournament->getName() . ' - Round ' . $bracketData['base']['round'] . ' - Best of ' . $bracketData['base']['bo'];//\app\modules\team\Module::t('createTeam', 'create_title');

/************* Meta Index ****************/
$this->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->url]);
Yii::$app->MetaClass->writeDefaultMeta($this, $this->title, 'Create your own Team', '@BettyBirnchen');
/************* End Meta Index ****************/

?>

<?php include $bracketView; ?>