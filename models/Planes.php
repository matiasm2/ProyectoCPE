<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "planes".
 *
 * @property integer $planes_id
 * @property integer $ano_id
 * @property integer $carrera_id
 * @property integer $ano_nivel
 * @property integer $instituto_id
 * @property integer $materia_id
 *
 * @property Ano $ano
 * @property Carrera $carrera
 * @property Instituto $instituto
 * @property Materia $materia
 */
class Planes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'planes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ano_id', 'carrera_id', 'ano_nivel', 'instituto_id', 'materia_id'], 'integer'],
            [['ano_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ano::className(), 'targetAttribute' => ['ano_id' => 'ano_id']],
            [['carrera_id'], 'exist', 'skipOnError' => true, 'targetClass' => Carrera::className(), 'targetAttribute' => ['carrera_id' => 'carrera_id']],
            [['instituto_id'], 'exist', 'skipOnError' => true, 'targetClass' => Instituto::className(), 'targetAttribute' => ['instituto_id' => 'instituto_id']],
            [['materia_id'], 'exist', 'skipOnError' => true, 'targetClass' => Materia::className(), 'targetAttribute' => ['materia_id' => 'materia_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'planes_id' => 'Planes ID',
            'ano_id' => 'Ano ID',
            'carrera_id' => 'Carrera ID',
            'ano_nivel' => 'Ano Nivel',
            'instituto_id' => 'Instituto ID',
            'materia_id' => 'Materia ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAno()
    {
        return $this->hasOne(Ano::className(), ['ano_id' => 'ano_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarrera()
    {
        return $this->hasOne(Carrera::className(), ['carrera_id' => 'carrera_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInstituto()
    {
        return $this->hasOne(Instituto::className(), ['instituto_id' => 'instituto_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMateria()
    {
        return $this->hasOne(Materia::className(), ['materia_id' => 'materia_id']);
    }

    /**
     * @inheritdoc
     * @return PlanesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PlanesQuery(get_called_class());
    }
}
