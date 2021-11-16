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
         <!-- La width=device-widthparte establece el ancho de la página para seguir el ancho de la pantalla del dispositivo (que variará  según el dispositivo). -->
         <!-- La initial-scale=1parte establece el nivel de zoom inicial cuando el navegador carga la página por primera vez. -->
         <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no,  maximum-scale=1.0, minimum-scale=1.0">
         <!-- maxima compatibilidad para todos los navegadores -->
         <meta http-equiv="x-ua-compatible" content="ie-edge">
         <link rel="stylesheet" href="fonts/css/fontello.css">  <!-- iconos -->
         <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> <!-- Fuente: Roboto Regular 400 -->
         <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
         <link rel="stylesheet" href ="./css/bootstrap.css">      <!-- estilos .css -->

         <title></title>

         <style type="text/css">
            .bordred   { border: 1px solid red;}
            .bordblue  { border: 1px solid blue;}
            .bordgreen { border: 2px solid green;}
         </style>
     </head>



 <body>

<!-- ******************************************************************************************************************* -->
<!-- NAVBAR .......................................................................................................... -->
             <!-- 1.- Nombre o logo de la empresa -->
             <!-- 2.- Boton menu hamburguesa -->
             <!-- 3.- enlaces -->

<!-- (1.-) clase navbar + expand horizontal hasta md + color texto + color backgroud + Efecto pegajoso-->
    <nav class="navbar  navbar-expand-md  navbar-light bg-light">  <!-- fixed-top  -->

    <!-- Logo -->
        <a href="index.php" class="navbar-brad">
             <img src="img/csglogo3.png"
             style="width: 60px"
             data-toggle="modal"
             data-target="#mymodal"
             title="csg"
             >


<!-- (2.-) Boton menu hamburguesa -->
             <button class="navbar-toggler ml-auto text-left"
                 type="button"
                 data-toggle="collapse"
                 data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent"
                 aria-expanded="false"
                 aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>

<!-- (3.-) Enlaces -->
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <h4 class="TitNav"> PHP CONTROL DE FLUJOS  </h4>
                 <ul class="navbar-nav ml-auto">  <!-- mr- -->  <!-- nav: menú en horizontal navbar-nav: pone el menú en vertical -->
                     <li class="nav-item"><a href="#" class="nav-link" id="sectores">ENLACE-1</a></li>
                     <li class="nav-item"><a href="#" class="nav-link" id="ropa">ENLACE-2</a></li>
                     <li class="nav-item"><a href="#" class="nav-link" id="caracteristicas">ENLACE-3</a></li>
                     <li class="nav-item dropdown">
                         <a href="#" class="nav-link dropdown-toggler" data-toggle="dropdown" id="navbardrop">DESPLEGABLE-1</a>
                             <div class="dropdown-menu">
                                 <a href="#" class="dropdown-item">SUBMENU-1</a>
                                 <a href="#" class="dropdown-item">SUBMENU-2</a>
                                 <div class="dropdown-divider"></div>
                                 <a href="#" class="dropdown-item">SUBMENU-3</a>
                             </div>
                         </li>

                     </ul>
                     <!--  Buscar ........................................................................................................ -->
<!--
                 <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                 </form>
-->
             </div> <!-- Enlaces -->
         </nav>

<!-- ********************************************************************************************************************* -->



<div class="container-fluid" >  <!-- container-fluid -->


 <!-- ********************************************************************************************************************* -->
 <!-- MENU-2  DEBAJO NAVBAR
 **************************************************************************************************************************  -->
 <div class="Cab_02">
  <div class="row">
   <div class="col">
       <h4> TASCA M6 </h4>
   </div>
 </div>
</div>

 <!-- ********************************************************************************************************************* -->












<!--..Agrupar introducción del contenido....................................................................................... -->
<header>
</header>
<!--..Agrupar navegación del sitio (Menu principal.............................................................................. -->
<nav>
</nav>
<!--..indicar el contenido ..................................................................................................... -->
<article>
<!--..Agrupar secciones o subsecciones de contenido............................................................................. -->
<section>
</section>

</article>
<!--..Contenido que está fuera del tema principal. (Un anuncio pe )............................................................. -->
 <aside>
 </aside>
<!--..Pie de página.............................................................................................................. -->
<footer>
</footer>
<!--
     <script src="js/jquery-3.5.1.slim.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
-->
 </body>
 </html>
