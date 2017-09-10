<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Planmateria]].
 *
 * @see Planmateria
 */
class PlanmateriaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Planmateria[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Planmateria|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
