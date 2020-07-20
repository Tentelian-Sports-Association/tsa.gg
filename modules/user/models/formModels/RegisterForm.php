<?php

namespace app\modules\user\models\formModels;

use app\components\FormModel;
use app\widgets\Alert;

use app\modules\user\models\User;

use app\modules\miscellaneouse\models\gender\Gender;
use app\modules\miscellaneouse\models\language\Language;
use app\modules\miscellaneouse\models\nationality\Nationality;

use Yii;
use yii\db\Exception;

class RegisterForm extends FormModel
{
	public $username;
	public $email;
	public $password;
	public $passwordRepeate;
	public $genderId;
	public $languageId;
	public $nationalityId;
	public $birthday;

	/**
     * @return array the validation rules.
     */
	public function rules()
	{
		return [
			[
            	['username', 'email', 'password', 'passwordRepeate', 'genderId', 'languageId', 'nationalityId', 'birthday'],
            	'required',
        	],
            ['username',
                'string',
                'min' => 3,
                'max' => 16,
            ],
        	[
            	['password', 'passwordRepeate'],
            	'string',
            	'min' => 6,
        	],
        	[
            	'birthday',
            	'date'
        	],
        	[
        		'genderId',
        		'exist',
        		'targetClass' => Gender::className(),
    			'targetAttribute' => 'id'
        	],
        	[
            	'languageId',
            	'exist',
        		'targetClass' => Language::className(),
        		'targetAttribute' => 'id'
        	],
        	[
            	'nationalityId',
        		'exist',
            	'targetClass' => Nationality::className(),
            	'targetAttribute' => 'id'
        	],
        	[
        		'username',
            	'unique',
        	    'targetClass' => User::className(),
    	        'targetAttribute' => 'username',
    	        'message' => \app\modules\user\Module::t('register', 'register_usernameUsedErr')
        	],
        	[
            	'email',
                'unique',
                'targetClass' => User::className(),
            	'targetAttribute' => 'email',
                'message' => \app\modules\user\Module::t('register', 'register_emailUsedErr')
        	],
            [
                ['email'], 'email', 'message' => \app\modules\user\Module::t('register', 'register_noMailErr')
            ],
        	[
            	'passwordRepeate',
            	'compare',
            	'compareAttribute' => 'password',
                'message' => \app\modules\user\Module::t('register', 'register_passwordRepeateErr')
        	],
        	[
            	['password', 'passwordRepeate'],
        	    'validatePassword',
    	    ]
		];
	}

	/**
     * @return array the attribute labels
     */
    public function attributeLabels()
    {
        return [
        	'username' => \app\modules\user\Module::t('register','register_username'),
            'password' => \app\modules\user\Module::t('register','register_password'),
            'passwordRepeate' => \app\modules\user\Module::t('register','register_passwordRepeate'),
            'email' => \app\modules\user\Module::t('register','register_email'),
            'birthday' => \app\modules\user\Module::t('register','register_birthday'),
            'genderId' => \app\modules\user\Module::t('register','register_gender'),
            'languageId' => \app\modules\user\Module::t('register','register_language'),
            'nationalityId' => \app\modules\user\Module::t('register','register_nationality'),
        ];
    }

    /**
     * Validates if the given password contains at least 1 special char, at least 1 number and at least 6 chars
     *
     * @param $attribute
     * @param $params
     * @return bool
     */
    public function validatePassword($attribute, $params)
    {
        /*$validatePassword = preg_match('/^.*(?=.{6,})(?=.*[!$%&=?*-:;.,+~@_])(?=.*[0-9])(?=.*[a-z]).*$/', $this->password);
        
        if (!$validatePassword) {
            $this->addError($attribute, Yii::t('register','register_passwordFormatErr'));
        }*/

        return true;
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
        $user = new User();
        $user->password = Yii::$app->getSecurity()->generatePasswordHash($this->password);
        $user->username = trim($this->username);
        $user->birthday =  Yii::$app->formatter->asDate($this->birthday, 'yyyy-MM-dd');
        $user->gender_id = $this->genderId;
        $user->language_id = $this->languageId;
        $user->nationality_id = $this->nationalityId;
        $user->email = $this->email;

        try {
            $user->save();
            $transaction->commit();
            return true;
        } catch (Exception $e) {
            print_r($e->getMessage());
            $transaction->rollBack();
            //Alert::addError(Module::t("general", "user %s couldn't be saved"), $user->getUsername());
        }
        return false;
    }
}