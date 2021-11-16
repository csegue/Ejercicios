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
                           <p>Mi PlayList</p>
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

// [LISTADO] ********************************************************************************************                   <!--
        if(isset($_REQUEST['tplaylistado'])){
          mysqli_data_seek ($result, 0);

          $filas=mysqli_num_rows($result);  echo "Número de Canciones:"; echo "&nbsp"; echo $filas; echo "<hr>";
          ?><p>id &nbsp Usuario &nbsp PlayList &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Canción &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Creación &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFavorita </p>
          <hr style="size="2px" color="white"></hr><?php

              function mostrarDatos3 ($resultados)
              {
                if ($resultados !=NULL)
              {
?>
        <div class="formListado">
           <form  name="formulario"  method="POST" action="#">
            <input type="text" disabled readonly name="tid"          size="1"  value="<?php echo $resultados['id'];  ?>"/>
            <input type="text" disabled readonly name="tid_usu"      size="2"  value="<?php echo $resultados['id_Usu'];  ?>"/>
            <input type="text" disabled readonly name="ttitulo_play" size="15" value="<?php echo $resultados['Titulo_Playlist']; ?>"/>
            <input type="text" disabled readonly name="ttitulo_can"  size="40" value="<?php echo $resultados['Titulo_Canc']; ?>"/>
            <input type="text" disabled readonly name="tFCreacion"   size="15"  value="<?php echo $resultados['FCreacion']; ?>"/>
            <input type="text" disabled readonly name="tCanFav"      size="2"  value="<?php echo $resultados['CanFavorita']; ?>"/>
             <br/>
           </form>
       </div><!-- formListado -->

<?php
                          }
                     }
                       while ($fila = mysqli_fetch_array($result)){
                       mostrarDatos3($fila);}
                }


// [INSERT] ********************************************************************************************
        if(isset($_REQUEST['tplayintro']))
        {
?>          <script type="text/javascript">
            window.location.replace("SpotifyCanciones.php");
            </script>
        }
<?php


/* ***********************************************************************************************************************
/* Recojo la ID *** */

                    $result10 = mysqli_query($conn,"SELECT * FROM $table WHERE Email='$mai'");
                    mysqli_data_seek ($result10, 0);
                    $filas=mysqli_num_rows($result10);

                    function mostrarDatos3 ($resultados){
                        if ($resultados !=NULL){
                            $xid= $resultados['id'];    /* echo "El id es".$xid."<br>";*/
                            $_SESSION['usu_id']=$xid;
                        }
                    }
                    while ($fila = mysqli_fetch_array($result10)){
                            mostrarDatos3($fila);}

                    $_SESSION['FormaPago']= $tfp;

                    if($tpr=="S"){
?>                          <script type="text/javascript">
                            window.location.replace("SpotifyPagos.php");
                            </script>
<?php
                    }


?>
         </div><!--forminsertar-->
<?php
        }
// [UPDATE - MODIFICAR] ********************************************************************************************

    if(isset($_REQUEST['tusuModif'])){

?>
            <form  name="formMod"  method="POST" action="#">
                 <input type="text"   name="tidmod"  size=8 value=""/>
                 <input type="submit" value="Modificar"  name="tusuMod" >
            </form>

<?php

          function mostrarDatos3 ($resultados){
?>
              <form  name="formuMod"  method="POST" action="#">
               <input type="text"  name="id2"   size="1"  value="<?php echo $resultados['id'];  ?>"/>
               <input type="text"  name="nom2"  size="15" value="<?php echo $resultados['NomCli'];  ?>"/>
               <input type="text"  name="apel2" size="15" value="<?php echo $resultados['ApellCli']; ?>"/>
               <input type="text"  name="emai2" size="20" value="<?php echo $resultados['Email']; ?>"/>
               <input type="text"  name="pass2" size="10" value="<?php echo $resultados['Password']; ?>"/>
               <input type="text"  name="nusu2" size="10" value="<?php echo $resultados['NomUsuario']; ?>"/>
               <input type="text"  name="fnac2" size="10" value="<?php echo $resultados['Fnacimiento']; ?>"/>
               <input type="text"  name="sexo2" size="1"  value="<?php echo $resultados['Sexo']; ?>"/>
               <input type="text"  name="pais2" size="8"  value="<?php echo $resultados['Pais']; ?>"/>
               <input type="text"  name="cp2"   size="4"  value="<?php echo $resultados['CodPostal']; ?>"/>
               <input type="text"  name="prem2" size="1"  value="<?php echo $resultados['Premium']; ?>"/>
               <input type="text"  name="fpago" size="1"  value="<?php echo $resultados['FPago']; ?>"/></br><br>
               <input type="submit" name="ymodif" value="Modificar">
                <br/>
              </form>
<?php
            }

          if(isset($_POST['tusuMod'])){
                    $RegMod= $_POST['tidmod'];
                    echo $RegMod;
                    $result2 = mysqli_query($conn, "SELECT * FROM $table WHERE id='$RegMod'");
          while ($fila = mysqli_fetch_array($result2)){
                        mostrarDatos3($fila);
                        echo "<br><br><br>";
          }
          }

         if(isset($_POST['ymodif'])){

                        $id2=   $_POST['id2'];
                        $nom2=  $_POST['nom2'];
                        $apel2= $_POST['apel2'];
                        $emai2= $_POST['emai2'];
                        $pass2= $_POST['pass2'];
                        $nusu2= $_POST['nusu2'];
                        $fnac2= $_POST['fnac2'];
                        $sexo2= $_POST['sexo2'];
                        $pais2= $_POST['pais2'];
                        $cp2=   $_POST['cp2'];
                        $prem2= $_POST['prem2'];
                        $tfp=   $_POST['fpago'];

                        mysqli_query($conn,"UPDATE $table SET NomCli='$nom2', ApellCli='$apel2', Email='$emai2', Password='$pass2', NomUsuario='$nusu2', Fnacimiento='$fnac2', Sexo='$sexo2', Pais='$pais2', CodPostal='$cp2', Premium='$prem2', FPago='$tfp' WHERE id='$id2'");
         }
    }


// [DELETE - [ELIMINAR] ********************************************************************************************

    if(isset($_REQUEST['tusuElim'])){

?>
        <form  name="formMod"  method="POST" action="#">
             <input type="text"   name="tidmod"  size=8 value=""/>
             <input type="submit" value="Eliminar"  name="tusuMod" >
        </form>

<?php

      function mostrarDatos3 ($resultados){
?>
          <form  name="formuMod"  method="POST" action="#">
           <input type="text"  name="id2"   size="1"  value="<?php echo $resultados['id'];  ?>"/>
           <input type="text"  name="nom2"  size="15" value="<?php echo $resultados['NomCli'];  ?>"/>
           <input type="text"  name="apel2" size="15" value="<?php echo $resultados['ApellCli']; ?>"/>
           <input type="text"  name="emai2" size="20" value="<?php echo $resultados['Email']; ?>"/>
           <input type="text"  name="pass2" size="10" value="<?php echo $resultados['Password']; ?>"/>
           <input type="text"  name="nusu2" size="10" value="<?php echo $resultados['NomUsuario']; ?>"/>
           <input type="text"  name="fnac2" size="10" value="<?php echo $resultados['Fnacimiento']; ?>"/>
           <input type="text"  name="sexo2" size="1"  value="<?php echo $resultados['Sexo']; ?>"/>
           <input type="text"  name="pais2" size="8"  value="<?php echo $resultados['Pais']; ?>"/>
           <input type="text"  name="cp2"   size="4"  value="<?php echo $resultados['CodPostal']; ?>"/>
           <input type="text"  name="prem2" size="1"  value="<?php echo $resultados['Premium']; ?>"/>
           <input type="text"  name="fpago" size="1"  value="<?php echo $resultados['FPago']; ?>"/></br><br>
           <input type="submit" name="ymodif" value="Eliminar">
            <br/>
          </form>
<?php
        }

      if(isset($_POST['tusuMod'])){
                $RegMod= $_POST['tidmod'];
                /*echo $RegMod;*/
                $result2 = mysqli_query($conn, "SELECT * FROM $table WHERE id='$RegMod'");
      while ($fila = mysqli_fetch_array($result2)){
                    mostrarDatos3($fila);
                    echo "<br><br><br>";
      }
      }

     if(isset($_POST['ymodif'])){

                    $id2=   $_POST['id2'];
                    $nom2=  $_POST['nom2'];
                    $apel2= $_POST['apel2'];
                    $emai2= $_POST['emai2'];
                    $pass2= $_POST['pass2'];
                    $nusu2= $_POST['nusu2'];
                    $fnac2= $_POST['fnac2'];
                    $sexo2= $_POST['sexo2'];
                    $pais2= $_POST['pais2'];
                    $cp2=   $_POST['cp2'];
                    $prem2= $_POST['prem2'];
                    $fp=    $_POST['fpago'];

                    mysqli_query($conn,"DELETE FROM  $table WHERE id='$id2'");
     }
}
// *******************************************************************************************************************



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
