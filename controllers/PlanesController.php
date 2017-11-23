<?php

namespace app\controllers;

use Yii;
use app\models\Planes;
use app\models\PlanesSearch;
use app\models\Ano;
use app\models\Materia;
use app\models\Carrera;
use app\models\Instituto;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\commands\RoleAccessChecker;


/**
 * PlanesController implements the CRUD actions for Planes model.
 */
class PlanesController extends Controller
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
     * Lists all Planes models.
     * @return mixed
     */
    public function actionIndex()
    {
		if (RoleAccessChecker::actionIsAsignSector('planes/index')) {
			try{
				$searchModel = new PlanesSearch();
				$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

				return $this->render('index', [
					'searchModel' => $searchModel,
					'dataProvider' => $dataProvider,
				]);
			} catch (\yii\db\Exception $e) {return $this->redirect(['error/db-grant-error',]);}
		} else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Displays a single Planes model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id){
		if (RoleAccessChecker::actionIsAsignSector('planes/view')) {
			try{
				return $this->render('view', [
					'model' => $this->findModel($id),
				]);
			} catch (\yii\db\Exception $e) {return $this->redirect(['error/db-grant-error',]);}
		} else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Creates a new Planes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate(){
		if (RoleAccessChecker::actionIsAsignSector('planes/create')) {
			try{
				$model = new Planes();
				$subModel = new Ano();
				$subModel2 = new Materia();
				$subModel3 = new Carrera();
				$subModel4 = new Instituto();

				if ($model->load(Yii::$app->request->post()) && $model->save()) {
					return $this->redirect(['view', 'id' => $model->planes_id]);
				} else {
					return $this->render('create', [
						'model' => $model,
						'subModel' => $subModel,
						'subModel2' => $subModel2,
						'subModel3' => $subModel3,
						'subModel4' => $subModel4,
					]);
				}
			} catch (\yii\db\Exception $e) {return $this->redirect(['error/db-grant-error',]);}
		} else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Updates an existing Planes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id){
		if (RoleAccessChecker::actionIsAsignSector('planes/update')) {
			try{
				$model = $this->findModel($id);

				if ($model->load(Yii::$app->request->post()) && $model->save()) {
					return $this->redirect(['view', 'id' => $model->planes_id]);
				} else {
					return $this->render('update', [
						'model' => $model,
					]);
				}
			} catch (\yii\db\Exception $e) {return $this->redirect(['error/db-grant-error',]);}
		} else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Deletes an existing Planes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id){
		if (RoleAccessChecker::actionIsAsignSector('planes/delete')) {
			try{
				$this->findModel($id)->delete();
				return $this->redirect(['index']);
			} catch (\yii\db\Exception $e) {return $this->redirect(['error/db-grant-error',]);}
		} else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Finds the Planes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Planes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Planes::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
