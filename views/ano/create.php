<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ano */

$this->title = 'Crear Anio';
$this->params['breadcrumbs'][] = ['label' => 'Anos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-lg-8">
<div class="ano-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
