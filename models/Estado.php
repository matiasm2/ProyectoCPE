<?php

namespace app\models;

use Yii;
use app\commands\RegisterModeChecker;

/**
 * This is the model class for table "estado".
 *
 * @property integer $estado_id
 * @property string $descripcion
 *
 * @property Archivoprograma[] $archivoprogramas
 */
class Estado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estado';
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
            'estado_id' => 'Estado ID',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArchivoprogramas()
    {
        return $this->hasMany(Archivoprograma::className(), ['estado_id' => 'estado_id']);
    }

    /**
     * @inheritdoc
     * @return EstadoQuery the active query used by this AR class.
     */
    public static function find(){
        return new EstadoQuery(get_called_class());
    }
    
	public static function getAllEstados(){
        //~ return Estado::find()->all();/*Se incerta interferencia de resultados*/
        return RegisterModeChecker::estadoQyery(Estado::find());
    }

    public static function getFaltantes($instituto){
        $connection = Yii::$app->getDb();
        $estados = $connection->createCommand("SELECT *
                        FROM instituto ins
                        INNER JOIN
                        carrera car
                        ON
                        ins.instituto_id=car.instituto_id
                        INNER JOIN
                        planestudio planes
                        ON
                        planes.carrera_id=car.carrera_id
                        INNER JOIN
                        planmateria planma
                        ON
                        planma.planestudio_id=planes.planestudio_id
                        INNER JOIN
                        programa prog
                        ON
                        prog.planmateria_id=planma.planmateria_id
                        INNER JOIN
                        materia ma
                        ON
                        ma.materia_id=planma.materia_id
                        INNER JOIN
                        archivoprograma arch
                        ON
                        arch.programa_id=prog.programa_id
                        INNER JOIN
                        ano ano
                        ON
                        ano.ano_id=prog.ano_id
                        INNER JOIN
                        estado estado
                        ON
                        estado.estado_id=arch.estado_id
                        WHERE ano.ano=date_part('year', CURRENT_DATE) AND ins.nombre='$instituto' AND (estado.descripcion='A corregir' OR estado.descripcion='Enviado' OR estado.descripcion='En revisión');")->queryAll();
        return $estados;
    }

    public static function getEntregados($instituto){
        $connection = Yii::$app->getDb();
        $estados = $connection->createCommand("SELECT *
                        FROM instituto ins
                        INNER JOIN
                        carrera car
                        ON
                        ins.instituto_id=car.instituto_id
                        INNER JOIN
                        planestudio planes
                        ON
                        planes.carrera_id=car.carrera_id
                        INNER JOIN
                        planmateria planma
                        ON
                        planma.planestudio_id=planes.planestudio_id
                        INNER JOIN
                        programa prog
                        ON
                        prog.planmateria_id=planma.planmateria_id
                        INNER JOIN
                        materia ma
                        ON
                        ma.materia_id=planma.materia_id
                        INNER JOIN
                        archivoprograma arch
                        ON
                        arch.programa_id=prog.programa_id
                        INNER JOIN
                        ano ano
                        ON
                        ano.ano_id=prog.ano_id
                        INNER JOIN
                        estado estado
                        ON
                        estado.estado_id=arch.estado_id
                        WHERE ano.ano=date_part('year', CURRENT_DATE) AND ins.nombre='$instituto' AND (estado.descripcion='Completo' OR estado.descripcion='Firmado');")->queryAll();
        return $estados;
    }
}
