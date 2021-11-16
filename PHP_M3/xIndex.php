<?php
include('./menu/Menu.php');
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
         <link rel="preconnect" href="https://fonts.gstatic.com">
         <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet"> <!-- Fuente: lato -->
         <link rel="stylesheet" href="styles/nivell3.css">      <!-- estilos .css -->
         <title>Nivell3_Exercici01</title>
     </head>


 <body>

     <!--..Agrupar introducción del contenido....................................................................................... -->
     <!-- <header></header> -->
     <!--..Agrupar navegación del sitio (Menu principal.............................................................................. -->
     <h1>Nivel 1, Ejercicio 1, fuente Lato</h1>
     <nav>
        <div id="xcolumnas">
             <div class="xit">IT</div>
             <div class="xit">A</div>
             <div class="xit">CA</div>
             <div class="xit">DE</div>
             <div class="xit">MY</div>
        </div>

    <h1>Nivel 2, Ejercicio 2 y 3, Capa + Animaciones</h1>
           <div id="xcolumnas2">
                    <div class="xit2">IT [:hover]</div>
                    <div class="xit2">A [Rotate]</div>
                    <div class="xit2">CA [scale]</div>
                    <div class="xit2">DE [skew]</div>
                    <div class="xit2">MY<span class="icon-heart"></span></div>
           </div>
    <h1>Nivel 3, Ejercicio 2    , @keyframe</h1>
           <div class="pubMov" id="bloquePub" style="border-radius: 40px;">No me puedo parar, que nervios!
           <img src="images/csglogo3.png" alt="Notepad++" ></a>
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
     <!--..Pie de página..............................................................................................................
     <footer>
     </footer>
    -->
 </body>
 </html>
