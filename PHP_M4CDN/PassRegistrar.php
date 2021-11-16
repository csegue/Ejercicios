<?php
session_start();
include('./zBD/bd_usuarios.php');
include('./zBD/MenuM4.php');
?>
 <!DOCTYPE html>                     <!--  Se pone al principio del programa para saber cual es es la version de HTLM 5 -->
 <html lang="es">                    <!-- idioma -->
     <head>
         <style type="text/css">
            .bordred   { border: 0px solid red;}
            .bordblue  { border: 0px solid blue;}
            .bordgreen { border: 0px solid green;}
         </style>
     </head>



 <body>

     <div class="container" >  <!-- container-fluid -->

         <div class="row">
             <div class="col-12 bordblue text-center">
                 <h1>Mi Perfil</h1>
             </div>
         </div>

         <div class="row">
             <div class="col-xs-2 col-xl-4 bordred mt-5"> <p> Crear mi cuenta </p> <hr> </div>
             <div class="col bordred mt-5"> <a href="PassIniciar.php"><p>Conectarse</p></a><hr> </div>
         </div>


         <div class="row bordblue">

             <form  method="post" action="#">

             <span  class="icon-right-dir"></span>
             <input name="tnombre" type="text"  placeholder= "Nombre"  value="" /></br>

             <span  class="icon-key"></span>
             <input name="tusuario" type="text"  placeholder= "Usuario"  value="" /></br>

             <span  class="icon-mail-1"></span>
             <input name="tmail" type="text" placeholder="email" border="none" value=""/><br/>

             <span  class="icon-key"></span>
             <input name="tcontraseña" type="password" placeholder= "contraseña" border="none" value="" /></br>

             <span  class="icon-key"></span>
             <input name="tcontraseña2" type="password" placeholder= "Repetir contraseña" border="none"
             value="" /></br>
         </div>

         <div class="row">
             <div class="col bordblue text-left">
                <input class="ml-5 mt-2" type="submit" value="Ingresar"/>
             </div>
         </div>



    </div> <!-- container -->


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


 </body>
 </html>
