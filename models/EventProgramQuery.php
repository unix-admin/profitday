<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[EventProgram]].
 *
 * @see EventProgram
 */
class EventProgramQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return EventProgram[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return EventProgram|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}