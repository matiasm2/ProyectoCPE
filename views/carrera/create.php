﻿<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model app\models\Carrera */
$this->title = 'Crear Carrera';
/*$this->params['breadcrumbs'][] = ['label' => 'Carreras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;*/
?>
<div class="col-lg-8">
<div class="carrera-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
      'model' => $model,
        'subModel' => $subModel,

    ]) ?>

</div>
</div>
