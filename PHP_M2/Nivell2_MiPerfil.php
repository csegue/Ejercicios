<?php
include('./menu/Menu.php');
 ?>
 <!DOCTYPE html>                     <!--  Se pone al principio del programa para saber cual es es la version de HTLM 5 -->
 <html lang="es">                    <!-- idioma -->
     <head>
     </head>


 <body>
     <!--..Agrupar introducción del contenido.......................................................................................
      <header>
      </header>
     -->
     <!--..Agrupar navegación del sitio (Menu principal.............................................................................. -->
     <nav>
        <h2>Hola. Aquí accederemos posteriormente</h2>
        </br>
        <h3>Haz clic en el logo para volver a la página principal.<h3>
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
         <?php
              include('./menu/MenuFooter.php');
         ?>
     </footer>

 </body>

 </html>
