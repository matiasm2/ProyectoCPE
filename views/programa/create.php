<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Programa */

$this->title = Yii::t('app', 'Crear Programa');
/*$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Programas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;*/
?>
<div class="col-lg-8">
<div class="programa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'subModel' =>$subModel,
    ]) ?>

</div>
</div>
