<?php

namespace app\modules\organisation\models\formModels;

use app\components\FormModel;
use app\widgets\Alert;

use app\modules\organisation\models\Organisation;
use app\modules\organisation\models\OrganisationMember;
use app\modules\organisation\models\OrganisationSocial;
use app\modules\organisation\models\OrganisationPayment;

use app\modules\miscellaneouse\models\user\UserSocials;

use app\modules\miscellaneouse\models\language\Language;
use app\modules\miscellaneouse\models\nationality\Nationality;

use Yii;
use yii\db\Exception;

class DetailsForm extends FormModel
{
	/* Organisation */
	public $name;
	public $description;
	public $languageId;
	public $headquaterId;
	public $creationDate;

	/* Organisation Socials */
	public $organisation_id;
	public $business_mail;
	public $twitter_name;
	public $twitter_channel;
	public $discord_server;
	public $teamspeak_server;
	public $socialEditable;

	/* Organisation Payments */
	public $ownerName;
	public $zip_code;
	public $city;
	public $street;
	public $paypal_adress;
	public $iban;
	public $bic;
	public $account_owner;
	public $paymentEditable;

	/**
     * @return array the validation rules.
     */
	public function rules()
	{
		return [
            ['languageId', 'exist', 'targetClass' => Language::className(), 'targetAttribute' => 'id' ],
            ['headquaterId', 'exist', 'targetClass' => Nationality::className(), 'targetAttribute' => 'id' ],
            [
                ['business_mail', 'paypal_adress'], 'email', 'message' => \app\modules\organisation\Module::t('editDetails', 'noMail')
            ],
            [
                ['name', 'description', 'languageId'], 'required',
            ],
            [
                ['name', 'description', 'zip_code', 'city', 'street'], 'string'
            ],
            [ 
                ['discord_server', 'discord_server', 'teamspeak_server'], 'string'
            ],
            [ 
                ['iban', 'bic', 'account_owner'], 'string', 'message' => \app\modules\organisation\Module::t('editDetails', 'bankAccount')
            ],
            [
                ['iban', 'bic'], 'match','pattern' => '/^[a-zA-Z0-9\s]+$/', 'message' => \app\modules\organisation\Module::t('editDetails', 'errorIBANBIC')
            ],
            ['twitter_name', 'match', 'pattern' => '/^[a-zA-Z_0-9\s]+$/', 'message' => \app\modules\organisation\Module::t('editDetails', 'errorTwitterName')
            ],
            ['description',
                'string',
                'min' => 25,
                'max' => 140,
            ],
            /*
            ['twitter_name', 'unique', 'targetClass' => OrganisationSocial::className(), 'targetAttribute' => 'twitter_name', 'message' => \app\modules\organisation\Module::t('editOrga', 'errorTwitterNameUsed')
            ],
            ['twitter_name', 'unique', 'targetClass' => UserSocials::className(), 'targetAttribute' => 'twitter_name', 'message' => \app\modules\organisation\Module::t('editOrga', 'errorTwitterNameUsed')
            ],*/
            ['twitter_channel', 'match', 'pattern' => '/^[a-zA-Z_0-9\s,]+$/', 'message' => \app\modules\organisation\Module::t('editDetails', 'errorTwitterChannel')
            ],
            ['discord_server', 'match','pattern' => '/^[a-zA-Z0-9\s]+$/', 'message' => \app\modules\organisation\Module::t('editDetails', 'errorDiscordServer')
            ],
            /*[ 
                'discord_server',
                'customUniqueDiscordServerValidator'
            ],
            [ 
                'twitter_name',
                'customUniqueTwitterValidator',
            ],
            [ 
                'teamspeak_server',
                'customUniqueTeamSpeakValidator'
            ],*/
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
            'name' => \app\modules\organisation\Module::t('editDetails','name'),
            'description' => \app\modules\organisation\Module::t('editDetails','description'),
            'languageId' => \app\modules\organisation\Module::t('editDetails','languageId'),
            'headquaterId' => \app\modules\organisation\Module::t('editDetails','headquaterId'),

            /* Sozial */
            'business_mail' => \app\modules\organisation\Module::t('editDetails','businessMail'),
            'twitter_name' => \app\modules\organisation\Module::t('editDetails','twitterName'),
            'twitter_channel' => \app\modules\organisation\Module::t('editDetails','twitterChannel'),
            'discord_server' => \app\modules\organisation\Module::t('editDetails','discordServer'),
            'teamspeak_server' => \app\modules\organisation\Module::t('editDetails','teamspeakServer'),

            /* Payment */
            'ownerName' => \app\modules\organisation\Module::t('editDetails','ownerName'),
            'zip_code' => \app\modules\organisation\Module::t('editDetails','zipCode'),
            'city' => \app\modules\organisation\Module::t('editDetails','city'),
            'street' => \app\modules\organisation\Module::t('editDetails','street'),
            'paypal_adress' => \app\modules\organisation\Module::t('editDetails','paypalAdress'),
            'iban' => \app\modules\organisation\Module::t('editDetails','iban'),
            'bic' => \app\modules\organisation\Module::t('editDetails','bic'),
            'account_owner' => \app\modules\organisation\Module::t('editDetails','accountOwner'),

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
    public function save($organisationId)
    {
        $transaction = Yii::$app->db->beginTransaction();
        $organisation = Organisation::findOrganisationById($organisationId);

        /** Changeable Base Informations */
        $organisation->language_id = $this->languageId;
        $organisation->description = trim($this->description);

        /** Social Informations */
        $organisationSocial = OrganisationSocial::findByID($organisationId);
        if($organisationSocial == null) { $organisationSocial = new OrganisationSocial(); }

        $organisationSocial->organisation_id    = $organisationId;
        $organisationSocial->business_mail      = (empty($organisationSocial->business_mail) || $organisationSocial->editable)? $this->business_mail : $organisationSocial->business_mail;
        $organisationSocial->twitter_name       = (empty($organisationSocial->twitter_name) || $organisationSocial->editable)? $this->twitter_name : $organisationSocial->twitter_name;
        $organisationSocial->twitter_channel    = trim($this->twitter_channel);
        $organisationSocial->discord_server     = (empty($organisationSocial->discord_server) || $organisationSocial->editable)? $this->discord_server : $organisationSocial->discord_server;
        $organisationSocial->teamspeak_server   = (empty($organisationSocial->teamspeak_server) || $organisationSocial->editable)? $this->teamspeak_server : $organisationSocial->teamspeak_server;
        $organisationSocial->editable           = false;

        /** Payment Informations */
        $organisationPayment = OrganisationPayment::findByID($organisationId);
        if($organisationPayment == null) { $organisationPayment = new OrganisationPayment(); }

        $organisationPayment->organisation_id       = (empty($organisationPayment->organisation_id))? $organisationId : $organisationPayment->organisation_id;
        $organisationPayment->organisation_owner_id = OrganisationMember::FindOrganisationOwner($organisationId)['id'];
        $organisationPayment->zip_code              = (empty($organisationPayment->zip_code))? $this->zip_code : $organisationPayment->zip_code;
        $organisationPayment->city                  = (empty($organisationPayment->city))? $this->city : $organisationPayment->city;
        $organisationPayment->street                = (empty($organisationPayment->street))? $this->street : $organisationPayment->street;
        $organisationPayment->paypal_adress         = (empty($organisationPayment->paypal_adress))? $this->paypal_adress : $organisationPayment->paypal_adress;
        $organisationPayment->iban                  = (empty($organisationPayment->iban))? $this->iban : $organisationPayment->iban;
        $organisationPayment->bic                   = (empty($organisationPayment->bic))? $this->bic : $organisationPayment->bic;
        $organisationPayment->account_owner         = (empty($organisationPayment->account_owner))? $this->account_owner : $organisationPayment->account_owner;
        $organisationPayment->editable              = false;

        /** Save Organisation and Credentials **/
        try {
            $organisation->save();
            $organisationSocial->save();
            $organisationPayment->save();
            $transaction->commit();
            //Alert::addSuccess('Organisation: %s successfully saved',  $organisation->name);
            return true;
        } catch (Exception $e) {
            print_r($e);
            $transaction->rollBack();
            //Alert::addError('Organisation %s couldnt be saved', $organisation->name);
            //Alert::addError("user %s couldn't be saved" . $e->getMessage());
        }

        return false;
    }
}