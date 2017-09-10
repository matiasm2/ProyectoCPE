<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Carrera]].
 *
 * @see Carrera
 */
class CarreraQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Carrera[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Carrera|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
