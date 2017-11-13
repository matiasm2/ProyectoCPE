<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArchivoprogramaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Archivos de programas';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-lg-8">
<div class="archivoprograma-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'programa_id',
            [
              'attribute' => 'programa',
              'value' =>'descripcionPrograma',
            ],

            'nombreUsuario',
            'descripcionEstado',
            'archivo',
            // 'fecha',
            // IMAGEN DEL DOCUMENTO
				/*[
					'attribute'	=> 'archivo',
					'format' => 'html',
					//'label' => 'ImageColumnLabel',
					'value' => function ($data){
							return Html::img('uploads/'.$data['archivo'],['widht' => '100px']);
						},

				],*/
			// URL DEL DOCUMENTO
				[
					'label' => 'File',
					'format' => 'raw',
					'value' => function ($data) {
						$url = "uploads/" . $data ->archivo;
						return Html::a($data->archivo, $url);
					},
				],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
