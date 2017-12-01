<?php

/* @var $this yii\web\View */
//use yii\helpers\CHtml;


use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use yii\widgets;
use yii\helpers\ArrayHelper;

/*
<?php if (Yii::$app->session->hasFlash('success')): ?>
	<div class="alert alert-success alert-dismissable">
	<div class="row">
	<div class="col-md-4">
	<button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
	<h4><i class="icon fa fa-check"></i><strong>¡Usuario registrado!</strong></h4>
	<?= Yii::$app->session->getFlash('success') ?>
	</div>
<?php endif; ?>		
//alternativa al getFlash:
		<div id="alert">
			<div class="row">
			<div class="col-md-4">
			<?= Yii::$app->session->getFlash('success');?>
		</div>
*/
$this->title = 'Registrar';
//$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-about">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="register-form">
		<?php $form = ActiveForm::begin(); ?>
		<div class="row">

      <div class="col-lg-8">

				<?= $form->field($model, "Nombre")->input("text") ?>
				<?= $form->field($model, "Apellido")->input("text") ?>
				<?= $form->field($model, "email")->input("email") ?>
				<?= $form->field($model, "sector_id")
				    ->dropDownList(ArrayHelper::map($subModel->all(), 'sector_id', 'descripcion'))
				?>
				<?= $form->field($model, "password")->input("password") ?>
				<?= $form->field($model, "password_repeat")->input("password") ?>

    		<?= Html::submitButton("Registrar", ["class" => "btn btn-primary"]) ?>
		</div>
		  <?php ActiveForm::end(); ?>

</div>
</div>
</div>
