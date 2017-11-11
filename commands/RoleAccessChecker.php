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
	 * Devuelve el contenido  del widget nav en forma dinamica segun la lista de permisos que el sector tenga cargada 
	 **/
	public static function navWidgetContent(){
		return [
			'options' => ['class' => 'sidebar-nav navbar-left'],
			'encodeLabels' => false,
			'items' => [
				['label' => '<span class="glyphicon glyphicon-home"></span> Inicio', 'url' => ['/site/index']],
				['label' => '<span class="glyphicon glyphicon-user"></span> Crear usuarios', 'url' => ['/site/register']],
				   ['label' => '<span class="glyphicon glyphicon-cog"></span> Herramientas','items'=> [
					   (self::actionIsAsignSector('site/register')) ? (['label' => 'Registra nuevo usuario', 'url' => ['/site/register']]):(''),
					   (self::actionIsAsignSector('archivoprograma/index')) ? (['label' => 'Documentos', 'url' => ['/archivoprograma/index']]):(''),
					   (self::actionIsAsignSector('estado/index')) ? (['label' => 'Estados de documentos', 'url' => ['/estado/index']]):(''),
					   (self::actionIsAsignSector('instituto/index')) ? (['label' => 'Intitutos', 'url' => ['/instituto/index']]):(''),
					   (self::actionIsAsignSector('carrera/index')) ? (['label' => 'Carreras', 'url' => ['/carrera/index']]):(''),
					   (self::actionIsAsignSector('materia/index')) ? (['label' => 'Materias', 'url' => ['/materia/index']]):(''),
					   (self::actionIsAsignSector('ano/index')) ? (['label' => 'Años', 'url' => ['/ano/index']]):(''),
					   (self::actionIsAsignSector('sector/index')) ? (['label' => 'Sectores', 'url' => ['/sector/index']]):(''),
					   (self::actionIsAsignSector('asignsector/index')) ? (['label' => 'Asignación de accesos', 'url' => ['/asignsector/index']]):(''),
					   (self::actionIsAsignSector('usuario/index')) ? (['label' => 'Usuarios', 'url' => ['/usuario/index']]):(''),
					   (self::actionIsAsignSector('planestudio/index')) ? (['label' => 'Planes de Estudio', 'url' => ['/planestudio/index']]):(''),
					   (self::actionIsAsignSector('planmateria/index')) ? (['label' => 'Plan de Estudio x Materia', 'url' => ['/planmateria/index']]):(''),
					   (self::actionIsAsignSector('programa/index')) ? (['label' => 'Programas', 'url' => ['/programa/index']]):(''),
					],
					'visible' => !(Yii::$app->user->isGuest),
				  ],
					Yii::$app->user->isGuest ? (
						['label' => '<span class="glyphicon glyphicon-log-in"></span> Login', 'url' => ['/site/login']]
					) : (
					'<li>'
					. Html::beginForm(['/site/logout'], 'post')
					. Html::submitButton(
						'<span class="glyphicon glyphicon-log-out"></span> Logout (' . '  [' . Yii::$app->user->identity->getSector()->one()->descripcion.'] ' . Yii::$app->user->identity->nombre . ' )',
						['class' => 'btn btn-link logout']
					)
					. Html::endForm()
					. '</li>'
				)
			],
		];
	}
}
