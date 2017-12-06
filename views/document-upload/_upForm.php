<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Archivoprograma */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="archivoprograma-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, "estado_id")->dropDownList(
            ArrayHelper::map($subModelEstado->getAllEstados(), 'estado_id', 'descripcion')) ?>

    <?= $form->field($model, "programa_id")->dropDownList(
            ArrayHelper::map($subModelPrograma->find()->all(), 'programa_id', 'descripcion')) ?>

    <?= $form->field($model, 'moderw_id')->dropDownList(ArrayHelper::map($subModelModerw->find()->all(),'moderw_id','moderw'))?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
