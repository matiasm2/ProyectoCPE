<?php

namespace app\models;

use Yii;
use app\commands\RegisterModeChecker;

/**
 * This is the model class for table "archivoprograma".
 *
 * @property integer $archivoprograma_id
 * @property integer $programa_id
 * @property integer $usuario_id
 * @property integer $estado_id
 * @property string $archivo
 * @property string $fecha
 * @property integer $mode_id
 *
 * @property Estado $estado
 * @property Programa $programa
 * @property Usuario $usuario
 */
class DocumentUpload extends \yii\db\ActiveRecord
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
            [['archivo'], 'file'],
            [['archivo'], 'required'],
            [['fecha'], 'safe'],
            [['moderw_id'], 'integer'],
            [['estado_id'], 'exist', 'skipOnError' => true, 'targetClass' => Estado::className(), 'targetAttribute' => ['estado_id' => 'estado_id']],
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
            'archivo' => 'Archivo',
            'fecha' => 'Fecha',
            'moderw_id' => 'Moderw_ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstado()
    {
        return $this->hasOne(Estado::className(), ['estado_id' => 'estado_id']);
    }

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

    /**
     * @inheritdoc
     * @return DocumentUploadQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DocumentUploadQuery(get_called_class());
    }

	public function uploadFormatted($archivo) {
		$archivo->baseName='unArch';
		$archivo->saveAs('uploads/'. $this->archivo->baseName .'.'. $this->archivo->extension);
		if ($this->validate()) {
		  $this->archivo->saveAs('uploads/'. $this->archivo->baseName .'.'. $this->archivo->extension);
		  return true;
		} else return false;
    }
    
	public function upload() {
      if ($this->validate()) {
          $this->archivo->saveAs('uploads/' . $this->archivo->baseName . '.' . $this->archivo->extension);
          return true;
      } else return false;
    }
    
    public function getNombreUsuario(){
      return $this->usuario->nombre . " " . $this->usuario->apellido;
    }

    public function getDescripcionEstado(){
      return $this->estado->descripcion;
    }

    public function getDescripcionPrograma(){
      return $this->programa->descripcion;
    }

}
