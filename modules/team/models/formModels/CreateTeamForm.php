<?php

namespace app\modules\team\models\formModels;

use app\components\FormModel;
use app\widgets\Alert;

use app\modules\miscellaneouse\models\games\Games;
use app\modules\miscellaneouse\models\language\Language;
use app\modules\miscellaneouse\models\nationality\Nationality;
use app\modules\miscellaneouse\models\tournamentMode\TournamentMode;

use app\modules\team\models\Team;
use app\modules\team\models\TeamMember;

use Yii;
use yii\db\Exception;
use yii\db\Expression;

class CreateTeamForm extends FormModel
{
    public $organisation_id;
    public $name;
    public $game_id;
    public $gameName;
    public $shortCode;
 	public $nationality_id;
 	public $language_id;
 	public $mode_id;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [
                ['name', 'shortCode', 'nationality_id', 'language_id', 'mode_id'],
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
                'max' => 16,
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
            [
            	'game_id',
        		'exist',
            	'targetClass' => Games::className(),
            	'targetAttribute' => 'id'
        	],
            [
            	'mode_id',
        		'exist',
            	'targetClass' => TournamentMode::className(),
            	'targetAttribute' => 'id'
        	]
        ];
    }

    /**
     * @inheritDoc
     */
    public function attributeLabels()
    {
        return [
            'name' => \app\modules\team\Module::t('createTeam', 'name'),
            'shortCode' => \app\modules\team\Module::t('createTeam', 'shortcode'),
            'nationality_id' => \app\modules\team\Module::t('createTeam', 'headquater_id'),
            'language_id' => \app\modules\team\Module::t('createTeam', 'language_id'),
            'gameName' => \app\modules\team\Module::t('createTeam', 'gameName'),
            'mode_id' => \app\modules\team\Module::t('createTeam', 'mode_id'),
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
    public function save()
    {
        $transaction = Yii::$app->db->beginTransaction();
        $team = new Team();

        $team->organisation_id = trim($this->organisation_id);
        $team->game_id = $this->game_id;
        
        $team->language_id = $this->language_id;
        $team->nationality_id = $this->nationality_id;
        $team->mode_id = $this->mode_id;

        $team->name = trim($this->name);
        $team->shortCode = trim($this->shortCode);

        try 
        {
            $team->save();

            /** Find Team for rights Management */
            $teamID = Team::findTeamByName($team->name)->getId();

            $teamMember = new TeamMember();
        	$teamMember->team_id = $teamID;
            $teamMember->user_id = Yii::$app->user->identity->getId();
            $teamMember->role_id = 1;

            $teamMember->save();

           	$transaction->commit();

			//Alert::addSuccess('New Organisation Successfully Created');
          	return true;
            
        } catch (Exception $e) {
            print_r($e->getMessage());
            die();
            $transaction->rollBack();
            //Alert::addError("something wrong here...");
        }

        /*try 
        {
            $team->save();

           	$transaction->commit();

            //Alert::addSuccess('New Team Successfully Created');
          	return true;
            
        } catch (Exception $e) {
            print_r($e->getMessage());
            die();
            $transaction->rollBack();
            //Alert::addError("something wrong here...");
        }*/

        return false;
    }

}