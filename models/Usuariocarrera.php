<?php

namespace app\models; 

use Yii; 

/** 
 * This is the model class for table "usuariocarrera". 
 * 
 * @property integer $usuario_id
 * @property integer $carrera_id
 * 
 * @property Carrera $carrera
 * @property Usuario $usuario
 */ 
class Usuariocarrera extends \yii\db\ActiveRecord
{ 
    /** 
     * @inheritdoc 
     */ 
    public static function tableName() 
    { 
        return 'usuariocarrera'; 
    } 

    /** 
     * @inheritdoc 
     */ 
    public function rules() 
    { 
        return [
            [['usuario_id', 'carrera_id'], 'integer'],
            [['carrera_id'], 'exist', 'skipOnError' => true, 'targetClass' => Carrera::className(), 'targetAttribute' => ['carrera_id' => 'carrera_id']],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_id' => 'usuario_id']],
        ]; 
    } 

    /** 
     * @inheritdoc 
     */ 
    public function attributeLabels() 
    { 
        return [ 
            'usuario_id' => 'Usuario ID',
            'carrera_id' => 'Carrera ID',
        ]; 
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
    public function getUsuario() 
    { 
        return $this->hasOne(Usuario::className(), ['usuario_id' => 'usuario_id']);
    } 
} 