<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Photos]].
 *
 * @see Photos
 */
class PhotosQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Photos[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Photos|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}