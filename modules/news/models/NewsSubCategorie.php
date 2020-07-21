<?php

namespace app\modules\news\models;

use yii\db\ActiveRecord;


/**
 * Class NewsSubCategorie
 * @package app\modules\news\models
 *
 * @property int $id
 * @property int $categorie_id
 * @property string $name
 * @property string $description
 * @property string $img
 * @property string $dt_created
 * @property string $dt_updated
 */

class NewsSubCategorie  extends ActiveRecord
{
	/**
     * @return string
     */
    public static function tableName()
    {
        return 'news_sub_categorie';
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
     * @return int
     */
    public function getCategorieId()
    {
        return $this->categorie_id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getImgTag()
    {
        return $this->img;
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

    /************************ Functions ****************************/
}