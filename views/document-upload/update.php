<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocumentUpload */

$this->title = 'Actualizar Document Upload: ' . $model->archivoprograma_id;
$this->params['breadcrumbs'][] = ['label' => 'Document Uploads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->archivoprograma_id, 'url' => ['view', 'id' => $model->archivoprograma_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="document-upload-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
		'subModelEstado' => $subModelEstado,
		'subModelPrograma' => $subModelPrograma,
		'subModelModerw' => $subModelModerw,
    ]) ?>

</div>
