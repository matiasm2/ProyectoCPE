<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $usuario_id
 * @property integer $sector_id
 * @property string $nombre
 * @property string $apellido
 * @property string $passworduser
 * @property string $mailuser
 * @property string $authkeyuser
 * @property integer $activuser
 *
 * @property Archivoprograma[] $archivoprogramas
 * @property Sector $sector
 * @property Usuariocarrera[] $usuariocarreras
 */
class Usuario extends \yii\db\ActiveRecord implements IdentityInterface
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
            [['passworduser', 'mailuser'], 'required'],
            [['nombre', 'apellido'], 'string', 'max' => 40],
            [['passworduser', 'mailuser'], 'string', 'max' => 250],
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
            'sector_id' => 'Sector',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'passworduser' => 'Password',
            'mailuser' => 'Mailuser',
            'authkeyuser' => 'Authkeyuser',
            'activuser' => 'Activuser',
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

    public function getAuthKey(): string {
        return $this->authkeyuser;
    }

    public function getId() {
        return $this->usuario_id;
    }

    public function validateAuthKey($authKey): bool {
        $usr=Usuario::find()->where ( "authkeyUser=:authkeyUser", [":authkeyUser" =>
            crypt($authkeyuser, Yii::$app->params["salt"])]);
        if ($usr->count() == 1) {
            return true;
        }
        return false;
    }

    public static function findIdentity($id): IdentityInterface {
        return Usuario::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null): IdentityInterface {
        return Usuario::findOne(['authkeyUser' => $token]);
    }

    public static function findByUsername($username){
        return Usuario::findOne(['nameUser' => $username]);
    }
}
