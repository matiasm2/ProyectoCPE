<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Usuarioinstituto */

$this->title = 'Create Usuarioinstituto';
$this->params['breadcrumbs'][] = ['label' => 'Usuarioinstitutos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuarioinstituto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
