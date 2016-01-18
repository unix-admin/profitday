<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registration_by_cities".
 *
 * @property integer $city_id
 * @property integer $registration_id
 * @property integer $registration_type
 */
class RegistrationByCities extends \yii\db\ActiveRecord
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
            'city_id' => 'City ID',
            'registration_id' => 'Registration ID',
            'registration_type' => 'Registration Type',
        ];
    }
}
