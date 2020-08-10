<?php

namespace app\modules\organisation\controllers;

use app\components\BaseController;

use app\modules\miscellaneouse\models\formModels\ProfilePicForm;

use app\modules\miscellaneouse\models\language\Language;
use app\modules\miscellaneouse\models\nationality\Nationality;

use app\modules\organisation\models\Organisation;
use app\modules\organisation\models\OrganisationMember;
use app\modules\organisation\models\OrganisationSocial;
use app\modules\organisation\models\OrganisationPayment;

use app\modules\user\models\UserDetails;

use app\modules\organisation\models\formModels\CreateOrganisationForm;
use app\modules\organisation\models\formModels\DetailsForm;

use DateTime;
use app\widgets\Alert;

use Yii;
use yii\web\UploadedFile;

class OrganisationController extends BaseController
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
    public function actionCreateOrgnisation()
    {
        /** @var Language $languageID */
        $languageID = Language::findByLocale(Yii::$app->language)->getId();

        if (Yii::$app->user->isGuest || Yii::$app->user->identity == null) {
            return $this->goHome();
        }

        $model = new CreateOrganisationForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->save()) {
            return $this->redirect(['/user/details?userId=' . Yii::$app->user->identity->getId()]);
        }

        $languageList = [];
        foreach (Language::find()->all() as $language) { $languageList[$language->getId()] = $language->getName($languageID); }

        $nationalityList = [];
        foreach (Nationality::find()->all() as $nationality) { $nationalityList[$nationality->getId()] = $nationality->getName($languageID); }

        return $this->render('createOrganisation', [
            'model' => $model,
            'languageList' => $languageList,
            'nationalityList' => $nationalityList,
            'currentUserID' => Yii::$app->user->identity->getId(),
        ]);
    }

    public function actionDetails($organisationId = 0)
    {
        if($organisationId == 0)
        {
            //Alert::addError('User with ID: ' . $userId . ' doesnt exists'); 
            return $this->goHome();
		}
        
        /** @var User $user */
        $organisation = Organisation::findOrganisationById($organisationId);
        $languageID = Language::findByLocale(Yii::$app->language)->getId();
        $detailedOrganisation = Organisation::GetOrgansiationDetails($organisationId, $languageID);

        if(!$organisation)
        {
            //Alert::addError('User with ID: ' . $userId . ' doesnt exists'); 
            return $this->goHome();
		}

        $OrganisationOwner = $organisation->getOwner();
        $organisationManagement = $organisation->getManagementMember();
        $organisationMember = $organisation->getMember();
        $organisationSocial = $organisation->getSocialDetails();

        /** @var ProfilePicForm $profilePicModel */
        $organisationPicModel = new ProfilePicForm(ProfilePicForm::SCENARIO_ORGANISATION);
        $organisationPicModel->id = $organisationId;

        //print_r(Yii::$app->request->post());
        //die();

        if ($organisationPicModel->load(Yii::$app->request->post())) {
            $organisationPicModel->file = UploadedFile::getInstance($organisationPicModel, 'file');
            if ($organisationPicModel->validate()) {
                Alert::addSuccess('Profile Pic Uploaded, Plesae refresh your Browser Cache');
                $organisationPicModel->save();
            }
        }

        /** Check if User ID my own User ID */
        $isOwner = (Yii::$app->user->identity != null && Yii::$app->user->identity->getId() == $OrganisationOwner['id']) ? true : false;

        return $this->render('details', [
            'organisation' => $detailedOrganisation,
            'OrganisationOwner' => $OrganisationOwner,
            'isOwner' => $isOwner,
            'organisationSocial' => $organisationSocial,
            'organisationMember' => $organisationMember,
            'organisationManagementMember' => $organisationManagement,
            'organisationPicModel' => $organisationPicModel,
        ]);
	}

    public function actionEditDetails($organisationId = 0)
    {
        if($organisationId == 0 || Yii::$app->user->isGuest)
        {
            //Alert::addError('User with ID: ' . $userId . ' doesnt exists'); 
            return $this->goHome();
		}

        /** @var Language $languageID */
        $languageID = Language::findByLocale(Yii::$app->language)->getId();
        $Organisation = OrganisationMember::FindOrganisationMemberForEdit(Yii::$app->user->identity->getId(), 1);

        if(!$Organisation) {
            $Organisation = OrganisationMember::FindOrganisationMemberForEdit(Yii::$app->user->identity->getId(), 2);  
		}

        if(!$Organisation) {
            //Alert::addError('You are not allowed to Change this Organisation');
            return $this->goHome();
        }

        $model = new DetailsForm();

        $organisationSocial = OrganisationSocial::findByID($organisationId);
        $organisationPayment = OrganisationPayment::findByID($organisationId);
        
        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->save($organisationId)) {
            return $this->redirect("details?organisationId=" . $organisationId);
        }

         $languageList = [];
        foreach (Language::find()->all() as $language) { $languageList[$language->getId()] = $language->getName($languageID); }

        $nationalityList = [];
        foreach (Nationality::find()->all() as $nationality) { $nationalityList[$nationality->getId()] = $nationality->getName($languageID); }

        /* Organisation */
        $model->name = $Organisation[$organisationId]->getName();
        $model->description = $Organisation[$organisationId]->getDescription();
        $model->languageId = $Organisation[$organisationId]->getLanguageId();
        $model->headquaterId = $Organisation[$organisationId]->getHeadquaterId();
        $model->creationDate = $Organisation[$organisationId]->getDtCreated();

        /* Organisation Social */
        $model->business_mail = ($organisationSocial == null) ? '' : $organisationSocial->getBusinessMail();
        $model->twitter_name = ($organisationSocial == null) ? '' : $organisationSocial->getTwitterName();
        $model->twitter_channel = ($organisationSocial == null) ? '' : $organisationSocial->getTwitterChannel();
        $model->discord_server =($organisationSocial == null) ? '' :  $organisationSocial->getDiscordServer();
        $model->socialEditable = ($organisationSocial == null) ? true : $organisationSocial->getIsEditable();

        /* Organisation Payment */
        $paymentUserName = '';
        if($organisationPayment != null) {
            $orgaOwner = UserDetails::findByID($organisationPayment->getOwnerId());

            if($orgaOwner != null) {
                $paymentUserName = $orgaOwner->getPreName() . ' ' . $orgaOwner->getLastName();
			}
		}

        $model->ownerName = ($organisationPayment == null) ? '' : $paymentUserName;
        $model->zip_code = ($organisationPayment == null) ? '' : $organisationPayment->getZipCode();
        $model->city = ($organisationPayment == null) ? '' : $organisationPayment->getCity();
        $model->street = ($organisationPayment == null) ? '' : $organisationPayment->getStreet();
        $model->paypal_adress = ($organisationPayment == null) ? '' : $organisationPayment->getPayPal();
        $model->iban = ($organisationPayment == null) ? '' : $organisationPayment->getIBAN();
        $model->bic = ($organisationPayment == null) ? '' : $organisationPayment->getBIC();
        $model->account_owner = ($organisationPayment == null) ? '' : $organisationPayment->getBankAccountOwner();
        $model->paymentEditable = ($organisationPayment == null) ? true : $organisationPayment->getIsEditable();

        /* Organisation Payment and Prvate Informations */
       
        return $this->render('editOrganisation',
        [
            'model' => $model,
            'languageList' => $languageList,
            'nationalityList' => $nationalityList,
            'currentOrgaID' => $organisationId,
        ]);
	}
}