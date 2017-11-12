<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asignsector".
 *
 * @property integer $asignsector_id
 * @property integer $actionrole_id
 * @property integer $sector_id
 *
 * @property Actionrole $actionrole
 * @property Sector $sector
 */
class Asignsector extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asignsector';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['actionrole_id', 'sector_id'], 'integer'],
            [['actionrole_id'], 'exist', 'skipOnError' => true, 'targetClass' => Actionrole::className(), 'targetAttribute' => ['actionrole_id' => 'actionrole_id']],
            [['sector_id'], 'exist', 'skipOnError' => true, 'targetClass' => Sector::className(), 'targetAttribute' => ['sector_id' => 'sector_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'asignsector_id' => 'Asignsector ID',
            'actionrole_id' => 'Accion',
            'sector_id' => 'Sector',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActionrole()
    {
        return $this->hasOne(Actionrole::className(), ['actionrole_id' => 'actionrole_id']);
    }

    public function getDescripcion(){
      return $this->actionrole->descripcion;
    }

    public function getDescripcionSector(){
      return $this->sector->descripcion;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSector()
    {
        return $this->hasOne(Sector::className(), ['sector_id' => 'sector_id']);
    }
}
