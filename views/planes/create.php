<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Planes */

$this->title = 'Crear Planes';
/*$this->params['breadcrumbs'][] = ['label' => 'Planes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;*/
?>
<div class="col-lg-8">
<div class="planes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'subModel' => $subModel,
        'subModel2' => $subModel2,
        'subModel3' => $subModel3,
        'subModel4' => $subModel4,
    ]) ?>

</div>
</div>
