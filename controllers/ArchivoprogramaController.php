<?php

namespace app\controllers;

use Yii;
use app\models\Archivoprograma;
use app\models\Estado;
use app\models\Programa;
use app\models\ArchivoprogramaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
use app\commands\RoleAccessChecker;

/**
 * ArchivoprogramaController implements the CRUD actions for Archivoprograma model.
 */
class ArchivoprogramaController extends Controller
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
     * Lists all Archivoprograma models.
     * @return mixed
     */
    public function actionIndex(){
		if (RoleAccessChecker::actionIsAsignSector('archivoprograma/index')) {
			$searchModel = new ArchivoprogramaSearch();
			$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

			return $this->render('index', [
				'searchModel' => $searchModel,
				'dataProvider' => $dataProvider,
			]);
		} else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Displays a single Archivoprograma model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id){
		if (RoleAccessChecker::actionIsAsignSector('archivoprograma/view')) {
			return $this->render('view', [
				'model' => $this->findModel($id),
			]);
		} else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Creates a new Archivoprograma model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate(){
		if (RoleAccessChecker::actionIsAsignSector('archivoprograma/create')) {
			$model = new Archivoprograma();
			$subModel= new Estado();
			$subModel2= new Programa();
			if ($model->load(Yii::$app->request->post())){
					$model->usuario_id=Yii::$app->user->identity->usuario_id;
					$model->archivo= UploadedFile::getInstance($model,'archivo');
					$model->fecha=date('Y-m-d');
			  if ($model->save()) {
				if ($model->upload()) {
				  return $this->redirect(['index', 'id' => $model->archivoprograma_id]);
				} else {
				  return $this->render('errorup');
				}
			  } else return $this->render('create', ['model' => $model,
					'subModel' => $subModel,
					'subModel2' => $subModel2,]);
			} else return $this->render('create', ['model' => $model,
									'subModel' => $subModel,
									'subModel2' => $subModel2,]);
		} else return $this->redirect(['error/level-access-error',]);
      }


    /**
     * Updates an existing Archivoprograma model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id){
		if (RoleAccessChecker::actionIsAsignSector('archivoprograma/update')) {
			$model = $this->findModel($id);
			$subModel= new Estado();
			$subModel2= new Programa();
			if ($model->load(Yii::$app->request->post()) && $model->save()) {
				return $this->redirect(['index', 'id' => $model->archivoprograma_id]);
			} else {
				return $this->render('update', [
					'model' => $model,
					'subModel' => $subModel,
					'subModel2' => $subModel2,
				]);
			}
		} else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Deletes an existing Archivoprograma model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id){
		if (RoleAccessChecker::actionIsAsignSector('archivoprograma/delete')) {
			$this->findModel($id)->delete();
			return $this->redirect(['index']);
		} else return $this->redirect(['error/level-access-error',]);
    }

    /**
     * Lists all Archivoprograma models.
     * @return mixed
     */
    public function actionPrograma($idprograma){
		//if (RoleAccessChecker::actionIsAsignSector('archivoprograma/programa')) {
			$searchModel = new ArchivoprogramaSearch();
			$dataProvider = $searchModel->searchPorIdPrograma($idprograma);

			return $this->render('index', [
				'searchModel' => $searchModel,
				'dataProvider' => $dataProvider,
			]);
		//} else return $this->redirect(['error/level-access-error',]);
    }

    

    /**
     * Finds the Archivoprograma model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Archivoprograma the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Archivoprograma::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
