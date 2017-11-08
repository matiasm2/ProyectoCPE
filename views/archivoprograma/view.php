<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Archivoprograma */

$this->title = $model->archivoprograma_id;
/*$this->params['breadcrumbs'][] = ['label' => 'Archivos de programas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;*/
?>
<div class="col-lg-8">
<div class="archivoprograma-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->archivoprograma_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->archivoprograma_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '�Est� seguro que quiere eliminar este item?',
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
            'fecha',
        ],
    ]) ?>

</div>
</div>
