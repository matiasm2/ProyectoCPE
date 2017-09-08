<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Planestudio */

$this->title = 'Create Planestudio';
$this->params['breadcrumbs'][] = ['label' => 'Planestudios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planestudio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
