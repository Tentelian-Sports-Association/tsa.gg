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
    <div class="hero">
        <div class="hero-image">
            <picture>
                <source media="(min-width: 1200px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/', 'community') . '.webp' ?>
                        type="image/jpeg">
                <source media="(min-width: 300px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/mobile/', 'community') . '.webp' ?>
                        type="image/jpeg">
                <img src="<?php echo Yii::$app->HelperClass->checkImage('/images/banner/', 'community') . '.webp' ?>" aria-label="News Header" class="img-fluid"/>
            </picture>
        </div>
        <div class="hero-container row">
            <div class="hero-text col-lg-8">
                <h1 class="hero-title">
                    Player
                </h1>
                <p class="description" >
                    Weit hinten, hinter den Wortbergen, fern der Länder Vokalien und Konsonantien.
                </p>
            </div>
        </div>
    </div>


    <div class="inner-wrapper">
        <div class="row">
            <div class="col-md-8">
                <div class="searchHeader">
                    <div class="quickSearch">
                        <?php $form = ActiveForm::begin(['id' => 'user-search-form', 'options' => ['class' => 'form-horizontal user-search-bar']]); ?>
                            <div class="col-12">
                                <div class="col-5 searchBox">
                                    <div class="vline_large"></div>
                                    <?= $form->field($searchModel, 'searchString')->textInput(['class' => 'input-default'])->label(false); ?>
                                </div>

                                <div class="col-6 sortBox">
                                    <div class="col-6 col-sortascend">
                                        <?= $form->field($searchModel, 'sortAscend')->dropDownList($sortOrder, ['class' => 'select-wrapper input-default'])->label(false); ?>
                                    </div>
                                    <div class="vline_small"></div>
                                    <div class="col-6 col-sortedby">
                                        <?= $form->field($searchModel, 'sortedBy')->dropDownList($sortOrderBy, ['class' => 'select-wrapper input-default'])->label(false); ?>
                                    </div>
                                </div>
                                <div class="col-1 search-button">
                                    <?= Html::submitButton(\app\modules\community\Module::t('searchForm', 'searchForm_btnSort'), ['class' => 'btn btn-primary delete search-btn', 'name' => 'search-button']) ?>
                                </div>
                            </div>

                            <?php echo LinkPager::widget(['pagination' => $pagination]); ?>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-12">
                <div class="users">
                    <div class="userBodyHead">
                        <div class="id"><?= \app\modules\community\Module::t('searchForm', 'searchForm_byID') ?></div>
                        <div class="username"><?= \app\modules\community\Module::t('searchForm', 'searchForm_byName') ?></div>
                        <div class="natImg"><?= \app\modules\community\Module::t('searchForm', 'searchForm_byNationality') ?></div>
                        <div class="langImg"><?= \app\modules\community\Module::t('searchForm', 'searchForm_byLanguage') ?></div>
                        <div class="invite"></div>
                    </div>
                    
                    <?php foreach ($sortedPaginatedUsers as $index => $user) : ?>
                        <?= Html::a('<div class="userBody">'
                                        . '<div class="id">' . $user['ID'] . '</div>'
                                        .'</div>'
                                        . '<div class="avatar">'
                                        . Html::img(Yii::$app->HelperClass->checkImage('/images/avatars/user/', $user['ID']) . '.webp', ['aria-label' => $user['Name']. '.webp', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/avatars/user/', $user['ID']) . '.png\''])		
                                        . '</div>'
                                        . '<div class="username">' . $user['Name'] . '</div>'
                                        . '</div>'
                                        . '<div class="natImg">'
                                        . Html::img(Yii::$app->HelperClass->checkNationalityImage($user['Nationality']['icon'], '4x3'), ['aria-label' => 'nationality Image', 'alt' => $user['Nationality']['name'],'class' => 'IMG'])
                                        . '</div>'
                                        . '<div class="langImg">'
                                        . Html::img(Yii::$app->HelperClass->checkNationalityImage($user['Language']['icon'], '4x3'), ['aria-label' => 'nationality Image', 'alt' => $user['Language']['name'],'class' => 'IMG'])
                                        . '<div class"invite">' . '' . '</div>'
                        , ['/user/details', 'userId' => $user['ID']]); ?>
                    <?php endforeach; ?>
                </div>

                <?php echo LinkPager::widget(['pagination' => $pagination]); ?>
            </div>
        </div>
    </div>
</div>