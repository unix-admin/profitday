<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "event_program".
 *
 * @property integer $event_id
 * @property string $time_start
 * @property string $time_end
 * @property integer $auditory_id
 * @property integer $section_id
 */
class EventProgram extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event_program';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['event_id', 'time_start', 'time_end', 'auditory_id', 'section_id'], 'required'],
            [['event_id', 'auditory_id', 'section_id'], 'integer'],
            [['time_start', 'time_end'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'event_id' => Yii::t('app', 'Event ID'),
            'time_start' => Yii::t('app', 'Time Start'),
            'time_end' => Yii::t('app', 'Time End'),
            'auditory_id' => Yii::t('app', 'Auditory ID'),
            'section_id' => Yii::t('app', 'Section ID'),
        ];
    }

    /**
     * @inheritdoc
     * @return EventProgramQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EventProgramQuery(get_called_class());
    }
}
