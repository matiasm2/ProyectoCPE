<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProgramaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Programas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="programa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Programa'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'programa_id',
            'planmateria_id',
            'ano_id',
            'fecha',
            [
                'format' => 'raw',
                'value' => function($model, $key, $index, $column) {
                        return Html::a(
                            '<i class="fa fa-euro">Ver archivos</i>',
                            Url::to(['mycontroller/myaction', 'id' => $model->programa_id]),
                            [
                                'id'=>'grid-custom-button',
                                'data-pjax'=>true,
                                'action'=>Url::to(['mycontroller/myaction', 'id' => $model->programa_id]),
                                'class'=>'button btn btn-default',
                            ]
                        );
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
