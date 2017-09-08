<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Sector]].
 *
 * @see Sector
 */
class SectorQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Sector[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Sector|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
