<?php

namespace app\controllers;

use Yii;
use app\models\Planestudio;
use app\models\PlanestudioSearch;
use app\models\Carrera;
use app\models\Ano;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\commands\RoleAccessChecker;
use app\controllers\ErrorController;

/**
 * PlanestudioController implements the CRUD actions for Planestudio model.
 */
class PlanestudioController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
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
     * Lists all Planestudio models.
     * @return mixed
     */
    public function actionIndex(){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('planestudio/index')) {
			$searchModel = new PlanestudioSearch();
			$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

			return $this->render('index', [
				'searchModel' => $searchModel,
				'dataProvider' => $dataProvider,
			]);
         }else return $this->redirect(['error/level-access-error',]);
   }

    /**
     * Displays a single Planestudio model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('planestudio/view')) {
			return $this->render('view', [
				'model' => $this->findModel($id),

			]);
        }else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Creates a new Planestudio model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate(){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('planestudio/create')) {
			$model = new Planestudio();
			$subModel= new Carrera();
			$subModel2= new Ano();
			if ($model->load(Yii::$app->request->post()) && $model->save()) {
				return $this->redirect(['index', 'id' => $model->planestudio_id]);
			} else {
				return $this->render('create', [
					  'model' => $model,
					'subModel'=> $subModel,
					 'subModel2'=> $subModel2,
				]);
			}
        }else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Updates an existing Planestudio model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('planestudio/update')) {
			$model = $this->findModel($id);
			$subModel= new Carrera();
			$subModel2= new Ano();

			if ($model->load(Yii::$app->request->post()) && $model->save()) {
				return $this->redirect(['index', 'id' => $model->planestudio_id]);
			} else {
				return $this->render('update', [
					'model' => $model,
					'subModel'=> $subModel,
					'subModel2'=> $subModel2,
				]);
			}
        }else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Deletes an existing Planestudio model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('planestudio/delete')) {
			$this->findModel($id)->delete();

			return $this->redirect(['index']);
        }else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Finds the Planestudio model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Planestudio the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id){
		if (($model = Planestudio::findOne($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
    }
}
