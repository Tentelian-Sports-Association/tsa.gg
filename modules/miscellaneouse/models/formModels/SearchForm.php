<?php

namespace app\modules\miscellaneouse\models\formModels;

use app\components\FormModel;
use Yii;

class SearchForm extends FormModel
{
	public $sortAscend = 1;
    public $sortedBy = 1;
    public $pageNumber = 1;

	public $searchString = '';
    public $searchStringOrg = '';
    public $searchStringTeam = '';

	/**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [
                ['searchString', 'searchStringOrg', 'searchStringTeam'],
                'string',
                'min' => 3,
                'max' => 15,
                'message' => \app\modules\community\Module::t('searchForm', 'searchForm_searchString')
             ],
             [['sortedBy', 'sortAscend'], 'integer'],
        ];
    }

    /**
     * @return array the attribute labels
     */
    public function attributeLabels()
    {
        return [
            'sortAscend' => \app\modules\community\Module::t('searchForm', 'searchForm_sortAscend'),
            'sortedBy' => \app\modules\community\Module::t('searchForm', 'searchForm_sortedBy'),
            'pageNumber' => \app\modules\community\Module::t('searchForm', 'searchForm_pageNumber'),
            'searchString' => \app\modules\community\Module::t('searchForm', 'searchForm_searchString'),
            'searchStringOrg' => \app\modules\community\Module::t('searchForm', 'searchForm_searchStringOrg'),
            'searchStringTeam' => \app\modules\community\Module::t('searchForm', 'searchForm_searchStringTeam'),
        ];
    }
}
