<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "person".
 *
 * @property integer $id
 * @property string $name
 * @property string $working_place
 * @property string $how_know_about
 * @property string $ideas
 * @property string $telephone
 * @property string $e_mail
 * @property string $skype
 * @property string $facebook_profile
 * @property string $google_profile
 * @property string $linkedin_profile
 * @property string $vk_profile
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'person';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'working_place', 'how_know_about', 'facebook_profile', 'google_profile', 'linkedin_profile', 'vk_profile'], 'required'],
            [['ideas'], 'string'],
            [['name', 'working_place', 'how_know_about', 'telephone', 'e_mail', 'skype', 'facebook_profile', 'google_profile', 'linkedin_profile', 'vk_profile'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'working_place' => Yii::t('app', 'Working Place'),
            'how_know_about' => Yii::t('app', 'How Know About'),
            'ideas' => Yii::t('app', 'Ideas'),
            'telephone' => Yii::t('app', 'Telephone'),
            'e_mail' => Yii::t('app', 'E Mail'),
            'skype' => Yii::t('app', 'Skype'),
            'facebook_profile' => Yii::t('app', 'Facebook Profile'),
            'google_profile' => Yii::t('app', 'Google Profile'),
            'linkedin_profile' => Yii::t('app', 'Linkedin Profile'),
            'vk_profile' => Yii::t('app', 'Vk Profile'),
        ];
    }

    /**
     * @inheritdoc
     * @return PersonQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PersonQuery(get_called_class());
    }
}
