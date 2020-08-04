<?php

/* @var $this yii\web\View *
 * @var $pagination int
 * @var $sortOrder array
 * @var $sortOrderBy array
 * @var sortedPaginatedOrganisation array
 * @var $searchModel app\modules\miscellaneouse\models\formModels\SearchForm
 */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = \app\modules\community\Module::t('overview', 'overview_header_organisations');

/************* Meta Index ****************/
$this->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->url]);
Yii::$app->MetaClass->writeDefaultMeta($this, $this->title,'All our Organisations', '@BettyBirnchen');
/************* End Meta Index ****************/

\app\modules\community\assets\searchOverview\SearchOverviewAsset::register($this);

$searchModel->searchString = '';

/** Array  Organisation Details Like UserOverview zeile 94 **/
/*
sortedPaginatedOrganisation[$nr]['ID']
sortedPaginatedOrganisation[$nr]['Name']

sortedPaginatedOrganisation[$nr]['Nationality']['icon']
sortedPaginatedOrganisation[$nr]['Nationality']['name']

sortedPaginatedOrganisation[$nr]['Language']['icon']
sortedPaginatedOrganisation[$nr]['Language']['name']
*/

?>

<div class="site-organisations-overview">
    <div class="hero">
        <div class="hero-image">
            <picture>
                <source media="(min-width: 1200px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/', 'community') . '.webp' ?>
                        type="image/jpeg">
                <source media="(min-width: 300px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/mobile/', 'community') . '.webp' ?>
                        type="image/jpeg">
                <img src="https://via.placeholder.com/1920x500" aria-label="News Header" class="img-fluid"/>
            </picture>
        </div>
        <div class="hero-container row">
            <div class="hero-text col-lg-8">
                <h1 class="hero-title">
                    Organisation
                </h1>
                <p class="description" >
                    Weit hinten, hinter den Wortbergen, fern der Länder Vokalien und Konsonantien.
                </p>
            </div>
        </div>
    </div>

    <div class="inner-wrapper">
        <div class="row">
            <div class="col-md-10">
                <div class="searchHeader">
                    <div class="col-12 quickSearch">
                        <?php $form = ActiveForm::begin(['id' => 'user-search-form', 'options' => ['class' => 'form-horizontal user-search-bar']]); ?>
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
                            <div class="clearfix"></div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
                <div class="col-12">
                    <div class="float-right">
                        <?php echo LinkPager::widget(['pagination' => $pagination]); ?>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row users desktop">
                    <div class="col-12 col-md-12">
                        <div class="col-12 userBodyHead">
                            <div class="col-2 id float-left"><?= \app\modules\community\Module::t('searchForm', 'searchForm_byID') ?></div>
                            <div class="col-3 username float-left"><?= \app\modules\community\Module::t('searchForm', 'searchForm_byName') ?></div>
                            <div class="col-3 owner float-left">Owner</div>
                            <div class="col-2 natImg float-left"><?= \app\modules\community\Module::t('searchForm', 'searchForm_byNationality') ?></div>
                            <div class="col-2 langImg float-left"><?= \app\modules\community\Module::t('searchForm', 'searchForm_byLanguage') ?></div>      
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    
                        <?php foreach ($sortedPaginatedOrganisation as $index => $orga) : ?>
                        <div class="col-12 userBody">
                            <div class="col-2 id float-left">
                                <?php echo $orga['ID']; ?>
                            </div>
                            <div class="col-3 float-left">
                                <div class="avatar float-left">
                                    <?= Html::img(Yii::$app->HelperClass->checkImage('/images/avatars/organisation/', $orga['ID']) . '.webp', ['aria-label' => $orga['Name']. '.webp', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/avatars/organisation/', $orga['ID']) . '.png\'']) ?>		
                                </div>
                                <div class="username float-left">
                                    <?= Html::a($orga['Name'], ['/organisation/details', 'organisationId' => $orga['ID']], ['class' => '']); ?>
                                </div>
                            </div>
                            <div class="col-3 owner float-left">
                                <?= Html::a($orga['Owner']['Name'], ['/user/details', 'userId' => $orga['Owner']['ID']], ['class' => '']); ?>
                            </div>
                            <div class="col-2 natImg float-left">
                                <?= Html::img(Yii::$app->HelperClass->checkNationalityImage($orga['Nationality']['icon'], '4x3'), ['aria-label' => 'nationality Image', 'alt' => $orga['Nationality']['name'],'class' => 'IMG']) ?>
                            </div>
                            <div class="col-2 langImg float-left">
                                <?= Html::img(Yii::$app->HelperClass->checkNationalityImage($orga['Language']['icon'], '4x3'), ['aria-label' => 'nationality Image', 'alt' => $orga['Language']['name'],'class' => 'IMG']) ?>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="row users mobile">
                    <div class="col-12 col-md-12">
                        <?php foreach ($sortedPaginatedOrganisation as $index => $orga) : ?>
                        <div class="col-12 userBody">
                            <div class="col-2 float-left">
                                <div class="avatar">
                                    <?= Html::img(Yii::$app->HelperClass->checkImage('/images/avatars/organisation/', $orga['ID']) . '.webp', ['aria-label' => $orga['Name']. '.webp', 'onerror' => 'this.src=\'' . Yii::$app->HelperClass->checkImage('/images/avatars/organisation/', $orga['ID']) . '.png\'']) ?>		
                                </div>
                            </div>
                            <div class="col-8 float-left">
                                <div class="col-12">
                                    <?= Html::a($orga['Name'], ['/organisation/details', 'userId' => $orga['ID']], ['class' => '']); ?>
                                </div>
                                <div class="col-12">
                                    <?= Html::a($orga['Owner']['Name'], ['/user/details', 'userId' => $orga['Owner']['ID']], ['class' => '']); ?>
                                </div>
                                <div class="col-12">
                                    <div class="col-6 natImg float-left">
                                        Nationality: <?= Html::img(Yii::$app->HelperClass->checkNationalityImage($orga['Nationality']['icon'], '4x3'), ['aria-label' => 'nationality Image', 'alt' => $orga['Nationality']['name'],'class' => 'IMG']) ?>
                                    </div>
                                    <div class="col-6 langImg float-left">
                                        Language: <?= Html::img(Yii::$app->HelperClass->checkNationalityImage($orga['Language']['icon'], '4x3'), ['aria-label' => 'nationality Image', 'alt' => $orga['Language']['name'],'class' => 'IMG']) ?>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-2 float-right">
                                ID: <?php echo $orga['ID']; ?>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-12">
                    <div class="float-right">
                        <?php echo LinkPager::widget(['pagination' => $pagination]); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>