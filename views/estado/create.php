﻿<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Estado */

$this->title = 'Crear Estado';
/*$this->params['breadcrumbs'][] = ['label' => 'Estados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;*/
?>
<div class="col-lg-8">
<div class="estado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
