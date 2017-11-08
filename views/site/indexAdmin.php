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

        <div class="col-lg-15 col-md-offset-2">

            <div id="instituto1" class="col-lg-3">
                <h4>Ciencias de la Salud</h4>
                <table>
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
                </table>

                    <div class="show">
                      <div id="progress3" class="progress" role="progressbar" data-goal="30">
                        <div id="progress3" class="progress__bar" style="width: 30%"></div>
                      </div>
                    </div>

                </div>
            <div id="instituto" class="col-lg-3">
                <h4>Ciencias Sociales y administraci&#243;n</h4>
                  <table>
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
                  <div id="progress2" class="progress" role="progressbar" data-goal="30">
                    <div class="progress__bar" style="width: 30%"></div>
                  </div>
                </div>
            </div>

            <div id="instituto1" class="col-lg-3">
                <h4>Ingenier&#237;a y Agronom&#237;a</h4>
                <table>
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
                        <div class="progress__bar" style="width: 30%"></div>
                      </div>
                    </div>

            </div>

                <div id="instituto1" class="col-lg-3">
                <h4>Estudios Iniciales</h4>

                <table>
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
                  <div id="progress4" class="progress" role="progressbar" data-goal="30">
                    <div class="progress__bar" style="width: 30%"></div>
                  </div>
                </div>

            </div>

        </div>

    </div>


</div>

  <script type="text/javascript" src="js/progresBar.js"></script>
  <script type="text/javascript" src="js/jquery-asProgress.js"></script>
  <script type="text/javascript">
    jQuery(function($) {
      $('.progress').asProgress({
        'namespace': 'progress'
      });
      $('.progress').asProgress('go',<?php echo($countEntregadosIngyAgr *100)/($countEntregadosIngyAgr+$countFaltantesIngyAgr)?>);

      $('#progress2').asProgress({
        'namespace': 'progress'
      });
      $('#progress2').asProgress('go',<?php echo($countEntregadosSocyAdm *100)/($countEntregadosSocyAdm+$countFaltantesSocyAdm)?>);

      $('#progress3').asProgress({
        'namespace': 'progress'
      });
      $('#progress3').asProgress('go',<?php echo($countEntregadosSalud *100)/($countEntregadosSalud+$countFaltantesSalud)?>);

      $('#progress3').asProgress({
        'namespace': 'progress'
      });
      $('#progress4').asProgress('go',<?php echo($countEntregadosEIni *100)/($countEntregadosEIni+$countFaltantesEIni)?>);


    });
  </script>



</div>
