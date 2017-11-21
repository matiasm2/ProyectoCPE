<?php

namespace app\controllers;

use Yii;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Usuario;
use app\models\Usuariocarrera;
use app\models\Carrera;
use app\models\RegisterForm;
use app\models\Sector;
use app\models\Estado;
use app\models\Instituto;
use app\models\Usuariotipo;
use app\models\InvalidoUsuarioModel;
use app\models\Asignsector;
use app\commands\Mailto;
use app\commands\Intranet;
use app\commands\RandKey;
use app\commands\RoleAccessChecker;
use app\controllers\ErrorController;

class SiteController extends Controller{
    /**
     * @inheritdoc
     */
     public function behaviors() {
         return [
             'access' => [
                 'class' => AccessControl::className(),
                 'only' => ['logout', 'contact', 'register', 'login',],
                 'rules' => [
                     [
                         'allow' => true,
                         'actions' => ['login', 'logout', 'contact', 'register',],
                         'roles' => ['?'],
                     ],
                     [
                         'allow' => true,
                         'actions' => ['logout', 'register',],
                         'roles' => ['@'],
                     ],
                     [
                         'allow' => false,
                         'actions' => ['contact', 'login'],
                         'roles' => ['@'],
                     ],
                 ],
             ],
             'verbs' => [
                 'class' => VerbFilter::className(),
                 'actions' => [
                     'logout' => ['post'],
                 ],
             ],
         ];
     }
	 	
    public function actions(){
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
 public function actionIndex(){
    try{
		$numUsr=Usuario::find()->count();
		$instituto = "";
		$carrera = "";
		$countEstadosFaltantesPorIns = 0;
		$countEstadosEntregadoPorIns = 0;
		if(Yii::$app->user->isGuest) {$msg='No logoneado...';} 
			else {$msg='Logoneado!';
				}
		if (($numUsr==0)||(RoleAccessChecker::actionIsAsignSector('site/indexUserAdmCPE'))) {
			 $estadosFaltantesIngyAgr = Estado::getFaltantes("Instituto de Ingeniería y Agronomía");
			 $countEstadosFaltantesIngyAgr = count ($estadosFaltantesIngyAgr);

			$estadosEntregadosIngyAgr = Estado::getEntregados("Instituto de Ingeniería y Agronomía");
			$countEstadosEntregadoIngyAgr = count ($estadosEntregadosIngyAgr);

			$estadosFaltantesEIni= Estado::getFaltantesIniciales();
			$countEstadosFaltantesEIni  = count ($estadosFaltantesEIni );
			 
			$estadosEntregadosEIni = Estado::getEntregadosIniciales();
			$countEstadosEntregadoEIni  = count ($estadosEntregadosEIni);

			$estadosFaltantesSalud= Estado::getFaltantes("Instituto de Ciencias de la Salud");
			$countEstadosFaltantesSalud  = count ($estadosFaltantesSalud );
			 
			$estadosEntregadosSalud = Estado::getEntregados("Instituto de Ciencias de la Salud");
			$countEstadosEntregadoSalud  = count ($estadosEntregadosSalud);

			$estadosFaltantesSocyAdm= Estado::getFaltantes("Instituto de Ciencias Sociales y Administración");
			$countEstadosFaltantesSocyAdm = count ($estadosFaltantesSocyAdm );
			 
			$estadosEntregadosSocyAdm = Estado::getEntregados("Instituto de Ciencias Sociales y Administración");
			$countEstadosEntregadoSocyAdm  = count ($estadosEntregadosSocyAdm);

			return $this->render('indexUserAdmCPE',[
				'countFaltantesIngyAgr' => $countEstadosFaltantesIngyAgr,
				'countEntregadosIngyAgr' => $countEstadosEntregadoIngyAgr,
				'countFaltantesEIni' => $countEstadosFaltantesEIni,
				'countEntregadosEIni' => $countEstadosEntregadoEIni,
				'countFaltantesSalud' => $countEstadosFaltantesSalud,
				'countEntregadosSalud' => $countEstadosEntregadoSalud,
				'countFaltantesSocyAdm' => $countEstadosFaltantesSocyAdm,
				'countEntregadosSocyAdm' => $countEstadosEntregadoSocyAdm,]);
		}
		else if (Yii::$app->user->identity != null) {
			$instituto = Yii::$app->user->identity->getSector()->one()->descripcion;

			$carrera_id = Yii::$app->user->identity->getUsuariocarreras()->one();
			if ($carrera_id){
				$carreraid = $carrera_id->carrera_id;
				$carrera = Carrera::find()->where("carrera_id=:carrera_id", [":carrera_id" => $carreraid])->one()->descripcion;

				$instituto_id = Carrera::find()->where("carrera_id=:carrera_id", [":carrera_id" => $carreraid])->one()->instituto_id;

				$instituto = Instituto::find()->where("instituto_id=:instituto_id", [":instituto_id" => $instituto_id])->one()->nombre;

				$estadosFaltantesPorIns = Estado::getFaltantesPorInst($instituto,$carrera);
				$countEstadosFaltantesPorIns = count ($estadosFaltantesPorIns);

				$estadosEntregadosPorIns = Estado::getEntregadosPorInst($instituto,$carrera);
				$countEstadosEntregadoPorIns = count ($estadosEntregadosPorIns);	
			}else{
				$estadosFaltantesPorIns = Estado::getFaltantesIniciales();
				$countEstadosFaltantesPorIns = count ($estadosFaltantesPorIns);

				$estadosEntregadosPorIns = Estado::getEntregadosIniciales();
				$countEstadosEntregadoPorIns = count ($estadosEntregadosPorIns);	

			}
		   	return $this->render('index',['instituto'=>$instituto,
		   		'carrera'=>$carrera,
		   		'countEstadosFaltantesPorIns' => $countEstadosFaltantesPorIns,
		   		'countEstadosEntregadoPorIns' => $countEstadosEntregadoPorIns,]); 
		}
		else{
			return $this->render('index',[
				'carrera'=>$carrera,
				'instituto'=>$instituto,	
				'countEstadosFaltantesPorIns' => $countEstadosFaltantesPorIns,
		   		'countEstadosEntregadoPorIns' => $countEstadosEntregadoPorIns,]);
		}
		
		} catch (\yii\db\Exception $e) {return $this->redirect(['error/db-grant-error',]);}
   }
	
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin(){
        try{
			if (!Yii::$app->user->isGuest) return $this->goHome();

			$model = new LoginForm();
			if ($model->load(Yii::$app->request->post()) && $model->login()) return $this->goBack();
			return $this->render('login', ['model' => $model, ]);
 		} catch (\yii\db\Exception $e) {return $this->redirect(['error/db-grant-error',]);}
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact(){
        try{
			$model = new ContactForm();
			if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
				Yii::$app->session->setFlash('contactFormSubmitted');

				return $this->refresh();
			}
			return $this->render('contact', [
				'model' => $model,
			]);
        } catch (\yii\db\Exception $e) {return $this->redirect(['error/db-grant-error',]);}
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }


    public function actionConfirm() {
         try{
		   if (Yii::$app->request->get()) {
				$id = Html::encode($_GET["id"]);$authKey = $_GET["authKey"];
				if ((int) $id) {
					$usr = Usuario::find()
							->where("usuario_id=:usuario_id", [":usuario_id" => $id])
							->andWhere("authkeyuser=:authkeyuser", [":authkeyuser" => $authKey]);
					if ($usr->count() == 1) {
						$activar = Usuario:: find()
										->where("usuario_id=:usuario_id", [":usuario_id" => $id])
										->andWhere("authkeyuser=:authkeyuser", [":authkeyuser" => $authKey])->one();
						$activar->activuser = 1;
					if ($activar->update() !== false) {
						echo "Registro ok, redireccionando..";
						echo "<meta http-equiv='refresh' content='8; " . Url::toRoute("site/login") . "'>";
					} else {
						echo "Registro fallido, redireccionando..";
						echo "<meta http-equiv='refresh' content='8; " . Url::toRoute("site/login") . "'>";
					}
				}
				} else return $this->redirect(["site/login"]);
			}
 		} catch (\yii\db\Exception $e) {return $this->redirect(['error/db-grant-error',]);}
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionRegister() {
        try{
			$numUsr=Usuario::find()->count();
			if (($numUsr==0)||(RoleAccessChecker::actionIsAsignSector('site/register'))) {
				$model = new RegisterForm();/*model= formulario de registro
											public $Nombre;
											public $Apellido;
											public $email;
											public $password;
											public $password_repeat;
											public $sector_id*/
				$ref=new Sector();/*$ref=  referencia de la descripcion de sector_id para la lista dropdown
								* @property integer $sector_id
								* @property string $descripcion
								*/
				if ($numUsr == 0){$subModel=$ref->find()->where('sector_id=:sector_id',[':sector_id'=> 1]);}
					/*$subModel= contenido de la lista desplegable si es el primer registro habilita CPE Admin*/
				else $subModel=$ref->find()->where('sector_id>:sector_id',[':sector_id'=>1]);
					/* $subModel= contenido de la lista desplegable si no es el primer registro muestra los demas e impide CPE Admin
					 * existiría un solo CPE Admin, si se quiere mas de uno cambiar =>1 por =>0 */
				$msg = "Cantidad de usuarios= ". $numUsr;
				if ($model->load(Yii::$app->request->post()) && Yii::$app->request->isAjax) {
					Yii::$app->response->format = Response::FORMAT_JSON;
					return ActiveForm::validate($model);/* ejecuta formulario de entrada*/
				}
				if ($model->load(Yii::$app->request->post())) {/*lee respuesta*/
					if ($model->validate()) {/*si valida ok:*/
						$table = new Usuario();/*se crea nuevo registro de la tabla usuario*/
						$this->fillModelUsuario($table, $model);/*llena nuevo registro con valores del formulario*/
						if ($table->insert()) {/*si inserta nuevo registro a la tabla usuario: */
							$sector = Sector::find()->where("sector_id=:sector_id", [":sector_id" => $model->sector_id])->one()->descripcion;
							$this->setUsuarioCarrera($sector, $table->usuario_id);
							$msg = $this->sendConfirm($table);/* llama a la funcion que envía email de confirmación */
							$this->nullModelRegister($model);/* llama a la funcion que borra el formulario */
						} else $msg = "Ha ocurrido un error al llevar a cabo tu  registro\n";/* error causado porque falla la base de datos */
					} else $model->getErrors();/* error detectado por la validacion del formulario */
				}
				return $this->render("register", ["model" => $model,"subModel" => $subModel, "msg" => $msg]);/* Sin errores detectados */
			}else return $this->redirect(['error/level-access-error',]);/* error detectado por RoleAccessChecker: Sin acceso. */
 		} catch (\yii\db\Exception $e) {return $this->redirect(['error/db-grant-error',]);}
    }
    
    private function setUsuarioCarrera($sector, $usuario_id){
		$carrera = explode("- ", trim($sector, "- "));
		unset($carrera[0]); 
		$final_carrera = implode($carrera);
		$carrera_id = Carrera::find()->where("descripcion=:descripcion", [":descripcion" => $final_carrera])->one();
		if ($carrera_id){
			$carreraid = $carrera_id->carrera_id;
			$table = new Usuariocarrera();
			$table->carrera_id = $carreraid;
			$table->usuario_id = $usuario_id;
			$table->insert();
		}

	}
	/**
	 * Borra campos del formulario.
	 * */
	private function nullModelRegister($model){
		$model->Nombre = null;
		$model->Apellido = null;
		$model->email = null;
		$model->password = null;
		$model->password_repeat = null;
    }
    
	/**
	 * Completa campos del modelo usuario con los datos del formulario de registro
	 * @param $src2: instancia del modelo RegisterForm
	 * @param $src: instancia del modelo Usuario
	 * */
    private function fillModelUsuario($src,$src2){
		$src->loadDefaultValues();
		$src->sector_id = $src2->sector_id;
		$src->nombre = $src2->Nombre;
		$src->apellido = $src2->Apellido;
		$src->passworduser = crypt($src2->password, Yii::$app->params["salt"]);
		$src->mailuser = $src2->email;
		$src->authkeyuser = RandKey::randKey("abcdef0123456789", 200);

    }
	
	/**
	 * Envía un email de confirmacion conteniendo un token de seguridad para que el destinatario active el registro
	 * clickeando en el link recibido. 
	 * */
    private function sendConfirm($table){
		$user = Usuario::find()->Where("authkeyuser=:authkeyuser", [":authkeyuser" => $table->authkeyuser])->one();
		$id = urlencode($user->usuario_id);
		$authKey = urlencode($user->authkeyuser);
		$subject = "Confirmar registro";
		$body = "<h1>Haga click en el siguiente enlace para finalizar tu registro</h1>";
		$link = Intranet::getUrlHead() . "/ProyectoCPE/web/index.php?r=site/confirm&id=" . $id . "&authKey=" . $authKey;
		$body .= "<a href='" . $link . "'>Confirmar</a>";
		if (Yii::$app->params["adminEmail"] != 'email@gmail.com') {
		  Yii::$app->mailer->compose()
				->setTo($user->mailuser)
				->setFrom([Yii::$app->params["adminEmail"] => Yii::$app->params["title"]])
				->setSubject($subject)
				->setHtmlBody($body)
				->send();
                echo "Enhorabuena, ahora sólo falta que confirmes tu registro en tu cuenta de correo!";
				return "Enhorabuena, ahora sólo falta que confirmes tu registro en tu cuenta de correo!";
		} else return "Confirmación alternativa " . Mailto::getUrlMailto(
			$user->mailUser, $subject, "", "", "Haga click en el siguiente enlace para finalizar tu registro", $link,
			"\nClick aquí para reenviar confirmación vía mailto:");
    }

}
