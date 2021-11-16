<?php
session_start();
include('./zBD/Menu.php');
 ?>
 <!DOCTYPE html>                     <!--  Se pone al principio del programa para saber cual es es la version de HTLM 5 -->
 <html lang="es">                    <!-- idioma -->
     <head>
         <!-- metadatos: Es lo que nuestro navegador detecta de cierta configuración o información de nuestra p.web -->
         <meta charset="utf-8">  <!-- símbolos especiales como la ñ, acentos      -->
         <meta name="author"      content="Carlos Segué">
         <meta name="Descripción" content="Comienzo curso ITAcademy">
         <!-- viewport: que mi ancho va a ser el ancho del dispositivo y que mi escala inicial va a ser la 1 -->
         <!-- La width=device-widthparte establece el ancho de la página para seguir el ancho de la pantalla del dispositivo (que variará  según el dispositivo). -->
         <!-- La initial-scale=1parte establece el nivel de zoom inicial cuando el navegador carga la página por primera vez. -->
         <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no,  maximum-scale=1.0, minimum-scale=1.0">
         <!-- maxima compatibilidad para todos los navegadores -->
         <meta http-equiv="x-ua-compatible" content="ie-edge">
         <link rel="stylesheet" href="fonts/css/fontello.css">  <!-- iconos -->
         <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> <!-- Fuente: Roboto Regular 400 -->
         <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
         <link rel="stylesheet" href ="css/bootstrap.css">      <!-- estilos .css -->

    <title>M4_Bootstrap</title>

         <style type="text/css">
            .bordred   { border: 0px solid red;}
            .bordblue  { border: 0px solid blue;}
            .bordgreen { border: 0px solid green;}
            .bordblack { border: 1px solid black;}
         </style>
    </head>
 <!--.................................................................................................................... -->

<?php
    $x= "0";
    $y= "0";
    $n= "0";
    $m= "0";
?>

 <body>

<!--..Agrupar introducción del contenido................................................................................. -->
<header>
</header>
 <!--.................................................................................................................... -->
<!-- ******************************************************************************************************************** -->


<div class="container-fluid" >  <!-- container-fluid -->



<!-- ********************************************************************************************************************* -->
<!-- explicación
**************************************************************************************************************************  -->
<div class="Cab_03">
 <div class="row">
  <div class="col-12">

      <h3 class="text-center" style="font-size: 1.5em;"   >declarar dues variables X e Y de tipus int, dues variables N i M de tipous double i assigna a cada una un valor. A continuació, mostra per pantalla, per a X e Y:</h3>


  </div><!-- col -->
 </div> <!-- row -->
</div><!-- Cab-02 -->



<!-- ********************************************************************************************************************* -->
<!-- FORMULARIO DE ENTRADA
**************************************************************************************************************************  -->
<div class="row bordblue">
  <div class="col-xs-12 col-xl-12 bordred">

    <div id="dptsecciones">
       <div class="TituloDer"> <p>Tasca M5 <br> Nivell-3 <br> Ejercicio 2</p> </div>
        <div class="CentrarForm">
           <div class="TitForm">
               Introduzca un número entero<br>
               Introduzca otro número entero<br>
               Introduzca un número decimal<br>
               Introduzca otro número decimal<br>
               Introduzca los datos
           </div>

           <div class="CasillasForm">
                <form  action="#" method="POST" autocomplete="">
                 <input name="tx" type="number"  style="text-align: center;"    placeholder= "integer"  value="" /></br>
                 <input name="ty" type="number"  style="text-align: center;"    placeholder= "integer"  value="" /></br>
                 <input name="tn" type="double"  style="text-align: center;"    placeholder= "double"   value="" /><br/>
                 <input name="tm" type="double"  style="text-align: center;"    placeholder= "double"   value="" /></br>
                   <input name="tingreso" type="submit" value="Ingresar"/>
                   <input type="reset" value="Cancelar">
                </form>
           </div>



<!-- ******************************************************************************************************************* -->
<!-- VERIFICACION ENTRADA
***********************************************************************************************************************  -->
    <div class="ResultForm">
<?php
/* isset: Devuelve true si var existe y tiene un valor distinto de null, false de lo contrario. */
           if(isset($_POST['tingreso'])){ /* && !empty($_POST['tinteger']))*/

                $tx =  $_POST['tx'];
                $ty =  $_POST['ty'];
                $tn =  $_POST['tn'];
                $tm =  $_POST['tm'];

                echo "variable entera X :  ".$tx."<br>";
                echo "variable entera Y :  ".$ty."<br>";

                echo "suma X + Y =           "; echo $tx+$ty."<br>";
                echo "resta X - Y =          "; echo $tx-$ty."<br>";
                echo "multiplicación X * Y = "; echo $tx*$ty."<br>";
                echo "división X / Y =       "; echo $tx/$ty."<br>";
                echo "módulo X % Y =         "; echo $tx%$ty."<br>";
                echo "<hr>";

                echo "variable entera N :  ".$tn."<br>";
                echo "variable entera M :  ".$tm."<br>";

                echo "suma N + M = "; echo $tn+$tm."<br>";
                echo "resta N - M = "; echo $tn-$tm."<br>";
                echo "multiplicación N * M = "; echo $tn*$tm."<br>";
                echo "división N / M = "; echo $tn/$tm."<br>";
                echo "módulo N % M = "; echo $tn%$tm."<br>";
                echo "<hr>";

                echo "DOBLES : "; echo $tx*$tx;
                echo "/ ".$ty*$ty;
                echo "/ ".$tn*$tn;
                echo "/ ".$tm*$tm."<br>";

                echo "SUMA TOTAL     : "; echo $tx + $ty + $tn + $tm."<br>";
                echo "PRODUCTO TOTAL : "; echo $tx * $ty * $tn * $tm."<br>";





           }
 ?>

     </div> <!-- ResultForm -->
<!-- ******************************************************************************************************************* -->



    </div><!-- centrarform -->
   </div>  <!-- dptsecciones -->
  </div> <!-- col -->
 </div><!-- row -->
</div>  <!-- container -->





<!--..Contenido que está fuera del tema principal. (Un anuncio pe )............................................................. -->
     <aside>
     </aside>
<!--..Pie de página.............................................................................................................. -->
     <footer>

     </footer>


     <script src="js/jquery-3.5.1.slim.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/bootstrap.min.js"></script>



<?php
    /*include('./zBD/PieM4.php');*/
?>

 </body>
 </html>
