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
use app\commands\Mailto;
use app\commands\Intranet;
use app\commands\RandKey;

class SiteController extends Controller
{
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

    /**
     * @inheritdoc
     */
    public function actions()
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
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

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
          $table->nombre = $model->username;
          $table->apellido = $model->usersurname;
          $table->passworduser = crypt($model->password, Yii::$app->params["salt"]);
          $table->mailuser = $model->email;
          $table->authkeyuser = RandKey::randKey("abcdef0123456789", 200);

          if ($table->insert()){
            $user = Usuario::find()->Where("authkeyuser=:authkeyuser", [":authkeyuser" => $table->authkeyuser])->one();
            $id = urlencode($user->usuario_id);
            $authKey = urlencode($user->authkeyuser);
            $subject = "Confirmar registro";
            $body = "<h1>Haga click en el siguiente enlace para finalizar tu registro</h1>";
            $link = Intranet::getUrlHead() . "/web/index.php?r=site/confirm&id=" . $id . "&authKey=" . $authKey;
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

            $model->username = null;
            $model->usersurname = null;
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
                        echo "Registro ok en chatpf, redireccionando..";
                        echo "<meta http-equiv='refresh' content='8; " . Url::toRoute("site/login") . "'>";
                    } else {
                        echo "Registro fallido en chatpf, redireccionando..";
                        echo "<meta http-equiv='refresh' content='8; " . Url::toRoute("site/login") . "'>";
                    }
                } else
                    return $this->redirect(["site/login"]);
            } else
                return $this->redirect(["site/login"]);
        }
    }


}
