<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Asignsector */

$this->title = $model->asignsector_id;
//$this->params['breadcrumbs'][] = ['label' => 'Asignsectors', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-lg-8">
<div class="asignsector-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->asignsector_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->asignsector_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '?Est? seguro que quiere eliminar este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'asignsector_id',
            'actionrole_id',
            'sector_id',
        ],
    ]) ?>



</div>
</div>
