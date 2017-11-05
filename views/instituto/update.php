<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Instituto */

$this->title = 'Update Instituto: ' . $model->instituto_id;
/*$this->params['breadcrumbs'][] = ['label' => 'Institutos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->instituto_id, 'url' => ['view', 'id' => $model->instituto_id]];
$this->params['breadcrumbs'][] = 'Update';*/
?>
<div class="col-lg-10">
<div class="instituto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
