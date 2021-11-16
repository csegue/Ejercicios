<?php
if(!isset($_SESSION)) {
    session_start();
}

include('./zBD/Menu.php');
include('./zBD/BD_pagos.php');

//TRAER NOMBRE DE USUARIO *******************************************************************************-->
    if(!$_SESSION['usu_id']){

        ?><script type="text/javascript">
          window.location.replace("PassConectarse.php");
        </script><?php
    }
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
                           <form listado=""><input type="submit" value="Listado"      name="tplaylistado" ></form>
                           <form listado=""><input type="submit" value="Introducir"   name="tplayintro" ></form>
                <!--       <form listado=""><input type="submit" value="Modificar"    name="tplaymodi" ></form>
                           <form listado=""><input type="submit" value="Eliminar"     name="tplayeliminar" ></form>
                -->
                       </ul>
                   </nav2>
               </div>
<!--............................................................................................................... -->
        <div class="col-xl-10 colmod12">

<?php
// [INSERT] ********************************************************************************************
/*  Pago con PayPal   */


    if($_SESSION['FormaPago']=="P"){

?>
         <form action="" method="POST">
             id_cli         :<br><input type="hidden"           name="tid_cli"   value=""></br>
             Tarjeta/Paypal :<br><input type="hidden"           name="ttipopago" value=""></br>
             Importe        :<br><input disabled type="text"    name="timporte"  value="60"></br>
             Cuenta         :<br><input type="hidden"           name="tcuenta"   value=""></br>
             Caducid        :<br><input type="hidden"           name="tcaduc"    ºvalue=""></br>
             CodSeg         :<br><input type="hidden"           name="tcodseg"   value=""></br>
             Usuario_Paypal :<br><input type="text"             name="tpayusu"   value=""></br>
             <input type="submit" name="ypaypal" value="Introducir">
         </form>
<?php

                if(isset($_REQUEST['ypaypal'])){
                     $id_cli = $_SESSION['usu_id']; //echo $id_cli."<br>";
                     $tipopago= "P";                //echo $tipopago."<br>";
                     $importe= 60;                  //echo $importe."<br>";
                     $cuenta= "";                   //echo $cuenta."<br>";
                     $caduc= "";                    //echo $caduc."<br>";
                     $codseg= "";                   //echo $codseg."<br>";
                     $payusu= $_POST['tpayusu'];    //echo $payusu."<br>";

                     date_default_timezone_set('Europe/Madrid');
                       $fecha_actual= date("Y-m-d");//a-m-d h-m-s H:i:s
                       $fecha_fin= date("d-m-Y",strtotime($fecha_actual."+ 1 year"));
                     //echo $_SESSION["FechaCreacion"]= $fecha_actual;

                     mysqli_query($conn, "INSERT INTO $table (`id`, `id_cli`,`PagTipo`, `PagCant`, `NumCta`, `NumCad`, `NumSegu`, `UsuPay`,`DataInic`,`DataRenv`) VALUES (NULL,'$id_cli','$tipopago','$importe','$cuenta','$caduc','$codseg','$payusu','$fecha_actual','$fecha_fin')");
                }

                ?><script type="text/javascript">
                  window.location.replace("index.php");
                </script><?php
            }

/* ************************************************************************************************************************** */
            if($_SESSION['FormaPago']=="T"){

?>
                 <form action="" method="POST">
                     id_cli         :<br><input type="hidden"           name="tid_cli"   value=""></br>
                     Tarjeta/Paypal :<br><input type="hidden"           name="ttipopago" value=""></br>
                     Importe        :<br><input disabled type="text"    name="timporte"  value="60"></br>
                     Cuenta         :<br><input type="text"             name="tcuenta"   value=""></br>
                     Caducid        :<br><input type="text"             name="tcaduc"    ºvalue=""></br>
                     CodSeg         :<br><input type="text"             name="tcodseg"   value=""></br>
                     Usuario_Paypal :<br><input type="hidden"           name="tpayusu"   value=""></br>
                     <input type="submit" name="ytarjeta" value="Introducir">
                 </form>
<?php

                    date_default_timezone_set('Europe/Madrid');
                      $fecha_actual= date("Y-m-d");//a-m-d h-m-s H:i:s
                      $fecha_fin= date("d-m-Y",strtotime($fecha_actual."+ 1 year"));
                    //echo $_SESSION["FechaCreacion"]= $fecha_actual;


    if(isset($_REQUEST['ytarjeta'])){
             $id_cli = $_SESSION['usu_id']; //echo $id_cli."<br>";
             $tipopago= "T";                //echo $tipopago."<br>";
             $importe= 60;                  //echo $importe."<br>";
             $cuenta= $_POST['tcuenta'];    //echo $cuenta."<br>";
             $caduc= $_POST['tcaduc'];      //echo $caduc."<br>";
             $codseg= $_POST['tcodseg'];    //echo $codseg."<br>";
             $payusu= "";                   //echo $payusu."<br>";

            mysqli_query($conn, "INSERT INTO $table (`id`, `id_cli`,`PagTipo`, `PagCant`, `NumCta`, `NumCad`, `NumSegu`, `UsuPay`,`DataInic`,`DataRenv`) VALUES (NULL,'$id_cli','$tipopago','$importe','$cuenta','$caduc','$codseg','$payusu','$fecha_actual','$fecha_fin')");
    }
            ?><script type="text/javascript">
              window.location.replace("index.php");
            </script><?php
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
