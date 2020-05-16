<?php

namespace app\modules\miscellaneouse;

use Yii;


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
     * @param $imagePath
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

    public function checkNationalityImage($icon_locale, $icon_size)
    {
        $imagePath = Yii::getAlias("@web") . "/images/nationalities/" . $icon_size . "/" . $icon_locale . ".svg";
        
        if(!is_file($_SERVER['DOCUMENT_ROOT'] . $imagePath)){
            return Yii::getAlias("@web") . "/images/nationalities/" . $icon_size . "/default.svg";
		}

        return $imagePath;
	}


}