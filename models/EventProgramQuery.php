<?php

namespace app\models;
use \yii\db\ActiveQuery;
/**
 * This is the ActiveQuery class for [[EventProgram]].
 *
 * @see EventProgram
 */
class EventProgramQuery extends ActiveQuery
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