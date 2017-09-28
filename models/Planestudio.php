<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "planestudio".
 *
 * @property integer $planestudio_id
 * @property integer $carrera_id
 * @property integer $ano_id
 *
 * @property Ano $ano
 * @property Carrera $carrera
 * @property Planmateria[] $planmaterias
 */
class Planestudio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'planestudio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['carrera_id', 'ano_id'], 'integer'],
            [['ano_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ano::className(), 'targetAttribute' => ['ano_id' => 'ano_id']],
            [['carrera_id'], 'exist', 'skipOnError' => true, 'targetClass' => Carrera::className(), 'targetAttribute' => ['carrera_id' => 'carrera_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'planestudio_id' => 'Planestudio ID',
            'carrera_id' => 'Carrera ID',
            'ano_id' => 'Ano ID',
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
    public function getPlanmaterias()
    {
        return $this->hasMany(Planmateria::className(), ['planestudio_id' => 'planestudio_id']);
    }

    /**
     * @inheritdoc
     * @return PlanestudioQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PlanestudioQuery(get_called_class());
    }
      public static function getAllPlanestudio(){
        return Planestudio::find()->all();
    }
}
