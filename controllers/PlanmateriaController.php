<?php

namespace app\controllers;

use Yii;
use app\models\Planmateria;
use app\models\Planestudio;
use app\models\Materia;
use app\models\PlanemateriaSearch;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\commands\RoleAccessChecker;
use app\controllers\ErrorController;

/**
 * PlanmateriaController implements the CRUD actions for Planmateria model.
 */
class PlanmateriaController extends Controller
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
     * Lists all Planmateria models.
     * @return mixed
     */
    public function actionIndex(){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('planmateria/index')) {
			$searchModel = new PlanemateriaSearch();
			$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

			return $this->render('index', [
				'searchModel' => $searchModel,
				'dataProvider' => $dataProvider,
			]);
        }else return $this->redirect(['error/error',["msg" => $msg ]]);
    }

    /**
     * Displays a single Planmateria model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('planmateria/view')) {
			return $this->render('view', [
				'model' => $this->findModel($id),
			]);
        }else return $this->redirect(['error/error',["msg" => $msg ]]);
    }

    /**
     * Creates a new Planmateria model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate(){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('planmateria/create')) {
			$model = new Planmateria();
			$subModel= new Planestudio();
			$subModel2= new Materia();
			if ($model->load(Yii::$app->request->post()) && $model->save()) {
				return $this->redirect(['index', 'id' => $model->planmateria_id]);
			} else {
				return $this->render('create', [
					'model' => $model,
					'subModel' => $subModel,
					'subModel2' => $subModel2,
				]);
			}
        }else return $this->redirect(['error/error',["msg" => $msg ]]);
    }

    /**
     * Updates an existing Planmateria model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('planmateria/update')) {
			$model = $this->findModel($id);
			$subModel= new Planestudio();
			$subModel2= new Materia();


			if ($model->load(Yii::$app->request->post()) && $model->save()) {
				return $this->redirect(['index', 'id' => $model->planmateria_id]);
			} else {
				return $this->render('update', [
					'model' => $model,
					'subModel' => $subModel,
					'subModel2' => $subModel2,
				]);
			}
        }else return $this->redirect(['error/error',["msg" => $msg ]]);
    }

    /**
     * Deletes an existing Planmateria model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('planmateria/delete')) {
			$this->findModel($id)->delete();
			return $this->redirect(['index']);
        }else return $this->redirect(['error/error',["msg" => $msg ]]);
    }

    /**
     * Finds the Planmateria model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Planmateria the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Planmateria::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
