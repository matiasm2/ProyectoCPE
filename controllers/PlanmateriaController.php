<?php

namespace app\controllers;

use Yii;
use app\models\Planmateria;
use app\models\Planestudio;
use app\models\Materia;
use app\models\PlanemateriaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

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
    public function actionIndex()
    {
        $searchModel = new PlanemateriaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Planmateria model.
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
     * Creates a new Planmateria model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Planmateria();
        $subModel= new Planestudio();
        $subModel2= new Materia();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->planmateria_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'subModel' => $subModel,
                'subModel2' => $subModel2,
            ]);
        }
    }

    /**
     * Updates an existing Planmateria model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $subModel= new Planestudio();
        $subModel2= new Materia();


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->planmateria_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'subModel' => $subModel,
                'subModel2' => $subModel2,
            ]);
        }
    }

    /**
     * Deletes an existing Planmateria model.
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
