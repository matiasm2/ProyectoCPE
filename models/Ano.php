<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ano".
 *
 * @property integer $ano_id
 * @property integer $ano
 *
 * @property Planestudio[] $planestudios
 * @property Programa[] $programas
 */
class Ano extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ano';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ano'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ano_id' => 'Ano ID',
            'ano' => 'Ano',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlanestudios()
    {
        return $this->hasMany(Planestudio::className(), ['ano_id' => 'ano_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramas()
    {
        return $this->hasMany(Programa::className(), ['ano_id' => 'ano_id']);
    }

    /**
     * @inheritdoc
     * @return AnoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AnoQuery(get_called_class());
    }
}
