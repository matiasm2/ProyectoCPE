<?php

namespace app\controllers;

use Yii;
use app\models\Ano;
use app\models\AnoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\commands\RoleAccessChecker;
use app\controllers\ErrorController;

/**
 * AnoController implements the CRUD actions for Ano model.
 */
class AnoController extends Controller
{
    /**
     * @inheritdoc
     */
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
     * Lists all Ano models.
     * @return mixed
     */
    public function actionIndex(){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('ano/index')) {
			$searchModel = new AnoSearch();
			$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

			return $this->render('index', [
				'searchModel' => $searchModel,
				'dataProvider' => $dataProvider,
			]);
        }else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Displays a single Ano model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('ano/view')) {
			return $this->render('view', [
				'model' => $this->findModel($id),
			]);
        }else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Creates a new Ano model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate(){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('ano/create')) {
			$model = new Ano();

			if ($model->load(Yii::$app->request->post()) && $model->save()) {
				return $this->redirect(['index', 'id' => $model->ano_id]);
			} else {
				return $this->render('create', [
					'model' => $model,
				]);
			}
        }else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Updates an existing Ano model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('ano/update')) {
			$model = $this->findModel($id);

			if ($model->load(Yii::$app->request->post()) && $model->save()) {
				return $this->redirect(['index', 'id' => $model->ano_id]);
			} else {
				return $this->render('update', [
					'model' => $model,
				]);
			}
        }else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Deletes an existing Ano model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('ano/delete')) {
			$this->findModel($id)->delete();

			return $this->redirect(['index']);
        }else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Finds the Ano model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Ano the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Ano::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
