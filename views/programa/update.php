<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Programa */

$this->title = Yii::t('app', 'Actualizar {modelClass}: ', [
    'modelClass' => 'Programa',
]) . $model->programa_id;
/*$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Programas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->programa_id, 'url' => ['view', 'id' => $model->programa_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');*/
?>
<div class="col-lg-8">
<div class="programa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'subModel' => $subModel,
    ]) ?>

</div>
</div>
