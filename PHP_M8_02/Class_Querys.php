<?php
if(!isset($_SESSION)) {
    session_start();
}

//*****************************************************************************************************
class metodos{
//*****************************************************************************************************

    public function MostrarDatos($sql){

        $c= new conectar;
        $conexion= $c->conexion();
        //$result= mysqli_query($conn, "SELECT * FROM $table");
        $result= mysqli_query($conexion, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

//*****************************************************************************************************

    public function InsertarDatos($datos){

        $c= new conectar;
        $conexion= $c->conexion();
        //mysqli_query($conn, "INSERT INTO $table VALUES (NULL,'$usu','$pass','$mail')");
        $sql="INSERT INTO compra (NomComp, PreComp, CanComp) VALUES ('$datos[0]','$datos[1]','$datos[2]')";
        $result=mysqli_query($conexion, $sql);
    }

//*****************************************************************************************************

    public function ModificarDatos($datos){

        $c= new conectar;
        $conexion= $c->conexion();
        //mysqli_query($conn,"UPDATE $table SET usuario='$usu', pass='$pass', email='$mail' WHERE id='$id'");
        $sql="UPDATE compra SET NomComp='$datos[1]', PreComp='$datos[2]', CanComp='$datos[3]' WHERE id='$datos[0]'";
        $result=mysqli_query($conexion, $sql);
    }


//*****************************************************************************************************
    public function EliminarDatos($datos){

        $c= new conectar;
        $conexion= $c->conexion();
        //mysqli_query($conn,"DELETE FROM  $table WHERE id='$id'");
        $sql="DELETE FROM compra WHERE id='$datos[0]'";
        $result=mysqli_query($conexion, $sql);
    }


//*****************************************************************************************************
}//clase
//*****************************************************************************************************



//$obj= new conectar;
//$obj->conexion();


 ?>
