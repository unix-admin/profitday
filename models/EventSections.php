<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "event_sections".
 *
 * @property integer $id
 * @property string $title_uk
 * @property string $title_ru
 * @property string $title_en
 * @property integer $displayed_default
 */
class EventSections extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event_sections';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_uk', 'title_ru', 'title_en'], 'required'],
            [['displayed_default'], 'integer'],
            [['title_uk', 'title_ru', 'title_en'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title_uk' => Yii::t('app', 'Title Uk'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'displayed_default' => Yii::t('app', 'Displayed Default'),
        ];
    }

    /**
     * @inheritdoc
     * @return EventSectionsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EventSectionsQuery(get_called_class());
    }
}
