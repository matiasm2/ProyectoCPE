<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Moderw;
/* @var $this yii\web\View */
/* @var $searchModel app\models\DocumentUploadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Document Uploads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="document-upload-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
	<p><?= $msg; ?></p>
    <p><?= Html::a('Crear Document Upload', ['create'], ['class' => 'btn btn-success']) ?></p>
	<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
             [
              'attribute' => 'programa',
              'value' =>'descripcionPrograma',
            ],
            'nombreUsuario',
            'descripcionEstado',
            'archivo',
            'fecha',
				[
					'label' => 'File',
					'format' => 'raw',
					'value' => function ($data) {
						return Html::a('Descargar', 'uploads/'.$data ->archivo);
					},
				],
			[
              'label' => 'Modo de publicación',
              'attribute' => 'moderw_id',
              'value' => function($model){
                return Moderw::find()->where(['moderw_id'=>$model->moderw_id])->one()->moderw;
              }
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
