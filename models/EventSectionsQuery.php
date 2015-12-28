<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[EventSections]].
 *
 * @see EventSections
 */
class EventSectionsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return EventSections[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return EventSections|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}