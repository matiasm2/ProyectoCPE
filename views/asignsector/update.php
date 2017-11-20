<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Asignsector */

$this->title = 'Actualizar Asignación de acceso: ' . $model->asignsector_id;
$this->params['breadcrumbs'][] = ['label' => 'Asignación de accesos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->asignsector_id, 'url' => ['view', 'id' => $model->asignsector_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="col-lg-8">
<div class="asignsector-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
	'subModel' => $subModel,
	'subModel2' => $subModel2,
    ]) ?>

</div>
</div>
