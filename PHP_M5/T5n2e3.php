<?php
session_start();
include('./zBD/Menu.php');

/*------------------------------------------------------------------------------------------------------------------------- */

if(isset($_SESSION['camposArray1']))
{

     echo "listado array1 : "; print_r($_SESSION["camposArray1"]); echo "</br>";
     /*echo "listado array1 : "."<br>"; foreach($_SESSION['campos2'] as $indice=>$arreglo){ echo $arreglo; echo "</br>";}*/
}else{

echo "";


}
/*------------------------------------------------------------------------------------------------------------------------- */

if(isset($_SESSION['camposArray2']))
{
    echo "listado array2 : "; print_r($_SESSION["camposArray2"]); echo "</br>";
    /*echo "listado array2 : "."<br>"; foreach($_SESSION['campos2'] as $indice=>$arreglo){ echo $arreglo; echo "</br>";}*/
}else{
    echo "";
}
/*------------------------------------------------------------------------------------------------------------------------- */
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

      <h3 class="text-center" style="font-size: 1.5em;">Mescla els dos arrays i imprimeix el tamany de l'array resultant per pantalla.</h3>


  </div><!-- col -->
 </div> <!-- row -->
</div><!-- Cab-02 -->



<!-- ********************************************************************************************************************* -->
<!-- FORMULARIO DE ENTRADA
**************************************************************************************************************************  -->
<div class="row bordblue">
  <div class="col-xs-12 col-xl-12 bordred">

    <div id="dptsecciones">
       <div class="TituloDer"> <p>Tasca M5 <br> Nivell-2 <br> Ejercicio 3</p> </div>
        <div class="CentrarForm">
           <div class="TitForm">
                <br><br><br><br><br><br><br>
           </div>

           <div class="CasillasForm">

           </div>



<!-- ******************************************************************************************************************* -->
<!-- VERIFICACION ENTRADA
***********************************************************************************************************************  -->
    <div class="ResultForm3">
<?php

         $siguArr1 = count($_SESSION['camposArray1']);
         echo "Elementos array1 : ".$siguArr1."<br>";
         foreach($_SESSION['camposArray1'] as $indice1=>$arreglo1){ echo $arreglo1; echo "</br>";}

         $siguArr2 = count($_SESSION['camposArray2']);
         echo "Elementos array2 : ".$siguArr2."<br>";
         foreach($_SESSION['camposArray2'] as $indice2=>$arreglo2){ echo $arreglo2; echo "</br>";}


         for($i = 0; $i < count($_SESSION['camposArray2']); $i++){
             $_SESSION['camposArray1'][$siguArr1]=$_SESSION['camposArray2'][$i];
             $siguArr1= $siguArr1+1;
         }

         $siguArr3 = count($_SESSION['camposArray1']);
         echo "Elementos unidos de las dos arrays : ".$siguArr3."<br>";
         foreach($_SESSION['camposArray1'] as $indice1=>$arreglo1){ echo $arreglo1; echo "</br>";}

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
