<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $usuario_id
 * @property integer $sector_id
 * @property string $nombre
 * @property string $apellido
 * @property string $passworduser
 * @property string $publickeyuser
 * @property string $mailuser
 * @property string $authkeyuser
 * @property integer $activuser
 * @property string $avatar
 *
 * @property Archivoprograma[] $archivoprogramas
 * @property Mail[] $mails
 * @property Sector $sector
 * @property Usuariocarrera[] $usuariocarreras
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sector_id', 'activuser'], 'integer'],
            [['passworduser', 'publickeyuser', 'mailuser'], 'required'],
            [['nombre', 'apellido'], 'string', 'max' => 40],
            [['passworduser', 'mailuser', 'authkeyuser'], 'string', 'max' => 250],
            [['publickeyuser'], 'string', 'max' => 2100],
            [['avatar'], 'string', 'max' => 120],
            [['sector_id'], 'exist', 'skipOnError' => true, 'targetClass' => Sector::className(), 'targetAttribute' => ['sector_id' => 'sector_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'usuario_id' => 'Usuario ID',
            'sector_id' => 'Sector ID',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'passworduser' => 'Passworduser',
            'publickeyuser' => 'Publickeyuser',
            'mailuser' => 'Mailuser',
            'authkeyuser' => 'Authkeyuser',
            'activuser' => 'Activuser',
            'avatar' => 'Avatar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArchivoprogramas()
    {
        return $this->hasMany(Archivoprograma::className(), ['usuario_id' => 'usuario_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMails()
    {
        return $this->hasMany(Mail::className(), ['usuario_id' => 'usuario_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSector()
    {
        return $this->hasOne(Sector::className(), ['sector_id' => 'sector_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuariocarreras()
    {
        return $this->hasMany(Usuariocarrera::className(), ['usuario_id' => 'usuario_id']);
    }

    /**
     * @inheritdoc
     * @return UsuarioQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsuarioQuery(get_called_class());
    }
}
