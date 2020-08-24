<?php

namespace app\modules\miscellaneouse;

use Yii;

use app\modules\user\models\User;
use app\modules\miscellaneouse\models\language\Language;


/**
 * Class HelperClass
 * @package app\modules\core\miscellaneouse
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
     * Check if Image exists ore use Default
     *
     * @param $imagePath
     * @param $id
     * @return string
     */
    public function checkTeamImage($id, $orgId)
    {
        $imagePath = Yii::getAlias("@web") . '/images/avatars/team/';

        if (!is_file($_SERVER['DOCUMENT_ROOT'] . $imagePath . $id . '.webp')) {
            if (!is_file($_SERVER['DOCUMENT_ROOT'] . $imagePath . $id .'.png')) {
                return $this->checkImage('/images/avatars/organisation/', $orgId);
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
     *
     * 
     */
    public function getUserLanguage($user, $locale = false)
    {
        if(!$locale)
            return ($user) ? $user->getLanguage()->getId() : Language::findByLocale(Yii::$app->language)->getId();
        else
	        return ($user) ? $user->getLanguage()->getLocale() : Language::findByLocale(Yii::$app->language)->getLocale();
	}

    /**
     * Generate Password for User
     *
     * @return string
     */
    public function generatePassword() {
        return str_shuffle(substr(str_shuffle('abcdefghjkmnpqrstuvwxyz'), 0, 4) . substr(str_shuffle('!$%&=?*-:;.,+~@_'), 0, 1) . substr(str_shuffle('123456789'), 0, 1));
    }

    /**
     * Check if online on twitch
     *
     * @return bool
     */
    public function getTwitchOnlineStat()
    {
        /** Twitch API Test */

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.twitch.tv/helix/streams?user_login=tenteliansa');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


        $headers = array();
        $headers = array('Client-Id: 6z39okvs7otsfg01zgni68uwunal3d', 'Authorization: Bearer 3g6ztqe2v5nkv7ou1g29s0y2bxttjn');
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        //if (curl_errno($ch)) {
        //    echo 'Error:' . curl_error($ch);
        //}
        //curl_close($ch);

        $json_result = json_decode($result, true);
        //print_r($json_result['data']);
        //die();

        if(array_key_exists('data', $json_result) && $json_result['data'] != null)
            return true;
        else
	        return false;
	}
}