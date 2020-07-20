<?php
namespace app\components;

use \Yii;
use \yii\behaviors\BlameableBehavior;
use \yii\behaviors\TimestampBehavior;
use \yii\db\ActiveRecord;
use \yii\db\Expression;


/**
 * The AbstractActiveRecord class attaches some behaviours to track
 * the creation and editing of these records.
 *
 * @package app\components
 *
 * @property int $user_created
 * @property string $dt_created
 * @property int $user_updated
 * @property string $dt_updated
 */
 abstract class AbstractActiveRecord extends ActiveRecord
{
    /**
     * Attach the BlameableBehavior and TimestampBehavior
     * to track the creation and editing of these records.
     *
     * @return array the behaviours
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'dt_created',
                'updatedAtAttribute' => 'dt_updated',
                'value' => new Expression('NOW()'),
            ]
        ];
    }

    /**
     * @return array the attribute labels
     */
    public function attributeLabels()
    {
        return [

            'user_created' => Yii::t('app', 'user_created'),
            'dt_created' => Yii::t('app', 'dt_created'),
            'user_updated' => Yii::t('app', 'user_updated'),
            'dt_updated' => Yii::t('app', 'dt_updated')
        ];
    }

    /**
     * @return string the creation time string
     */
    public function getDtCreated()
    {
        return $this->dt_created;
    }

    /**
     * @return string the update time string
     */
    public function getDtUpdated()
    {
        return $this->dt_updated;
    }
}