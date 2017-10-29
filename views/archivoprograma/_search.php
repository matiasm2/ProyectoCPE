<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ArchivoprogramaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="archivoprograma-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'archivoprograma_id') ?>

    <?= $form->field($model, 'programa_id') ?>

    <?= $form->field($model, 'usuario_id') ?>

    <?= $form->field($model, 'estado_id') ?>

    <?= $form->field($model, 'archivo') ?>

    <?php // echo $form->field($model, 'fecha') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reiniciar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
