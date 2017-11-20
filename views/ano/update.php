<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ano */

$this->title = 'Actualizar Año: ' . $model->ano_id;
$this->params['breadcrumbs'][] = ['label' => 'Años', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ano_id, 'url' => ['view', 'id' => $model->ano_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="col-lg-8">
<div class="ano-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
