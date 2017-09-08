<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Ano]].
 *
 * @see Ano
 */
class AnoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Ano[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Ano|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
