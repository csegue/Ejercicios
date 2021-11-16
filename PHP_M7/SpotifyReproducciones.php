<?php
if(!isset($_SESSION)) {
    session_start();
}
include('./zBD/Menu.php');
include('./zBD/BD_canciones.php');
/*include('zMostrarSessions.php');*/

/*******************************************************************************************************************/
/*
if(isset($_SESSION['usu_id']) && isset($_SESSION['usu_nom']) ){

//    echo "sesion usuario Abierta SpotifyReproducciones.php"." - ";
    echo $_SESSION['usu_id']." - ";
    echo $_SESSION['usu_nom'];

}else{
    echo "sesion ['usu_id'] No Abierta - PassConectarse.php"." - "; echo "<br>";
}
*/
/*******************************************************************************************************************/

if(isset($_SESSION['reproducir'])){

//    echo "sesion ['reproducir'] Abierta - ";
//    echo $_SESSION['reproducir'];echo " - "."<br>";
    $repro=$_SESSION['reproducir'];

}else{
    echo "sesion ['reproducir'] No Abierta";
}

/*******************************************************************************************************************/

if(isset($_SESSION['titulo'])){

//    echo "sesion ['titulo'] Abierta - ";
//    echo $_SESSION['titulo']; echo " - "."<br>";
    $titulo=$_SESSION['titulo'];

}else{
    echo "sesion ['escobar3'] No Abierta";
}

/*******************************************************************************************************************/
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
         <div class="Mod1">
             <div class="row rowmod1">   <!-- d-block: los pone verticales -->
               <div class="col-xl-2 colmod11" >
                   <nav2>
                       <ul>
                           <p>Discografía</p>
                           <form action="SpotifyArtistas.php"><input type="submit" value="Artistas"></form>
                           <form action="SpotifyAlbums.php"><input type="submit" value="Albums"></form>
                           <form action="SpotifyCanciones.php"><input type="submit" value="Canciones"></form>
                       </ul>
                   </nav2>
               </div>
<!--............................................................................................................... -->
<div class="col-xl-10 colmod12">
             <audio controls> <source src="img/<?php echo $repro ?>" type="audio/mp3"> </audio>
<?php
                 echo "<br>";
                 echo "<h3>"."Título :".$_SESSION['titulo']."</h3>"."<br>";
                 echo "<h3>"."Artista :".$_SESSION['cantante']."</h3>"."<br>";
                 echo "<h3>"."Número de reproducciones :".$_SESSION['numreprod']."</h3>"."<br>";
?>
                <img    src="img/<?php echo $_SESSION['Imgartis']?>" width="197px;" height="272px;">

</div><!-- col -->
    </div><!-- row -->
      </div><!--mod1 -->
</div><!-- container -->


<?php
        $result2 = mysqli_query($conn,"SELECT * FROM $table WHERE Titulo='$titulo'");
        //echo "Pri Reg = ".mysqli_data_seek ($result2, 0)."<br>";
        //echo "Num Reg = ".$filas=mysqli_num_rows($result2)."<br>";

        function mostrarDatos3 ($resultados){
            if ($resultados !=NULL){
                $xid= $resultados['id'];    /* echo "El id es".$xid."<br>";*/
                $xnr= $resultados['NumReprod']+1;
                $servername = "localhost"; $database = "spotify"; $username = "root"; $password = "120264"; $table ="canciones";
                $conn = mysqli_connect($servername, $username, $password, $database);
                $cbd = mysqli_select_db($conn, $database);

                mysqli_query($conn,"UPDATE $table SET NumReprod='$xnr' WHERE id='$xid'");

            }
        }
        while ($fila = mysqli_fetch_array($result2)){
            mostrarDatos3($fila);}

?>

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
