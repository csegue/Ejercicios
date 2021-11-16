<?php
//error_reporting(0);
require "Class_Querys.php";
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
               </div>
<!--************************************************************************************************************************** -->
        <div class="col-xl-10 colmod12">
<!--************************************************************************************************************************** -->
<!-- Creamos la Clase Formulario -->
<?php
            class Formulario{
//**************************************************************************************************************************
                // Formulario  Listado Campos
                public function FormListado(){
                    $ListCompleto1=new BaseDatos();
                    $array_productos= $ListCompleto1->QueryConsulta();

                    ?>
                    <table>
                        <caption>LISTADO ARTICULOS</caption>
                        <tr><th>id</th><th>NomComp</th><th>PreComp</th><th>CanComp</th></tr>
                    <?php
                    //-- Rellenar Tab......................................................................... -->
                        foreach($array_productos as $elemento){
                    ?>
                        <form name="formulario"  method="POST" action="#">
                            <tr>
                            <td><input type="text"   readonly name="yid"     size="2"  value="<?php echo $elemento['id'];      ?>"/></td>
                            <td><input type="text"   readonly name="ynom"    size="30" value="<?php echo $elemento['NomComp']; ?>"/></td>
                            <td><input type="text"   readonly name="ypre"    size="4"  value="<?php echo $elemento['PreComp']; ?>"/></td>
                            <td><input type="text"   readonly name="ycan"    size="4"  value="<?php echo $elemento['CanComp']; ?>"/></td>
                            </form>
                    <?php
                        }
                    ?>
                    </table>
                    <?php

                }

//*****************************************************************************************************************
                // Formulario insertar nuevos productos
                public function FormInsertar(){
?>
                    <form action="" method="POST" >
                         <div id="especial">
<?php
                            echo "<table>";
                                echo '<caption>INSERTAR ARTICULOS</caption>';
                                echo '<tr><th>id</th><th>NomComp</th><th>PreComp</th><th>CanComp</th></tr>';
                                echo '<tr>';
                                echo '<td>';
                                echo '<input type="hidden" name="id">';
                                echo '</td>';
                                echo '<td>';
                                echo '<input type="text" name="Nombre">';
                                echo '</td>';
                                echo '<td>';
                                echo '<input type="text" name="Precio">';
                                echo '</td>';
                                echo '<td>';
                                echo '<input type="text" name="Cantidad">';
                                echo '</td>';
                                echo '</tr>';
                                echo "</table>";
                            echo '<input type="submit" name="yIntroducir">';
                    ?>
                        </div><!-- especial -->
                    </form>

<?php
                    if(isset($_REQUEST['yIntroducir']) && !empty($_POST['Nombre']))
                     {

                         $xnom=   $_POST['Nombre'];
                         $xpre=   $_POST['Precio'];
                         $xcan=   $_POST['Cantidad'];

                         // Envío los datos a la clase para introducirlos
                         $InicForm=new BaseDatos();
                         $InicForm->QueryInicializar($_POST['Nombre'],$_POST['Precio'],$_POST['Cantidad']);
                         $InicForm->QueryAltas();

         ?>
                         <script type="text/javascript">
                         window.location.replace("Form_Campos.php");
                         </script>
         <?php

                     }
                }
//**************************************************************************************************************************
                // Formulario Modificaciones y Bajas
                public function FormBotones(){
                    $ListCompleto1=new BaseDatos();
                    $array_productos= $ListCompleto1->QueryConsulta();

                    ?>
                    <table>
                        <caption>MODIFICACION ARTICULOS</caption>
                        <tr><th>id</th><th>NomComp</th><th>PreComp</th><th>CanComp</th><th>Eliminar</th><th>Modificar</th></tr>
                    <?php
                    //-- Rellenar Tab......................................................................... -->
                        foreach($array_productos as $elemento){
                    ?>
                        <form name="formulario"  method="POST" action="#">
                            <tr>
                            <td><input type="text"   name="yid"     size="2"  value="<?php echo $elemento['id'];      ?>"/></td>
                            <td><input type="text"   name="ynom"    size="30" value="<?php echo $elemento['NomComp']; ?>"/></td>
                            <td><input type="text"   name="ypre"    size="6"  value="<?php echo $elemento['PreComp']; ?>"/></td>
                            <td><input type="text"   name="ycan"    size="4"  value="<?php echo $elemento['CanComp']; ?>"/></td>
                    <!-- Boton Eliminar .................................................................................. -->
                        <?php
                                if(isset($_REQUEST['btnEliminar'])){
                                    $obj11= new BaseDatos();
                                    $obj11->QueryBajas($_POST['yid']);
                                    ?>
                                                    <script type="text/javascript">
                                                    window.location.replace("Form_Campos.php");
                                                    </script>
                                    <?php
                        }
                        ?>
                                <td><input type="submit" name="btnEliminar" value="Eliminar"></td>
                    <!-- Boton Modificar .................................................................................. -->
<?php
                                if(isset($_REQUEST['btnModif'])){
                                    $obj= array($_POST['yid'], $_POST['ynom'],$_POST['ypre'],$_POST['ycan']);
                                    $obj11= new BaseDatos();
                                    $obj11->QueryModificaciones($obj);
                                    ?>
                                                    <script type="text/javascript">
                                                    window.location.replace("Form_Campos.php");
                                                    </script>
                                    <?php
                                }
                                ?>
                                <td><input type="submit" name="btnModif" value="Modificar"></td>
                        </form>
                    <?php
                        }
                    ?>
                    </table>
                    <?php
}


//***************************************************************************************************************************************





//**************************************************************************************************************************
} // clase
//**************************************************************************************************************************
?>
    </div><!-- row -->
   </div><!-- col -->
  </div><!--mod1 -->
<!--............................................................................................................... -->
</div><!-- container -->


</body>
</html>
