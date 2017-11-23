<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PlanesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="planes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'planes_id') ?>

    <?= $form->field($model, 'ano_id') ?>

    <?= $form->field($model, 'carrera_id') ?>

    <?= $form->field($model, 'ano_nivel') ?>

    <?= $form->field($model, 'instituto_id') ?>

    <?php // echo $form->field($model, 'materia_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
