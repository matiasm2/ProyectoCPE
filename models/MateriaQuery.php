<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Materia]].
 *
 * @see Materia
 */
class MateriaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Materia[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Materia|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
