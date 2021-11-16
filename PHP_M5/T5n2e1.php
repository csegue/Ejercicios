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
    $int1 =   "0";
    $int2 =   "0";
    $int3 =   "0";
    $int4 =   "0";
    $int5 =   "0";
    $int6 =   "0";
    $int7 =   "0";
    $int8 =   "0";
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
<div class="Cab_04">
 <div class="row">
  <div class="col-12">

        <h3 class="text-center" style="font-size: 1.5em;">Crea dos arrays, un que inclogui 5 integers, i un altre que inclogui 3 integers.</h3>


  </div><!-- col -->
 </div> <!-- row -->
</div><!-- Cab-02 -->



<!-- ********************************************************************************************************************* -->
<!-- FORMULARIO DE ENTRADA
**************************************************************************************************************************  -->
<div class="row bordblue">
  <div class="col-xs-12 col-xl-12 bordred">

    <div id="dptsecciones">
       <div class="TituloDer"> <p>Tasca M5 <br> Nivell-2 <br> Ejercicio 1</p> </div>
        <div class="CentrarForm">
         <div class="TitForm">
           <div class="TitForm2">
               <h6>Primera array() con 5 números; <br></h6>
               Introducir int-1 <br>
               Introducir int-2 <br>
               Introducir int-3 <br>
               Introducir int-4 <br>
               Introducir int-5 <br>
               <h6>Segunda array() con 3 números: <br></h6>
               Introducir int-6 <br>
               Introducir int-7 <br>
               Introducir int-8 <br>
           </div>
          </div>
           <div class="CasillasForm">
                <form  action="#" method="POST" autocomplete="">
                 <input name="tint0"  type="hidden"  style="text-align: center;" placeholder= "int-0"  value="" /></br>
                 <input name="tint1"  type="number"  style="text-align: center;" placeholder= "int-1"  value="" /></br>
                 <input name="tint2"  type="number"  style="text-align: center;" placeholder= "int-2"  value="" /></br>
                 <input name="tint3"  type="number"  style="text-align: center;" placeholder= "int-3"  value="" /></br>
                 <input name="tint4"  type="number"  style="text-align: center;" placeholder= "int-4"  value="" /></br>
                 <input name="tint5"  type="number"  style="text-align: center;" placeholder= "int-5"  value="" /></br>
                 <hr>
                 <input name="tint6"  type="number"  style="text-align: center;" placeholder= "int-6"  value="" /></br>
                 <input name="tint7"  type="number"  style="text-align: center;" placeholder= "int-7"  value="" /></br>
                 <input name="tint8"  type="number"  style="text-align: center;" placeholder= "int-8"  value="" /></br>
                 <input name="tint9"  type="hidden"  style="text-align: center;" placeholder= "int-9"  value="" /></br>
                   <input name="tingreso" type="submit" value="Ingresar"/>
                   <input type="reset" value="Cancelar">
                </form>
           </div>



<!-- ******************************************************************************************************************* -->
<!-- VERIFICACION ENTRADA
***********************************************************************************************************************  -->
    <div class="ResultForm">
<?php

if(isset($_POST['tingreso'])) /* && !empty($_POST['tinteger']))*/
{



    $_SESSION['camposArray1']=array();
    $tint1 =  $_POST['tint1']; $campos[]=$tint1; $_SESSION['camposArray1'][0]=$tint1;
    $tint2 =  $_POST['tint2']; $campos[]=$tint2; $_SESSION['camposArray1'][1]=$tint2;
    $tint3 =  $_POST['tint3']; $campos[]=$tint3; $_SESSION['camposArray1'][2]=$tint3;
    $tint4 =  $_POST['tint4']; $campos[]=$tint4; $_SESSION['camposArray1'][3]=$tint4;
    $tint5 =  $_POST['tint5']; $campos[]=$tint5; $_SESSION['camposArray1'][4]=$tint5;
    /*
    echo "Referencia :" .$_SESSION['campos']['int1'];  echo "</br>";
    print_r($_SESSION["campos"]); echo "</br>";
    foreach($_SESSION['campos'] as $indice=>$arreglo){ echo $arreglo; echo "</br>";}
    */
    $_SESSION['camposArray2']=array();
    $campos2 = array();
    $tint6 =  $_POST['tint6']; array_push($campos2,$tint6); $_SESSION['camposArray2'][0]=$tint6;
    $tint7 =  $_POST['tint7']; array_push($campos2,$tint7); $_SESSION['camposArray2'][1]=$tint7;
    $tint8 =  $_POST['tint8']; array_push($campos2,$tint8); $_SESSION['camposArray2'][2]=$tint8;

    /*
    echo "Referencia :" .$_SESSION['campos2']['int6'];  echo "</br>";
    print_r($_SESSION["campos2"]); echo "</br>";
    foreach($_SESSION['campos2'] as $indice=>$arreglo){ echo $arreglo; echo "</br>";}
    */
        $cont1=count($campos);
        $cont2=count($campos2);

        if($cont1>0 && $cont2>0){                           /* Evito que me de error los menus si no esta introducido */
            $_SESSION['Rellenado']="true";
        }

        if(count($campos) > 0){
            echo "Array1 - ".$cont1." números";
            for($i = 0; $i < count($campos); $i++)
            {
                echo "<li>".$campos[$i]."</li>";
            }
        }echo "<br>";

        if(count($campos2) > 0){
            echo "Array2 - ".$cont2." números";
            for($j = 0; $j < count($campos2); $j++)
            {
                echo "<li>".$campos2[$j]."</li>";
            }
        }





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
