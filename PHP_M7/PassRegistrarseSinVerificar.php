<?php
if(!isset($_SESSION)) {
    session_start();
}

include('./zBD/Menu.php');
include('./zBD/BD_usuarios.php');

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
                           <p>Usuarios</p>
                           <form listado=""><input type="submit" value="Listado"      name="tusuListado" ></form>
                           <form listado=""><input type="submit" value="Introducir"   name="tusuIntro" ></form>
                           <form listado=""><input type="submit" value="Modificar"    name="tusuModif" ></form>
                           <form listado=""><input type="submit" value="Eliminar"     name="tusuElim" ></form>
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
                  Nombre :         <br><input type="text"       name="tnomb" value=""></br>
                  Apellido :       <br><input type="text"       name="tapel" value=""></br>
                  email :          <br><input type="email"      name="temai" value=""></br>
                  Password :       <br><input type="password"   name="tpass" value=""></br>
                  Usuario :        <br><input type="text"       name="tnusu" value=""></br>
                  Día Nacimiento : <br><input type="text"       name="tfnad" maxlength="2" value="dd"></br>
                  Mes Nacimiento : <br><input type="text"       name="tfnam" maxlength="2" value="mm"></br>
                  Año Nacimiento : <br><input type="text"       name="tfnaa" maxlength="4" value="aaaa"></br>
                  Sexo :             H <input type="radio"      name="tsexh" value="H">
                                     M <input type="radio"      name="tsexh" value="M"></br>
                  País :           <br><input type="text"       name="tpais" value=""></br>
                  Código Postal :  <br><input type="text"       name="tcp"   value=""></br>
                  Quiere Premium?:  SI <input type="radio"      name="tprem" value="S">
                                    NO <input type="radio"      name="tprem" value="N"></br>
                  Forma Pago :       Tarjeta <input type="radio"      name="tfp" value="T">
                                     Paypal  <input type="radio"      name="tfp" value="P"></br>

                    <input type="submit" name="yintro" value="Introducir">
            </form>
<?php


                if(isset($_REQUEST['yintro']) && !empty($_POST['tnomb']))
                {
                    $tf1= $_POST['tfnaa'];
                    $tf2= $_POST['tfnam']; if(strlen($tf2)==1){ $tf2="0".$tf2;}
                    $tf3= $_POST['tfnad']; if(strlen($tf3)==1){ $tf3="0".$tf3;}

                    $tf4= $tf1."-".$tf2."-".$tf3;       /*echo $tf4; echo "<br>";*/




                    $usu= strtoupper($_POST['tnomb']);  /*echo $usu."<br>";*/
                    $ape= strtoupper($_POST['tapel']);  /*echo $ape."<br>";*/
                    $mai= $_POST['temai'];              /*echo $mai."<br>";*/
                    $pas= $_POST['tpass'];              /*echo $pas."<br>";*/
                    $nus= $_POST['tnusu'];              /*echo $nus."<br>";*/
                    $fnc= $tf4;                         /*echo $tf4."<br>";*/
                    $sex= $_POST['tsexh'];              /*echo $sex."<br>";*/
                    $pai= strtoupper($_POST['tpais']);  /*echo $pai."<br>";*/
                    $tcp= $_POST['tcp'];                /*echo $tcp."<br>";*/
                    $tpr= $_POST['tprem'];
                    $tfp= $_POST['tfp'];

                    mysqli_query($conn, "INSERT INTO $table (`id`, `NomCli`, `ApellCli`, `Email`, `Password`, `NomUsuario`, `Fnacimiento`, `Sexo`, `Pais`, `CodPostal`, `Premium`,`FPago`) VALUES (NULL,'$usu','$ape','$mai','$pas','$nus','$fnc','$sex','$pai','$tcp','$tpr','$tfp')");


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
                }

?>
         </div><!--forminsertar-->
        </div><!-- col -->
       </div><!-- row -->
      </div><!--mod1 -->

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
