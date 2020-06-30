<?php

namespace app\modules\user\models\formModels;

use app\components\FormModel;
use app\modules\miscellaneouse\models\games\GamePlatforms;
use app\modules\miscellaneouse\models\games\Games;

use app\modules\user\models\UserGames;

use Yii;
use yii\base\Model;
use app\widgets\Alert;

class AddGameIdForm extends Model
{
	/* Platform and Game */
	public $game_id;
    public $platform_id;
    public $player_id;
    public $visible = true;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [
                ['game_id', 'platform_id', 'player_id'],
                'required',
            ],
            [
                'game_id',
                'exist',
                'targetClass' => Games::className(),
                'targetAttribute' => 'id'
            ],
            [
                'platform_id',
                'exist',
                'targetClass' => GamePlatforms::className(),
                'targetAttribute' => 'id'
            ],
            [
                'player_id',
                'unique',
                'targetClass' => UserGames::className(),
                'targetAttribute' => 'player_id'
            ],
            [
                'game_id',
                'checkUniqueness'
            ],
            [
                'player_id',
                'checkFormat'
            ]
        ];
    }

    /**
     * @return array the attribute labels
     */
    public function attributeLabels()
    {
        return [
            /* User */
            'game_id' => \app\modules\user\Module::t('addGameID','game_id'),
            'platform_id' => \app\modules\user\Module::t('addGameID','platform_id'),
            'player_id' => \app\modules\user\Module::t('addGameID','player_id'),
            'visible' => \app\modules\user\Module::t('addGameID','visible'),
        ];
    }

    public function checkUniqueness($attribute, $params)
    {
        $model = UserGames::find()->where(['game_id' => $this->game_id, 'game_platform_id' => $this->platform_id, 'user_id' => Yii::$app->user->identity->getId()])->one();
        if ($model) {
            $this->addError('game_id', \app\modules\user\Module::t('addGameID', 'idExists'));
            $this->addError('platform_id', \app\modules\user\Module::t('addGameID', 'platformExists'));
        }
    }

    public function checkFormat($attribute, $params)
    {
        $languageID = (Yii::$app->user->identity != null) ? Yii::$app->user->identity->getLanguage()->getId() : Language::findByLocale(Yii::$app->language)->getId();

        if (!preg_match(Games::findByID($this->game_id)->getVerificationPhrase(), $this->player_id))
        {
            $this->addError('player_id', \app\modules\user\Module::t('addGameID', Games::findByID($this->game_id)->getName($languageID)));
        }
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
        $userGames = new UserGames();

        $userGames->game_id = $this->game_id;
        $userGames->user_id = Yii::$app->user->identity->getId();
        $userGames->game_platform_id = $this->platform_id;
        $userGames->player_id = $this->player_id;
        $userGames->visible = $this->visible;

        try {
            $userGames->save();
            $transaction->commit();

            //Alert::addSuccess('Game Account has been Saved');
            return true;
        } catch (Exception $e) {
            print_r($e->getMessage());
            $transaction->rollBack();
        }
        return false;
    }
}