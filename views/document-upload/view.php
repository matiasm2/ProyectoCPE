<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DocumentUpload */

$this->title = $model->archivoprograma_id;
$this->params['breadcrumbs'][] = ['label' => 'Document Uploads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="document-upload-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->archivoprograma_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->archivoprograma_id], [
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
            'archivo',
            'fecha',
            'moderw_id',
        ],
    ]) ?>

</div>
