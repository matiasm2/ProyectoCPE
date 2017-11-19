<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Materia */

/*$this->title = 'Update Materia: ' . $model->materia_id;
$this->params['breadcrumbs'][] = ['label' => 'Materias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->materia_id, 'url' => ['view', 'id' => $model->materia_id]];
$this->params['breadcrumbs'][] = 'Actualizar';*/
?>
<div class="col-lg-8">
<div class="materia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
