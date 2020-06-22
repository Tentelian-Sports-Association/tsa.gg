<?php

/* @var $this yii\web\View *
 * @var $pagination int
 * @var $sortOrder array
 * @var $sortOrderBy array
 * @var $sortedPaginatedUsers array
 * @var $searchModel app\modules\miscellaneouse\models\formModels\SearchForm
 */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use yii\widgets\LinkPager;

\app\modules\community\assets\searchOverview\SearchOverviewAsset::register($this);

$this->title = \app\modules\community\Module::t('overview', 'overview_header_users');

$searchString = '';

?>

<div class="site-user-overview">
    <div class="searchHeader">
        <div class="quickSearch">
            <?php $form = ActiveForm::begin([
		                'id' => 'user-search-form',
		                'options' => ['class' => 'form-horizontal user-search-bar'],
		    ]); ?>
                
                <div class="sortBox">
                    <?= $form->field($searchModel, 'sortAscend')->dropDownList($sortOrder, ['class' => 'select-wrapper input-default']) ?>

                    <div class="vline_small"></div>

                    <?= $form->field($searchModel, 'sortedBy')->dropDownList($sortOrderBy, ['class' => 'select-wrapper input-default']) ?>

                    <?= Html::submitButton(\app\modules\community\Module::t('searchForm', 'searchForm_btnSort'), ['class' => 'btn btn-primary delete', 'name' => 'search-button']) ?>
                </div>

                <div class="searchBox">
                    <div class="vline_large"></div>

                    <?= $form->field($searchModel, 'searchString') ?>

                    <?= Html::submitButton(\app\modules\community\Module::t('searchForm', 'searchForm_btnSearch'), ['class' => 'btn btn-primary delete', 'name' => 'search-button']) ?>
                </div>
		    <?php ActiveForm::end(); ?>
        </div>
    </div>

    <?php
		echo LinkPager::widget([
    		'pagination' => $pagination,
		]);
	?>

    <div class="users">
        <div class="userBodyHead">
            <div class="id"><?= \app\modules\community\Module::t('searchForm', 'searchForm_byID') ?></div>
            <div class="natImg"><?= \app\modules\community\Module::t('searchForm', 'searchForm_byNationality') ?></div>
            <div class="langImg"><?= \app\modules\community\Module::t('searchForm', 'searchForm_byLanguage') ?></div>
            <div class="username"><?= \app\modules\community\Module::t('searchForm', 'searchForm_byName') ?></div>
            <div class="invite"></div>
        </div>
        
        <?php foreach ($sortedPaginatedUsers as $index => $user) : ?>
            <?= Html::a('<div class="userBody">'
                            . '<div class="id">' . $user['ID'] . '</div>'
                            . '<div class="natImg">'
                            . Html::img(Yii::$app->HelperClass->checkNationalityImage($user['Nationality']['icon'], '4x3'))
                            . Html::img(Yii::$app->HelperClass->checkNationalityImage($user['Nationality']['icon'], '4x3'), ['aria-labelledby' => 'nationality Image', 'alt' => $user['Nationality']['name'] . '.webp','class' => 'IMG'])
                            . '</div>'
                            . '<div class="langImg">'
                            . Html::img(Yii::$app->HelperClass->checkNationalityImage($user['Language']['icon'], '4x3'))
                            //. Html::img('data:image/webp;base64,' . $user['Language']['webp'], ['aria-labelledby' => 'nationality Image', 'alt' => $user['Language']['name'] . '.webp','class' => 'IMG', 'onerror' => 'this.src="data:image/png;base64,' . $user['Language']['png'] . '"'])
                            .'</div>'
                            . '<div class="username">' . $user['Name'] . '</div>'
                            . '</div>'
                            . '<div class"invite">' . '' . '</div>'
            , ['profile-details', 'userId' => $user['ID']]); ?>
        <?php endforeach; ?>
    </div>


</div>