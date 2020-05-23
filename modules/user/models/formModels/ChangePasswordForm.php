<?php

namespace app\modules\user\models\formModels;

use app\modules\user\models\User;
use Yii;
use yii\base\Model;
use yii\helpers\Html;

class ChangePasswordForm extends Model
{
	public $oldPassword;
    public $newPassword;
    public $newPasswordRepeat;

    private $user = false;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // oldPassword, newPassword and newPasswordRepeat are required
            [
                ['oldPassword', 'newPassword', 'newPasswordRepeat'],
                'required'
            ],
            // new password shouldn't be smaller then 6 signs
            [
                ['newPassword', 'newPasswordRepeat'],
                'string',
                'min' => 6,
            ],
            // oldPassword is validated by validatePassword()
            [
                'oldPassword',
                'validateOldPassword'
            ],
            // check if the new password is the same as the repeated one
            [
                'newPasswordRepeat',
                'compare',
                'compareAttribute' => 'newPassword',
                'message' => \app\modules\user\Module::t('changePassword', 'changePassword_newPasswordRepeateErr')
            ],
            //check if the new password is not the same as the old one
            [
                'newPassword',
                'compare',
                'compareAttribute' => 'oldPassword',
                'operator' => '!==',
                'message' => \app\modules\user\Module::t('changePassword', 'changePassword_newPasswordSameOldErr')
            ],
            [
                ['newPassword', 'newPasswordRepeat'],
                'validatePassword',
            ]
        ];
    }

    public function attributeLabels()
    {
        return [
            'oldPassword' => \app\modules\user\Module::t('changePassword', 'changePassword_oldPassword'),
            'newPassword' => \app\modules\user\Module::t('changePassword', 'changePassword_newPassword'),
            'newPasswordRepeat' => \app\modules\user\Module::t('changePassword', 'changePassword_repeateNewPassword'),
        ];
    }

    /**
     * Validates if the given password contains at least 1 special char, at least 1 number and at least 6 chars
     *
     * @param $attribute
     * @param $params
     */
    public function validatePassword($attribute, $params)
    {
        $validatePassword = preg_match('/^.*(?=.{6,})(?=.*[!$%&=?*-:;.,+~@_])(?=.*[0-9])(?=.*[a-z]).*$/', $this->newPassword);
        if (!$validatePassword) {
            $this->addError($attribute, Yii::t('changePassword','changePassword_passwordFormatErr'));
        }
    }

    /**
     * Validates the old password.
     * This method serves as the inline validation for the old password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     * @throws \Throwable
     */
    public function validateOldPassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->oldPassword)) {
                $this->addError($attribute, Yii::t('changePassword', 'changePassword_incorrectOldPasswordErr'));
            }
        }
    }

    /**
     * Finds user
     *
     * @return User|null
     * @throws \Throwable
     */
    public function getUser()
    {
        if ($this->user === false) {
            $this->user = Yii::$app->user->getIdentity();
        }

        return $this->user;
    }

    /**
     * Saves the new password and sets the flag back
     */
    public function saveNewPassword()
    {
        $user = $this->getUser();
        $user->setPassword($this->newPassword);
        $user->is_password_change_required = 0;
        $user->save();

        return true;
    }
}