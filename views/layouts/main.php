<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\Sector;
use kartik\sidenav\SideNav;
use kartik\widgets\SideNavs;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>



<div class="wrap">
    <?php

/*
    NavBar::begin([
        //'brandLabel' => 'CPE UNAJ',
        'brandLabel' => '<img src="img/unaj.png" style="display:inline; margin-top: -20px; vertical-align: top; width:150px; height:55px;">&nbsp&nbsp&nbsp&nbsp<b style="size:15px">CPE UNAJ</b>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default navbar-fixed-left',
        ],

    ]);
    NavBar::end();
*/
    echo Nav::widget([
        'options' => ['class' => 'sidebar-nav navbar-left'],

        'items' => [
            ['label' => 'Incio', 'url' => ['/site/index']],
            //['label' => 'About', 'url' => ['/site/about']],
            //['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => 'Crear usuarios', 'url' => ['/site/register']],
/*descomentar si se quiere eliminar el dropdown del menu*/
            //~ ['label' => 'Archivo', 'url' => ['/archivoprograma/index'],'visible' => !(Yii::$app->user->isGuest)],
/*comentar desde aca si se quiere eliminar el dropdown del menu*/

			['label' => 'Dropdown','items'=> [
				['label' => 'Archivos', 'url' => ['/archivoprograma/index']],
                ['label' => 'Usuarios', 'url' => ['/usuario/index']],
				'<li class="divider"></li>',
				],
			'visible' => !(Yii::$app->user->isGuest),
			],
/*comentar hasta aca si se quiere eliminar el dropdown del menu*/

Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . '  [' . Yii::$app->user->identity->getSector()->one()->descripcion.'] ' . Yii::$app->user->identity->nombre . ' )',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    ?>


    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">

          <img src="img/unaj.png" style="display:inline; margin-top: -20px; align: center; width:150px; height:55px;">&nbsp&nbsp&nbsp&nbsp<b style="size:15px"></b>
          &copy; UNAJ-CPE <?= date('Y') ?>
        </p>
        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
