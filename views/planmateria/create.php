<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Planmateria */

$this->title = 'Crear Plan de materia';
/*$this->params['breadcrumbs'][] = ['label' => 'Planmaterias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;*/
?>
<div class="col-lg-8">
<div class="planmateria-create">

    <h1><?= Html::encode($this->title) ?></h1>


         <?= $this->render('_form', [
        'model' => $model,
        'subModel' => $subModel,
          'subModel2' => $subModel2,
    ]) ?>

</div>
</div>
