<?php

namespace app\modules\user\models\formModels;

use app\components\FormModel;
use app\widgets\Alert;

use app\modules\user\models\User;
use app\modules\user\models\UserDetails;
use app\modules\user\models\UserSocials;

use app\modules\miscellaneouse\models\gender\Gender;
use app\modules\miscellaneouse\models\language\Language;
use app\modules\miscellaneouse\models\nationality\Nationality;

use app\modules\organisation\models\OrganisationSocial;

use Yii;
use yii\db\Exception;

class DetailsForm extends FormModel
{
	/* User */
	public $username;
	public $email;
	public $genderId;
	public $languageId;
	public $nationalityId;
	public $birthday;

	/* UserDetails */
	public $pre_name;
 	public $last_name;
 	public $zip_code;
 	public $city;
 	public $street;
 	public $phone;

	/* Social media */
	public $twitter_name;
 	public $twitter_channel;
 	public $discord_name;
 	public $discord_server;
 	public $teamspeak_server;

 	/**
     * @return array the validation rules.
     */
	public function rules()
	{
		return [
            /*[
                ['username', 'email', 'birthday', 'genderId', 'languageId', 'nationalityId'],
                'required',/.*#[0-9]{4}$/
            ],
            [ 'birthday', 'date' ],*/
            [ 'genderId', 'exist', 'targetClass' => Gender::className(), 'targetAttribute' => 'id' ],
            [ 'languageId', 'exist', 'targetClass' => Language::className(), 'targetAttribute' => 'id' ],
            [ 'nationalityId', 'exist', 'targetClass' => Nationality::className(), 'targetAttribute' => 'id' ],
            [ 
                ['pre_name', 'last_name', 'zip_code', 'city', 'street', 'phone'],
                'string'
            ],
            [ 
                ['twitter_name', 'twitter_channel', 'discord_name', 'discord_server', 'teamspeak_server'],
                'string'
            ],
            ['phone', 'match', 'pattern' => '/^[+0-9\s]+$/', 'message' => 'Only numbers and + are allowed'],
            ['twitter_name', 'match', 'pattern' => '/^[a-zA-Z_0-9\s]+$/', 'message' => \app\modules\user\Module::t('editDetails','editDetails_errorTwitterName')
            ],
            /*['twitter_name', 'unique', 'targetClass' => UserSocials::className(), 'targetAttribute' => 'twitter_name', 'message' => \app\modules\user\Module::t('userDetails', 'errorTwitterNameUsed')
            ],
            ['twitter_name', 'unique', 'targetClass' => OrganisationSocial::className(), 'targetAttribute' => 'twitter_name', 'message' => \app\modules\user\Module::t('userDetails', 'errorTwitterNameUsed')
            ],*/
            ['twitter_channel', 'match', 'pattern' => '/^[a-zA-Z_0-9\s,]+$/', 'message' => \app\modules\user\Module::t('editDetails', 'editDetails_errorTwitterChannel')
            ],
            ['discord_name', 'match','pattern' => '/.*#[0-9]{4}$/', 'message' => \app\modules\user\Module::t('editDetails', 'editDetails_errorDiscordName')
            ],
            ['discord_server', 'match','pattern' => '/^[a-zA-Z0-9\s]+$/', 'message' => \app\modules\user\Module::t('editDetails', 'editDetails_errorDiscordServer')
            ],
            /*[
                'twitter_name',
                'customUniqueTwitterValidator',
            ],*/
            /*[
                'discord_name',
                'customUniqueDiscordValidator',
            ],*/
            [
                ['email'], 'email', 'message' => \app\modules\user\Module::t('editDetails', 'editDetails_noMail')
            ],
        ];
	}

	/**
     * @return array the attribute labels
     */
    public function attributeLabels()
    {
        return [
            /* User */
            //echo \Yii::t('app', 'Price: {0}', $price);
        	//'username' => \app\modules\user\Module::t('userDetails', 'username: {0}', '500'),
            'username' => \app\modules\user\Module::t('editDetails','editDetails_username'),
            'email' => \app\modules\user\Module::t('editDetails','editDetails_email'),
            'birthday' => \app\modules\user\Module::t('editDetails','editDetails_birthday'),
            'genderId' => \app\modules\user\Module::t('editDetails','editDetails_genderId'),
            'languageId' => \app\modules\user\Module::t('editDetails','editDetails_languageId'),
            'nationalityId' => \app\modules\user\Module::t('editDetails','editDetails_nationalityId'),

            /* UserDetails */
            'pre_name' => \app\modules\user\Module::t('editDetails','editDetails_pre_name'),
            'last_name' => \app\modules\user\Module::t('editDetails','editDetails_last_name'),
            'zip_code' => \app\modules\user\Module::t('editDetails','editDetails_zip_code'),
            'city' => \app\modules\user\Module::t('editDetails','editDetails_city'),
            'street' => \app\modules\user\Module::t('editDetails','editDetails_street'),
            'phone' => \app\modules\user\Module::t('editDetails','editDetails_phone'),

            /* Social media */
            'twitter_name' => \app\modules\user\Module::t('editDetails','editDetails_twitter_name'),
            'twitter_channel' => \app\modules\user\Module::t('editDetails','editDetails_twitter_channel'),
            'discord_name' => \app\modules\user\Module::t('editDetails','editDetails_discord_name'),
            'discord_server' => \app\modules\user\Module::t('editDetails','editDetails_discord_server'),
            'teamspeak_server' => \app\modules\user\Module::t('editDetails','editDetails_teamspeak_server'),

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
        $user = User::findIdentity(Yii::$app->user->identity->getId());

        /** Changeable Base Informations */
        $user->gender_id = $this->genderId;
        $user->language_id = $this->languageId;
        //$user->nationality_id = $this->nationalityId;

        /** Personal Informations */
        $userDetails = UserDetails::findByID($user->id);
        if($userDetails == null) { $userDetails = new UserDetails(); }

        $userDetails->user_id = $user->id;
        $userDetails->pre_name = (empty($userDetails->pre_name)? $this->pre_name : $userDetails->pre_name);
        $userDetails->last_name = (empty($userDetails->last_name)? $this->last_name : $userDetails->last_name);
        $userDetails->zip_code = (empty($userDetails->zip_code)? $this->zip_code : $userDetails->zip_code);
        $userDetails->city = (empty($userDetails->city)? $this->city : $userDetails->city);
        $userDetails->street = (empty($userDetails->street)? $this->street : $userDetails->street);
        $userDetails->phone = (empty($userDetails->phone)? $this->phone : $userDetails->phone);


        /** Social Media */
        $userSocials = UserSocials::findByID($user->id);
        if($userSocials == null) { $userSocials = new UserSocials(); }

        $userSocials->user_id = $user->id;
        $userSocials->twitter_name = $this->twitter_name;
        $userSocials->twitter_channel = $this->twitter_channel;
        $userSocials->discord_name = $this->discord_name;
        $userSocials->discord_server = $this->discord_server;
        $userSocials->teamspeak_server = $this->teamspeak_server;
        //$userSocials->youtube_channel = $this->youtube_channel;
        //$userSocials->twitch_channel = $this->twitch_channel;

        /** Save User and Credentials **/

        try {
            $user->save();
            $userDetails->save();
            $userSocials->save();
            $transaction->commit();
            //Alert::addSuccess('user %s has been saved', $user->username);
            return true;
        } catch (Exception $e) {
            print_r($e);
            $transaction->rollBack();
            //Alert::addError('user %s couldnt be saved', $user->username);
            //Alert::addError("user %s couldn't be saved" . $e->getMessage());
        }

        return false;
    }
}