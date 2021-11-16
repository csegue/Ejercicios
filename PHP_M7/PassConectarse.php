<?php
if(!isset($_SESSION)) {
    session_start();
}
include('./zBD/Menu.php');
include('./zBD/BD_usuarios.php');


/*******************************************************************************************************************/
/*
if(isset($_SESSION['usu_id']) && isset($_SESSION['usu_nom']) ){

    echo "sesion Abierta index.php"." - ";
    echo $_SESSION['usu_id']." - ";
    echo $_SESSION['usu_nom'];

}else
{
    echo "sesion No Abierta PassConectarse.php"." - ";
}
*/
/*******************************************************************************************************************/



?>
<!DOCTYPE html>

<html>
<html lang="es">                    <!-- idioma -->
    <head>
        <!-- metadatos: Es lo que nuestro navegador detecta de cierta configuración o información de nuestra p.web -->
        <meta charset="utf-8">  <!-- símbolos especiales como la ñ, acentos      -->
        <meta name="author"      content="Carlos Segué">
        <meta name="Descripción" content="Comienzo curso ITAcademy">
        <!-- viewport: que mi ancho va a ser el ancho del dispositivo y que mi escala inicial va a ser la 1 -->
        <!-- La width=device-widthparte establece el ancho de la página para seguir el ancho de la pantalla del dispositivo (que variará  según el dispositivo). -->
        <!-- La initial-scale=1parte establece el nivel de zoom inicial cuando el navegador carga la página por primera vez. -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no,  maximum-scale=1.0, minimum-scale=1.0">
        <!-- maxima compatibilidad para todos los navegadores -->
        <meta http-equiv="x-ua-compatible" content="ie-edge">
        <link rel="stylesheet" href="fonts/css/fontello.css">  <!-- iconos -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> <!-- Fuente: Roboto Regular 400 -->
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
        <link rel="stylesheet" href ="./css/PassMenu.css">      <!-- estilos .css -->

   <title>M4_Bootstrap</title>


   </head>


<body>

<!-- ********************************************************************************************************** -->


<!-- ********************************************************************************************************** -->
<!-- [VERIFICAMOS LA ENTRADA CORRECTA]*********************************************** -->
<!-- ********************************************************************************************************** -->
<div id="ContDesing">
        <h1>Mi Perfil  </h1>
        <hr></hr>

    <div class="tope">  <!-- para anclar el formulario al apretar submit -->

    <div class="mensabd">
            <h1></h1>
            <?php
                $duplibd=0;
                $volver=0;
                $volver2=0;
                $mail = "";
                $contraseña ="";

                if(isset($_POST['tmail'])) // and $duplibd==1)
                {
                    $mail = $_POST['tmail'];
                    $contraseña = $_POST['tcontraseña'];

                    $campos = array();

                    if($mail == "" || strpos($mail,"@") === false){array_push($campos,"correo no válido.");}
                    if($contraseña == "" || strlen($contraseña)< 6){array_push($campos,"Introduzca Password");}

                            if(count($campos) > 0)
                            {
                                echo "<div class='Valdatos'>";
                                    echo "campos erroneos";

                                    for($i = 0; $i < count($campos); $i++)
                                    {
                                        echo "<li>".$campos[$i]."</li>";
                                    }
                                echo "</div>";
                            }
                            else
                            {
                                echo "<div class='Valdatos'>";
                                    echo  "Datos correctos";
                                    echo "</br>";
                                        $duplibd=1;
                                echo "</div>";
                            }
                }


//**************************************************************************************** -->
//CONECTARME A LA BASE DE DATOS </p>
//********************************************************************************************************
// Consulto si existe este Usuario y recojo su nombre + id
//********************************************************************************************************

                $encontrado="";
                $noencontrado="";

                if(isset($_POST['tmail']) and $duplibd==1)
                {
                    $datos= mysqli_query($conn,"SELECT * FROM $table WHERE Email= '$mail' && Password='$contraseña'");
                            if (mysqli_num_rows($datos)==NULL)
                            {
                                $noencontrado= "E-mail o Contraseña erronea"; echo "</br>";
                            }
                            else
                            {
                                while($user= mysqli_fetch_array($datos))
                                {
                                    $encontrado= "Usuario encontrado";
                                    echo "</br>";
                                    $pasarNom= $user['NomCli'];
                                    $pasarId= $user['id'];
                                    //echo "id:"    .$pasarId."<br/> ";
                                }
                                    mysqli_free_result($result);// liberamos el espacio de memoria que me a consumido $consulta
                                    mysqli_free_result($datos);
                                    //mysqli_close($conn);// cerramos
                                    $duplibd=0;
                                    $volver=1;
                            }

                        echo "<div class='suerte'>";
                            echo $encontrado;
                            echo $noencontrado;
                        echo "</div>";



//********************************************************************************************************
// GUARDO EL NOMBRE DE USUARIO Y SU ID
//********************************************************************************************************

                    if ($volver==1)
                    {
                        echo "</br>";
?>
                        <form  name="pasovar" method= "POST" action="index.php">
                            <input type="text" disabled name="nombre" value="<?php echo $pasarNom; ?>"/>
                            <!-- style="color:magenta; background:rgb(65,70,54); border: 0px;" /> -->
<?php
                                   echo "</br></br>";
                                   /*
                                   $_SESSION['usuario']=array();
                                   $_SESSION['usuario']['vsU_id']= $pasarId;
                                   $_SESSION['usuario']['vsUsu']= $pasarNom;
                                   */

                                   $_SESSION['usu_id']= $pasarId;
                                   $_SESSION['usu_nom']= $pasarNom;

                                   date_default_timezone_set('Europe/Madrid');
                                   $_SESSION["ultimoAcceso"]= date("Y-m-d H:i:s");//a-m-d h-m-s
?>
                            <input type="submit" Value="Enviar"
                                   style="background: rgb(40,53,62); width: 140px; color:white; cursor:pointer"/>
                        </form>

<?php
                        $volver2=1;
                        }

                }


// BUSCO LAS LISTAS DE REPRODUCCION
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
    </div>  <!-- Fin mensabd  -->

<!--********************************************************************************************************  -->
<!-- FORMULARIO DE ENTRADA
********************************************************************************************************  -->

    <div class="formuser">
        <div class="tipoent">
            <p> Iniciar sesión </p>

            <div class="crear">
                <a href="PassRegistrarseSinVerificar.php">Crear mi cuenta</a>
            </div>
        </div>
            <!--<p><a href="AltaUsuario_12.php" title="Crear mi cuenta" style="color:white" </a></p>-->

                <form  method="post" action="#">

                    <span  class="icon-mail-1"></span>
                    <input name="tmail" type="text" placeholder="E-mail" border="none" value="<?php echo $mail; ?>"/>
                    <br/>

                    <span  class="icon-key"></span>
                    <input name="tcontraseña" type="password" placeholder= "contraseña" border="none"
                    value=""/>
                    </br></br></br>

                    <div class="acept">
                        <input type="submit" value="Ingresar"/>

                        <div class="olvid">
                            <a style="" href="PassRestaurar.php">Olvidó su contraseña?</a>
                        </div>
                    </div>
                </form>
    </div> <!-- formuser -->



    </div> <!-- tope -->

</div> <!-- Fin ContDesign -->









</body>
</html>
