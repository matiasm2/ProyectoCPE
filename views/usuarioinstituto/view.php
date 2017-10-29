<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarioinstituto */

$this->title = $model->archivoprograma_id;
$this->params['breadcrumbs'][] = ['label' => 'Usuario institutos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuarioinstituto-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->archivoprograma_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->archivoprograma_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Está seguro que quiere eliminar este item?',
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
            //'descripcion'
            'archivo',
            'fecha',
        ],
    ]) ?>

</div>
