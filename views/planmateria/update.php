<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Planmateria */

$this->title = 'Update Planmateria: ' . $model->planmateria_id;
/*$this->params['breadcrumbs'][] = ['label' => 'Planmaterias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->planmateria_id, 'url' => ['view', 'id' => $model->planmateria_id]];
$this->params['breadcrumbs'][] = 'Update';*/
?>
<div class="col-lg-8">
<div class="planmateria-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'subModel' => $subModel,
        'subModel2' => $subModel2,
    ]) ?>

</div>
</div>
