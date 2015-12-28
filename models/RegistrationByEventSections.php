<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registration_by_event_sections".
 *
 * @property integer $section_id
 * @property integer $registration_id
 * @property integer $registration_type
 */
class RegistrationByEventSections extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'registration_by_event_sections';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['section_id', 'registration_id', 'registration_type'], 'required'],
            [['section_id', 'registration_id', 'registration_type'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'section_id' => Yii::t('app', 'Section ID'),
            'registration_id' => Yii::t('app', 'Registration ID'),
            'registration_type' => Yii::t('app', 'Registration Type'),
        ];
    }

    /**
     * @inheritdoc
     * @return RegistrationByEventSectionsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RegistrationByEventSectionsQuery(get_called_class());
    }
}
