<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Programa */

$this->title = $model->programa_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Programas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="programa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->programa_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->programa_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'programa_id',
            'planmateria_id',
            'ano_id',
            'fecha',
        ],
    ]) ?>

</div>
