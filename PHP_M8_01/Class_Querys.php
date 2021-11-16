<?php
error_reporting(1);
require "BD_Conexion.php";
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
<!-- ......................................................................................................................... -->
<!-- Creamos la Clase Formulario -->
<?php
//**************************************************************************************************************************
            class BaseDatos extends Conexion{
//**************************************************************************************************************************
                protected $Nom1;
                protected $Pre1;
                protected $Can1;

                public function QueryInicializar($nom, $pre, $can){
                        $this->Nom1= $nom;
                        $this->Pre1= $pre;
                        $this->Can1= $can;

                }

                public function QueryConsulta(){
                    $resultado= $this->conexion_db->query('SELECT * FROM compra');
                    $productos=$resultado->fetch_all(MYSQLI_ASSOC);
                    return $productos;
                    $resultados->close();
                }

                public function QueryAltas(){
                    $resultado= $this->conexion_db->query('SELECT * FROM compra');
                    $this->conexion_db->query("INSERT INTO compra VALUES (NULL,'$this->Nom1','$this->Pre1','$this->Can1')");
                    $resultado->close();
                }

                public function QueryBajas($zid){
                    $this->Regis= $zid;
                    $resultado= $this->conexion_db->query('SELECT * FROM compra WHERE id= "$this->Regis" ');
                    $this->conexion_db->query("DELETE FROM compra WHERE id=($this->Regis)") or die ($mysql->error);
                    $resultado->close();
                }

                public function QueryModificaciones($obj){

                    $resultado= $this->conexion_db->query('SELECT * FROM compra WHERE id= "$this->Regis" ');
                    $this->conexion_db->query("UPDATE compra SET NomComp='$obj[1]',PreComp='$obj[2]',CanComp='$obj[3]' WHERE id='$obj[0]'")or die ($mysql->error);
                    $resultado->close();

                }

            }//clase

//************************************************************************************************************************** -->
?>
    </div><!-- row -->
   </div><!-- col -->
  </div><!--mod1 -->
<!--............................................................................................................... -->
</div><!-- container -->


</body>
</html>
