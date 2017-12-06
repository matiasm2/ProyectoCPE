<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Archivoprograma */

$this->title = 'Actualizar Archivo de programa: ' . $model->archivoprograma_id;
/*$this->params['breadcrumbs'][] = ['label' => $model->archivoprograma_id, 'url' => ['view', 'id' => $model->archivoprograma_id]];
$this->params['breadcrumbs'][] = 'Update';*/
?>
<div class="col-lg-8">
	<div class="archivoprograma-update">
		<h1><?= Html::encode($this->title) ?></h1>
		<?= $this->render('_upForm', [
			'model' => $model,
			'subModelEstado' => $subModelEstado,
			'subModelPrograma' => $subModelPrograma,
			'subModelModerw' => $subModelModerw,
 		]) ?>

	</div>
</div>
