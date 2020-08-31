<?php

namespace app\modules\tournament\modules\rocketLeague\models\formModel;

use app\components\FormModel;
use app\widgets\Alert;


class UpdateBracketEncounterForm extends FormModel
{
    public $Id;
    public $tournament_id;
    public $game_round;
    public $player_id;
 	public $points;
 	public $goals;
 	public $assists;
 	public $saves;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [
                ['id', 'tournament_id', 'game_round', 'player_id'],
                'required',
            ],
        ];
    }

    /**
     * @inheritDoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',//\app\modules\team\Module::t('createTeam', 'name'),
            'tournament_id' => 'tournament_id',//\app\modules\team\Module::t('createTeam', 'shortcode'),
            'game_round' => 'game_round',//\app\modules\team\Module::t('createTeam', 'headquater_id'),
            'player_id' => 'player_id',//\app\modules\team\Module::t('createTeam', 'language_id'),
            'points' => 'points',//\app\modules\team\Module::t('createTeam', 'gameName'),
            'goals' => 'goals',//\app\modules\team\Module::t('createTeam', 'mode_id'),
            'assists' => 'assists',//\app\modules\team\Module::t('createTeam', 'mode_id'),
            'saves' => 'saves',//\app\modules\team\Module::t('createTeam', 'mode_id'),
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
    }
}