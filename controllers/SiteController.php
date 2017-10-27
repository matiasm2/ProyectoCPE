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
use app\models\RegisterForm;
use app\models\Sector;
use app\models\Usuariotipo;
use app\models\InvalidoUsuarioModel;
use app\commands\Mailto;
use app\commands\Intranet;
use app\commands\RandKey;


class SiteController extends Controller
{
	public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['login', 'logout', 'CPEAdmin', 'instituto', 'prensa', 'CPE', 'register', 'contact', 'about' /*, 'alguna_accion'*/], //solo debe aplicarse a las acciones login, logout , admin, instituto, prensa y cpe. Todas las demas acciones no estan sujetas al control de acceso
                'rules' => [                              //reglas
                    [
                        'actions' => ['login', 'logout', 'register', 'contact', 'about',  /*, 'alguna_accion'*/], //para la accion login
                        'allow' => true, //Todos los permisos aceptados
                        'roles' => ['?'], //Tienen acceso a esta accion todos los usuarios invitados
                    ],
                    [
                        //el administrador tiene permisos sobre las siguientes acciones
                        'allow' => true,
                        'actions' => ['logout','contact', 'CPEAdmin'],
                        'roles' => ['@'],
                    ],
                    [
                        //el administrador no tiene permisos sobre las siguientes acciones
                        'actions' => ['register', 'about', 'login'],
                        'allow' => false,
                        'roles' => ['@'], //El arroba es para el usuario autenticado
                        'matchCallback' => function ($rule, $action) {                    //permite escribir la l?gica de comprobaci?n de acceso arbitraria, las paginas que se intentan acceder solo pueden ser permitidas si es un...
								return Usuariotipo::CPEAdmin(Yii::$app->user->identity->sectorID);
								//Llamada al m?todo que comprueba si es un administrador
								//Retorno el metodo del modelo que comprueba el tipo de usuario que es por el rol (1,2,3,4) etc y que devuelve true o false
							},
                    ],
                    [
                        //usuario de instituto tiene permisos sobre las siguientes acciones
                        'actions' => ['logout', 'contact', 'instituto'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        //usuario instituto no tiene permisos sobre las siguientes acciones
                        'actions' => ['register', 'about', 'login'],
                        'allow' => false,
                        'roles' => ['@'], //El arroba es para el usuario autenticado
                        'matchCallback' => function ($rule, $action) {
								return Usuariotipo::usuarioInstituto(Yii::$app->user->identity->sectorID);
								//Llamada al m?todo que comprueba si es un usuario de instituto
							},
                    ],
                    [
                        //prensa tiene permisos sobre las siguientes acciones
                        'actions' => ['logout', 'contact', 'prensa'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        //prensa no tiene permisos sobre las siguientes acciones
                        'actions' => ['register', 'about', 'login'],
                        'allow' => false,
                        'roles' => ['@'], //El arroba es para el usuario autenticado
                        'matchCallback' => function ($rule, $action) {
								return Usuariotipo::usuarioPrensa(Yii::$app->user->identity->sectorID);
								//Llamada al m?todo que comprueba si es un usuario prensa
							},
                    ],
                    [
                        //CPE tiene permisos sobre las siguientes acciones
                        'actions' => ['logout', 'contact', 'CPE'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        //CPE no tiene permisos sobre las siguientes acciones
                        'actions' => ['register', 'about', 'login'],
                        'allow' => false,
                        'roles' => ['@'], //El arroba es para el usuario autenticado
                        'matchCallback' => function ($rule, $action) {
								return Usuariotipo::usuarioCPE(Yii::$app->user->identity->sectorID);
								//Llamada al m?todo que comprueba si es un usuario CPE
							},
                    ],
                ],
            ],
            //Controla el modo en que se accede a las acciones, en este caso a la acci?n logout
            //s?lo se puede acceder a trav?s del m?todo post
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    /**
     * @inheritdoc
     */
     /*public function behaviors() //behaviors viejo
	 {
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
     }*/
	 

    /**
     * @inheritdoc
     */
	 
    public function actions() {
        //Control de errores en caso de que se quiera acceder a las acciones de este controlador
        if (!Yii::$app->user->isGuest) {                                                                              //si el usuario esta logeado, o sea no es invitado
            if (Yii::$app->user->identity->sectorID == 1) {                                                                //si el usuario es administrador
                Yii::$app->errorHandler->errorAction = 'CPEAdmin/error';                                               //se muestra la pantalla de error de agencia y su respectivo layout
            } elseif (Yii::$app->user->identity->sectorID == 2) {
                Yii::$app->errorHandler->errorAction = 'CPE/error';
            } elseif (Yii::$app->user->identity->sectorID == 3) {
                Yii::$app->errorHandler->errorAction = 'instituto/error';
            } elseif (Yii::$app->user->identity->sectorID == 4) {
                Yii::$app->errorHandler->errorAction = 'prensa/error';
            } else {
                Yii::$app->errorHandler->errorAction = 'site/error';
            }
        } else {                                                                                                      //sino (si el usuario es invitado) se muestra la pagina de error del site
            Yii::$app->errorHandler->errorAction = 'site/error';
        }
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
	/*
    public function actions() //viejo action
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }*/

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

	/*
    // funciones para las vistas dependiendo el tipo de usuario para agregar luego
    public function actionCPEAdmin() {
        return $this->redirect(['cpeadmin/index']);
    }

    public function actionInstituto() {
        return $this->redirect(['instituto/index']);
    }

    public function actionPrensa() {
        return $this->redirect(['prensa/index']);
    }

    public function actionCPE() {
        return $this->redirect(['cpe/index']);
    }
	*/
	
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
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
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
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


    public function actionRegister(){
      $model=new RegisterForm();
      $subModel=new Sector();
      $msg=null;

      if ($model->load(Yii::$app->request->post()) && Yii::$app->request->isAjax) {
        Yii::$app->response->format = Response::FORMAT_JSON;
        return ActiveForm::validate($model);
      }

      if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()){
          $table = new Usuario();
          $table->loadDefaultValues();
          $table->sector_id = $model->sector_id;
          $table->nombre = $model->Nombre;
          $table->apellido = $model->Apellido;
          $table->passworduser = crypt($model->password, Yii::$app->params["salt"]);
          $table->mailuser = $model->email;
          $table->authkeyuser = RandKey::randKey("abcdef0123456789", 200);

          if ($table->insert()){
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
                    $msg = "Enhorabuena, ahora sólo falta que confirmes tu registro en tu cuenta de correo ";
            } else {
              $msg = "Confirmación alternativa " . Mailto::getUrlMailto(
                $user->mailUser, $subject, "", "", "Haga click en el siguiente enlace para finalizar tu registro", $link,
                "\nClick aquí para reenviar confirmación vía mailto:");
            }

            $model->Nombre = null;
            $model->Apellido = null;
            $model->email = null;
            $model->password = null;
            $model->password_repeat = null;
          } else {
            $msg = "Ha ocurrido un error al llevar a cabo tu  registro\n";
          }
        } else {
          $model->getErrors();
        }
      }
      return $this->render("register", ["model" => $model,"subModel" => $subModel, "msg" => $msg]);
    }


    public function actionConfirm() {
        if (Yii::$app->request->get()) {
            $id = Html::encode($_GET["id"]);
            $authKey = $_GET["authKey"];
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
                } else
                    return $this->redirect(["site/login"]);
            } else
                return $this->redirect(["site/login"]);
        }
    }


}
