<?php

namespace app\modules\partner\models;

use app\modules\partner\models\Partner_i18n;

use yii\db\ActiveRecord;
use Yii;
use DateTime;

/**
 * Class News
 * @package app\modules\partner\models
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $image
 * @property string $webadresse
 * @property string $dt_created
 * @property string $dt_updated
 */

class Partner extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'partner';
    }

    /**
     * @return int
     */
    public function getID()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName($languageID)
    {
        if(Yii::$app->language != 'en-EN')
		{
			return Partner_i18n::getTranslatedName($this->id, $languageID);
		}

        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription($languageID)
    {
        if(Yii::$app->language != 'en-EN')
		{
			return Partner_i18n::getTranslatedDescription($this->id, $languageID);
		}

        return $this->description;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function getWebadress()
    {
        return $this->webadresse;
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

    /** Functions **/

    public static function GetPartner($languageID)
    {
        $partners = static::find()->all();

        $sortedPartners = [];

        foreach($partners as $nr => $partner)
        {
            $sortedPartners[$nr]['Name'] = $partner->getName($languageID);
            $sortedPartners[$nr]['Description'] = $partner->getDescription($languageID);
            $sortedPartners[$nr]['Image'] = $partner->getImage();
            $sortedPartners[$nr]['Webadresse'] = $partner->getWebadress();
		}


        return $sortedPartners;
	}
}