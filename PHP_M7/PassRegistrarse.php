<?php
if(!isset($_SESSION)) {
    session_start();
}
include('./zBD/bd_usuarios.php');
include('./zBD/Menu.php');

?>


<!DOCTYPE html>
<html>

<head>
            <link rel="stylesheet" href ="./css/PassMenu.css">      <!-- estilos .css -->
</head>
<body>

<?php

?>

<!-- ********************************************************************************************************** -->


<!-- ********************************************************************************************************** -->
<!--  INTRODUCIR USUARIO NUEVO [VERIFICAMOS LA ENTRADA CORRECTA]*********************************************** -->
<!-- ********************************************************************************************************** -->
    <div id="ContDesing2">
        <h1>Mi Perfil</h1>
        <hr></hr>

    <div class="tope2">  <!-- para anclar el formulario al apretar submit -->

    <div class="mensabd2">
            <p></p>
<?php
                $duplibd=0;
                $duplimail=0;
                $duplicontraseña=0;
                $volver=0;
                $volver2=0;

                $nombre = "";
                $usuario = "";
                $tf1="";
                $tf2="";
                $tf3="";
                $mail = "";
                $contraseña ="";
                $contraseña2 ="";
                $apellido="";
                $cp="";
                $premium="";
                $pais="";

                if(isset($_POST['tnombre'])) // and $duplibd==1)
                {

                    $nombre =      strtoupper($_POST['tnombre']);
                    $apellido=     strtoupper($_POST['tapellido']);
                    $mail =        $_POST['tmail'];
                    $contraseña =  $_POST['tcontraseña'];
                    $contraseña2 = $_POST['tcontraseña2'];
                    $usuario =     $_POST['tusuario'];
                    $sexh=         $_POST['tsexh'];
                    $pais=         strtoupper($_POST['tpais']);
                    $cp=           $_POST['tcp'];
                    $tf5=          strtoupper($_POST['tpremium']);

                    $tf1= $_POST['tfaa'];
                    $tf2= $_POST['tfmm']; if(strlen($tf2)==1){ $tf2="0".$tf2;}
                    $tf3= $_POST['tfdd']; if(strlen($tf3)==1){ $tf3="0".$tf3;}

                    $tf4= $tf1."-".$tf2."-".$tf3;       /*echo $tf4; echo "<br>";*/





                    $campos = array();

                    if($nombre == "")                               {array_push($campos,"El campo Nombre no pude estar vacío");}
                    if($apellido == "")                             {array_push($campos,"El campo apellido no pude estar vacío");}
                    if($mail == "" || strpos($mail,"@") === false)  {array_push($campos,"correo noválido.");}
                    if($contraseña == "" || strlen($contraseña)< 6) {array_push($campos,"Introduzca Password");}
                    if($contraseña2 == "" )                         {array_push($campos,"Repita Password");}
                    if($contraseña  !== $contraseña2)               {array_push($campos,"Los Passwords no coinciden");}
                    if($usuario == "")                              {array_push($campos,"El campo Usuario no pude estar vacío");}
                    if($tf4 =="")                                   {array_push($campos,"La fecha de nacimiento no puede estra vacía");}
                    if($sexh =="")                                  {array_push($campos,"El campo sexo no pude estar vacío");}
                    if($pais =="")                                  {array_push($campos,"El campo país no pude estar vacío");}
                    if($cp =="")                                    {array_push($campos,"El campo código postal no pude estar vacío");}

                    if(count($campos) > 0)
                    {
                    echo "<div class='Valdatos2'>";
                        echo "campos erroneos";

                        for($i = 0; $i < count($campos); $i++)
                        {
                            echo "<li>".$campos[$i]."</li>";
                        }
                    echo "</div>";
                    }
                    else
                        {
                        echo "<div class='Valdatos2'>";
                        echo  "Datos correctos";
                        echo "</br>";
                            $duplibd=1;
                        echo "</div>";
                        }
                }



//********************************************************************************************************** -->
//Buscamos en la BD si ya existe  ........................................................ -->
//**************************************************************************************** -->
//CONECTARME A LA BASE DE DATOS </p>
//*******************************************************************************************//
// Consulto si existe este Usuario
//********************************************************************************************************

                if(isset($_POST['tnombre']) and $duplibd==1)
                {

                    $query="SELECT Email, Password FROM $table WHERE Email=? || Password=?;";
                    $sentencia= mysqli_prepare($conn,$query); //Prepara una sentencia SQL para su ejecución
                    $filas=mysqli_num_rows($result); //aquí me cuenta el nº de registros
                    //Los valores que introduzco y quiero que los compare con los de la tabla con la sentencia preparada
                    mysqli_stmt_bind_param($sentencia,"ss",$mail, $contraseña);
                    $resultado=mysqli_stmt_execute($sentencia); //Ejecuta una consulta preparada

                    if ($resultado == true)
                    {
                        mysqli_stmt_bind_result($sentencia,$tabmail,$tabcontraseña);//Variables para SQL
                        while(mysqli_stmt_fetch($sentencia)) //Obtiene los resultados de una sentencia preparadas
                        {
                            if (strcmp($mail, $tabmail)==0) // 0=iguales
                            {
                                $duplimail++;
                            }
                            if (strcmp($contraseña, $tabcontraseña)==0)
                            {
                                $duplicontraseña++;
                            }
                        }
                    }
                            //echo "SumMail : "; echo $duplimail; echo "</br>";
                            //echo "SumContra : "; echo $duplicontraseña; echo "</br>";

                        echo "<div class='suerte2'>";
                            if ($duplimail >0){
                                echo "Este Mail ya existe";
                                echo "</br>";
                                }
                            if ($duplicontraseña >0){
                                echo "Esta Contraseña ya existe";
                                }
                            if ($duplimail ==0 && $duplicontraseña ==0 )
                            {
                                 echo "Nombre y Usuario correctos, Bienvenid@ ";

                                $intro=mysqli_query($conn, "INSERT INTO $table (`id`, `NomCli`, `ApellCli`, `Email`, `Password`, `NomUsuario`, `Fnacimiento`, `Sexo`, `Pais`, `CodPostal`, `Premium`) VALUES (NULL,'$nombre','$apellido','$mail','$contraseña','$usuario','$tf4','$sexh','$pais','$cp','$tf5')");


// Recojo la nueva id creada por la BD
//********************************************************************************************************


                                  $datos= mysqli_query($conn,"SELECT * FROM $table WHERE Email= '$mail' && Password='$contraseña'");
                                  if (mysqli_num_rows($datos)==NULL)
                                  {
                                      $noencontrado= "E-mail o Contraseña erronea"; echo "</br>";
                                  }
                                  else
                                  {
                                      while($user= mysqli_fetch_array($datos))
                                      {
                                          $pasarId=  $user['id'];
                                          $pasarNom= $user['NomCli'];
                                      }
                                  }

                                  //mysqli_free_result($result);// liberamos el espacio de memoria que me a consumido $consulta
                                  //mysqli_close($conn);// cerramos
                                  $duplibd=0;
                                  $volver=1;

// PASO EL NOMBRE DE USUARIO A BARCODE
//********************************************************************************************************
                                  if ($volver==1)
                                  {
?>

                                        <form  name="pasovar" method= "post" action="index.php">  <!--"BarcodePass.php">-->

                                            <input type="text" name="nombre" value="<?php echo $nombre; ?>"
                                                   style="color:magenta; background:rgb(65,70,54); border: 0px;" />
<?php

                                                   echo "</br></br>";
                                                   $_SESSION['usu_id']= $pasarId;
                                                   $_SESSION['usu_nom']= $pasarNom;

                                                   date_default_timezone_set('Europe/Madrid');
                                                   $_SESSION["ultimoAcceso"]= date("Y-m-d H:i:s");//a-m-d h-m-s
?>
                                            <input type="submit"
                                                   style="background: rgb(40,53,62); width: 140px; color:white; cursor:pointer"/>
                                        </form>

<?php
                                        $volver2=1;
                                  }

                            }echo "</div>";
                }
// BUSCO SI HAY O NO ARTICULOS EN EL PLAY LIST
//********************************************************************************************************
/*
                                    if ($volver2==1)
                                    {

                                        $datos= mysqli_query($conn,"SELECT * FROM carrito WHERE Usu_id=$pasarId && Estado=0");
                                        $_SESSION['cantcarrito']=$filas= mysqli_num_rows($datos);

                                        mysqli_free_result($datos);
                                        mysqli_close($conn);// cerramos
                                    }

*/
?>

    </div> <!-- Fin mensabd -->


<!-- FORMULARIO DE ENTRADA
********************************************************************************************************  -->
        <div class="formuser2">
            <div class="tipoent2">
                <a href="#"><p>Crear mi cuenta</p></a>

                <div class="crear2">
                    <a href="PassConectarse.php"><p>Conectarse</p></a>
                </div>
            </div>

                <form  method="post" action="#">

                    <span  class="icon-right-dir"></span>
                    <input name="tnombre" type="text"  placeholder= "Nombre"  value="<?php echo $nombre; ?>" /></br>

                    <span  class="icon-right-dir"></span>
                    <input name="tapellido" type="text"  placeholder= "Apellido"  value="<?php echo $apellido; ?>" /></br>

                    <span  class="icon-mail-1"></span>
                    <input name="tmail" type="text" placeholder="email" border="none" value="<?php echo $mail; ?>"/><br/>

                    <span  class="icon-key"></span>
                    <input name="tusuario" type="text"  placeholder= "Usuario"  value="<?php echo $usuario; ?>" /></br>

                    <span  class="icon-key"></span>
                    <input name="tfdd" type="text"  maxlength="2" placeholder= "Día nacimiento"  value="<?php echo $tf3; ?>" /></br>
                    <span  class="icon-key"></span>
                    <input name="tfmm" type="text"  maxlength="2" placeholder= "Mes nacimiento"  value="<?php echo $tf2; ?>" /></br>
                    <span  class="icon-key"></span>
                    <input name="tfaa" type="text"  maxlength="4" placeholder= "Año nacimiento"  value="<?php echo $tf1; ?>" /></br>


                    <span  class="icon-key"></span> <p>Sexo : H</p>    <input type="radio"      name="tsexh" value="H">
                    <p> M</p>          <input type="radio"      name="tsexh" value="M"></br>

                    <span  class="icon-key"></span>
                    <input name="tcp" type="text"  placeholder= "Código Postal"  value="<?php echo $cp; ?>" /></br>

                    <span  class="icon-key"></span>
                    <p>S/N</p><input name="tpremium" type="text"  placeholder= "S/n"  size="11" maxlength="1" value="S" /></br>

                    <span  class="icon-key"></span>
                    <input name="tpais" type="text"  placeholder= "País"  value="<?php echo $pais; ?>" /></br>

                    <span  class="icon-key"></span>
                    <input name="tcontraseña" type="password" placeholder= "contraseña" border="none" value="" /></br>

                    <span  class="icon-key"></span>
                    <input name="tcontraseña2" type="password" placeholder= "Repetir contraseña" border="none"
                    value="" /></br>






                    <div class="acept2">
                        <input type="submit" value="Ingresar"/>
                    </div>
            </form>
        </div> <!-- formuser -->

    </div> <!-- tope -->
    </div> <!-- Fin ContDesign -->

    <!-- ********************************************************************************************************** -->
    <!--  VOLVEMOS A LA PAGINA PRINCIPAL ************************************************************************** -->
    <!-- ********************************************************************************************************** -->









</body>
</html>
