<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sector".
 *
 * @property integer $sector_id
 * @property string $descripcion
 *
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
            [['descripcion'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sector_id' => 'Sector ID',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['sector_id' => 'sector_id']);
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
