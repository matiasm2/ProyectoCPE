<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PlanestudioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Planestudios';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-lg-8">
<div class="planestudio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Planestudio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'planestudio_id',
            //'carrera_id',
            //'ano_id',
            'descripcioncarrera',
            'descripcionano',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
