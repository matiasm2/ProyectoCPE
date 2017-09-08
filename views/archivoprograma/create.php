<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Archivoprograma */

$this->title = 'Create Archivoprograma';
$this->params['breadcrumbs'][] = ['label' => 'Archivoprogramas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="archivoprograma-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
