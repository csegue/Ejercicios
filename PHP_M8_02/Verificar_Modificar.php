<?php
if(!isset($_SESSION)) {
    session_start();
}

require "./zBD/Menu.php";
require_once "Conexion.php";
require_once 'Class_Querys.php';

$xid = $_SESSION["pasarID"][0];
//print_r($_SESSION["pasarID"]);

//*****************************************************************************************************************************************
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

<!-- *********************************************************************************************************************************** -->
<!-- Recogemos los datos según su ID -->
<?php
$obj=new conectar();
$conexion= $obj->conexion();
$sql="SELECT  id, NomComp, PreComp, CanComp FROM compra WHERE id='$xid'";
$result=mysqli_query($conexion, $sql);
$ver= mysqli_fetch_row($result);
//.....................................................................................................................................
?>
     <div id="especial">
        <!-- Formulario de confirmacion -->
        <form action="" method="POST">
          <table>
            <caption>MODIFICAR ARTICULO</caption>
            <tr><th>id</th><th>NomComp</th><th>PreComp</th><th>CanComp</th></tr>
            <tr>
                <td><input type="hidden" name="xid" value="<?php echo $ver[0] ?>"></td>
                <td><input type="text"   name="xno" value="<?php echo $ver[1] ?>"></td>
                <td><input type="text"   name="xpr" value="<?php echo $ver[2] ?>"></td>
                <td><input type="text"   name="xca" value="<?php echo $ver[3] ?>"></td>
            </tr>
           </table>
          <input type="submit" name="yModif" value="Desea Modificar ?">
          <input type="submit" name="yvolver" value="Volver Sin Modificar">

      </form>
    </div><!-- especial -->
<?php
//.....................................................................................................................................
    if(isset($_REQUEST['yModif']))
     {
         $xid= $_POST['xid']; echo $xid;
         $xno= $_POST['xno']; echo $xno;
         $xpr= $_POST['xpr']; echo $xpr;
         $xca= $_POST['xca']; echo $xca;

         $datos=array($xid, $xno, $xpr, $xca);

         $obj=new metodos();
         if($obj->ModificarDatos($datos)==1){header("location: ./index.php");}
         session_unset();


         ?><script type="text/javascript">window.location.replace("index.php");</script><?php
     }
//.....................................................................................................................................
    if(isset($_REQUEST['yvolver']))
     {
         $obj=new Formularios;
         $obj->FormBotones();

         ?><script type="text/javascript">window.location.replace("index.php");</script><?php
     }




?>

</body>
</html>
