<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "content".
 *
 * @property integer $id
 * @property string $title_uk
 * @property string $title_ru
 * @property string $title_en
 * @property string $content_uk
 * @property string $content_ru
 * @property string $content_en
 * @property string $tags_uk
 * @property string $tags_ru
 * @property string $tags_en
 * @property string $url
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_uk', 'title_ru', 'title_en', 'content_uk', 'content_ru', 'content_en', 'tags_uk', 'tags_ru', 'tags_en', 'url'], 'required'],
            [['content_uk', 'content_ru', 'content_en'], 'string'],
            [['title_uk', 'title_ru', 'title_en', 'tags_uk', 'tags_ru', 'tags_en', 'url'], 'string', 'max' => 255]
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
            'content_uk' => Yii::t('app', 'Content Uk'),
            'content_ru' => Yii::t('app', 'Content Ru'),
            'content_en' => Yii::t('app', 'Content En'),
            'tags_uk' => Yii::t('app', 'Tags Uk'),
            'tags_ru' => Yii::t('app', 'Tags Ru'),
            'tags_en' => Yii::t('app', 'Tags En'),
            'url' => Yii::t('app', 'Url'),
        ];
    }

    /**
     * @inheritdoc
     * @return ContentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ContentQuery(get_called_class());
    }
}
