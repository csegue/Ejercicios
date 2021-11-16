<?php

class conectar{

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $bd = "inventario";

    public function conexion(){
        //$conn= new mysqli($this->servername, $this->username, $this->password, $this->bd);
        $conexion= mysqli_connect($this->servername, $this->username, $this->password, $this->bd);

        if ($conexion->connect_error) {
            die("Connection failed: " . $conexion->connect_error."//".$conexion->connect_errno );
        }

        //echo "Connected successfully";

        return $conexion;

    }
}
//*****************************************************************************************************

$obj= new conectar;
$obj->conexion();


 ?>
