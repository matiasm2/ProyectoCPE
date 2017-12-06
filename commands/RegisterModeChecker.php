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
 * Clase usada en cada uno de los controladores de los registros de a
 * en Archivoprograma. Esta clase provee de la información habilitación o no
 * según lo que el autor haya registrado en la columna mode. Cada acción 
 * debe tener implementado previamente el if de control qe referencia a
 * ésta clase.
 */
class RegisterModeChecker extends Controller{
	
	public static function isInstanceDocument($id){
		$ref=new Sector();
		$current=DocumentUpload::find()-> where("programa_id=:programa_id",[":programa_id"=> $id])
		-> andWhere('moderw_id<:moderw_id',[':moderw_id' => 64]);
		if($current->count() != 1) return false;
		return $current->one();
	}

	
	/**
	 * Esta función estática consutla al modelo ModeRegister y deacuerdo
	 * a lo devuelto por identityInterface retorna true si es permitido la 
	 * lectura del registro deacuerdo a la referencia del parámetro:
	 * @param $currentModeRegister: valor mode de la columna de la tabla 
	 * archivoprograma, ejemplo:"OTROS|LECTOESCR_SECTOR|LECTOESCR_USUARIO|LECTOESCR"
	 **/
	public static function registerIsReadable($idRegister){
		/**
		 * DocumentUpload class for table "archivoprograma".
		 * @property integer $archivoprograma_id
		 * @property integer $programa_id
		 * @property integer $usuario_id
		 * @property integer $estado_id
		 * @property string $archivo
		 * @property string $fecha
		 * @property string $mode_reg
		 */
		$currentRegister=DocumentUpload::find()
			-> where('archivoprograma_id=:archivoprograma_id',[':archivoprograma_id'=> $idRegister ])
			-> one();
		$modeUsr=substr($currentRegister->mode_reg,strpos($currentRegister->mode_reg,"_USUARIO|")-strlen($currentRegister->mode_reg));
		$modeSec=substr($currentRegister->mode_reg,strpos($currentRegister->mode_reg,"_SECTOR|"),(strlen($currentRegister->mode_reg)
			-strpos($currentRegister->mode_reg,"_SECTOR|"))-(strlen($msg)-strpos($currentRegister->mode_reg,"_USUARIO|")));
		$modeOtr=substr($currentRegister->mode_reg,strpos($currentRegister->mode_reg,"OTROS|"),strpos($currentRegister->mode_reg,"_SECTOR|"));
		if(Yii::$app->user->isGuest)return false;
		else {
			if($modeUsr == "_USUARIO|LECTOESCR" && 
				Yii::$app->user->identity->usuario_id==$currentRegister->usuario_id)return true;
			else if($modeUsr == "_USUARIO|LECTURA" && 
				Yii::$app->user->identity->usuario_id==$currentRegister->usuario_id)return true;
			else if($modeSec == "_SECTOR|LECTOESCR"&& 
				Yii::$app->user->identity->usuario_id==$currentRegister->usuario_id)return true;
			else if($modeSec == "_SECTOR|LECTURA"&& 
				Yii::$app->user->identity->getSector()->one()->sector_id == 
					Usuario::findIdentity($currentRegister->usuario_id)->sector_id
				)return true;
			else if ($modeOtr == "OTROS|LECTURA"||$modeOtr == "OTROS|LECTOESCR")return true;
			else return false;
		}
	}
	
	/**
	 * Esta función estática consutla al modelo ModeRegister y deacuerdo
	 * a lo devuelto por identityInterface retorna true si es permitido la 
	 * escritura del registro deacuerdo a la referencia del parámetro:
	 * @param $currentModeRegister: valor mode de la columna de la tabla 
	 * archivoprograma.
	 **/
	public static function registerIsWritable($currentModeRegister){
		/**
		 * DocumentUpload class for table "archivoprograma".
		 * @property integer $archivoprograma_id
		 * @property integer $programa_id
		 * @property integer $usuario_id
		 * @property integer $estado_id
		 * @property string $archivo
		 * @property string $fecha
		 * @property string $mode_reg
		 */
		$currentRegister=DocumentUpload::find()
			-> where('archivoprograma_id=:archivoprograma_id',[':archivoprograma_id'=> $idRegister ])
			-> one();
		$modeUsr=substr($currentRegister->mode_reg,strpos($currentRegister->mode_reg,"_USUARIO|")-strlen($currentRegister->mode_reg));
		$modeSec=substr($currentRegister->mode_reg,strpos($currentRegister->mode_reg,"_SECTOR|"),(strlen($currentRegister->mode_reg)
			-strpos($currentRegister->mode_reg,"_SECTOR|"))-(strlen($msg)-strpos($currentRegister->mode_reg,"_USUARIO|")));
		$modeOtr=substr($currentRegister->mode_reg,strpos($currentRegister->mode_reg,"OTROS|"),strpos($currentRegister->mode_reg,"_SECTOR|"));
		if(Yii::$app->user->isGuest)return false;
		else {
			if($modeUsr == "_USUARIO|LECTOESCR" && 
				Yii::$app->user->identity->usuario_id==$currentRegister->usuario_id)return true;
			else if($modeUsr == "_USUARIO|ESCRITURA" && 
				Yii::$app->user->identity->usuario_id==$currentRegister->usuario_id)return true;
			else if($modeSec == "_SECTOR|LECTOESCR"&& 
				Yii::$app->user->identity->usuario_id==$currentRegister->usuario_id)return true;
			else if($modeSec == "_SECTOR|ESCRITURA"&& 
				Yii::$app->user->identity->getSector()->one()->sector_id == 
					Usuario::findIdentity($currentRegister->usuario_id)->sector_id
				)return true;
			else if ($modeOtr == "OTROS|ESCRITURA"||$modeOtr == "OTROS|LECTOESCR")return true;
			else return false;
		}
	}
	
	private static function orOthers($query){
		$query-> orWhere(['or',['like','moderw.moderw', 'OTROS|LECTOESCR'],
						['like','moderw.moderw', 'OTROS|LECTURA'],
						['like','moderw.moderw', 'OTROS|ESCRITURA'],
						]);
		return $query;
	}
	
	/**
	 * Devuelve la consulta con los elementos accesibles al modelo indicado por joinModel y los campos 
	 * usuario_id y sector_id del logoneado..
	 **/	 
	private static function andUsuarioIdLogged($query){
		$query-> orWhere('usuario_id=:usuario_id',[':usuario_id' => Yii::$app->user->identity->usuario_id]);
		$query->andFilterWhere(['or',['like','moderw.moderw', '_USUARIO|LECTOESCR'],
										['like','moderw.moderw', '_USUARIO|LECTURA'],
										['like','moderw.moderw', '_USUARIO|ESCRITURA'],
										]);
		$query = self::orOthers($query);
		return $query;
	}
	
	private static function andSectorIdLogged($query){
		$query->andFilterWhere(['like','archivoprograma.archivo','sector'.Yii::$app->user->identity->sector_id]);
		$query->andFilterWhere(['or',['like','moderw.moderw', '_SECTOR|LECTOESCR'],
										['like','moderw.moderw', '_SECTOR|LECTURA'],
										['like','moderw.moderw', '_SECTOR|ESCRITURA'],
										]);
		$query = self::orOthers($query);
		return $query;
	}

	/**
	 * Devuelve la consulta con los elementos accesibles al modelo,  requisito: debe estar joineado previamente con 
	 * moderw.
	 * 
	 * select usuario_id,archivo,m.moderw from archivoprograma a join moderw m on m.moderw_id=a.moderw_id where ((m.moderw like '%OTROS|LECTOESCR%') or (m.moderw like '%OTROS|LECTURA%') or (m.moderw like '%OTROS|ESCRITURA%') or (m.moderw like '%_SECTOR|LECTOESCR%') or (m.moderw like '%_SECTOR|LECTURA%')or (m.moderw like '%OTROS|ESCRITURA%') or (m.moderw like '%_USUARIO|LECTOESCR%') or (m.moderw like '%_USUARIO|LECTURA%') or (m.moderw like '%_USUARIO|ESCRITURA%'));
	 * 
	 **/
	public static function joinedQueryMode($query){
		if(!Yii::$app->user->isGuest){
			$query -> andFilterWhere(['or',['like','moderw.moderw', '|LECTOESCR'],
										['like','moderw.moderw', '|LECTURA'],
										['like','moderw.moderw', '|ESCRITURA'],
										]);
			$query=self::andSectorIdLogged($query);
			$query=self::andUsuarioIdLogged($query);
			}
		return $query;
	}
	 
	/**
	* Interfiere y devuelve la consulta con los elementos accesibles al modelo indicado por el sector_id
	* del logoneado..
	**/
	public static function estadoQuery($modelFind){
		if(Yii::$app->user->identity->getSector()->one()->sector_id < 4)/*Si el sector del logoneado es menor a 4 entonces*/
			return $modelFind->all();									/*no es un usuario de Institutos... devuelve todo*/	
		else return $modelFind->fromInstitutos(); /* Sino filtra segun la funcion definida en la clase EstadoQuery*/
	}

	public static function formatDocument($model){
		$new=date('YmdHis').'sector'.Yii::$app->user->identity->getSector()->one()->sector_id.
		'.'.$model->archivo->extension;
		rename('uploads/'.$model->archivo,'uploads/'.$new);
		return $new;
	}


	public static function test($currentModeRegister,$msg){
		/**
		 * DocumentUpload class for table "archivoprograma".
		 * @property integer $archivoprograma_id
		 * @property integer $programa_id
		 * @property integer $usuario_id
		 * @property integer $estado_id
		 * @property string $archivo
		 * @property string $fecha
		 * @property string $mode
		 */
		 if($currentModeRegister!=-1){
			$currentRegister=DocumentUpload::find()
				-> where('archivoprograma_id=:archivoprograma_id',[':archivoprograma_id'=> $idRegister ])
				-> one();
			$modeUsr=substr($currentRegister->mode_reg,strpos($currentRegister->mode_reg,"_USUARIO|")-strlen($currentRegister->mode_reg));
			$modeSec=substr($currentRegister->mode_reg,strpos($currentRegister->mode_reg,"_SECTOR|"),(strlen($currentRegister->mode_reg)
				-strpos($currentRegister->mode_reg,"_SECTOR|"))-(strlen($msg)-strpos($currentRegister->mode_reg,"_USUARIO|")));
			$modeOtr=substr($currentRegister->mode_reg,strpos($currentRegister->mode_reg,"OTROS|"),strpos($currentRegister->mode_reg,"_SECTOR|"));
			return $modeUsr."##".$modeSec."##".modeOtr;
		}else{
			//~ se prueba con "OTROS|LECTOESCR_SECTOR|LECTOESCR_USUARIO|LECTOESCR"			
			$modeUsr=substr($msg,strpos($msg,"_USUARIO|")-strlen($msg));
			$modeSec=substr($msg,strpos($msg,"_SECTOR|"),(strlen($msg)-strpos($msg,"_SECTOR|"))-(strlen($msg)-strpos($msg,"_USUARIO|")));
			$modeOtr=substr($msg,strpos($msg,"OTROS|"),strpos($msg,"_SECTOR|"));
			return "1)strlen=".strlen($msg)."  2)Strpos(_USUARIO)=".strpos($msg,"_USUARIO|")."  3)Strpos(_SECTOR|)=".strpos($msg,"_SECTOR|")."  4)Strpos(OTROS)=".strpos($msg,"OTROS|")." </p><p>-<>-".$modeUsr."-<>-".$modeSec."-<>-".$modeOtr."-<>-";
		}
	}
}
