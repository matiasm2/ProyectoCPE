<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Instituto]].
 *
 * @see Instituto
 */
class InstitutoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Instituto[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Instituto|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
