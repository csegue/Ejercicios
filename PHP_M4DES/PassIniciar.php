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
            <div class="col-xs-2 col-xl-4 bordred mt-5"> <p> Iniciar sesión </p> <hr> </div>
            <div class="col bordred mt-5"> <a href="PassRegistrar.php">Crear mi cuenta</a> <hr> </div>
        </div>

        <div class="row bordblue">
            <form  method="post" action="#">

                     <span  class="icon-mail-1"></span>
                     <input name="tmail" type="text" placeholder="E-mail" border="none" value=""/> <!--</*?php echo $mail; */?>-->
                     <br/>

                     <span  class="icon-key"></span>
                     <input name="tcontraseña" type="password" placeholder= "contraseña" border="none"
                     value=""/>
                     </br></br>
        </div>

        <div class="row">
                    <div class="col bordblue text-left">
                             <input class="ml-5" type="submit" value="Ingresar"/>
                    </div>
        </div>



            </form>

        <div class="row bordblue">
            <div class="col text-right">
                 <a style="" href="#">Olvidó su contraseña?</a>
                 <hr>
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
