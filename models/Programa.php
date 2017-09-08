<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "programa".
 *
 * @property integer $programa_id
 * @property integer $planmateria_id
 * @property integer $ano_id
 *
 * @property Archivoprograma[] $archivoprogramas
 * @property Ano $ano
 * @property Planmateria $planmateria
 */
class Programa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'programa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['planmateria_id', 'ano_id'], 'integer'],
            [['ano_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ano::className(), 'targetAttribute' => ['ano_id' => 'ano_id']],
            [['planmateria_id'], 'exist', 'skipOnError' => true, 'targetClass' => Planmateria::className(), 'targetAttribute' => ['planmateria_id' => 'planmateria_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'programa_id' => 'Programa ID',
            'planmateria_id' => 'Planmateria ID',
            'ano_id' => 'Ano ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArchivoprogramas()
    {
        return $this->hasMany(Archivoprograma::className(), ['programa_id' => 'programa_id']);
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
    public function getPlanmateria()
    {
        return $this->hasOne(Planmateria::className(), ['planmateria_id' => 'planmateria_id']);
    }

    /**
     * @inheritdoc
     * @return ProgramaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProgramaQuery(get_called_class());
    }
}
