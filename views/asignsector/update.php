<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Asignsector */

$this->title = 'Update Asignsector: ' . $model->asignsector_id;
$this->params['breadcrumbs'][] = ['label' => 'Asignsectors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->asignsector_id, 'url' => ['view', 'id' => $model->asignsector_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="asignsector-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
	'subModel' => $subModel,
	'subModel2' => $subModel2,
    ]) ?>

</div>
