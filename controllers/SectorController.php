<?php

namespace app\controllers;

use Yii;
use app\models\Sector;
use app\models\SectorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\commands\RoleAccessChecker;
use app\controllers\ErrorController;

/**
 * SectorController implements the CRUD actions for Sector model.
 */
class SectorController extends Controller
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
     * Lists all Sector models.
     * @return mixed
     */
    public function actionIndex(){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('sector/index')) {
			$searchModel = new SectorSearch();
			$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

			return $this->render('index', [
				'searchModel' => $searchModel,
				'dataProvider' => $dataProvider,
			]);
        }else return $this->redirect(['error/error',["msg" => $msg ]]);
    }

    /**
     * Displays a single Sector model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('sector/view')) {
			return $this->render('view', [
				'model' => $this->findModel($id),]);
        }else return $this->redirect(['error/error',["msg" => $msg ]]);
    }

    /**
     * Creates a new Sector model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate(){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('sector/create')) {
			$model = new Sector();
			if ($model->load(Yii::$app->request->post()) && $model->save()) {
				return $this->redirect(['index', 'id' => $model->sector_id]);
			} else {
				return $this->render('create', [
					'model' => $model,
				]);
			}
        }else return $this->redirect(['error/error',["msg" => $msg ]]);
    }

    /**
     * Updates an existing Sector model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('sector/update')) {
			$model = $this->findModel($id);

			if ($model->load(Yii::$app->request->post()) && $model->save()) {
				return $this->redirect(['index', 'id' => $model->sector_id]);
			} else {
				return $this->render('update', [
					'model' => $model,
				]);
			}
        }else return $this->redirect(['error/error',["msg" => $msg ]]);
    }

    /**
     * Deletes an existing Sector model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('sector/delete')) {
			$this->findModel($id)->delete();
			return $this->redirect(['index']);
        }else return $this->redirect(['error/error',["msg" => $msg ]]);
    }

    /**
     * Finds the Sector model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Sector the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Sector::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
