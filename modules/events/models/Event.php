<?php

namespace app\modules\events\models;

use yii\db\ActiveRecord;

/**
 * Class GamePlatforms
 * @package app\modules\miscellaneouse\models
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $shortDescription
 * @property string $img
 * @property string $startingDate
 * @property string $endDate
 * @property string $dt_created
 * @property string $dt_updated
 */

class Event extends ActiveRecord
{
	/**
     * @return string
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName($languageID)
    {
        //if($languageID != 1)
        //{
        //  return Games_i18n::getTranslatedDescription($this->id, $languageID);
        //}

        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription($languageID)
    {
    	//if($languageID != 1)
		//{
		//	return GamePlatforms_i18n::getTranslatedDescription($this->id, $languageID);
		//}

        return $this->description;
    }

    /**
     * @return string
     */
    public function getShortDescription($languageID)
    {
    	//if($languageID != 1)
		//{
		//	return GamePlatforms_i18n::getTranslatedDescription($this->id, $languageID);
		//}

        return $this->shortDescription;
    }

    /**
     * @return blob screen
     */
    public function getImage()
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

    /**
     * @inheritdoc
     */
    public static function findByID($eventId)
    {
        return static::findOne(['id' => $eventId]);
    }

    public static function getLatestEvents($languageID)
    {
    //News::find()->orderBy(['dt_created' => SORT_DESC])->limit(5)->all();
        $latestEvents = static::find()->orderBy(['startingDate' => SORT_ASC])->limit(2)->all();

        $latestEventsData = array();

        foreach($latestEvents as $nr => $event)
        {
            $latestEventsData[($nr == 0)? 'Next' : 'Preview']['ID'] = $event->getId();
            $latestEventsData[($nr == 0)? 'Next' : 'Preview']['Name'] = $event->getName($languageID);
            $latestEventsData[($nr == 0)? 'Next' : 'Preview']['shortDescription'] = $event->getShortDescription($languageID);
            $latestEventsData[($nr == 0)? 'Next' : 'Preview']['previewImage'] = $event->getImage();
		}

        //print_r($latestEventsData);
        //die();

        /*$upcomingEvents = array();
        /** Upcoming current Event 
        $upcomingEvents['Next']['ID'] = 2;
        $upcomingEvents['Next']['Name'] = "PeSp Masters 2020";
        $upcomingEvents['Next']['shortDescription'] = "The return of the PeSp Masters from 2019, this year in the Munich Olympiahall";
        $upcomingEvents['Next']['previewImage']= "pespmasters2020";
        /** Upcoming next Event 
        $upcomingEvents['Preview']['ID'] = 1;
        $upcomingEvents['Preview']['Name'] = "Tentelian Royale Clash Finals";
        $upcomingEvents['Preview']['shortDescription'] = "The Live Finals for our Clash Royle Championship Series (maximal 100 Zeichen)";
        $upcomingEvents['Preview']['previewImage']= "clashCupFinals";*/


        return $latestEventsData;
	}
}