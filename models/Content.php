<?php

namespace app\models;
use yii\db\ActiveRecord;
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
 * @property string $type
 * @property integer $status
 */
class Content extends ActiveRecord
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

            [['title_uk', 'title_ru', 'title_en', 'content_uk', 'content_ru', 'content_en', 'tags_uk', 'tags_ru', 'tags_en', 'type', 'status'], 'default'],
            [['content_uk', 'content_ru', 'content_en'], 'string'],
            [['status'], 'integer'],
            [['title_uk', 'title_ru', 'title_en', 'tags_uk', 'tags_ru', 'tags_en', 'type'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_uk' => 'Title Uk',
            'title_ru' => 'Title Ru',
            'title_en' => 'Title En',
            'content_uk' => 'Content Uk',
            'content_ru' => 'Content Ru',
            'content_en' => 'Content En',
            'tags_uk' => 'Tags Uk',
            'tags_ru' => 'Tags Ru',
            'tags_en' => 'Tags En',
            'type' => 'Type',
            'status' => 'Status',
        ];
    }



    public function getTitle($type,$status)
    {
       $title =  self::findOne(['type' => $type, 'status' => $status]);
        $titleField = 'title_'.Yii::$app->language;
        return $title->{$titleField};
    }
    public function getContent($type,$status)
    {
        $content = self::findOne(['type' => $type, 'status' => $status]);
        $contentField = 'content_'.Yii::$app->language;
        return $content->{$contentField};
    }

}
