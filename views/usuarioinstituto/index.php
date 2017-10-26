<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsuarioinstitutoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarioinstitutos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuarioinstituto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Usuarioinstituto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'archivoprograma_id',
            'programa_id',
            'usuario_id',
            'estado_id',
            'archivo',
            // 'fecha',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
