<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Asignsector */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="asignsector-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'actionrole_id')->dropDownList(ArrayHelper::map($subModel->find()->all(),'actionrole_id','descripcion' )) ?>

    <?= $form->field($model, 'sector_id')->dropDownList(ArrayHelper::map($subModel2->find()->all(),'sector_id','descripcion')) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
