<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Usuarioinstituto */

$this->title = 'Crear archivo de programa';
$this->params['breadcrumbs'][] = ['label' => 'Usuario institutos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuarioinstituto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
