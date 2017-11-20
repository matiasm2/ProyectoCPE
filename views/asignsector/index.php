﻿<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AsignSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Asignación de accesos';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-lg-8">
<div class="asignsector-index">
<h3> <?= $msg ?></h3>

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //~ 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'asignsector_id',
            'descripcion',
            'descripcionSector',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
