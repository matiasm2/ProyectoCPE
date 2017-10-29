<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Asignsector */

$this->title = 'Create Asignsector';
$this->params['breadcrumbs'][] = ['label' => 'Asignsectors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asignsector-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
