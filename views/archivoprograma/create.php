<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Archivoprograma */

$this->title = 'Crear un Archivo de programa';
$this->params['breadcrumbs'][] = ['label' => 'Archivos de programas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-lg-8">

<div class="archivoprograma-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
		'subModelEstado' => $subModelEstado,
		'subModelPrograma' => $subModelPrograma,
    ]) ?>

</div>
</div>
