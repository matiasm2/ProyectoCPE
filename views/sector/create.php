<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sector */

$this->title = 'Crear Sector';
/*$this->params['breadcrumbs'][] = ['label' => 'Sectors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;*/
?>
<div class="col-lg-10">
<div class="sector-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
