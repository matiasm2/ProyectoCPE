<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model app\models\Carrera */
$this->title = 'Actualizar Carrera: ' . $model->carrera_id;
/*$this->params['breadcrumbs'][] = ['label' => 'Carreras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->carrera_id, 'url' => ['view', 'id' => $model->carrera_id]];
$this->params['breadcrumbs'][] = 'Update';*/
?>
<div class="col-lg-8">
<div class="carrera-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
	'subModel' => $subModel
    ]) ?>

</div>
</div>
