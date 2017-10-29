<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actionrole".
 *
 * @property integer $actionrole_id
 * @property string $action_disp
 * @property string $descripcion
 *
 * @property Asignsector[] $asignsectors
 */
class Actionrole extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'actionrole';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['action_disp'], 'required'],
            [['action_disp'], 'string', 'max' => 100],
            [['descripcion'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'actionrole_id' => 'Actionrole ID',
            'action_disp' => 'Action Disp',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsignsectors()
    {
        return $this->hasMany(Asignsector::className(), ['actionrole_id' => 'actionrole_id']);
    }
}
