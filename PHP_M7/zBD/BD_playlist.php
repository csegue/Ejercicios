<?php

     $servername = "localhost";
     $database = "spotify";
     $username = "root";
     $password = "";
     $table ="playlist";

// Create connection  -* HOSTING  *-
/************************************************************************************************ */
     $conn = mysqli_connect($servername, $username, $password, $database);
     $conn->set_charset("utf8");
// Check connection
     if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
     }

     //$print= "Hosting Connected successfully";
     //echo "Hosting Connected successfully";
     //echo"</br>";
// Create connection  -* BD *-
/************************************************************************************************ */
     $cbd = mysqli_select_db($conn, $database);
//Check Connection
     if (!$cbd) {
         die("Connection failed: " . mysqli_select_bd_error());
     }

     //echo "BD Connected successfully";
     //echo"</br>";
//.................................................................................
    $tildes = $conn->query("SET NAMES 'utf8'"); //Para que se muestren las tildes

// Crear conexion con la -* TABLA  *-
/************************************************************************************************ */
    $result = mysqli_query($conn, "SELECT * FROM $table");
 // Check Connection

     if (!$cbd) {
         die("Connection failed: " . mysqli_query_error());
     }

     //echo "Table Connected successfully";
     //echo"</br>";
 //.................................................................................
?>
