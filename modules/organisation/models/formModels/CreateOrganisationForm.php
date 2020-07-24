<?php

namespace app\modules\organisation\models\formModels;

use app\components\FormModel;
use app\widgets\Alert;

use app\modules\miscellaneouse\models\language\Language;
use app\modules\miscellaneouse\models\nationality\Nationality;

use app\modules\organisation\models\Organisation;
use app\modules\organisation\models\OrganisationMember;

use Yii;
use yii\db\Exception;
use yii\db\Expression;

class CreateOrganisationForm extends FormModel
{
    public $name;
 	public $description;
 	public $headquater_id;
 	public $language_id;

 	/**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [
                ['name', 'description', 'headquater_id', 'language_id'],
                'required',
            ],
            ['name', 'string'],
            ['description',
                'string',
                'min' => 25,
                'max' => 140,
            ],

            ['name',
                'string',
                'min' => 5,
                'max' => 20,
            ],
           	[
            	'language_id',
            	'exist',
        		'targetClass' => Language::className(),
        		'targetAttribute' => 'id'
        	],
        	[
            	'headquater_id',
        		'exist',
            	'targetClass' => Nationality::className(),
            	'targetAttribute' => 'id'
        	]
        ];
    }

    /**
     * @inheritDoc
     */
    public function attributeLabels()
    {
        return [
            'name' => \app\modules\organisation\Module::t('createOrganisation', 'name'),
            'description' => \app\modules\organisation\Module::t('createOrganisation', 'description'),
            'headquater_id' => \app\modules\organisation\Module::t('createOrganisation', 'headquater_id'),
            'language_id' => \app\modules\organisation\Module::t('createOrganisation', 'language_id')
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
        $organisation = new Organisation();

        $organisation->name = trim($this->name);
        $organisation->description = trim($this->description);
        $organisation->headquater_id = $this->headquater_id;
        $organisation->language_id = $this->language_id;

        try 
        {
            $organisation->save();

            /** Find Organisation for rights Management */
            $organisationID = Organisation::findByOrganisationName($organisation->name)->getId();

            $organisationMember = new OrganisationMember();
        	$organisationMember->organisation_id = $organisationID;
            $organisationMember->user_id = Yii::$app->user->identity->getId();
            $organisationMember->role_id = 1;

            $organisationMember->save();

           	$transaction->commit();

			//Alert::addSuccess('New Organisation Successfully Created');
          	return true;
            
        } catch (Exception $e) {
            print_r($e->getMessage());
            die();
            $transaction->rollBack();
            //Alert::addError("something wrong here...");
        }

        return false;
    }
}