<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $globalCount */
/* @var $users array */

use yii\helpers\Html;

\app\modules\community\assets\communityOverview\CommunityOverviewAsset::register($this);

$this->title = \app\modules\community\Module::t('overview', 'overview_header');

?>

<div class="site-communityOverview">
	<!-- User Overview -->
    <?php echo Html::a(\app\modules\community\Module::t('overview', 'overview_users'), ["/community/user-overview"], ['class' => 'footer-link d-flex align-items-center', 'aria-label' => "User Overview"]); ?>

	<!-- Orga Overview -->
    <?= Html::a(\app\modules\community\Module::t('overview', 'overview_organisations'), ["#"], ['class' => 'footer-link d-flex align-items-center', 'target'=>'_blank', 'aria-label' => "User Overview"]); ?>
	
	<!-- Team Overview -->
    <?= Html::a(\app\modules\community\Module::t('overview', 'overview_teams'), ["#"], ['class' => 'footer-link d-flex align-items-center', 'aria-label' => "User Overview"]); ?>
</div>