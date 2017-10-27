<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\BootswatchAsset;

//BootswatchAsset::register($this);
AppAsset::register($this);


$this->title = 'Administrador CPE';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <meta charset="<?= Yii::$app->charset ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?= Html::csrfMetaTags() ?>
        <title>
            <?= Html::encode($this->title) ?>
        </title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php
        $this->beginBody();
        ?>

        <div class="wrap">
            <?php
            NavBar::begin([
                'brandLabel' => '<img src="img/avatarUser.png" style="display:inline; margin-top: -20px; vertical-align: top; width:120px; height:55px;">&nbsp&nbsp&nbsp&nbsp<b styel="size:15px">CPEAdmin</b>',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => ['class' => 'navbar navbar-default navbar-fixed-top navbar-transparent'],
            ]);
            ;
            echo Nav::widget([
                'encodeLabels' => false,
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => '<span class="fa fa-home"  ></span> ' . Html::encode('Home'), 'url' => ['/CPEAdmin/index']],
                    [
                        'label' => '<span class="fa fa-user-plus"></span> ' . Html::encode('Usuarios'),
                        'items' => [
                            ['label' => '<span class="fa fa-th-list"></span> ' . Html::encode('Administrar'), 'url' => ['/CPEAdmin/listar_usuarios'], 'data-toggle' => 'dropdown', 'class' => 'dropdown-toggle'], //aca irian listas o acciones especiales del usuario CPEAdmin
                        ],
                    ],
                    Yii::$app->user->isGuest ? (
                            ['label' => 'Login', 'url' => ['/site/login']]
                            ) : (
                            '<li>'
                            . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                            . Html::submitButton(
                                    'Logout (' . Yii::$app->user->identity->Usuario . ')', ['class' => 'btn btn-link']
                            )
                            . Html::endForm()
                            . '</li>'
                            )
                ],
            ]);
            NavBar::end();
            ?>


            <!--<div class="container">-->
            <?=
            Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])
            ?>
            <?= $content ?>
            <!--</div>-->
        </div>

        <footer class="footer">
            <div class="container">
                <span id="footer-copy-right" style="text-align:center"> 
                    <i class="fa fa-map-marker"></i>   Contactenos:&nbsp; &nbsp; &nbsp; &nbsp;
                    <i class="fa fa-phone-square"></i> &nbsp; 011-9999-9999 &nbsp; &nbsp;
                    <i class="fa fa-envelope"></i> &nbsp; desarrolladores.unajcpe@gmail.com
                </span>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
