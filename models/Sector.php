<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sector".
 *
 * @property integer $sector_id
 * @property string $descripcion
 * @property string $shortname
 *
 * @property Asignsector[] $asignsectors
 * @property Usuario[] $usuarios
 */
class Sector extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sector';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descripcion'], 'string', 'max' => 60],
            [['shortname'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sector_id' => 'Sector ID',
            'descripcion' => 'Descripción',
            'shortname' => 'Abreviatura',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsignsectors()
    {
        return $this->hasMany(Asignsector::className(), ['sector_id' => 'sector_id'])->inverseOf('sector');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['sector_id' => 'sector_id'])->inverseOf('sector');
    }

    /**
     * @inheritdoc
     * @return SectorQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SectorQuery(get_called_class());
    }
}
