<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Asignsector */

$this->title = $model->asignsector_id;
//$this->params['breadcrumbs'][] = ['label' => 'Asignsectors', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-lg-10">
<div class="asignsector-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->asignsector_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->asignsector_id], [
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
            'asignsector_id',
            'actionrole_id',
            'sector_id',
        ],
    ]) ?>



</div>
</div>
