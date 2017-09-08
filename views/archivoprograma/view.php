<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Archivoprograma */

$this->title = $model->archivoprograma_id;
$this->params['breadcrumbs'][] = ['label' => 'Archivoprogramas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="archivoprograma-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->archivoprograma_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->archivoprograma_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'archivoprograma_id',
            'programa_id',
            'usuario_id',
            'estado_id',
            'archivo',
        ],
    ]) ?>

</div>
