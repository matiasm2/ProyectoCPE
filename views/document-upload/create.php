<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DocumentUpload */

$this->title = 'Crear Document Upload';
$this->params['breadcrumbs'][] = ['label' => 'Document Uploads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="document-upload-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
		'subModelEstado' => $subModelEstado,
		'subModelPrograma' => $subModelPrograma,
		'subModelModerw' => $subModelModerw,
    ]) ?>

</div>
