<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use Yii;
use yii\console\Controller;
use app\models\Asignsector;
use app\models\Actionrole;

/**
 * Clase usada en cada uno de los controladores de las acciones registradas
 * en Asignsector. Esta clase provee de la información habilitación o no
 * según lo que CPE Admin haya registrado en Assignsector. Cada acción 
 * debe tener implementado previamente el if de control qe referencia a
 * ésta clase.
 */
class RoleAccessChecker extends Controller{
	
	/**
	 * Esta función estática consutla a la tabla Asignsector y deacuerdo
	 * a lo devuelto por identityInterface retorna true si existe o false
	 * si no existe acceso a la acción referida en el parámetro:
	 * @param $currentAction: nombre de la acción que se evalúa según lo
	 * indicado durante el contexto de ejecición
	 **/
	public function actionIsAsignSector($currentAction){
		/**
		 * $allAsignsector is the model class for table "asignsector".
		 * @property integer $asignsector_id
		 * @property integer $actionrole_id
		 * @property integer $sector_id
		 * @property Actionrole $actionrole
		 * @property Sector $sector
		 */
		$allAsignsector=new Asignsector();
		/**
		 * $allActtionRoles is the model class for table "actionrole".
		 * @property integer $actionrole_id
		 * @property string $action_disp
		 * @property string $descripcion
		 * @property Asignsector[] $asignsectors
		 */
		$allActionRoles=new Actionrole();
		//){$subModel=$ref->find()->where('sector_id=:sector_id',[':sector_id'=> 1]);}
		//Filtra el Actionole con vista/accion que viene por parametro
		$actionIsEnable=$allActionRoles->find()
			->where('action_disp=:action_disp',[':action_disp'=> $currentAction ]);
		if ( $actionIsEnabled === null ) return false;//Si no exise vista/accion pasada por parametro
		//Filtra el Asignsector con el sector_id de identity interface (el logoneado) y el action_id
		//antes encontrado por actionIsEnabled
		$asign=$allAsignsector->find()
			->where('sector_id=:sector_id',[':sector_id'=> 
				Yii::$app->user->identity->getSector()->sector_id ])
			->andWhere('actionrole_id=:actionrole_id',[':actionrole_id'=> $actionIsEnable->actionrole_id])
			->one();
		if ( $asign === null ) return false; // si CPE Admin no asigno el actionrole_id al sector_id actual
		else return true;//si encuentra el registro ya esta filtrado por el sector_id del identityInterface y
						 //tambien por el actionrole_id encontrado por el parametro, entonces significa que la
						 //accion esta registrada en Actionrole  
	}
}
