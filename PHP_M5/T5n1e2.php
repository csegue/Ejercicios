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
    $string1="";
    $string2="";
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

        <h3 class="text-center" style="font-size: 1.5em;">Crea una altra variable string. Després:</h3>
        <h3 class="text-left"   style="font-size: 1.2em;">Imprimeix per pantalla el tamany(longitud) del dos strings.</h3>
        <h3 class="text-left"   style="font-size: 1.2em;">Imprimeix per pantalla el dos strings però en ordre invers de caràcters.</h3>
        <h3 class="text-left"   style="font-size: 1.2em;">Imprimeix la concatenació dels dos strings. </h3>

  </div><!-- col -->
 </div> <!-- row -->
</div><!-- Cab-02 -->



<!-- ********************************************************************************************************************* -->
<!-- FORMULARIO DE ENTRADA
**************************************************************************************************************************  -->
<div class="row bordblue">
  <div class="col-xs-12 col-xl-12 bordred">

    <div id="dptsecciones">
       <div class="TituloDer"> <p>Tasca M5 <br> Nivell-1 <br> Ejercicio 2</p> </div>
        <div class="CentrarForm">
           <div class="TitForm">
               Introducir string-1 <br>
               Introducir string-2 <br>
               <br><br><br><br>
           </div>

           <div class="CasillasForm">
                <form  action="#" method="POST" autocomplete="">
                 <input name="tstring1"  type="text"  style="text-align: center;" placeholder= "String-1"  value="" /></br>
                 <input name="tstring2"  type="text"  style="text-align: center;" placeholder= "String-2"  value="" /></br>
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
               $string1 =  $_POST['tstring1'];
               $string2 =  $_POST['tstring2'];

               if(isset($_POST['tstring1'])){

                echo "Tamaño       :".$string1."  :".strlen($string1); echo "<br>";
                echo "Tamaño       :".$string2."  :".strlen($string2); echo "<br>";
                echo "Inverso      :".$string1."  :".strrev($string1); echo "<br>";
                echo "inverso      :".$string2."  :".strrev($string2); echo "<br>";
                echo "Concatenado  :".($string1.$string2); echo "<br>";
                echo "......................................................................................"."<br>";
               }

               $campos = array();

               if($string1 == "")                                    {array_push($campos,"El campo texto 1 no pude estar vacío");}
               if($string2 == "")                                    {array_push($campos,"El campo texto 2 no pude estar vacío");}

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
