<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[EventAuditories]].
 *
 * @see EventAuditories
 */
class EventAuditoriesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return EventAuditories[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return EventAuditories|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}