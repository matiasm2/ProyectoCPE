<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Moderw]].
 *
 * @see Moderw
 */
class ModerwQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Moderw[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Moderw|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
