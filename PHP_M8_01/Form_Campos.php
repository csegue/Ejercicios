<?php
error_reporting(0);
include './zBD/Menu.php';
//require "Class_Querys.php";
require "Class_Formulario.php";
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
                   <p><form action="Form_Campos.php">   <input type="submit" value="Listado"            name="" ></form></p>
                   <p><form action="Form_Insert.php">   <input type="submit" value="Nuevo Artículo"     name="" ></form></p>
                   <p><form action="Form_Botones.php">  <input type="submit" value="Modificar/Eliminar" name="" ></form></p>
                   <p><form action=""><input type="submit" value="xxxxxxx" name="" ></form> </p>
               </div>
<!--************************************************************************************************************************** -->
        <div class="col-xl-10 colmod12">
<!-- ......................................................................................................................... -->

<?php
//************************************************************************************************************************** -->
// Instanciamos a las clases Formulario y Base de BaseDatos

                $ListCompleto=new Formulario();
                $ListCompleto->FormListado();




//************************************************************************************************************************** -->
?>
    </div><!-- row -->
   </div><!-- col -->
  </div><!--mod1 -->
<!--............................................................................................................... -->
</div><!-- container -->


</body>
</html>
