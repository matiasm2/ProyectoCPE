<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ano */

$this->title = 'Update Ano: ' . $model->ano_id;
$this->params['breadcrumbs'][] = ['label' => 'Anos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ano_id, 'url' => ['view', 'id' => $model->ano_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="col-lg-10">
<div class="ano-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
