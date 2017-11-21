<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocumentUploadSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="document-upload-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'archivoprograma_id') ?>

    <?= $form->field($model, 'programa_id') ?>

    <?= $form->field($model, 'usuario_id') ?>

    <?= $form->field($model, 'estado_id') ?>

    <?= $form->field($model, 'archivo') ?>

    <?= $form->field($model, 'moderw_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
