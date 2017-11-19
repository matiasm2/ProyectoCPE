<?php

/* @var $this \yii\web\View */
/* @var $content string */
/* footer: Yii::powered() */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\commands\RoleAccessChecker;
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

    <div class="page-header" style='margin:20px;text-align:center;'>
        <strong><h3>SISTEMA DE GESTIÓN DE PROGRAMAS DE MATERIAS</h3></strong>        
    </div>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>



<div class="wrap">
    <?php echo Nav::widget(RoleAccessChecker::navWidgetContent()); ?>


    <div class="container-fluid">
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
        <p class="pull-right"> desarrolladores.unajcpe@gmail.com <?= date('') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
