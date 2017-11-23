<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Planes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="planes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, "ano_id")
              ->dropDownList(
              ArrayHelper::map($subModel->find()->all(), 'ano_id', 'ano'))
          ?>

    <?= $form->field($model, "carrera_id")
  				    ->dropDownList(
              ArrayHelper::map($subModel3->find()->all(), 'carrera_id', 'descripcion'))
      		?>

    <?= $form->field($model, 'ano_nivel')->textInput() ?>

    <?= $form->field($model, "instituto_id")
  				    ->dropDownList(
              ArrayHelper::map($subModel4->find()->all(), 'instituto_id', 'nombre'))
      		?>

    <?= $form->field($model, "materia_id")
    			    ->dropDownList(
              ArrayHelper::map($subModel2->find()->all(), 'materia_id', 'nombre'))
      		?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
