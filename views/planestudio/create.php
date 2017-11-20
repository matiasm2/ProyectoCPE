<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Planestudio */

$this->title = 'Crear Plan de estudio';
/*$this->params['breadcrumbs'][] = ['label' => 'Planestudios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;*/
?>
<div class="col-lg-10">
<div class="planestudio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'subModel' => $subModel,
          'subModel2' => $subModel2,

    ]) ?>

</div>
</div>
