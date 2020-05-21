<?php

namespace app\modules\miscellaneouse;

use Yii;

use app\modules\user\models\User;

/**
 * Class HelperClass
 * @package app\modules\core\miscellaneous
 */
class HelperClass
{
    /**
     * HelperClass constructor.
     */
    public function __construct()
    {
    }

    /**
     * Check if Image exists ore use Default
     *
     * @param $imagePath
     * @param $id
     * @return string
     */
    public function checkImage($imagePath, $id)
    {
        $imagePath = Yii::getAlias("@web") . $imagePath;

        if (!is_file($_SERVER['DOCUMENT_ROOT'] . $imagePath . $id . '.webp')) {
            if (!is_file($_SERVER['DOCUMENT_ROOT'] . $imagePath . $id .'.png')) {
                return $imagePath . 'default';
            }
        }
        return $imagePath . $id;
    }

    /**
     * Check if Nationality Icon exists ore use Default
     *
     * @param $icon_locale
     * @param $icon_size
     * @return string
     */
    public function checkNationalityImage($icon_locale, $icon_size)
    {
        $imagePath = Yii::getAlias("@web") . "/images/nationalities/" . $icon_size . "/" . $icon_locale . ".svg";
        
        if(!is_file($_SERVER['DOCUMENT_ROOT'] . $imagePath)){
            return Yii::getAlias("@web") . "/images/nationalities/" . $icon_size . "/default.svg";
		}

        return $imagePath;
	}

    /**
     * Check if SVG Icon are exists ore use Default
     *
     * @param $icon_name
     * @return string
     */
    public function checkSVGIcons($icon_name) {
        $imagePath = Yii::getAlias("@web") . "/images/icons/" . $icon_name . ".svg";

        if(!is_file($_SERVER['DOCUMENT_ROOT'] . $imagePath)){
            return Yii::getAlias("@web") . "/images/icons/default.svg";
		}
        
        return $imagePath;
	}

    /**
     * @return User Object
     */
     public function getUser()
     {
        return (Yii::$app->user->identity != null) ? User::findIdentity(Yii::$app->user->identity->getId()) : null;
	 }

    /**
     * Generate Password for User
     *
     * @return string
     */
    public function generatePassword() {
        return str_shuffle(substr(str_shuffle('abcdefghjkmnpqrstuvwxyz'), 0, 4) . substr(str_shuffle('!$%&=?*-:;.,+~@_'), 0, 1) . substr(str_shuffle('123456789'), 0, 1));
    }
}