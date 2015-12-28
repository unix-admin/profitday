<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property integer $id
 * @property integer $city_id
 * @property string $event_date
 * @property string $title_uk
 * @property string $title_ru
 * @property string $title_en
 * @property string $address
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['city_id', 'title_uk', 'title_ru', 'title_en', 'address'], 'required'],
            [['city_id'], 'integer'],
            [['event_date'], 'safe'],
            [['title_uk', 'title_ru', 'title_en', 'address'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'city_id' => Yii::t('app', 'City ID'),
            'event_date' => Yii::t('app', 'Event Date'),
            'title_uk' => Yii::t('app', 'Title Uk'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'address' => Yii::t('app', 'Address'),
        ];
    }

    /**
     * @inheritdoc
     * @return EventsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EventsQuery(get_called_class());
    }
}
