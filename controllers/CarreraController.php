<?php

namespace app\controllers;

use Yii;
use app\models\Carrera;
use app\models\CarreraSearch;
use app\models\Instituto;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\commands\RoleAccessChecker;
use app\controllers\ErrorController;

/**
 * CarreraController implements the CRUD actions for Carrera model.
 */
class CarreraController extends Controller
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
     * Lists all Carrera models.
     * @return mixed
     */
    public function actionIndex(){
        $searchModel = new CarreraSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $msg='';
		if (RoleAccessChecker::actionIsAsignSector('carrera/index')) {
			return $this->render('index', [
				'searchModel' => $searchModel,
				'dataProvider' => $dataProvider,
			]);
        }else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Displays a single Carrera model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('carrera/view')) {
			return $this->render('view', [
				'model' => $this->findModel($id),
			]);
        }else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Creates a new Carrera model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate(){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('carrera/create')) {
			$model = new Carrera();
			$subModel=new Instituto();
			if ($model->load(Yii::$app->request->post()) && $model->save()) {
				return $this->redirect(['index', 'id' => $model->carrera_id]);
			} else {
				return $this->render('create', [
									'model' => $model,
					'subModel'=> $subModel,
				]);
			}
        }else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Updates an existing Carrera model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('carrera/create')) {
			$model = $this->findModel($id);
			$model=new Carrera();
			$subModel=new Instituto();

			if ($model->load(Yii::$app->request->post()) && $model->save()) {
				return $this->redirect(['index', 'id' => $model->carrera_id]);
			} else {
				return $this->render('update', [
					'model' => $model,
					'subModel'=> $subModel,
				]);
			}
		}else return $this->redirect(['error/level-access-error',]);

    }

    /**
     * Deletes an existing Carrera model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id){
		$msg='';
		if (RoleAccessChecker::actionIsAsignSector('carrera/delete')) {
			$this->findModel($id)->delete();
			return $this->redirect(['index']);
		}else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Finds the Carrera model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Carrera the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Carrera::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
