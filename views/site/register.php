<?php

/* @var $this yii\web\View */
//use yii\helpers\CHtml;


use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

$this->title = 'Register';
$this->params['breadcrumbs'][] = $this->title;

?>

<h3> <?= $msg ?></h3>

<div class="site-about">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="register-form">
		<?php $form = ActiveForm::begin(); ?>
		<div class="row">


				<?= $form->field($model, "Nombre")->input("text") ?>

				<?= $form->field($model, "Apellido")->input("text") ?>

				<?= $form->field($model, "email")->input("email") ?>

				<?= $form->field($model, "sector_id")
				    ->dropDownList(
            ArrayHelper::map($subModel->getAllSectors(), 'sector_id', 'descripcion'))
    		?>

				<?= $form->field($model, "password")->input("password") ?>

				<?= $form->field($model, "password_repeat")->input("password") ?>

    		<?= Html::submitButton("Register", ["class" => "btn btn-primary"]) ?>

		</div>

		  <?php ActiveForm::end(); ?>

</div>
