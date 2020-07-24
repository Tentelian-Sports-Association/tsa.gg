<?php

namespace app\modules\user\models;

use app\components\AbstractActiveRecord;

use Yii;

use yii\db\ActiveQuery;
use yii\web\IdentityInterface;

use app\modules\miscellaneouse\models\language\Language;
use app\modules\miscellaneouse\models\gender\Gender;
use app\modules\miscellaneouse\models\nationality\Nationality;

use app\modules\miscellaneouse\models\games\Games;
use app\modules\miscellaneouse\models\games\GamePlatforms;

use app\modules\organisation\models\Organisation;
use app\modules\organisation\models\OrganisationMember;

use app\modules\user\models\UserGames;


/**
 * Class User
 * @package app\modules\user\models
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $birthday
 * @property int $gender_id
 * @property int $language_id
 * @property int $nationality_id
 * @property string $access_token
 * @property string $auth_key
 * @property bool $is_password_change_required
 * @property string $dt_created
 * @property string $dt_updated
 */

class User extends AbstractActiveRecord implements IdentityInterface
{
	/**
     * @return string
     */
    public static function tableName()
    {
        return 'user';
    }
    
    /*********** Base Getter ***********/

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @return int
     */
    public function getGenderId()
    {
        return $this->gender_id;
    }

    /**
     * @return ActiveQuery
     */
    public function getGender()
    {
        return $this->hasOne(Gender::className(), ['id' => 'gender_id'])->one();
    }

    /**
     * @return int
     */
    public function getLanguageId()
    {
        return $this->language_id;
    }

    /**
     * @return ActiveQuery
     */
    public function getLanguage()
    {
        return $this->hasOne(Language::className(), ['id' => 'language_id'])->one();
    }

    /**
     * @return int
     */
    public function getNationalityId()
    {
        return $this->nationality_id;
    }

    /**
     * @return ActiveQuery
     */
    public function getNationality()
    {
        return $this->hasOne(Nationality::className(), ['id' => 'nationality_id'])->one();
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * @return string a key that is used to check the validity of a given identity ID.
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @return string
     */
    public function getDtCreated()
    {
        return $this->dt_created;
    }

    /**
     * @return string
     */
    public function getDtUpdated()
    {
        return $this->dt_updated;
    }

    /*********** Base Search and Find ***********/

    /**
     * @param string $username the username
     * @return static|null the user, if a user with that username exists
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);

        //foreach (self::$users as $user) {
        //    if (strcasecmp($user['username'], $username) === 0) {
        //        return new static($user);
        //    }
        //}

        //return null;
    }

    /**
     * @param string $email the email address
     * @return static|null the user, if a user with that email exists
     */
    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id]);

        //return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);

        //foreach (self::$users as $user) {
        //    if ($user['access_token'] === $token) {
        //        return new static($user);
        //    }
        //}

        //return null;
    }

    /**
     * @param string $token password reset token
     * @return static|null the user, if a user with that password reset token exists
     */
    public static function findByPasswordResetToken($token)
    {
        // validate the password reset token
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'is_active' => true,
        ]);
    }

    /*********** Base Validation ***********/

    /**
     * @param string $password password to validate
     * @return boolean true, if the provided password is valid for the current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password);
    }

    /**
     * This is required if [[User::enableAutoLogin]] is enabled.
     *
     * @param string $authKey the given auth key
     * @return bool whether the given auth key is valid.
     * @see getAuthKey()
     */
    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

    /**
     * @param string $token password reset token
     * @return boolean true, if the password reset token has not expired yet
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int)substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /*********** Set Pasword or Check if change required ***********/

    /**
     * @param string $password the non-hashed password
     * @throws \yii\base\Exception
     */
    public function setPassword($password)
    {
        $this->password = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * @return bool
     */
    public function isPasswordChangeRequired()
    {
        return $this->is_password_change_required;
    }

    /***************** Community Overview and Stats *****************/

    /**
     *
     */
    public static function getUserOverview($languageID)
    {
        $nationalityCounter = array();

        foreach(Nationality::find()->all() as $nr => $nationality)
        {
            if(($count = static::find()->where(['nationality_id' => $nationality['id']])->count()) > 0)
            {
                $nationalityCounter[$nr]['id'] = $nationality['id']; 
                $nationalityCounter[$nr]['name'] = $nationality['name']; 
                $nationalityCounter[$nr]['count'] = $count;        
			} 
		}

        return $nationalityCounter;
	}

    /* Get User for Community Overview */
    public static function GetDetails($paginatedUser, $languageID)
    {
       $paginatedUserWithDetails = array();

       foreach($paginatedUser as $nr => $user)
       {
           $paginatedUserWithDetails[$nr]['ID'] = $user->getId();
           $paginatedUserWithDetails[$nr]['Name'] = $user->getUsername();
           
           $paginatedUserWithDetails[$nr]['Nationality']['icon'] = $user->getNationality()->getIconLocale();
           $paginatedUserWithDetails[$nr]['Nationality']['name'] = $user->getNationality()->getName($languageID);

           $paginatedUserWithDetails[$nr]['Language']['icon'] = $user->getLanguage()->getIconLocale();
           $paginatedUserWithDetails[$nr]['Language']['name'] = $user->getLanguage()->getName($languageID);
	    }

        //print_r($paginatedUserWithDetails);
        //die();

        return $paginatedUserWithDetails;
	}

    /** Get User Games Platforms and Id's */

    /**
     * @return ActiveQuery
     */
    public function getGames($languageID)
    {
        $platforms = GamePlatforms::Find()->all();
        $userGamesSorted = [];

        foreach($platforms as $nr => $platform)
        {
            $games =  UserGames::find()->where(['user_id' => $this->id])->andWhere(['game_platform_id' => $platform->getId()])->all();
            //$games = $this->hasMany(UserGames::className(), ['user_id' => 'id', 'game_platform_id' => $platform->getId()]);

            $userGamesSorted[$nr]['id'] = $platform->getId();
            $userGamesSorted[$nr]['platformName'] = $platform->getTranslatedPlatformName($languageID);
            $userGamesSorted[$nr]['icon'] = $platform->getIcon();
            $userGamesSorted[$nr]['game'] = [];

            foreach($games as $gnr => $game)
            {
                $gameDetails = Games::find()->where(['id' =>$game['game_id']])->one();

                $userGamesSorted[$nr]['game'][$gnr]['id'] = $game['game_id'];
                $userGamesSorted[$nr]['game'][$gnr]['gameName'] = $gameDetails->getName($languageID);
                $userGamesSorted[$nr]['game'][$gnr]['icon'] = $gameDetails->getIcon();
                $userGamesSorted[$nr]['game'][$gnr]['accountId'] = $game['player_id'];
                $userGamesSorted[$nr]['game'][$gnr]['visible'] = $game['visible'];
                $userGamesSorted[$nr]['game'][$gnr]['editable'] = $game['editable'];
			}
		}

        //print_r($userGamesSorted);
        //die();

        return $userGamesSorted;

    }

    /** Organisations */
    /**
     * @return ActiveQuery
     */
     public function GetOwnOrganisations($roleId)
     {
        return OrganisationMember::FindOrganisationMember($this->id , $roleId);
	 }

}