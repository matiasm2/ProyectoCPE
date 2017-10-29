<?php
use app\commands\Intranet;

/* @var $this yii\web\View */

$this->title = 'CPE UNAJ Application';
?>
<div class="site-index">

<!--
    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>
-->

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Explicaci&oacute;n del boton 1</h2>

                <p>El CPE boton 1, debe cambiar segun el rol, si el link 
                pertenece a un behavior de logueo, direcciona autom&aacute;ticamente. Hay que entender
                que la redireccion despues del login no sirve porque si uno se reloguea desde un error te 
                redirige al sitio fijo que puede ser molesto</p>

                <p><a class="btn btn-default" href="http://www.unaj.edu.ar">CPE boton 1 &raquo;</a></p>
            </div>
            
            <div class="col-lg-4">
                <h2>Explicaci&oacute;n del boton 2</h2>

                <p>Va al localhost del docker en Digital Ocean</p>

                <p><a class="btn btn-default" href=<?php echo Intranet::getUrlHead()?>>CPE boton 2 &raquo;</a></p>
            </div>

        </div>

    </div>
</div>
