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
    $integer =  "";
    $double =   "";
    $string =   "";
    $boolean =  "0";
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

      <h3 class="text-center" style="font-size: 1.5em;"   >Defineix una variable de cada tipus: integer,double,string i boolean. Després, imprimeix-les per pantalla.</h3>


  </div><!-- col -->
 </div> <!-- row -->
</div><!-- Cab-02 -->



<!-- ********************************************************************************************************************* -->
<!-- FORMULARIO DE ENTRADA
**************************************************************************************************************************  -->
<div class="row bordblue">
  <div class="col-xs-12 col-xl-12 bordred">

    <div id="dptsecciones">
       <div class="TituloDer"> <p>Tasca M5 <br> Nivell-1 <br> Ejercicio 1</p> </div>
        <div class="CentrarForm">
           <div class="TitForm">
               Introduzca un número entero<br>
               Introduzca un número decimal<br>
               Introduzca un caracter<br>
               Imprimir el resultado?<br><br>
               Introduzca los datos
           </div>

           <div class="CasillasForm">
                <form  action="#" method="POST" autocomplete="">
                 <input name="tinteger" type="number"    style="text-align: center;" placeholder= "integer"  value="" /></br>
                 <input name="tdouble"  type="double"    style="text-align: center;" placeholder= "double"   value="" /></br>
                 <input name="tstring"  type="text"      style="text-align: center;" placeholder= "string"   value="" /><br/>
                 <input name="tboolean" type="checkbox"  style="transform: scale(1.5);" placeholder= "S/N" value="" /></br>
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
           if(isset($_POST['tingreso'])) /* && !empty($_POST['tinteger']))*/
           {
               $integer =  $_POST['tinteger'];
               $double =   $_POST['tdouble'];
               $string =   $_POST['tstring'];


               function ximprime(){
                   echo "integer: ".$GLOBALS['integer']; echo "<br>";
                   echo "double:  ".$GLOBALS['double'];  echo "<br>";
                   echo "string:  ".$GLOBALS['string'];  echo "<br>";
               }

               if(isset($_POST['tboolean'])){
                   ximprime();
                   echo "Boolean= SI"; echo "<br>";
                   echo "......................................................................................"."<br>";
               }else{
                   ximprime();
                   echo "Boolean= NO"; echo "<br>";
                   echo "......................................................................................."."<br>";
               }
               $campos = array();

               if($integer == "")                                    {array_push($campos,"El campo integer no pude estar vacío");}
               if($double  == "" || strpos($double,".") === false)   {array_push($campos,"El campo double no pude estar vacío o ser entero");}
               if($string  == "" )                                   {array_push($campos,"El campo string no puede estar vacío");}

                   if(count($campos) > 0){
                       echo "campos erroneos";
                       for($i = 0; $i < count($campos); $i++)
                       {
                           echo "<li>".$campos[$i]."</li>";
                       }
                       echo "Introduzca nuevamente, gracias";
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
