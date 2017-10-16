<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Planmateria */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="planmateria-form">

    <?php $form = ActiveForm::begin(); ?>
	<?= $form->field($model, "planestudio_id")
				    ->dropDownList(
            ArrayHelper::map($subModel->getAllPlanestudio(), 'carrera_id', 'planestudio_id'))
    		?>


<?= $form->field($model, "materia_id")
				    ->dropDownList(
            ArrayHelper::map($subModel2->getAllMaterias(), 'materia_id', 'nombre'))
    		?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
