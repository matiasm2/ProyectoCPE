<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Materia;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PlanemateriaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Planmaterias';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-lg-8">
<div class="planmateria-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Planmateria', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'planmateria_id',
            'planestudio_id',
            //'materia_id',
            [
              'label' => 'Materia',
              'attribute' => 'materia_id',
              'value' => function($model){
                $materia=Materia::find()->where(['materia_id'=>$model->materia_id])->one();
                return $materia->nombre;
              }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
