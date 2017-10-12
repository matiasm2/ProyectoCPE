<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Programa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="programa-form">

    <?php $form = ActiveForm::begin(); ?>

<!--
    <?= $form->field($model, 'planmateria_id')->textInput() ?>
-->
	<?= $form->field($model, "planmateria_id")
				    ->dropDownList(
            ArrayHelper::map($subModelPlanmateria->getAllPlanesmateria(), 'planmateria_id', 'planmateria_id'))
    		?>
<!--
    <?= $form->field($model, 'ano_id')->textInput() ?>
-->
    <?= $form->field($model, "ano_id")
				    ->dropDownList(
            ArrayHelper::map($subModelAno->getAllAnos(), 'ano_id', 'ano'))
    		?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
