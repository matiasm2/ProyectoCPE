<?php
use app\commands\Intranet;

/* @var $this yii\web\View */

$this->title = 'CPE UNAJ Application';

?>

<head>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/asProgress.css">
<head>
<div class="site-index">

<!--
    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>
--> 
      <div class="body-content">
       <h2>Bienvenido </h2><p>Puede comenzar a operar desde el menu herramientas.</p>

        <div id= "allInst" class="col-lg-15 col-md-offset-2">

            <div id="instituto1" class="col-lg-3">
                <h4>Ciencias de la Salud</h4>
                <table class="tableAll">
                  <tr>
                    <td>Entregados</td>
                    <td>Faltantes</td>
                    <td>Total</td>
                  </tr>
                  <tr>
                    <td><?php echo $countEntregadosSalud?> </td>
                    <td><?php echo $countFaltantesSalud?></td>
                    <td><?php echo $countEntregadosSalud?><span>/</span><?php echo $countEntregadosSalud + $countFaltantesSalud?></td>
                  </tr>
                </table class="tableAll">

                    <div class="show">
                      <div id="progress3" class="progress3" role="progressbar" data-goal="30">
                        <div id="progress3" class="progress__bar" style="width: 0%"></div>
                      </div>
                    </div>
                    <b><div id="calculo3"></div></b>
                </div>
            <div id="instituto" class="col-lg-3">
                <h4>Ciencias Sociales y administraci&#243;n</h4>
                  <table class="tableAll">
                  <tr>
                    <td>Entregados</td>
                    <td>Faltantes</td>
                    <td>Total</td>
                  </tr>
                  <tr>
                    <td><?php echo $countEntregadosSocyAdm?> </td>
                    <td><?php echo $countFaltantesSocyAdm?></td>
                    <td><?php echo $countEntregadosSocyAdm?><span>/</span><?php echo $countEntregadosSocyAdm + $countFaltantesSocyAdm?></td>
                  </tr>
                </table>
                <div class="show">
                  <div id="progress2" class="progress2" role="progressbar" data-goal="30">
                    <div class="progress__bar" style="width: 0%"></div>
                  </div>
                </div>
                <b><div id="calculo2"></div></b>
            </div>

            <div id="instituto1" class="col-lg-3">
                <h4>Ingenier&#237;a y Agronom&#237;a</h4>
                <table class="tableAll">
                  <tr>
                    <td>Entregados</td>
                    <td>Faltantes</td>
                    <td>Total</td>
                  </tr>
                  <tr>
                    <td><?php echo $countEntregadosIngyAgr?> </td>
                    <td><?php echo $countFaltantesIngyAgr?></td>
                    <td><?php echo $countEntregadosIngyAgr?><span>/</span><?php echo $countEntregadosIngyAgr + $countFaltantesIngyAgr?></td>
                  </tr>
                </table>

                    <div class="show">
                      <div class="progress" role="progressbar" data-goal="30">
                        <div class="progress__bar" style="width: 0%"></div>
                      </div>
                    </div>
                    <b><div id="calculo"></div></b>

            </div>

                <div id="instituto1" class="col-lg-3" style="visibility: hidden;">
                <h4>Estudios Iniciales</h4>

                <table class="tableAll">
                  <tr>
                    <td>Entregados</td>
                    <td>Faltantes</td>
                    <td>Total</td>
                  </tr>
                  <tr>
                    <td><?php echo $countEntregadosEIni?> </td>
                    <td><?php echo $countFaltantesEIni?></td>
                    <td><?php echo $countEntregadosEIni?><span>/</span><?php echo $countEntregadosEIni + $countFaltantesEIni?></td>
                  </tr>
                </table>

                <div class="show">
                  <div id="progress4" class="progress4" role="progressbar" data-goal="30">
                    <div class="progress__bar" style="width: 0%"></div>
                  </div>
                </div>
                <b><div id="calculo4"></div></b>
            </div>

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
    total = <?php echo $countEntregadosIngyAgr+$countFaltantesIngyAgr ?>;
    dividendo = <?php echo ($countEntregadosIngyAgr)*100 ?>;
    if (total != 0){
        calculo= dividendo/total;
    }
    $(".progress").asProgress("go",calculo);
    document.getElementById("calculo").innerHTML = calculo.toFixed(0)+"%";


    $(".progress2").asProgress({
        "namespace": "progress"
      });
    calculo2=0;
    total2 = <?php echo $countEntregadosSocyAdm+$countFaltantesSocyAdm ?>;
    dividendo2 = <?php echo ($countEntregadosSocyAdm)*100 ?>;
    if (total2 != 0){
        calculo2= dividendo2/total2;
    }
    $(".progress2").asProgress("go",calculo2);
    document.getElementById("calculo2").innerHTML = calculo2.toFixed(0)+"%";




    $(".progress3").asProgress({
        "namespace": "progress"
      });
    calculo3=0;
    total3 = <?php echo $countEntregadosSalud+$countFaltantesSalud ?>;
    dividendo3 = <?php echo ($countEntregadosSalud)*100 ?>;
    if (total3 != 0){
        calculo3= dividendo3/total3;
    }
    $(".progress3").asProgress("go",calculo3);
    document.getElementById("calculo3").innerHTML = calculo3.toFixed(0)+"%";



    $(".progress4").asProgress({
        "namespace": "progress"
      });
    calculo4=0;
    total4 = <?php echo $countEntregadosEIni+$countFaltantesEIni ?>;
    dividendo4 = <?php echo ($countEntregadosEIni)*100 ?>;
    if (total4 != 0){
        calculo4= dividendo4/total4;
    }
    $(".progress4").asProgress("go",calculo4);
    document.getElementById("calculo4").innerHTML = calculo4.toFixed(0)+"%";

});
</script>