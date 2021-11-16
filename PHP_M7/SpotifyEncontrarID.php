<?php
if(!isset($_SESSION)) {
    session_start();
}

include('./zBD/Menu.php');
include('./zBD/BD_pagos.php');


//TRAER NOMBRE DE USUARIO *******************************************************************************-->

        if(isset($_SESSION['NomUsuPago'])){
/*            echo "sesion Abierta usuarios";*/
           echo $_SESSION['NomUsuPago'];
              $tnombreusuario= $_SESSION['NomUsuPago'];
        }else
        {
            echo "sesion No abierta";
        }

//TRAER FORMA DE PAGO*************************************************************************************-->

        if(isset($_SESSION['FormaPago'])){
/*            echo "sesion Abierta usuarios";*/
            echo $_SESSION['FormaPago'];
              $tipopago=  $_SESSION['FormaPago'];
        }else
        {
            echo "sesion No abierta";
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

    <title>M4_Bootstrap</title>


    </head>

 <body>

<div class="container-fluid">


<!-- ******************************************************************************************************************* -->
<!-- MOD 1: -->
<!-- Opciones del menu Vertical de la Izquierda -->
    <div class="Mod1">
     <div class="row rowmod1">   <!-- d-block: los pone verticales -->
               <div class="col-xl-2 colmod11" >
<!--
                   <nav2>
                       <ul>
                           <p>Usuarios</p>

                           <form listado=""><input type="submit" value="Listado"      name="tusuListado" ></form>
                           <form listado=""><input type="submit" value="Introducir"   name="tusuIntro" ></form>

                       </ul>
                   </nav2>
-->
               </div>

<!--............................................................................................................... -->

<!-- ********************************************************************************************************************** -->
<!--  Recojo la id del nuevo usuario -->

<?php
        $servername = "localhost"; $database = "spotify"; $username = "root"; $password = "120264"; $table ="usuarios";
        $conn = mysqli_connect($servername, $username, $password, $database);
        $cbd = mysqli_select_db($conn, $database);

        $result10 = mysqli_query($conn,"SELECT * FROM $table WHERE NomCli='$tnombreusuario'");
        echo "Pri Reg = ".mysqli_data_seek ($result10, 0)."<br>";
        echo "Num Reg = ".$filas=mysqli_num_rows($result10)."<br>";

        function mostrarDatos3 ($resultados){
            if ($resultados !=NULL){
                $xid= $resultados['id'];    /* echo "El id es".$xid."<br>";*/
                $_SESSION['Suid']=$xid;
            }
        }
        while ($fila = mysqli_fetch_array($result10)){
            mostrarDatos3($fila);}
?>

<?php
        if($tipopago="P"){
?>          <script type="text/javascript">
            window.location.replace("Borrar.php");
            </script>
<?php   }else if($tipopago="P"){
?>          <script type="text/javascript">
            window.location.replace("Carritocompras.php");
            </script>
<?php   } ?>




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
