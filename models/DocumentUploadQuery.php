<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[DocumentUpload]].
 *
 * @see DocumentUpload
 */
class DocumentUploadQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return DocumentUpload[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return DocumentUpload|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
