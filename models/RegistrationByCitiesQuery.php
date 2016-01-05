<?php

namespace app\models;
use \yii\db\ActiveQuery;
/**
 * This is the ActiveQuery class for [[RegistrationByCities]].
 *
 * @see RegistrationByCities
 */
class RegistrationByCitiesQuery extends ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return RegistrationByCities[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return RegistrationByCities|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}