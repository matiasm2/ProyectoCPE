<?php

namespace app\controllers;

use Yii;
use app\models\DocumentUpload;
use app\models\DocumentUploadSearch;
use app\models\HistoryDocumentUploadSearch;
use app\models\Estado;
use app\models\Programa;
use app\models\Moderw;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
use app\commands\RoleAccessChecker;
use app\commands\RegisterModeChecker;
/**
 * DocumentUploadController implements the CRUD actions for DocumentUpload model.
 */
class DocumentUploadController extends Controller
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
     * Lists all DocumentUpload models.
     * @return mixed
     */
    public function actionIndex(){
        $searchModel = new DocumentUploadSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		$msg='El resultado de test RegisterModeChhecker es: '.RegisterModeChecker::test(-1,"OTROS|ESCRITURA_SECTOR|INACCESIBLE_USUARIO|INACCESIBLE");
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'msg'=>$msg,
        ]);
    }

    public function actionHistorial_estados($id){
        $searchModel = new DocumentUploadSearch();
        $dataProvider = $searchModel->searchPorIdArchivoPrograma($id);
		return $this->render('historial_estados', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Displays a single DocumentUpload model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new DocumentUpload model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate(){
        $model = new DocumentUpload();
		$subModelEstado = new Estado();
		$subModelPrograma = new Programa();
		$subModelModerw = new Moderw();
		if ($model->load(Yii::$app->request->post())){
			$a=RegisterModeChecker::isInstanceDocument($model->programa_id);
			if($a != false){$a->moderw_id=64;$a->save();}/* Se etiqueta como inaccesible el documento */
			$model->usuario_id=Yii::$app->user->identity->usuario_id;
			$model->archivo= UploadedFile::getInstance(	$model,'archivo');
			$model->fecha=date('Y-m-d');
			if (($model->save())&&($model->upload())){
				$new=RegisterModeChecker::formatDocument($model);
				$model->archivo=$new;$model->save();
				return $this->redirect(['index', 'id' => $model->archivoprograma_id]);
			}
		} else return $this->render('create', ['model' => $model,
				'subModelEstado' => $subModelEstado,
				'subModelPrograma' => $subModelPrograma,
				'subModelModerw' => $subModelModerw,]);
	}
	
    /**
     * Updates an existing DocumentUpload model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id){
        $model = $this->findModel($id);
		$subModelEstado = new Estado();
		$subModelPrograma = new Programa();
		$subModelModerw = new Moderw();
		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect(['index', 'id' => $model->archivoprograma_id]);
		} else {
			return $this->render('update', [
				'model' => $model,
				'subModelEstado' => $subModelEstado,
				'subModelPrograma' => $subModelPrograma,
				'subModelModerw' => $subModelModerw,
				]);
		}
    }

    /**
     * Deletes an existing DocumentUpload model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DocumentUpload model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DocumentUpload the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DocumentUpload::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
