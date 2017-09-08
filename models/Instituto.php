<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "instituto".
 *
 * @property integer $instituto_id
 * @property string $nombre
 *
 * @property Carrera[] $carreras
 */
class Instituto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'instituto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'instituto_id' => 'Instituto ID',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarreras()
    {
        return $this->hasMany(Carrera::className(), ['instituto_id' => 'instituto_id']);
    }

    /**
     * @inheritdoc
     * @return InstitutoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new InstitutoQuery(get_called_class());
    }
}
