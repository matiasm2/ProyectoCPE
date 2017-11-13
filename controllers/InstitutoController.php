<?php

namespace app\controllers;

use Yii;
use app\models\Instituto;
use app\models\InstitutoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\commands\RoleAccessChecker;
use app\controllers\ErrorController;

/**
 * InstitutoController implements the CRUD actions for Instituto model.
 */
class InstitutoController extends Controller
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
     * Lists all Instituto models.
     * @return mixed
     */
    public function actionIndex(){
        $searchModel = new InstitutoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('instituto/index')) {
			return $this->render('index', [
				'searchModel' => $searchModel,
				'dataProvider' => $dataProvider,
			]);
        }else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Displays a single Instituto model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('instituto/view')) {
			return $this->render('view', [
				'model' => $this->findModel($id),
			]);
        }else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Creates a new Instituto model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate(){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('instituto/create')) {
			$model = new Instituto();

			if ($model->load(Yii::$app->request->post()) && $model->save()) {
				return $this->redirect(['index', 'id' => $model->instituto_id]);
			} else {
				return $this->render('create', [
					'model' => $model,
				]);
			}
        }else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Updates an existing Instituto model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('instituto/update')) {
			$model = $this->findModel($id);

			if ($model->load(Yii::$app->request->post()) && $model->save()) {
				return $this->redirect(['index', 'id' => $model->instituto_id]);
			} else {
				return $this->render('update', [
					'model' => $model,
				]);
			}
        }else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Deletes an existing Instituto model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('instituto/delete')) {
			$this->findModel($id)->delete();
			return $this->redirect(['index']);
        }else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Finds the Instituto model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Instituto the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Instituto::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
