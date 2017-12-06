<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use Yii;
use yii\console\Controller;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\StringHelper;
use app\models\Usuario;
use app\models\DocumentUpload;
use app\models\Sector;
use app\models\Estado;

/**
 * Clase usada en 
 */
class Stadistics extends Controller{
	
	public static function test(){
		$current=DocumentUpload::find()
			-> innerJoin('moderw','moderw.moderw_id=archivoprograma.moderw_id')
			-> innerJoin('programa','programa.programa_id=archivoprograma.programa_id')
			-> innerJoin('estado','estado.estado_id=archivoprograma.estado_id')
			-> andFilterWhere(['or',['like','moderw.moderw', '|LECTOESCR'],
										['like','moderw.moderw', '|LECTURA'],
										['like','moderw.moderw', '|ESCRITURA'],
										])
			-> andFilterWhere(['or',['like','archivoprograma.archivo', 'sector2'],/*cpeuser*/
				['like','archivoprograma.archivo', 'sector4'],/*iniciales*/
				])
			-> andWhere('programa.programa_id=:programa_id',[':programa_id'=>11])
			-> one() -> estado -> descripcion
			
		;
		return $current;
	}
}
