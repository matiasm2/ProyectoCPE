<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "archivoprograma".
 *
 * @property integer $archivoprograma_id
 * @property integer $programa_id
 * @property integer $usuario_id
 * @property integer $estado_id
 * @property string $descripcion
 * @property string $archivo
 * @property string $fecha
 *
 * @property Estado $estado 
 * @property Programa $programa
 * @property Usuario $usuario
 */
 //Descripcion $descripcion
class Usuarioinstituto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'archivoprograma';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['programa_id', 'usuario_id', 'estado_id'], 'integer'],
            [['archivo'], 'required'],
            [['fecha'], 'safe'],
            [['archivo'], 'string', 'max' => 100],
            [['estado_id'], 'exist', 'skipOnError' => true, 'targetClass' => Estado::className(), 'targetAttribute' => ['estado_id' => 'estado_id']],
            //[['descripcion'], 'exist', 'skipOnError' => true, 'targetClass' => Descripcion::className(), 'targetAttribute' => ['descripcion' => 'descripcion']],
            [['programa_id'], 'exist', 'skipOnError' => true, 'targetClass' => Programa::className(), 'targetAttribute' => ['programa_id' => 'programa_id']],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_id' => 'usuario_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'archivoprograma_id' => 'Archivoprograma ID',
            'programa_id' => 'Programa ID',
            'usuario_id' => 'Usuario ID',
            'estado_id' => 'Estado ID',
            //'descripcion' => 'descripcion',
            'archivo' => 'Archivo',
            'fecha' => 'Fecha',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstado()
    {
        return $this->hasOne(Estado::className(), ['estado_id' => 'estado_id']);
    }

    /*public function getDescripcion()
    {
        return $this->hasOne(Descripcion::className(), ['descripcion' => 'descripcion']);
    }*/

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrograma()
    {
        return $this->hasOne(Programa::className(), ['programa_id' => 'programa_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuario::className(), ['usuario_id' => 'usuario_id']);
    }
}
