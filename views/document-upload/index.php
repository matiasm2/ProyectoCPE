<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
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
    <p>
        <?= Html::a('Create Document Upload', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
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

<?php Pjax::end(); ?></div>
