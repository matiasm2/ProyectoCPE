<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Planestudio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="planestudio-form">

    <?php $form = ActiveForm::begin(); ?>
	<?= $form->field($model, "carrera_id")
				    ->dropDownList(
            ArrayHelper::map($subModel->getAllCarreras(), 'carrera_id', 'descripcion'))
    		?>


<?= $form->field($model, "ano_id")
				    ->dropDownList(
            ArrayHelper::map($subModel2->getAllAnos(), 'ano_id', 'ano'))
    		?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
