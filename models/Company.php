<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "company".
 *
 * @property integer $id
 * @property string $name
 * @property integer $need_presentation
 * @property integer $need_training
 * @property integer $pay_agree
 * @property string $ideas
 * @property string $contact_person
 * @property string $telephone
 * @property string $e_mail
 * @property string $site
 * @property string $skype
 * @property integer $is_organisator
 * @property integer $is_sponsor
 * @property integer $order
 * @property string $logo_url
 * @property string $intro_uk
 * @property string $intro_ru
 * @property string $intro_en
 * @property string $facebook_profile
 * @property string $google_profile
 * @property string $linkedin_profile
 * @property string $vk_profile
 */
class Company extends \yii\db\ActiveRecord
{
    public $cities =[];
    public  $registrationType = '1';
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'contact_person', 'order','need_presentation', 'need_training', 'pay_agree','order','telephone', 'e_mail','cities'], 'required'],
            [['facebook_profile', 'google_profile', 'linkedin_profile', 'vk_profile'], 'url'],
            [['e_mail'], 'email'],
            [['e_mail'], 'trim'],
            [['e_mail'], 'unique'],
            [['need_presentation', 'need_training', 'pay_agree', 'is_organisator', 'is_sponsor', 'order'], 'integer'],
            [['ideas'], 'string'],
            [['name', 'contact_person', 'telephone', 'e_mail', 'site', 'skype', 'logo_url', 'intro_uk', 'intro_ru', 'intro_en', 'facebook_profile', 'google_profile', 'linkedin_profile', 'vk_profile'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('company', 'Name'),
            'need_presentation' => Yii::t('app', 'Need Presentation'),
            'need_training' => Yii::t('app', 'Need Training'),
            'pay_agree' => Yii::t('app', 'Pay Agree'),
            'ideas' => Yii::t('app', 'Ideas'),
            'contact_person' => Yii::t('app', 'Contact Person'),
            'telephone' => Yii::t('company', 'Telephone'),
            'e_mail' => Yii::t('company', 'E Mail'),
            'site' => Yii::t('app', 'Site'),
            'skype' => Yii::t('app', 'Skype'),
            'is_organisator' => Yii::t('company', 'Is Organisator'),
            'is_sponsor' => Yii::t('company', 'Is Sponsor'),
            'order' => Yii::t('app', 'Order'),
            'logo_url' => Yii::t('app', 'Logo Url'),
            'intro_uk' => Yii::t('app', 'Intro Uk'),
            'intro_ru' => Yii::t('app', 'Intro Ru'),
            'intro_en' => Yii::t('app', 'Intro En'),
            'facebook_profile' => Yii::t('app', 'Facebook Profile'),
            'google_profile' => Yii::t('app', 'Google Profile'),
            'linkedin_profile' => Yii::t('app', 'Linkedin Profile'),
            'vk_profile' => Yii::t('app', 'Vk Profile'),
            'cities' => Yii::t('app', 'cities'),
        ];
    }
    public function afterSave($insert, $changedAttributes){
        parent::afterSave($insert, $changedAttributes);
        foreach ($this->cities as $id)
        {
            $registration = new RegistrationByCities();
            $registration->city_id = $id;
            $registration->registration_id = $this->id;
            $registration->registration_type=1;
            $registration->save();
        }

    }

    public function getCities()
    {
        return $this->hasMany(City::className(), ['id' => 'city_id'])
            ->viaTable('registration_by_cities', ['registration_id' => 'id','registration_type' => 'registrationType'] );
    }

    public function registrations($id)
    {
      $regid = Company::findone($id);
        return $regid->getCities();

    }


}
