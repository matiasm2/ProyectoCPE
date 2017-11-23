<?php
use app\commands\Intranet;
//use Yii;

/* @var $this yii\web\View */

$this->title = 'CPE UNAJ Application';
?>
<head>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/asProgress.css">
</head>
<div class="site-index">
    <div class="body-content">

    <?php if (Yii::$app->user->isGuest){?>
        <h2>Ingrese al sistema para operar</h2><p>Si no tiene acceso comuniquese con el CPE Admin</p>
    <?php }else{ ?>
     
    <h2>Bienvenido </h2><p>Puede comenzar a operar desde el menu herramientas.</p>

        <div class="col-lg-5 col-sm-offset-2">
            <div id="estadisticoInst" class="col-lg-3">
                <h3><?php echo $instituto?></h3>
                <h4><?php echo $carrera?></h4>
                <table id="tableinst">
                <b>
                  <tr>
                    <td class="tdPorIns">Entregados</td>
                    <td class="tdPorIns">Faltantes</td>
                    <td class="tdPorIns">Total</td>
                  </tr>
                  <tr>
                    <td><?php echo $countEstadosEntregadoPorIns ?></td>
                    <td><?php echo $countEstadosFaltantesPorIns?></td>
                    <td><?php echo $countEstadosEntregadoPorIns?><span>/</span><?php echo $countEstadosEntregadoPorIns + $countEstadosFaltantesPorIns?></td>                  
                  </tr>
                  </b>
                </table>
                <div class="show" id="progresIns">
                  <div id="progress" class="progress" role="progressbar" data-goal="30">
                    <div id="progress" class="progress__bar" style="width: 0%"></div>
                  </div>
                </div>
                <b><div id="calculo"></div></b>
            </div>
        </div>
    </div>
<script type="text/javascript" src="js/progresBar.js"></script>
<script type="text/javascript" src="js/jquery-asProgress.js"></script>
<script type="text/javascript">

jQuery(function($) {

    $(".progress").asProgress({
        "namespace": "progress"
      });
    calculo=0;
    total = <?php echo $countEstadosEntregadoPorIns+$countEstadosFaltantesPorIns ?>;
    dividendo = <?php echo ($countEstadosEntregadoPorIns)*100 ?>;
    if (total != 0){
        calculo= dividendo/total;
    }
    $(".progress").asProgress("go",calculo);
    document.getElementById("calculo").innerHTML = calculo.toFixed(0)+"%";
 
});
</script>         
<?php } ?>
    </div>
</div>