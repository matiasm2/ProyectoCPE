<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sector */

$this->title = 'Update Sector: ' . $model->sector_id;
/*$this->params['breadcrumbs'][] = ['label' => 'Sectors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sector_id, 'url' => ['view', 'id' => $model->sector_id]];
$this->params['breadcrumbs'][] = 'Update';*/
?>
<div class="col-lg-10">
<div class="sector-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
