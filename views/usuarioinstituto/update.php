<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarioinstituto */

$this->title = 'Update Usuarioinstituto: ' . $model->archivoprograma_id;
$this->params['breadcrumbs'][] = ['label' => 'Usuarioinstitutos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->archivoprograma_id, 'url' => ['view', 'id' => $model->archivoprograma_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="usuarioinstituto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
