<?php
/*session_start();*/
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
        <link rel="stylesheet" href ="css/bootstrap.css">      <!-- estilos .css -->


        <title>Nivell2_Exercici01</title>

    </head>

<!--
   <div class="container bord4" style="height:auto;">
       <div class="row">
           <div class="col">
           </div>
       </div>
   </div>

-->

<body>




<!-- ******************************************************************************************************************* -->
   <div class="container-fluid bord4" style="height:auto;">  <!-- container-fluid -->

<!-- ******************************************************************************************************************* -->
<!--  MOD 1 : Opciones a elegir + Salida resultados -->

  <div class="Mod1">
   <div class="row">   <!-- d-block: los pone verticales -->

       <div class="col-xl-3 colmod1">
           <nav2>
               <ul>
                   <li><a href="TM6n1e1.php"> Opción  1  :&nbsp&nbsp&nbsp  Niv-1-Ejer1</a></li>
                   <li><a href="TM6n1e2.php"> Opción  2  :&nbsp&nbsp&nbsp  Niv-1-Ejer2</a></li>
                   <li><a href="TM6n1e2.php"> Opción  3  :&nbsp&nbsp&nbsp  Niv-1-Ejer3</a></li>
                   <li><a href="TM6n1e4.php"> Opción  4  :&nbsp&nbsp&nbsp  Niv-1-Ejer4</a></li>
                   <li><a href="TM6n2e1.php"> Opción  5  :&nbsp&nbsp&nbsp  Niv-2-Ejer1</a></li>
                   <li><a href="TM6n2e2.php"> Opción  6  :&nbsp&nbsp&nbsp  Niv-2-Ejer2</a></li>
                   <li><a href="TM6n2e3.php"> Opción  7  :&nbsp&nbsp&nbsp  Niv-2-Ejer3</a></li>
                   <li><a href="TM6n3e1.php"> Opción  8  :&nbsp&nbsp&nbsp  Niv-3-Ejer1</a></li>
                   <li><a href="TM6n3e2.php"> Opción  9  :&nbsp&nbsp&nbsp  Niv-3-Ejer2</a></li>
                   <li><a href="TM6n3e3.php"> Opción  10  :&nbsp  Niv-3-Ejer3</a></li>

               </ul>
           </nav2>
       </div>
<!--............................................................................................................... -->
<!-- Calculo función -->

       <div class="col-xl-9 colmod1">  <!-- align-self-start -->
<?php
            echo "La criba d'Eratóstenes és un algoritme pensat per a trobar nombres primers dins d'un interval donat. Basats en l'informació de l'enllaç adjunt, implementa la criba d'Eratóstenes dins d'una funció, de tal forma que poguem invocar la funció per a un número concret."."<br>"; echo "<br>";


            if(isset($_POST['tingreso2'])){

                $num1 =  $_POST['tprimo'];

                $respuesta=numprimo($num1);

                if($respuesta) {
			       echo "El número ".$num1." es primo";
		        }else {
			       echo "El número ".$num1." NO es primo";
		        }

            }


        function numprimo($num1) {
            $resp =true;
            $numant=2;
            $numdiv=0;

            do {
                $numdiv= $num1 % $numant;
                echo $numant; echo " - "; echo $numdiv; echo "<br>";

                if($numdiv==0) {
                    $resp=false;
                }
                $numant++;
            }while($resp && ($numant!=$num1));

            return $resp; // Devolver el resultado
        }




 ?>
       </div>

   </div><!-- row -->
</div><!-- Mod1 -->

<!--*************************************************************************************************************** -->
<!--  MOD 2 : formulario todos ejercicios -->
    <div class="Mod2">
     <div class="row rowmod2">   <!-- d-block: los pone verticales -->

          <div class="col-xl-3 colmod2" >
              <div class="CasillasForm text-center">
                   <form  action="#" method="POST" autocomplete="">
                       <input name="tinteger" type="number"    style="text-align: center;" placeholder= "Opción"  value="" /></br>
                       <button name="tingreso" type="submit">Ingresar</button>
                       <button name="tingreso" type="reset">Cancelar</button>
                   </form>
              </div>
          </div>

<!--............................................................................................................... -->
<!--  formulario este ejercicio -->

      <div class="col-xl-9 colmod2" >  <!-- align-self-start -->


          <div class="CasillasForm text-center">
               <form  action="#" method="POST" autocomplete="">
                  <input name="tprimo" type="number"    required style="text-align: center;" placeholder= ""  value="" /></br>
                    <button name="tingreso2" type="submit">Ingresar</button>
                    <button name="" type="reset">Cancelar</button>
               </form>
          </div>

      </div>
    </div><!-- row -->
  </div><!-- mod2 -->


<!-- ******************************************************************************************************************* -->
<!-- VERIFICACION ENTRADA -->
<!-- ******************************************************************************************************************* -->
<?php
    if(isset($_POST['tingreso'])) /* && !empty($_POST['tinteger']))*/
    {
        $integer =  $_POST['tinteger'];

            $verificar= strlen($integer);       /*verificamos si es 1 o 01 */

            if($integer ==10 || $verificar==1){
                $valor2 = $integer;
            }else if($verificar >1){
                $valor2=substr($integer,1);
            }


        switch($valor2){
            case 1:     echo "Opcion_1"; ?><script type="text/javascript"> window.location.replace("TM6n1e1.php");</script><?php
            case 2:     echo "Opcion_2"; ?><script type="text/javascript"> window.location.replace("TM6n1e2.php");</script><?php
            case 3:     echo "Opcion_3"; ?><script type="text/javascript"> window.location.replace("TM6n1e2.php");</script><?php
            case 4:     echo "Opcion_4"; ?><script type="text/javascript"> window.location.replace("TM6n1e4.php");</script><?php
            case 5:     echo "Opcion_5"; ?><script type="text/javascript"> window.location.replace("TM6n2e1.php");</script><?php
            case 6:     echo "Opcion_6"; ?><script type="text/javascript"> window.location.replace("TM6n2e2.php");</script><?php
            case 7:     echo "Opcion_7"; ?><script type="text/javascript"> window.location.replace("TM6n2e3.php");</script><?php
            case 8:     echo "Opcion_8"; ?><script type="text/javascript"> window.location.replace("TM6n3e1.php");</script><?php
            case 9:     echo "Opcion_9"; ?><script type="text/javascript"> window.location.replace("TM6n3e2.php");</script><?php
            case 10:    echo "Opcion_10";?><script type="text/javascript"> window.location.replace("TM6n3e3.php");</script><?php
            default:    echo "La variable no es correcta, pruebe de nuevo";
        }
    }


?>

<!-- ******************************************************************************************************************* -->
<!-- FUNCIONES -->
<!-- ******************************************************************************************************************* -->
<?php
    function operaciones($n1, $n2, $operacion) {
        $resultado = 0;
        $residuo=2;
        if($operacion == "Par") {
            $resultado = $n1%$residuo;
        }else if($operacion == "Restar") {
            $resultado = $n1 - $n2;
        }else if($operacion =="Contar1"){
            $xincremento=10;
            $x=0;
            do {
                echo "El número es: $x <br>";
                $x=$x+2;
            } while ($x <= $xincremento);
        }else if($operacion =="Contar2"){
            $x=0;
            do {
                echo "El número es: $x <br>";
                $x=$x+2;
            } while ($x <= $n1);
        }else if($operacion =="Olimpiadas"){
            $x=$n1;
            do {
                echo "El año :"." ".$x." "."fue Olimpico"."<br>";
                $x=$x+4;
            } while ($x <= $n2);
        }else if($operacion =="Chocolates"){
                echo "Chocolates :"." ".$n1." uds a 1€ ="." ".$n1;
                echo "<br>";
                $resultado=$n1;
        }else if($operacion =="Chicles"){
                echo "Chicles :"." ".$n1." uds a 0.5€ ="." ".$n1/2;
                echo "<br>";
                $resultado=$n1/2;
        }else if($operacion =="Caramelos"){
                echo "Caramelos :"." ".$n1." uds a 1€ ="." ".$n1;
                echo "<br>";
                $resultado=$n1;
        }
        return $resultado; // Devolver el resultado
        }





?>










   </div> <!-- container -->
<!--..Agrupar introducción del contenido....................................................................................... -->
 <header>
 </header>
<!--..Agrupar navegación del sitio (Menu principal.............................................................................. -->

<nav>
</nav>
<!--..indicar el contenido ..................................................................................................... -->
<article>
<!--..Agrupar secciones o subsecciones de contenido............................................................................. -->
    <section>
    </section>
</article>
<!--..Contenido que está fuera del tema principal. (Un anuncio pe )............................................................. -->
<aside>
</aside>
<!--..Pie de página.............................................................................................................. -->
<footer>
</footer>




   <script src="js/jquery-3.5.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>

</body>
</html>
