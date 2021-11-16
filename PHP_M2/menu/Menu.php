<?php

 ?>
<!DOCTYPE html>                     <!--  Se pone al principio del programa para saber cual es es la version de HTLM 5 -->
<html lang="es">                    <!-- idioma -->
    <head>
        <!-- metadatos: Es lo que nuestro navegador detecta de cierta configuración o información de nuestra p.web -->
        <meta charset="utf-8">  <!-- símbolos especiales como la ñ, acentos      -->
        <meta name="author"      content="Carlos Segué">
        <meta name="Descripción" content="Comienzo curso ITAcademy">
        <!-- viewport: que mi ancho va a ser el ancho del dispositivo y que mi escala inicial va a ser la 1 -->
        <meta name="viewport"    content="width=device-width, initial-scale=1.0, user-scalable=no,  maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="fonts/css/fontello.css">  <!-- iconos -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> <!-- Fuente: Roboto Regular 400 -->
        <link rel="stylesheet" href="styles/nivell2.css">      <!-- estilos .css -->
        <title>Nivell2_Exercici01</title>
    </head>


<body>
     <a id="arriba"></a>
    <header>

        <div id="header1">
            <div class="header1_logo"><a href="index.php"><img src="images/csglogo3.png" title="CSG"></a></div>
            <!-- style="width:50px;height:35px;margin: 5px 10px 5px 5px" -->
            <div class="header1_redes">
                <a href="https://twitter.com/?lang=es" style="text-decoration:none;" target="_blank";>
                <span class="icon-twitter"></span></a>

                <a href="https://es-es.facebook.com/public/Facebook-Faceebook-Facebook" style="text-decoration:none;" target="_blank";>
                <span class="icon-facebook"></span></a>

                <a href="Nivell2_MiPerfil.php" style="text-decoration:none;">
                <span class="icon-user-outline"></span>Mi Perfil</a>

                <a href="Nivell2_MiPerfil.php" style="text-decoration:none;">
                <span class="icon-basket"></span>Carrito </a>
            </div>
        </div>

        <div id="header2">
            <ul>
                <li><a href="#"><span class="icon-right-dir"></span>Menu_01</li></a> <!--<span class="icon-right-open"></li>-->
                <li><a href="#"><span class="icon-right-dir"></span>Menu_02   </li></a>
                <li><a href="#"><span class="icon-right-dir"></span>Menu_03</li></a>
                <li><a href="#"><span class="icon-right-dir"></span>Menu_04</li></a>
                <li><a href="#"><span class="icon-right-dir"></span>Menu_05</li></a>
            </ul>
        </div>


    </header>

</body>


</html>
