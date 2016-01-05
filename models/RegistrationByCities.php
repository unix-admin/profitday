<?php

namespace app\models;

use Yii;
use \yii\db\ActiveRecord;

/**
 * This is the model class for table "registration_by_cities".
 *
 * @property integer $city_id
 * @property integer $registration_id
 * @property integer $registration_type
 */
class RegistrationByCities extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'registration_by_cities';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['city_id', 'registration_id', 'registration_type'], 'required'],
            [['city_id', 'registration_id', 'registration_type'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'city_id' => Yii::t('app', 'city ID'),
            'registration_id' => Yii::t('app', 'Registration ID'),
            'registration_type' => Yii::t('app', 'Registration Type'),
        ];
    }

    /**
     * @inheritdoc
     * @return RegistrationByCitiesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RegistrationByCitiesQuery(get_called_class());
    }
}
