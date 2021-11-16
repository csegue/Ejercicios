<?php
if(!isset($_SESSION)) {
    session_start();
}

include('./zBD/Menu.php');
include('./zBD/BD_playlist.php');

//TRAER NOMBRE DE USUARIO *******************************************************************************-->
        if(!$_SESSION['usu_id']){
            ?><script type="text/javascript">
              window.location.replace("PassConectarse.php");
            </script><?php
        }else{
            //echo $_SESSION['usu_id'];
        }

/**************************************************************************************************************** */

if(!isset($_SESSION['titulo'])){
    ?><script type="text/javascript">
      window.location.replace("SpotifyCanciones.php");
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
                   <nav2>
                       <ul>
                           <p>Mi PlayList</p>
                           <form listado=""><input type="submit" value="Listado"      name="tplaylistado" ></form>
                       </ul>
                   </nav2>
               </div>
<!--............................................................................................................... -->
        <div class="col-xl-10 colmod12">
<?php

// [INSERT] ********************************************************************************************

?>
          <div class="formInsert">
            <form action="" method="POST">
                                  <input type="hidden" name="tid"          size="1"  value=""/><br>
                                  <input type="hidden" name="tid_usu"      size="2"  value=""/><br>
                Título Playlist:  <input type="text" name="ttitulo_play"   size="15" value=""/><br>
                                  <input type="hidden" name="ttitulo_can"  size="20" value=""/><br>
                                  <input type="hidden" name="tNumCanc"     size="2"  value=""/><br>
                                  <input type="hidden" name="tFCreacion"     size="5"  value=""/><br>
                Canción Favorita: <input type="text" name="tCanFav"        size="2"  value="S/N"/><br>
                    <input type="submit" name="yintro" value="Introducir">
            </form>
<?php


                mysqli_data_seek ($result, 0);
                $filas=mysqli_num_rows($result);

                date_default_timezone_set('Europe/Madrid');
                $_SESSION["FechaCreacion"]= date("Y-m-d");//a-m-d h-m-s H:i:s


                if(isset($_REQUEST['yintro'])){

                    $idu= $_SESSION['usu_id'];
                    $tit= $_POST['ttitulo_play'];
                    $tca1= $_SESSION['titulo'];
                    $tNumCanc= $filas+1;
                    $tFCreacion= $_SESSION["FechaCreacion"];
                    $tca= strtoupper($_POST['tCanFav']);

                    mysqli_query($conn, "INSERT INTO $table (`id`, `id_Usu`, `Titulo_Playlist`, `Titulo_Canc`, `NumCanciones`, `FCreacion`, `CanFavorita`) VALUES (NULL,'$idu','$tit','$tca1','$tNumCanc','$tFCreacion','$tca')");
                }
?>
         </div><!--forminsertar-->
<?php

//...............................................................................................................
            if(isset($_REQUEST['tplaylistado'])){
?>
                <script type="text/javascript">
                window.location.replace("SpotifyPlaylist.php");
                </script>
<?php         } ?>

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
