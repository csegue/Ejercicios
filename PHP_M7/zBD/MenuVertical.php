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

<div class="container">
    <div calss="row"   style="border: 1px solid red;">
      <div class="col-2" style="border: 1px solid blue;">

            <nav class="navbar bg-light mr-auto mb-auto" style="width:150px; height:400px">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link 1</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link 2</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link 3</a>
                  </li>
                </ul>
            </nav>

              <br>

              <div class="container-fluid">
                <h3>Vertical Navbar Example</h3>
                <p>A navigation bar is a navigation header that is placed at the top of the page.</p>
              </div>
       </div> <!-- col-->

       <div class="col-10" style="border: 2px solid yellow;">
                  <h3>Vertical Navbar Example</h3>
                  <p>A navigation bar is a navigation header that is placed at the top of the page.</p>
       </div> <!-- col-->
    </div><!--row -->
   </div><!-- container -->



  </body>
  </html>


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
