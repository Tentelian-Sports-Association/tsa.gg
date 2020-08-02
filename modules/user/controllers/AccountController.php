<?php

namespace app\modules\user\controllers;

use app\components\BaseController;

use app\modules\user\models\formModels\LoginForm;
use app\modules\user\models\formModels\RegisterForm;
use app\modules\user\models\formModels\ChangePasswordForm;
use app\modules\user\models\formModels\ForgotPasswordForm;
use app\modules\user\models\formModels\AddGameIdForm;
use app\modules\user\models\formModels\DetailsForm;

use app\modules\miscellaneouse\models\gender\Gender;
use app\modules\miscellaneouse\models\language\Language;
use app\modules\miscellaneouse\models\nationality\Nationality;
use app\modules\miscellaneouse\models\invitations\Invitation;

use app\modules\miscellaneouse\models\games\GamePlatforms;
use app\modules\miscellaneouse\models\games\Games;

use app\modules\user\models\User;
use app\modules\user\models\UserGames;
use app\modules\user\models\UserDetails;
use app\modules\user\models\UserSocials;

use app\modules\organisation\models\OrganisationMember;

use DateTime;
use Yii;

class AccountController extends BaseController
{
	/**
     * @inheritdoc
     */
    public function behavior()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['0'],
                    ]
                ]
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            
            return $this->goHome();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Logout action. (next)
     *
     * @return Response
     */
    public function actionRegister()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $languageID = Language::findByLocale(Yii::$app->language)->getId();

        $model =new RegisterForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->save()) {
            $this->goHome();
        }

        $genderList = [];
        foreach (Gender::find()->all() as $gender) {
            $genderList[$gender->getId()] = $gender->getName($languageID);
        }

        $languageList = [];
        foreach (Language::find()->all() as $language) {
            $languageList[$language->getId()] = $language->getName($languageID);
        }

        $nationalityList = [];
        foreach (Nationality::find()->all() as $nationality) {
            $nationalityList[$nationality->getId()] = $nationality->getName($languageID);
        }

        return $this->render('register',
        [
            'model' => $model,
            'genderList' => $genderList,
            'languageList' => $languageList,
            'nationalityList' => $nationalityList,
        ]);
    }

    public function actionChangePassword()
    {
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new ChangePasswordForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->saveNewPassword()) {
            return $this->goBack();
        }

        return $this->render('changePassword', [
            'model' => $model,
        ]);
    }

    public function actionForgotPassword()
    {
        $model = new ForgotPasswordForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            /** @var User $user */
            $user = User::find()->where(['and', ['username' => $model->username], ['email' => $model->email]])->one();
            AccountController::resetPassword($model->username, $model->email);
            return $this->redirect(["login"]);
        }

        return $this->render('forgotPassword', [
            'model' => $model,
        ]);
    }

    /* ausgliedern in miscellaneouse */
    public static function resetPassword($username, $email)
    {
        /** @var User $user */
        $user = User::find()->where(['and', ['username' => $username], ['email' => $email]])->one();
        if (!$user) {
            throw new BadRequestHttpException("Invalid user id $id");
        }

        $password = Yii::$app->HelperClass->generatePassword();

        $user->setPassword($password);
        $user->is_password_change_required = 1;

        if ($user->save()) {
            Yii::$app->mailer->compose('changePassword', ['user' => $user, 'password' => $password])
                ->setFrom('noreply@tsa.gg')
                ->setTo($user->getEmail())
                ->setSubject(\app\modules\user\Module::t('forgotPassword', 'mailer_passwordChangedSuccessfully'))
                ->send();
        }
    }

    public function actionEditDetails($userId)
    {
        /** @var Language $languageID */
        $languageID = Language::findByLocale(Yii::$app->language)->getId();

        if (Yii::$app->user->isGuest || Yii::$app->user->identity == null || Yii::$app->user->identity->getId() != $userId) {
            return $this->goHome();
        }

        $model =new DetailsForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->save()) {
            return $this->redirect(['user/details?userId='. Yii::$app->user->identity->getId()]);
        }

        /** @var User $user */
        $user = User::findIdentity($userId);
        $userDetails = UserDetails::findByID($userId);
        $userSocials = UserSocials::findByID($userId);

        /* User */
        $model->username = $user->getUsername();
        $model->email = $user->getEmail();
        $model->genderId = $user->getGenderId();
        $model->languageId = $user->getLanguageId();
        $model->nationalityId = $user->getNationalityId();
        $model->birthday = $user->getBirthday();

        $genderList = [];
        foreach (Gender::find()->all() as $gender) { $genderList[$gender->getId()] = $gender->getName($languageID); }

        $languageList = [];
        foreach (Language::find()->all() as $language) { $languageList[$language->getId()] = $language->getName($languageID); }

        $nationalityList = [];
        foreach (Nationality::find()->all() as $nationality) { $nationalityList[$nationality->getId()] = $nationality->getName($languageID); }

        /* UserDetails */
        $model->pre_name = ($userDetails == null) ? '' : $userDetails->getPreName();
        $model->last_name = ($userDetails == null) ? '' : $userDetails->getLastName();
        $model->zip_code = ($userDetails == null) ? '' : $userDetails->getZipCode();
        $model->city = ($userDetails == null) ? '' : $userDetails->getCity();
        $model->street = ($userDetails == null) ? '' : $userDetails->getStreet();
        $model->phone = ($userDetails == null) ? '' : $userDetails->getPhone();

        /* Social media */
        $model->twitter_name = ($userSocials == null) ? '' : $userSocials->getTwitterName();
        $model->twitter_channel = ($userSocials == null) ? '' : $userSocials->getTwitterChannel();
        $model->discord_name = ($userSocials == null) ? '' : $userSocials->getDiscordname();
        $model->discord_server = ($userSocials == null) ? '' : $userSocials->getDiscordServer();
        $model->teamspeak_server = ($userSocials == null) ? '' : $userSocials->getTeamSpeakServer();

        return $this->render('editDetails', [
            'model' => $model,
            'genderList' => $genderList,
            'languageList' => $languageList,
            'nationalityList' => $nationalityList,
            'currentUserID' => Yii::$app->user->identity->getId(),
        ]);
	}

    public function actionAddGameAccount($userId = 0)
    {
        /** @var User $user */
        $user = User::findIdentity($userId);
        $languageID = Language::findByLocale(Yii::$app->language)->getId();

        /** Check if User ID my own User ID */
        $isMySelfe = (Yii::$app->user->identity != null && Yii::$app->user->identity->getId() == $userId) ? true : false;

        if(!$user || !$isMySelfe)
        {
            //Alert::addError('User with ID: ' . $userId . ' doesnt exists'); 
            return $this->goHome();
		}

        $model = new AddGameIdForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->save()) {
            //return $this->redirect(['user/index']);
            return $this->redirect(['user/details?userId='. Yii::$app->user->identity->getId()]);
        }

        $gamesList = [];
        foreach (Games::find()->all() as $games) {
            $gamesList[$games->getId()] = $games->getName($languageID);
        }

        $platformList = [];
        foreach (GamePlatforms::find()->all() as $platforms) {
            $platformList[$platforms->getId()] = $platforms->getName($languageID);
        }

        return $this->render('addGame', [
            'gamesList' => $gamesList,
                'platformList' => $platformList,
                'model' => $model,
                'currentUserID' => Yii::$app->user->identity->getId(),
        ]);
	}

    public function actionToggleGameAccount($gameId, $platformId, $userId)
    {
        if (Yii::$app->user->isGuest || Yii::$app->user->identity == null && Yii::$app->user->identity->getId() != $userId) {
            //Alert::addError('You are not Allowed to change this settings'); 
            return $this->redirect(['user/details?userId='. Yii::$app->user->identity->getId()]);
        }

        $languageID = (Yii::$app->user->identity != null) ? Yii::$app->user->identity->getLanguage()->getId() : Language::findByLocale(Yii::$app->language)->getId();
        $model = UserGames::find()->where(['game_id' => $gameId, 'game_platform_id' => $platformId, 'user_id' => Yii::$app->user->identity->getId()])->one();

        if($model != null) {
            $model->visible = !$model->visible;
            $model->save();
            $gameName = Games::find()->where(['id' => $gameId])->one()->getName($languageID);
            //Alert::addInfo('Changed Visibility for ' . $gameName . ' from ' . (($model->visible)? 'invisible' : 'visible') . ' to ' . (($model->visible)? 'visible' : 'invisible')); 
		}
        else {
	        //Alert::addError('This Service is currently not availabel'); 
        }

        
        return $this->redirect(['user/details?userId='. Yii::$app->user->identity->getId()]);
	}

    public function actionRemoveGameAccount($gameId, $platformId, $userId)
    {
        /** If not Owner, Admin or is Guest */
        if (Yii::$app->user->isGuest || Yii::$app->user->identity == null && Yii::$app->user->identity->getId() != $userId) {
            //Alert::addError('You are not Allowed to change this settings'); 
            return $this->redirect(['user/details?userId='. Yii::$app->user->identity->getId()]);
        }


        $languageID = (Yii::$app->user->identity != null) ? Yii::$app->user->identity->getLanguage()->getId() : Language::findByLocale(Yii::$app->language)->getId();
        $model = UserGames::find()->where(['game_id' => $gameId, 'game_platform_id' => $platformId, 'user_id' => Yii::$app->user->identity->getId()])->one();

        if($model != null) {
            $model->delete();
            $gameName = Games::find()->where(['id' => $gameId])->one()->getName($languageID);
            //Alert::addInfo($gameName . ': Player ID Deleted'); 
        }
        else {
            //Alert::addError('This Service is currently not availabel'); 
		}
        
        return $this->redirect(['user/details?userId='. Yii::$app->user->identity->getId()]);
	}

    public function actionToggleAccountBalance($userId)
    {
        // test
	}

    public function actionInvite($userId, $orgID, $inviterID)
    {
        if (Yii::$app->user->isGuest || Yii::$app->user->identity == null) {
            return $this->goHome();
        }

        $canInvite = (OrganisationMember::find()->where(['organisation_id' => $orgID])->andWhere(['user_id' => $inviterID])->andWhere(['<', 'role_id', '3'])->one()) ? true : false;

        if($canInvite)
        {
            $model = new Invitation();

            $model->organisation_id = $orgID;
            $model->invited_user_id = $userId;
            $model->inviter_user_id = $inviterID;

            /** Save Credentials **/
            try {
                $model->save();
        
                //Alert::addSuccess('Player Invited');
                return $this->goBack(Yii::$app->request->referrer);
            } catch (Exception $e) {
                print_r($e);
        
                //Alert::addError('Cannot Invite Player');
                return $this->goBack(Yii::$app->request->referrer);
            }
		}
        return $this->goBack(Yii::$app->request->referrer);
	}

    public function actionAcceptInvitation($userId, $orgID)
    {
        /** If not Owner, Admin or is Guest */
        if (Yii::$app->user->isGuest || Yii::$app->user->identity == null && Yii::$app->user->identity->getId() != $userId) {
            //Alert::addError('You are not Allowed to change this settings'); 
            return $this->redirect(['user/details?userId='. Yii::$app->user->identity->getId()]);
        }

        $invitationModel = Invitation::find()->where(['invited_user_id' => $userId, 'organisation_id' => $orgID])->one();

        if($invitationModel)
        {
            $organisationMemberModel = new organisationMember();
            $organisationMemberModel->organisation_id = $orgID;
            $organisationMemberModel->user_id = $userId;
            $organisationMemberModel->role_id = 5;

            $invitationModel->accepted = true;

            try {
                $organisationMemberModel->save();
                $invitationModel->delete();

                //Alert::addInfo('Invitation to ' . $invitationModel->getOrganisationName() . ' succesfully accepted'); 
            } catch (Exception $e) {
                print_r($e->getMessage());
            }
		}
        else {
	        //Alert::addError('This Service is currently not availabel');  
        }

        return $this->redirect("user/details?userId=" . $userId);
	}

    public function actionDeclineInvitation($userId, $orgID)
    {
        /** If not Owner, Admin or is Guest */
        if (Yii::$app->user->isGuest || Yii::$app->user->identity == null && Yii::$app->user->identity->getId() != $userId) {
            //Alert::addError('You are not Allowed to change this settings'); 
            return $this->redirect(['user/details?userId='. Yii::$app->user->identity->getId()]);
        }

        $invitationModel = Invitation::find()->where(['invited_user_id' => $userId, 'organisation_id' => $orgID])->one();

        if($invitationModel)
        {
            $invitationModel->accepted = false;

            try {
                $invitationModel->delete();

                //Alert::addInfo('Invitation to ' . $invitationModel->getOrganisationName() . ' succesfully accepted'); 
            } catch (Exception $e) {
                print_r($e->getMessage());
            }
		}
        else {
	        //Alert::addError('This Service is currently not availabel');  
        }

        return $this->redirect("user/details?userId=" . $userId);
	}
}