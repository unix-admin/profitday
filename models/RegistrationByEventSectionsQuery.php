<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[RegistrationByEventSections]].
 *
 * @see RegistrationByEventSections
 */
class RegistrationByEventSectionsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return RegistrationByEventSections[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return RegistrationByEventSections|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}