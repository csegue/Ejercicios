<?php
if(!isset($_SESSION)) {
    session_start();
}
    error_reporting(0);
    require "./zBD/Menu.php";
    include 'Class_Formularios.php';

    //require 'Conexion.php';
    //require 'metodosCrud.php';
 ?>
<!-- ******************************************************************************************************************* -->
 <!DOCTYPE html>                     <!--  Se pone al principio del programa para saber cual es es la version de HTLM 5 -->
 <html lang="es">                    <!-- idioma -->
    <head>
     <link rel="stylesheet" href ="./css/bootstrap.css">      <!-- estilos .css -->
      <title>Título</title>
    </head>
<!-- ******************************************************************************************************************* -->
<!-- Modulamos la pantalla con Bootstrap -->
<body>
<div class="container-fluid">

<!-- ................................................................................................................... -->
<!-- MOD 1: -->
   <div class="Mod1">
     <div class="row rowmod1">   <!-- d-block: los pone verticales -->
        <div class="col-xl-2 colmod11" >
            <p><form action="">   <input type="submit" value="Listado"            name="btngeneral" ></form></p>
            <p><form action="">   <input type="submit" value="Nuevo Artículo"     name="btninsertar" ></form></p>
            <p><form action="">   <input type="submit" value="Modificar/Eliminar" name="btnmodificar" ></form></p>
            <p><form action=""><input type="submit" value="xxxxxxx" name="" ></form> </p>
        </div>

<?php
            if(isset($_REQUEST['btngeneral'])){
                $obj=new Formulario;
                $obj->FormListado();
            }
            if(isset($_REQUEST['btninsertar'])){
                $obj=new Formulario;
                $obj->FormInsertar();
            }
            if(isset($_REQUEST['btnmodificar'])){
                $obj=new Formulario;
                $obj->FormBotones();
            }
?>
<!--************************************************************************************************************************** -->
        <div class="col-xl-10 colmod12">
        </div><!-- row -->
   </div><!-- col -->
  </div><!--mod1 -->
<!--............................................................................................................... -->
</div><!-- container -->


</body>
</html>
