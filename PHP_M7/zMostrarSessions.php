<?php
if(!isset($_SESSION)) {
    session_start();
}
//session_destroy();

/*******************************************************************************************************************/
    if(isset($_SESSION['usu_nom'])){

        echo " Sesion abierta [usu_nom] : ";
        echo $_SESSION['usu_nom'];

    }else{
        echo "sesion No Abierta ['usu_nom']";
    }
    echo "<hr>";

/*******************************************************************************************************************/
    if(isset($_SESSION['usu_id'])){

        echo " Sesion abierta [usu_id] : ";
        echo $_SESSION['usu_id'];

    }else{
        echo "sesion No Abierta ['usu_id']";
    }
    echo "<hr>";
/*******************************************************************************************************************/
    if(isset($_SESSION['reproducir'])){

        echo " Sesion abierta [reproducir] : ";
        echo $_SESSION['reproducir'];

    }else{
        echo "sesion No Abierta ['reproducir']";
    }
    echo "<hr>";
/*******************************************************************************************************************/
    if(isset($_SESSION['titulo'])){

        echo " Sesion abierta [titulo] : ";
        echo $_SESSION['titulo'];

    }else{
        echo "sesion No Abierta ['titulo']";
    }
    echo "<hr>";
/*******************************************************************************************************************/
    if(isset($_SESSION['NomUsuPago'])){

        echo " Sesion abierta ['NomUsuPago'] : ";
        echo $_SESSION['NomUsuPago'];

    }else{
        echo "sesion No Abierta ['NomUsuPago']";
    }
    echo "<hr>";

/*******************************************************************************************************************/
    if(isset($_SESSION['Suid'])){

        echo " Sesion abierta ['Suid'] : ";
        echo $_SESSION['Suid'];

    }else{
        echo "sesion No Abierta ['Suid']";
    }
    echo "<hr>";

/*******************************************************************************************************************/
    if(isset($_SESSION['ultimoAcceso'])){

        echo " Sesion abierta ['ultimoAcceso'] : ";
        echo $_SESSION['ultimoAcceso'];

    }else{
        echo "sesion No Abierta ['ultimoAcceso']";
    }
    echo "<hr>";

/*******************************************************************************************************************/
    if(isset($_SESSION['reproducir'])){

        echo " Sesion abierta ['reproducir'] : ";
        echo $_SESSION['reproducir'];

    }else{
        echo "sesion No Abierta ['reproducir']";
    }
    echo "<hr>";

/*******************************************************************************************************************/
    if(isset($_SESSION['FormaPago'])){

        echo " Sesion abierta ['FormaPago'] : ";
        echo $_SESSION['FormaPago'];

    }else{
        echo "sesion No Abierta ['FormaPago']";
    }
    echo "<hr>";

/*******************************************************************************************************************/
    if(isset($_SESSION['FechaCreacion'])){

        echo " Sesion abierta ['FechaCreacion'] : ";
        echo $_SESSION['FechaCreacion'];

    }else{
        echo "sesion No Abierta ['FechaCreacion']";
    }
    echo "<hr>";

/*******************************************************************************************************************/
    if(isset($_SESSION['cantante'])){

        echo " Sesion abierta ['cantante'] : ";
        echo $_SESSION['cantante'];

    }else{
        echo "sesion No Abierta ['cantante']";
    }
    echo "<hr>";

/*******************************************************************************************************************/
    if(isset($_SESSION['numreprod'])){

        echo " Sesion abierta ['numreprod'] : ";
        echo $_SESSION['numreprod'];

    }else{
        echo "sesion No Abierta ['numreprod']";
    }
    echo "<hr>";
?>
