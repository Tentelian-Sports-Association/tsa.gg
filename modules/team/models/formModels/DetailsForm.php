<?php

namespace app\modules\team\models\formModels;

use app\components\FormModel;
use app\widgets\Alert;

use app\modules\miscellaneouse\models\language\Language;
use app\modules\miscellaneouse\models\nationality\Nationality;

use app\modules\team\models\Team;

use Yii;
use yii\db\Exception;

class DetailsForm extends FormModel
{
	/* Team */
	public $teamID;
	public $name;
	public $shortCode;
    public $nationality_id;
 	public $language_id;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [
                ['name', 'shortCode', 'nationality_id', 'language_id'],
                'required',
            ],
            [   'shortCode',
                'string',
                'min' => 2,
                'max' => 6,
            ],
            [   'name',
                'string',
                'min' => 4,
                'max' => 17,
            ],
           	[
            	'language_id',
            	'exist',
        		'targetClass' => Language::className(),
        		'targetAttribute' => 'id'
        	],
        	[
            	'nationality_id',
        		'exist',
            	'targetClass' => Nationality::className(),
            	'targetAttribute' => 'id'
        	],
        ];
    }

    /**
     * @inheritDoc
     */
    public function attributeLabels()
    {
        return [
            'name' => \app\modules\team\Module::t('editTeam', 'name'),
            'shortCode' => \app\modules\team\Module::t('editTeam', 'shortcode'),
            'nationality_id' => \app\modules\team\Module::t('editTeam', 'headquater_id'),
            'language_id' => \app\modules\team\Module::t('editTeam', 'language_id'),
        ];
    }

	/**
     * Creates a new user, or updates an existing one.
     *
     * @return boolean true, if the user was saved successfully
     * @throws \Exception
     * @throws \Throwable
     * @throws \yii\base\Exception
     */
    public function save($teamID)
    {
        $transaction = Yii::$app->db->beginTransaction();
        $team = Team::findOne(['id' => $teamID]);

        /** Changeable Base Informations */
        $team->language_id = $this->language_id;
        $team->nationality_id = $this->nationality_id;
        $team->name = $this->name;
        $team->shortCode = $this->shortCode;

        $team->organisation_id = $team->getOrganisationId();
        $team->mode_id = $team->getModeId();
        $team->game_id = $team->getGameId();

        //print_r($team);
        //die();

        /** Save Organisation and Credentials **/
        try {
            $team->save();
            $transaction->commit();
            //Alert::addSuccess('Team: %s successfully saved',  $team->name);
            return true;
        } catch (Exception $e) {
            print_r($e);
            $transaction->rollBack();
            //Alert::addError('Team %s couldnt be saved', $team->name);
            //Alert::addError("user %s couldn't be saved" . $e->getMessage());
        }
    }
}