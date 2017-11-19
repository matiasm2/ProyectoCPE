<?php
use app\commands\Intranet;
//use Yii;

/* @var $this yii\web\View */

$this->title = 'CPE UNAJ Application';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                
				
			<?=
			 Yii::$app->user->isGuest?('<h2>Ingrese al sistema para operar</h2><p>Si no tiene acceso comuniquese con el CPE Admin</p>'):('<h2>Bienvenido </h2><p>Puede operar desde el menu herramientas..</p>')
			?>
                

            </div>


        </div>

    </div>
</div>
