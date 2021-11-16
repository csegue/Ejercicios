<?php
if(!isset($_SESSION)) {
    session_start();
}

include('./zBD/Menu.php');
include('./zBD/BD_pagos.php');



//TRAER NOMBRE DE USUARIO *******************************************************************************-->
/*
    if(!$_SESSION['usu_id']){

        ?><script type="text/javascript">
          window.location.replace("PassConectarse.php");
        </script><?php
    }
*/
/**************************************************************************************************************** */

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
         <link rel="stylesheet" href ="./css/bootstrap.css">      <!-- estilos .css -->

    <title>Spotify</title>


    </head>

 <body>

<div class="container-fluid">


<!-- ******************************************************************************************************************* -->
<!-- MOD 1: -->
<!-- Opciones del menu Vertical de la Izquierda -->
    <div class="Mod1">
     <div class="row rowmod1">   <!-- d-block: los pone verticales -->
               <div class="col-xl-2 colmod11" >
                   <nav2>
                       <ul>
                           <p>Subscripciones</p>
                           <form listado=""><input type="submit" value="Listado"      name="tlistsuscrip" ></form>
                    <!--
                           <form listado=""><input type="submit" value="Introducir"   name="tplayintro" ></form>
                           <form listado=""><input type="submit" value="Modificar"    name="tplaymodi" ></form>
                           <form listado=""><input type="submit" value="Eliminar"     name="tplayeliminar" ></form>
                    -->
                       </ul>
                   </nav2>
               </div>
<!--............................................................................................................... -->
        <div class="col-xl-10 colmod12">

<?php
// [LISTADO SUBSCRIPCIONES] ********************************************************************************************
/*  Pago con PayPal   */


    if(isset($_REQUEST['tlistsuscrip'])){

          mysqli_data_seek ($result, 0);

          $filas= mysqli_num_rows($result);
          echo "Número de Registros:"; echo "&nbsp"; echo $filas; echo "<hr>";

          $filas=mysqli_num_rows($result);  echo "Número de Canciones:"; echo "&nbsp"; echo $filas; echo "<hr>";
          ?><p>id &nbsp id_Cli &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Tipo/Pago &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Importe &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Num_Cta &nbsp&nbsp&nbsp&nbsp&nbsp Num_Caduc &nbsp&nbsp&nbsp&nbsp&nbsp Num_Seg &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Usu_Pay &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp F.Alta &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp F.Renovación</p>
          <hr style="size="2px" color="white"></hr><?php

              function mostrarDatos3 ($resultados)
              {
                if ($resultados !=NULL){
?>
                    <div class="formListado">
                       <form  name="formulario"  method="POST" action="#">
                        <input type="text" disabled readonly name="" size="1"  value="<?php echo $resultados['id'];  ?>"/>
                        <input type="text" disabled readonly name="" size="15" value="<?php echo $resultados['id_cli'];  ?>"/>
                        <input type="text" disabled readonly name="" size="15" value="<?php echo $resultados['PagTipo']; ?>"/>
                        <input type="text" disabled readonly name="" size="20" value="<?php echo $resultados['PagCant']; ?>"/>
                        <input type="text" disabled readonly name="" size="10" value="<?php echo $resultados['NumCta']; ?>"/>
                        <input type="text" disabled readonly name="" size="10" value="<?php echo $resultados['NumCad']; ?>"/>
                        <input type="text" disabled readonly name="" size="10"  value="<?php echo $resultados['NumSegu']; ?>"/>
                        <input type="text" disabled readonly name="" size="15"  value="<?php echo $resultados['UsuPay']; ?>"/>
                        <input type="text" disabled readonly name="" size="10"  value="<?php echo $resultados['DataInic']; ?>"/>
                        <input type="text" disabled readonly name="" size="10"  value="<?php echo $resultados['DataRenv']; ?>"/>
                         <br/>
                       </form>
                   </div><!-- formListado -->

<?php
                }
              }
                       while ($fila = mysqli_fetch_array($result)){
                       mostrarDatos3($fila);}
        }

/* ************************************************************************************************************************** */
?>
        </div><!-- col -->
       </div><!-- row -->
      </div><!--mod1 -->
<!--............................................................................................................... -->

<!-- ******************************************************************************************************************* -->
<!-- MOD 2: -->
         <div class="Mod2">
             <div class="row rowmod2">   <!-- d-block: los pone verticales -->
               <div class="col-xl-3 colmod2" ></div>
<!--............................................................................................................... -->
               <div class="col-xl-9 colmod2" >

               </div>
           </div><!-- row -->
       </div><!--mod1 -->
<!--............................................................................................................... -->
<!-- ******************************************************************************************************************* -->
<!-- MOD 3: -->
         <div class="Mod3">
             <div class="row rowmod3">   <!-- d-block: los pone verticales -->
               <div class="col-xl-3 colmod3" ></div>
<!--............................................................................................................... -->
               <div class="col-xl-9 colmod3" ></div>  <!-- align-self-start -->
           </div><!-- row -->
       </div><!--mod1 -->
<!--............................................................................................................... -->
<!-- ******************************************************************************************************************* -->
<!-- MOD 1: -->
         <div class="Mod4">
             <div class="row rowmod4">   <!-- d-block: los pone verticales -->
               <div class="col-xl-3 colmod4" ></div>
<!--............................................................................................................... -->
               <div class="col-xl-9 colmod4" ></div>  <!-- align-self-start -->
           </div><!-- row -->
       </div><!--mod1 -->
<!--............................................................................................................... -->


<!-- ******************************************************************************************************************* -->
<!-- funciones -->
<!-- ******************************************************************************************************************* -->
<?php
?>

</div><!-- container -->

<!--..Agrupar introducción del contenido....................................................................................... -->
<header>
</header>
 <!--..Agrupar navegación del sitio (Menu principal.............................................................................. -->
<!--..Contenido que está fuera del tema principal. (Un anuncio pe )............................................................. -->
     <aside>
     </aside>
<!--..Pie de página.............................................................................................................. -->
     <footer>

     </footer>

<!--
     <script src="js/jquery-3.5.1.slim.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
-->


<?php
    /*include('./zBD/Pie.php');*/
?>

 </body>
 </html>
