<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "materia".
 *
 * @property integer $materia_id
 * @property string $nombre
 * @property boolean $optativa
 *
 * @property Planmateria[] $planmaterias
 */
class Materia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'materia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['optativa'], 'boolean'],
            [['nombre'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'materia_id' => 'Materia ID',
            'nombre' => 'Nombre',
            'optativa' => 'Optativa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlanmaterias()
    {
        return $this->hasMany(Planmateria::className(), ['materia_id' => 'materia_id']);
    }

    /**
     * @inheritdoc
     * @return MateriaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MateriaQuery(get_called_class());
    }
     public static function getAllMaterias(){
        return Materia::find()->all();
    }
}
