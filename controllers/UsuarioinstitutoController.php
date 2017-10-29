<?php

namespace app\controllers;

use Yii;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\filters\AccessControl;
use app\models;
use app\models\Usuarioinstituto;
use app\models\UsuarioinstitutoSearch;
use app\models\Usuariotipo;
use app\models\Usuario;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

//use app\views\layouts;

/**
 * UsuarioinstitutoController implements the CRUD actions for Usuarioinstituto model.
 */
class UsuarioinstitutoController extends Controller
{

    public $layout = '\mainUsuarioInstituto';
    public function behaviors()
    {

        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['indexInstituto'], //solo debe aplicarse a las acciones login, logout , admin,recepcionista, chofer y cliente. Todas las demas acciones no estan sujetas al control de acceso
                'rules' => [                              //reglas
                    //el administrador tiene permisos sobre las siguientes acciones
                    ['actions' => ['indexInstituto'/*, 'clienteslist'*/],
                        'allow' => true,
                        'roles' => ['@'], //El arroba es para el usuario autenticado
                        'matchCallback' => function ($rule, $action) {                    //permite escribir la l?gica de comprobaci?n de acceso arbitraria, las paginas que se intentan acceder solo pueden ser permitidas si es un...
                    return Usuariotipo::usuarioInstituto(Yii::$app->user->identity->sectorID);
                    //Llamada al m?todo que comprueba si es un administrador
                    //Retorno el metodo del modelo que comprueba el tipo de usuario que es por el rol (1,2,3,4) etc y que devuelve true o false
                }
                    ]
                ]
            ]
        ];
    }
        /*
        return [
            /*'access' => [
                'class' => AccessControl::className(),
                'only' => ['login', 'logout', 'instituto', 'register', 'contact', 'about'], //solo debe aplicarse a las acciones login, logout , admin, instituto, prensa y cpe. Todas las demas acciones no estan sujetas al control de acceso
                'rules' => [                              //reglas
                    [
                        'actions' => ['login', 'logout', 'register', 'contact', 'about'], //para la accion login
                        'allow' => true, //Todos los permisos aceptados
                        'roles' => ['@'],
                    ]
                            ]
                     ],

            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }*/

    /**
     * Lists all Usuarioinstituto models.
     * @return mixed
     */  

       public function actionIndex() {
        $searchModel = new UsuarioinstitutoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('\indexInstituto', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    /*
    public function actionIndex()
    {
        $searchModel = new UsuarioinstitutoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('\index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }*/

        public function actionInstituto() {
        return $this->redirect(['\index']);
    }

    /**
     * Displays a single Usuarioinstituto model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Usuarioinstituto model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Usuarioinstituto();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->archivoprograma_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Usuarioinstituto model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->archivoprograma_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Usuarioinstituto model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Usuarioinstituto model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Usuarioinstituto the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Usuarioinstituto::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
