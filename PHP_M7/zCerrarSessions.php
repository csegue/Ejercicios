<?php
if(!isset($_SESSION)) {
    session_start();
}
//session_destroy();


/*******************************************************************************************************************/
if(isset($_SESSION['usu_id'])){

    unset($_SESSION['usu_id']);
}
/*******************************************************************************************************************/
if(isset($_SESSION['usu_nom'])){

    unset($_SESSION['usu_nom']);
}
/*******************************************************************************************************************/
if(isset($_SESSION['reproducir'])){

    unset($_SESSION['reproducir']);
}
/*******************************************************************************************************************/
if(isset($_SESSION['titulo'])){

    unset($_SESSION['titulo']);
}
/*******************************************************************************************************************/
if(isset($_SESSION['NomUsuPago'])){

    unset ($_SESSION['NomUsuPago']);
}
/*******************************************************************************************************************/
if(isset($_SESSION['FormaPago'])){

    unset ($_SESSION['FormaPago']);
}
/*******************************************************************************************************************/
if(isset($_SESSION['Suid'])){

    unset ($_SESSION['Suid']);
}
/*******************************************************************************************************************/
if(isset($_SESSION['ultimoAcceso'])){

    unset ($_SESSION['ultimoAcceso']);
}
/*******************************************************************************************************************/
if(isset($_SESSION['reproducir'])){

    unset ($_SESSION['reproducir']);
}
/*******************************************************************************************************************/
if(isset($_SESSION['FormaPago'])){

    unset ($_SESSION['FormaPago']);
}
/*******************************************************************************************************************/
if(isset($_SESSION['FechaCreacion'])){

    unset ($_SESSION['FechaCreacion']);
}
/*******************************************************************************************************************/
if(isset($_SESSION['cantante'])){

    unset ($_SESSION['cantante']);
}
/*******************************************************************************************************************/
if(isset($_SESSION['numreprod'])){

    unset ($_SESSION['numreprod']);
}
?>
<script type="text/javascript">
window.location.replace("index.php");
</script>