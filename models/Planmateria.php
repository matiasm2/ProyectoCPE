<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "planmateria".
 *
 * @property integer $planmateria_id
 * @property integer $planestudio_id
 * @property integer $materia_id
 *
 * @property Materia $materia
 * @property Planestudio $planestudio
 * @property Programa[] $programas
 */
class Planmateria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'planmateria';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['planestudio_id', 'materia_id'], 'integer'],
            [['materia_id'], 'exist', 'skipOnError' => true, 'targetClass' => Materia::className(), 'targetAttribute' => ['materia_id' => 'materia_id']],
            [['planestudio_id'], 'exist', 'skipOnError' => true, 'targetClass' => Planestudio::className(), 'targetAttribute' => ['planestudio_id' => 'planestudio_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'planmateria_id' => 'Planmateria ID',
            'planestudio_id' => 'Planestudio ID',
            'materia_id' => 'Materia ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMateria()
    {
        return $this->hasOne(Materia::className(), ['materia_id' => 'materia_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlanestudio()
    {
        return $this->hasOne(Planestudio::className(), ['planestudio_id' => 'planestudio_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramas()
    {
        return $this->hasMany(Programa::className(), ['planmateria_id' => 'planmateria_id']);
    }

    /**
     * @inheritdoc
     * @return PlanmateriaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PlanmateriaQuery(get_called_class());
    }
    public static function getAllPlanesmateria(){
        return Planmateria::find()->all();
    }
}
