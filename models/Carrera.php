<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carrera".
 *
 * @property integer $carrera_id
 * @property integer $instituto_id
 * @property string $descripcion
 *
 * @property Instituto $instituto
 * @property Planestudio[] $planestudios
 * @property Usuariocarrera[] $usuariocarreras
 */
class Carrera extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'carrera';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['instituto_id'], 'integer'],
            [['descripcion'], 'string', 'max' => 40],
            [['instituto_id'], 'exist', 'skipOnError' => true, 'targetClass' => Instituto::className(), 'targetAttribute' => ['instituto_id' => 'instituto_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'carrera_id' => 'Carrera ID',
            'instituto_id' => 'Instituto ID',
            'descripcion' => 'Descripcion',
        ];
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
    public function getPlanestudios()
    {
        return $this->hasMany(Planestudio::className(), ['carrera_id' => 'carrera_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuariocarreras()
    {
        return $this->hasMany(Usuariocarrera::className(), ['carrera_id' => 'carrera_id']);
    }

    /**
     * @inheritdoc
     * @return CarreraQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CarreraQuery(get_called_class());
    }
        public static function getAllCarreras(){
        return Carrera::find()->all();
    }

}
