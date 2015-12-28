<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "photos".
 *
 * @property integer $event_id
 * @property string $photo_path
 */
class Photos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'photos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['event_id', 'photo_path'], 'required'],
            [['event_id'], 'integer'],
            [['photo_path'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'event_id' => Yii::t('app', 'Event ID'),
            'photo_path' => Yii::t('app', 'Photo Path'),
        ];
    }

    /**
     * @inheritdoc
     * @return PhotosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PhotosQuery(get_called_class());
    }
}
