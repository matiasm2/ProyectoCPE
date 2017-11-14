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
		$msg='';
		$searchModel = new AsignSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		if (RoleAccessChecker::actionIsAsignSector('asignsector/index')) {
			try{
				return $this->render('index', [
					'searchModel' => $searchModel,
					'dataProvider' => $dataProvider,
					'msg' => $msg,
				]);
 			} catch (\yii\db\Exception $e) {return $this->redirect(['error/db-grant-error',]);}
		}else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Displays a single Asignsector model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('asignsector/view')) {
			try{
				return $this->render('view', [
					'model' => $this->findModel($id),]);
			} catch (\yii\db\Exception $e) {return $this->redirect(['error/db-grant-error',]);}
        }else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Creates a new Asignsector model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate(){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('asignsector/create')) {
		$model = new Asignsector();
		$subModel =  new Actionrole();
		$subModel2 = new Sector();
			try{
				if ($model->load(Yii::$app->request->post()) && $model->save()) {
					return $this->redirect(['index', 'id' => $model->asignsector_id]);
				} else {
					return $this->render('create', [
						'model' => $model,
						'subModel' => $subModel,
						'subModel2' => $subModel2,
					]);
				}
			} catch (\yii\db\Exception $e) {return $this->redirect(['error/db-unique-error',]);}
		}else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Updates an existing Asignsector model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('asignsector/update')) {
			try{
				$model = $this->findModel($id);
				$subModel =  new Actionrole();
				$subModel2 = new Sector();
				if ($model->load(Yii::$app->request->post()) && $model->save()) {
					return $this->redirect(['index', 'id' => $model->asignsector_id]);
				} else {
					return $this->render('update', [
						'model' => $model,
						'subModel' => $subModel,
						'subModel2' => $subModel2,
					]);
				}
 			} catch (\yii\db\Exception $e) {return $this->redirect(['error/db-grant-error',]);}
        }else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Deletes an existing Asignsector model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('asignsector/delete')) {
			try{
				$this->findModel($id)->delete();

				return $this->redirect(['index']);
 			} catch (\yii\db\Exception $e) {return $this->redirect(['error/db-grant-error',]);}
        }else return $this->redirect(['error/level-access-error',]);
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
