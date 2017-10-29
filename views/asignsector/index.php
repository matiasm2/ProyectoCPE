<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AsignSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Asignsectors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asignsector-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Asignsector', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'asignsector_id',
            'actionrole_id',
            'sector_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
