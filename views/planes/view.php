<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Planes */

$this->title = $model->planes_id;
/*$this->params['breadcrumbs'][] = ['label' => 'Planes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;*/
?>
<div class="col-lg-8">
<div class="planes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->planes_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->planes_id], [
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
            'planes_id',
            'ano_id',
            'carrera_id',
            'ano_nivel',
            'instituto_id',
            'materia_id',
        ],
    ]) ?>

</div>
</div>
