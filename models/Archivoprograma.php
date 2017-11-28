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
 * @property string $archivo
 * @property string $fecha
 *
 * @property Estado $estado
 * @property Programa $programa
 * @property Usuario $usuario
 */
class Archivoprograma extends \yii\db\ActiveRecord
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
            [['archivo'], 'file','maxSize' => 2*1024*1024,'tooBig' => 'Límite de 2MB..',],/*editar linea 802: upload_max_filesize = 2M de /etc/php/7.0/apache2/php.ini */
            [['fecha'], 'safe'],
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
            'estado' => 'Estado',
            'archivo' => 'Archivo',
            'fecha' => 'Fecha',
        ];
    }

    public function upload() {
      if ($this->validate()) {
          $this->archivo->saveAs('uploads/' . $this->archivo->baseName . '.' . $this->archivo->extension);
          return true;
      } else {
          return false;
      }
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
     * @return ArchivoprogramaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ArchivoprogramaQuery(get_called_class());
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
