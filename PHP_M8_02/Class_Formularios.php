<?php
if(!isset($_SESSION)) {
    session_start();
}
    require 'Conexion.php';
    require 'Class_Querys.php';

 ?>
 <!DOCTYPE html>                     <!--  Se pone al principio del programa para saber cual es es la version de HTLM 5 -->
 <html lang="es">                    <!-- idioma -->
    <head>
         <meta charset="utf-8">  <!-- símbolos especiales como la ñ, acentos      -->
         <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no,  maximum-scale=1.0, minimum-scale=1.0">
         <link rel="stylesheet" href ="">      <!-- estilos .css -->
      <title></title>
    </head>

<body>

<?php
//*****************************************************************************************************************************************
    class Formulario{
//*****************************************************************************************************************************************
        public function FormListado(){
?>
            <table>
                <caption>LISTADO ARTICULOS</caption><br>
                <tr><th>id</th><th>NomComp</th><th>PreComp</th><th>CanComp</th></tr>
<?php
            $sql="SELECT id, NomComp,PreComp,CanComp FROM compra";
            $obj3=new metodos();
            $datos=$obj3->MostrarDatos($sql);


            foreach($datos as $elemento){
?>
                    <form name="formulario"  method="POST" action="#">
                    <tr>
                        <td><input type="text"   name="yid"     size="2"  value="<?php echo $elemento['id'] ?>"/></td>
                        <td><input type="text"   name="ynom"    size="30" value="<?php echo $elemento['NomComp'] ?>"/></td>
                        <td><input type="text"   name="ypre"    size="4"  value="<?php echo $elemento['PreComp'] ?>"/></td>
                        <td><input type="text"   name="ycan"    size="4"  value="<?php echo $elemento['CanComp'] ?>"/></td>
                    </form>
<?php
            }
?>
            </table>
<?php
        }
//*****************************************************************************************************************************************

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

             $datos= array($xnom,$xpre, $xcan);

             // Envío los datos a la clase para introducirlos
             $obj4=new metodos();
             if($obj4->InsertarDatos($datos)==1){header("location: ./index.php");}
         }
}
//*****************************************************************************************************************************************
public function FormBotones(){       // Modificar y Eliminar
?>
    <table>
        <caption>LISTADO ARTICULOS</caption><br>
        <tr><th>id</th><th>NomComp</th><th>PreComp</th><th>CanComp</th><th>Modificar</th></tr>
<?php
    $obj3=new metodos();
    $sql="SELECT id, NomComp,PreComp,CanComp FROM compra";
    $datos=$obj3->MostrarDatos($sql);

    foreach($datos as $elemento){
?>
            <form name="formulario" method="POST" action="">
                <tr>
                <td><input type="text"   name="yid"     size="2"  value="<?php echo $elemento['id'] ?>"/></td>
                <td><input type="text"   name="ynom"    size="30" value="<?php echo $elemento['NomComp'] ?>"/></td>
                <td><input type="text"   name="ypre"    size="4"  value="<?php echo $elemento['PreComp'] ?>"/></td>
                <td><input type="text"   name="ycan"    size="4"  value="<?php echo $elemento['CanComp'] ?>"/></td>
                <td><input type="submit" value="Modificar" name="modificar"/></td>
                <td><input type="submit" value="Eliminar" name="eliminar"/></td>
                </tr>
            </form>
<?php
            if(isset($_REQUEST['modificar'])){
                            $_SESSION['pasarID'][0]= $_POST['yid'];
                            $_SESSION['pasarID'][1]= $_POST['ynom'];
                            $_SESSION['pasarID'][2]= $_POST['ypre'];
                            $_SESSION['pasarID'][3]= $_POST['ycan'];
                            //print_r($_SESSION["pasarID"]);
                            ?><script type="text/javascript">window.location.replace("Verificar_Modificar.php");</script><?php
            }
            if(isset($_REQUEST['eliminar'])){
                            $_SESSION['pasarID'][0]= $_POST['yid'];
                            $_SESSION['pasarID'][1]= $_POST['ynom'];
                            $_SESSION['pasarID'][2]= $_POST['ypre'];
                            $_SESSION['pasarID'][3]= $_POST['ycan'];
                            //print_r($_SESSION["pasarID"]);
                            ?><script type="text/javascript">window.location.replace("Verificar_Eliminar.php");</script><?php
            }
?>
<?php
    }
?>
    </table>
<?php
}
//*****************************************************************************************************************************************
//*****************************************************************************************************************************************
}//class
//*****************************************************************************************************************************************

//    $obj= new Formulario;
//    $obj->FormListado();
//    $obj->FormInsertar();
//    $obj->FormBotones();
?>

</body>
</html>
