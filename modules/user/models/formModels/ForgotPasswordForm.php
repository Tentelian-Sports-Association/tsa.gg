<?php

namespace app\modules\user\models\formModels;

use app\modules\user\models\User;
use Yii;
use yii\base\Model;

class ForgotPasswordForm extends Model
{
    public $username;
    public $email;

    public function rules()
    {
        return [
            // username and email are required
            [
                ['username', 'email'],
                'required'
            ],
            // username exist
            [
                'username',
                'exist',
                'targetClass' => User::className(),
                'targetAttribute' => 'username',
                'message' => \app\modules\user\Module::t('forgotPassword', 'forgotPassword_invalidUserNameErr')
            ],
            // email is valid to username
            [
                'email',
                'emailIsValidToUser'
            ]
        ];
    }

    /**
     * @inheritDoc
     */
    public function attributeLabels()
    {
        return [
            'username' => \app\modules\user\Module::t('forgotPassword', 'forgotPassword_username'),
            'email' => \app\modules\user\Module::t('forgotPassword', 'forgotPassword_email')
        ];
    }

    /**
     * Validate that the user has the email
     * @param $attribute
     * @param $params
     */
    public function emailIsValidToUser($attribute, $params)
    {
        $user = User::find()->where(['and', ['username' => $this->username], ['email' => $this->email]])->one();
        if (!$user) {
            $this->addError($attribute, \app\modules\user\Module::t('forgotPassword', 'forgotPassword_invalidMailErr'));
        }
    }
}