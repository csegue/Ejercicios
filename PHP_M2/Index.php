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
         <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> <!-- Fuente: Roboto Regular 400 -->
         <link rel="stylesheet" href="styles/nivell2.css">      <!-- estilos .css -->
         <title>Nivell2_Exercici01</title>
     </head>


 <body>

     <!--..Agrupar introducción del contenido....................................................................................... -->
     <!-- <header></header> -->
     <!--..Agrupar navegación del sitio (Menu principal.............................................................................. -->

     <nav>
         <div class="elemDestc">

             <div class="elemDestc_img"><p>Sabinas Teruel</p> <img src="images/sabinas.jpg" title="CSG"> </div>

             <div class="elemDestc_img">
                 <p>Audio</p>
                 <audio controls> <source src="images/audio.mp3" type="audio/mp3"> </audio>

                 <form action="#" method="POST" autocomplete="off">
                 <p>Formulario</p>
                 <p><label for="nombre">Nombre:</label> <input type="text"  id="nombre" name="nombre"><br/></p>
                 <input type="submit"><br/>
             </div>

             <div class="elemDestc_img"><p>Curso HTML 5</p>
                 <iframe width="560" height="315" src="https://www.youtube.com/embed/3jeLIzNsK20" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
             </div>

         </div>
     </nav>
     <!--..indicar el contenido ..................................................................................................... -->
     <article>
     <!--..Agrupar secciones o subsecciones de contenido............................................................................. -->
         <section>

             <div class="section_img">
                 <p>Elementos HTML</p>
                 <img src="images/ElementosHtml.jpg" title="CSG">
             </di>
         </section>
     </article>
     <!--..Contenido que está fuera del tema principal. (Un anuncio pe )............................................................. -->
     <aside>
     </aside>
     <!--..Pie de página..............................................................................................................
     <footer>
        <p>&#169; 2021 <a href="#">  </a>Contacto: 999999999</p>
     </footer>
    -->
<?php
     include('./menu/MenuFooter.php');
?>
 </body>
    <a href="#arriba" style="color:red">Arriba</a>
 </html>
