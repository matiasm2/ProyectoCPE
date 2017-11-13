<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\Ano;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProgramaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Programas');
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-lg-8">
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

            //'programa_id',
            'planmateria_id',
<<<<<<< HEAD
=======

>>>>>>> c3f4feb51be446aaa51ceadde43b816d6c0cc36c
            //'ano_id',
            [
              'label' => 'Anio',
              'attribute' => 'ano_id',
              'value' => function($model){
                $anio=Ano::find()->where(['ano_id'=>$model->ano_id])->one();
                return $anio->ano;
              }
            ],
            'fecha',
            'descripcion',
            [
                'format' => 'raw',
                'value' => function($model, $key, $index, $column) {
                        return Html::a(
                            '<i class="fa fa-euro">Ver archivos</i>',
                            Url::to(['/archivoprograma/programa', 'idprograma' => $model->programa_id]),
                            [
                                'id'=>'grid-custom-button',
                                'data-pjax'=>true,
                                'action'=>Url::to(['/archivoprograma/programa', 'idprograma' => $model->programa_id]),
                                'class'=>'button btn btn-default',
                            ]
                        );
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
</div>
