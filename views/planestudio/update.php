<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Planestudio */

$this->title = 'Actualizar Plan de estudio: ' . $model->planestudio_id;
/*$this->params['breadcrumbs'][] = ['label' => 'Planestudios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->planestudio_id, 'url' => ['view', 'id' => $model->planestudio_id]];
$this->params['breadcrumbs'][] = 'Update';*/
?>
<div class="col-lg-8">
<div class="planestudio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'subModel'=> $subModel,
        'subModel2'=> $subModel2,
    ]) ?>

</div>
</div>
