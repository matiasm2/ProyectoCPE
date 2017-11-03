<?php

namespace app\controllers;

use Yii;
use app\models\Asignsector;
use app\models\AsignSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\commands\RoleAccessChecker;
use app\controllers\ErrorController;
use app\models\Sector;
use app\models\Actionrole;

/**
 * AsignsectorController implements the CRUD actions for Asignsector model.
 */
class AsignsectorController extends Controller
{
    /**
     * Ejemplo de SiteController
     * public function behaviors() //behaviors viejo{
     *    return [
     *        'access' => [
     *            'class' => AccessControl::className(),
     *            'only' => ['logout', 'contact', 'register', 'login',],
     *            'rules' => [
     *                [
     *                    'allow' => true,
     *                    'actions' => ['login', 'logout', 'contact', 'register',],
     *                    'roles' => ['?'],
     *                ],
     *                [
     *                    'allow' => true,
     *                    'actions' => ['logout', 'register',],
     *                    'roles' => ['@'],
     *                ],
     *                [
     *                    'allow' => false,
     *                    'actions' => ['contact', 'login'],
     *                    'roles' => ['@'],
     *                ],
     *            ],
     *        ],
     *        'verbs' => [
     *            'class' => VerbFilter::className(),
     *            'actions' => [
     *                'logout' => ['post'],
     *            ],
     *        ],
     *    ];
     *}
     **/
    public function behaviors(){
        return [
              'access' => [
                 'class' => AccessControl::className(),
                 'only' => ['index', 'view', 'update', 'create', 'delete',],
                 'rules' => [
                     [
                         'allow' => true,
                         'actions' => ['',],
                         'roles' => ['?'],
                     ],
                     [
                         'allow' => true,
                         'actions' => ['index', 'view', 'update', 'create', 'delete',],
                         'roles' => ['@'],
                     ],
                     [
                         'allow' => false,
                         'actions' => ['',],
                         'roles' => ['@'],
                     ],
                 ],
             ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Asignsector models.
     * @return mixed
     */
    public function actionIndex(){

		$searchModel = new AsignSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    //$dataProvider = $
    $msg='';

		if (RoleAccessChecker::actionIsAsignSector('asignsector/index')) {
			return $this->render('index', [
				'searchModel' => $searchModel,
				'dataProvider' => $dataProvider,
				"msg" => $msg ,
			]);
        }else return $this->redirect(['error/error',["msg" => $msg ]]);
    }

    /**
     * Displays a single Asignsector model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id){
		if (RoleAccessChecker::actionIsAsignSector('asignsector/view')) {
    

			return $this->render('view', [
				'model' => $this->findModel($id),

			]);
        }else return $this->redirect(['error/error']);
    }

    /**
     * Creates a new Asignsector model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate(){
		if (RoleAccessChecker::actionIsAsignSector('asignsector/create')) {
			$model = new Asignsector();
			$subModel =  new Actionrole();
			$subModel2 = new Sector();
			if ($model->load(Yii::$app->request->post()) && $model->save()) {
				return $this->redirect(['view', 'id' => $model->asignsector_id]);
			} else {
				return $this->render('create', [
					'model' => $model,
					'subModel' => $subModel,
					'subModel2' => $subModel2,
				]);
			}
        }else return $this->redirect(['error/error',]);
    }

    /**
     * Updates an existing Asignsector model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id){
		if (RoleAccessChecker::actionIsAsignSector('asignsector/update')) {
			$model = $this->findModel($id);
			$subModel =  new Actionrole();
			$subModel2 = new Sector();
			if ($model->load(Yii::$app->request->post()) && $model->save()) {
				return $this->redirect(['view', 'id' => $model->asignsector_id]);
			} else {
				return $this->render('update', [
					'model' => $model,
					'subModel' => $subModel,
					'subModel2' => $subModel2,
				]);
			}
        }else return $this->redirect(['error/error']);
    }

    /**
     * Deletes an existing Asignsector model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id){
		if (RoleAccessChecker::actionIsAsignSector('asignsector/delete')) {
			$this->findModel($id)->delete();

			return $this->redirect(['index']);
        }else return $this->redirect(['error/error']);
    }

    /**
     * Finds the Asignsector model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Asignsector the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Asignsector::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
