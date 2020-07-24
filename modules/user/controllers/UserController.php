<?php

namespace app\modules\user\controllers;

use app\components\BaseController;

use app\modules\miscellaneouse\models\formModels\ProfilePicForm;

use app\modules\user\models\User;
use app\modules\user\models\UserDetails;
use app\modules\user\models\UserSocials;
use app\modules\user\models\UserBalance;

use app\modules\miscellaneouse\models\language\Language;

use DateTime;
use Yii;
use yii\web\UploadedFile;

class UserController extends BaseController
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
    public function actionDetails($userId = 0)
    {
        /** @var User $user */
        $user = User::findIdentity($userId);
        $languageID = Language::findByLocale(Yii::$app->language)->getId();

        if(!$user)
        {
            //Alert::addError('User with ID: ' . $userId . ' doesnt exists'); 
            return $this->goHome();
		}

        /** Check if User ID my own User ID */
        $isMySelfe = (Yii::$app->user->identity != null && Yii::$app->user->identity->getId() == $userId) ? true : false;

        /** @var User Details $userDetails */
        $userDetails = UserDetails::findByID($user->getID());

        /** @var User Socials $userSocials */
        $userSocials = UserSocials::findByID($user->getID());

        /** @var ProfilePicForm $profilePicModel */
        $profilePicModel = new ProfilePicForm(ProfilePicForm::SCENARIO_USER);
        $profilePicModel->id = $userId;

        if ($profilePicModel->load(Yii::$app->request->post())) {
            $profilePicModel->file = UploadedFile::getInstance($profilePicModel, 'file');
            if ($profilePicModel->validate()) {
                $profilePicModel->save();
            }
        }

        $userBalance = UserBalance::findById($user->getID());

        /** @var $userInfo array */
        $userInfo = [
            'isMySelfe' => $isMySelfe,
            'user_id' => $user->getID(),
            'user_name' => $user->getUsername(),
            'memberSince' => DateTime::createFromFormat('Y-m-d H:i:s', $user->dt_created)->format('d.m.y'),
            'age' => (new DateTime($user->birthday))->diff(new DateTime())->y,
            'gender' => $user->getGender()->getName($languageID),
            'language' => $user->getLanguage()->getName($languageID),
            'language_img' => $user->getLanguage()->getIconLocale(),
            'nationality' => $user->getNationality()->getName($languageID),
            'nationality_img' => $user->getNationality()->getIconLocale(),
            'pre_name' => ($userDetails != null) ? $userDetails->getPreName() : '',
            'last_name' => ($userDetails != null) ? $userDetails->getLastName() : '',
            'twitter_name' => ($userSocials != null) ? $userSocials->getTwitterName() : '',
            'twitter_channel' => ($userSocials != null) ? $userSocials->getTwitterChannel() : '',
            'discord_name' => ($userSocials != null) ? $userSocials->getDiscordname() : '',
            'discord_server' => ($userSocials != null) ? $userSocials->getDiscordServer() : '',
            'teamspeak_server' => ($userSocials != null) ? $userSocials->getTeamSpeakServer() : '',
            'twitch_name' => null,
            'youtube_channel' => null,
            'trovo_name' => null,
        ];

        /** @var Games $games */
        $userGames = $user->getGames($languageID);

        /** Organisations */
        $ownedOrganisation = $user->GetOwnOrganisations(1);
        $memberOrganisations = $user->GetOwnOrganisations(5);

        return $this->render('details', [
            'userInfo' => $userInfo,
            'profilePicModel' => $profilePicModel,
            'userGames' => $userGames,
            'userBalance' => $userBalance,
            'ownedOrganisation' => $ownedOrganisation, 
            'memberOrganisations' => $memberOrganisations
        ]);
    }
}