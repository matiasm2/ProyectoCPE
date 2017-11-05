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
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\StringHelper;


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
	public static function actionIsAsignSector($currentAction){
		if(Yii::$app->user->isGuest)return false;
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
		$actionIsEnable = $allActionRoles->find()
			->where('action_disp=:action_disp',[':action_disp'=> $currentAction ])->one();
		if ( $actionIsEnable === null ) return false;//Si no exise vista/accion pasada por parametro
		//Filtra el Asignsector con el sector_id de identity interface (el logoneado) y el action_id
		//antes encontrado por actionIsEnabled
		$asign = $allAsignsector->find()
			-> where('actionrole_id=:actionrole_id',[':actionrole_id'=> $actionIsEnable->actionrole_id, ])
			-> andWhere('sector_id=:sector_id',[':sector_id'=> 
				Yii::$app->user->identity->getSector()->one()->sector_id])->one();
		if ( $asign === null ) return false; // si CPE Admin no asigno el actionrole_id al sector_id actual
		else return true;//si encuentra el registro ya esta filtrado por el sector_id del identityInterface y
						 //tambien por el actionrole_id encontrado por el parametro, entonces significa que la
						 //accion esta registrada en Actionrole  
	}
	/**
	 * Devolucion de los asignsector formateado para items de Nav::widget del main.php de yii
	 * */
	public static function listNavItemsAccess(){			
		$out='';	
		/**
		 * $allAsignsector is the model class for table "asignsector".
		 * @property integer $asignsector_id
		 * @property integer $actionrole_id
		 * @property integer $sector_id
		 * @property Actionrole $actionrole
		 * @property Sector $sector
		 */
		$allAsignsector=new Asignsector();
		$query1 = $allAsignsector->find()
			-> where('sector_id=:sector_id',[':sector_id'=>
				Yii::$app->user->identity->getSector()->one()->sector_id]);
		foreach($query1->each() as $assign){
			//['label' => 'Archivos', 'url' => ['/archivoprograma/index']],
			//['label' => 'Usuarios', 'url' => ['/usuario/index']],
			$out .= '[\'label\' => \''.$assign->getActionrole()->one()->descripcion.
				'\',\'url\'=>[\''.$assign->getActionrole()->one()->action_disp. '\', ]] , ';
		}
		return $out;
	}

	/**
	 * Devolucion de los asignsector formateado para items de Nav::widget del main.php de yii
	 * 
	public static function navItemsAccess(){
		$map = ArrayHelper::map(self::arrNavItemsAccess()),'lavel','url');
		return $map;
	}*/
	
	public static function arrNavItemsAccess(){
		$arr;	
		/**
		 * $allAsignsector is the model class for table "asignsector".
		 * @property integer $asignsector_id
		 * @property integer $actionrole_id
		 * @property integer $sector_id
		 * @property Actionrole $actionrole
		 * @property Sector $sector
		 */
		$allAsignsector=new Asignsector();
		$query2 = $allAsignsector->find()
			-> where('sector_id=:sector_id',[':sector_id'=>
				Yii::$app->user->identity->getSector()->one()->sector_id]);
		foreach($query2->each() as $assign2){
			//['label' => 'Archivos', 'url' => ['/archivoprograma/index']],
			//['label' => 'Usuarios', 'url' => ['/usuario/index']],
			$arr=ArrayHelper::merge(Array(['lavel'=> $assign2->getActionrole()->one()->descripcion,
				'url',[$assign2->getActionrole()->one()->action_disp],]),$arr);
		}
		return $arr;
	}


	public static function testQery($currentAction){
		$out='TestOut in = '.$currentAction.' ,IsAcEn= ';
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
		$actionIsEnable = $allActionRoles->find()
			->where('action_disp=:action_disp',[':action_disp'=> $currentAction, ])->one();
		$out .= $actionIsEnable->actionrole_id.'|';
		$out .= $actionIsEnable->action_disp.'|';
		$out .= $actionIsEnable->descripcion.'|, sec =';
		$asign = $allAsignsector->find()
			-> where('actionrole_id=:actionrole_id',[':actionrole_id'=> $actionIsEnable->actionrole_id, ])
			-> andWhere('sector_id=:sector_id',[':sector_id'=> 
				Yii::$app->user->identity->getSector()->one()->sector_id])->one();
		$out .= Yii::$app->user->identity->getSector()->one()->sector_id.'|, Asig= ';
		$out .= $asign->asignsector_id.'|';
		$out .= $asign->actionrole_id.'|';
		$out .= $asign->sector_id.'|';
		
		return $out;
	}
	
	public static function navWidgetContent(){
		$arr= ['options' => 
				['class' => 'navbar-nav navbar-right'],
				'items' => [
				['label' => 'Home', 'url' => ['/site/index']],
				['label' => 'About', 'url' => ['/site/about']],
				['label' => 'Contact', 'url' => ['/site/contact']],
				['label' => 'Register', 'url' => ['/site/register']],
				['label' => 'Dropdown','items'=> [
					['label' => 'Archivos', 'url' => ['/archivoprograma/index']],
					['label' => 'Usuarios', 'url' => ['/usuario/index']],
					'<li class="divider"></li>',
					],
				'visible' => !(Yii::$app->user->isGuest),
				], Yii::$app->user->isGuest ? (
					['label' => 'Login', 'url' => ['/site/login']]
				) : (
					'<li>'
					. Html::beginForm(['/site/logout'], 'post')
					. Html::submitButton(
						'Logout (' . '  [' . Yii::$app->user->identity->getSector()->one()->descripcion.'] ' . Yii::$app->user->identity->nombre . ' )',
						['class' => 'btn btn-link logout']
					)
					. Html::endForm()
					. '</li>'
				)
			],
		];
			//~ $allAsignsector=new Asignsector();
			//~ $query2 = $allAsignsector->find()
				//~ -> where('sector_id=:sector_id',[':sector_id'=>
					//~ Yii::$app->user->identity->getSector()->one()->sector_id]);
			//~ foreach($query2->each() as $assign2){
				//~ ArrayHelper::setValue($arr,'items.lavel.Dropdown.items',
						//~ ['lavel'=>$assign2->getActionrole()->one()->descripcion,]);
				//~ ArrayHelper::setValue($arr,'items.lavel.Dropdown.items',
							//~ ['url'=>$assign2->getActionrole()->one()->action_disp,]);
					//~ }
		return $arr;
	}
}
