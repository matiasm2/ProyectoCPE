<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "moderw".
 *
 * @property integer $moderw_id
 * @property string $moderw
 *
 * @property Archivoprograma[] $archivoprogramas
 */
class Moderw extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'moderw';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['moderw'], 'required'],
            [['moderw'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'moderw_id' => 'Moderw ID',
            'moderw' => 'Moderw',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArchivoprogramas()
    {
        return $this->hasMany(Archivoprograma::className(), ['moderw_id' => 'moderw_id'])->inverseOf('moderw');
    }

    /**
     * @inheritdoc
     * @return ModerwQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ModerwQuery(get_called_class());
    }
}
