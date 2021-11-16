<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="fonts/css/fontello.css">  <!-- iconos -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    -->

    <link rel="stylesheet" href ="css/bootstrap.css">      <!-- estilos .css -->

    <title>M4_Bootstrap</title>

         <style type="text/css">
            .bordred   { border: 0px solid red;}
            .bordblue  { border: 0px solid blue;}
            .bordgreen { border: 0px solid green;}
            .bordblack { border: 1px solid black;}

         </style>
    </head>

    <body>






    <!--..Agrupar introducción del contenido....................................................................................... -->
    <header>
    </header>
    <!--..Agrupar navegación del sitio (Menu principal.............................................................................. -->

    <!-- ******************************************************************************************************************* -->
    <!-- NAVBAR .......................................................................................................... -->
         <!-- 1.- Nombre o logo de la empresa -->
         <!-- 2.- Boton menu hamburguesa -->
         <!-- 3.- enlaces -->

    <!-- (1.-) clase navbar + expand horizontal hasta md + color texto + color backgroud + Efecto pegajoso-->
     <nav class="navbar navbar-expand-md navbar-light bg-light">  <!-- fixed-top -->

         <!-- Logo -->
         <a href="#" class="navbar-brad">
             <img src="img/csglogo3.png"
                 style="width: 60px"
                 data-toggle="modal"
                 data-target="#mymodal">

             <!-- EL MODAL -->
             <div class="modal fade" id="mymodal" tabindex="-1">  <!-- fade: efecto animación + tabindex: para cerrar con esc -->
             <!-- modal-lg: tamaño (xs, sm....) + centered: centrarlo + modal-dialog-scrollbar: barra desplazaamiento-->
              <div class="modal-dialog modal-sm modal-dialog-centered">
                  <div class="modal-content">
                      <!-- CABECERA -->
                      <div class="modal-head">
                          <button type="button" class="close" data-dismiss="modal" style="float-right">&times;</button>
                          <h4 class="Modal title"></h4>
                      </div>
                      <!-- CUERPO -->
                      <div class="modal-body bg-success">
                          <a href="index.php" class="dropdown-item">Página de inicio</a>
                      </div>
                      <!-- PIE DE MODAL -->
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                      </div>
                  </div>
              </div>
             </div>

         </a>

         <!-- BOTON MODAL INICIAR SESION-->
         <button type="button "
              class="btn btn-secondary btn-sm ml-5"
              data-toggle="modal"
              data-target="#mimodal"><span class="icon-user-outline"></span>Iniciar sesión
         </button>

         <!-- EL MODAL -->
         <div class="modal fade" id="mimodal" tabindex="-1" aria-hidden="true">  <!-- fade: efecto animación + tabindex: para cerrar con esc -->
         <!-- modal-lg: tamaño (xs, sm....) + centered: centrarlo + modal-dialog-scrollbar: barra desplazaamiento-->
          <div class="modal-dialog modal-sm modal-dialog-centered">
              <div class="modal-content">
                  <!-- CABECERA -->
                  <div class="modal-head" style="margin: 50px;">
                      <button type="button" class="close" data-dismiss="modal" style="float-right">&times;</button>
                      <h4 class="Modal title">Iniciar sesión</h4>
                  </div>
                  <!-- CUERPO -->
                  <div class="modal-body bg-success">
                      <a href="PassIniciar.php" class="dropdown-item">Iniciar ahora</a>
                  </div>
                  <!-- PIE DE MODAL -->
                  <div class="modal-footer">
                      <p>Salir sin iniciar</p>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  </div>
              </div>
          </div>
         </div>

         <!-- BOTON MODAL REGISTRARSE -->
         <button type="button "
              class="btn btn-secondary btn-sm ml-2"
              data-toggle="modal"
              data-target="#mimodal2"><span class="icon-user-outline"></span>
              Registrarse
         </button>

         <!-- EL MODAL -->
         <div class="modal fade" id="mimodal2" tabindex="-1" aria-hidden="true">  <!-- fade: efecto animación + tabindex: para cerrar con esc -->
         <!-- modal-lg: tamaño (xs, sm....) + centered: centrarlo + modal-dialog-scrollbar: barra desplazaamiento-->
          <div class="modal-dialog modal-sm modal-dialog-centered">
              <div class="modal-content">
                  <!-- CABECERA -->
                  <div class="modal-head" style="margin: 50px;">
                      <button type="button" class="close" data-dismiss="modal" style="float-right">&times;</button>
                      <h4 class="Modal title">Nuevo usuario</h4>
                  </div>
                  <!-- CUERPO -->
                  <div class="modal-body bg-success">
                      <a href="PassRegistrar.php" class="dropdown-item">Registrarse ahora</a>
                  </div>
                  <!-- PIE DE MODAL -->
                  <div class="modal-footer">
                      <p>Salir sin registrarse</p>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  </div>
              </div>
          </div>
         </div>


    <!-- (2.-) Boton menu hamburguesa -->
         <button class="navbar-toggler"
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
             <ul class="navbar-nav ml-auto">  <!-- mr- -->  <!-- nav: menú en horizontal navbar-nav: pone el menú en vertical -->
                 <li class="nav-item"><a href="#" class="nav-link" id="sectores">SECTORES</a></li>
                 <li class="nav-item"><a href="#" class="nav-link" id="ropa">ROPA</a></li>
                 <li class="nav-item"><a href="#" class="nav-link" id="caracteristicas">CARACTERISICAS</a></li>
                 <li class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggler" data-toggle="dropdown" id="navbardrop">PERSONALIZAR</a>
                         <div class="dropdown-menu">
                             <a href="#" class="dropdown-item">Laboral</a>
                             <a href="#" class="dropdown-item">Eventos</a>
                             <div class="dropdown-divider"></div>
                             <a href="#" class="dropdown-item">Especiales</a>
                         </div>
                     </li>

                 </ul>
                 <!--  Buscar ........................................................................................................ -->
             <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
             </form>

         </div> <!-- Enlaces -->
     </nav>

    <!-- Imagen + Texto *************************************************************************************************** -->



     <section id="ImgTexto">
         <div class="container" >  <!-- container-fluid -->
             <div class="content-center">
                 <h1>Imagen con texto incluido</h1>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                 <a href="#" class="btn"><span class="icon-user-outline"> Boton</span></a>
             </div>
         </div> <!-- container -->
     </section>


    <!-- ******************************************************************************************************************* -->



    <div class="container" >  <!-- container-fluid -->




    <!-- ******************************************************************************************************************* -->
    <!-- dropdown (Menú desplegable + botones modales) ********************************************************************* -->
             <div class="row">
             <div class="col">
                 <div class="dropdown ">
                     <button type="button" class="btn btn-darky float-right" data-toggle="dropdown">
                         <span class="icon-user-outline bg-danger"></span>
                         Mi cuenta
                     </button>

                     <div class="dropdown-menu "style="margin-left:0px; margin-top: 5px;">
                         <!-- <a href="#" class="dropdown-item">Iniciar sesión</a> -->

                         <!-- BOTON MODAL -->
                         <button type="button"
                              style="margin-left:20px;"
                              class="btn btn-primary"
                              data-toggle="modal"
                              data-target="#mimodal">Iniciar sesión
                         </button>
                         <!-- EL MODAL -->
                         <div class="modal fade" id="mimodal" tabindex="-1">  <!-- fade: efecto animación + tabindex: para cerrar con esc -->
                         <!-- modal-lg: tamaño (xs, sm....) + centered: centrarlo + modal-dialog-scrollbar: barra desplazaamiento-->
                              <div class="modal-dialog modal-sm modal-dialog-centered">
                                  <div class="modal-content">
                                      <!-- CABECERA -->
                                      <div class="modal-head" style="margin: 50px;">
                                          <button type="button" class="close" data-dismiss="modal" style="float-right">&times;</button>
                                          <h4 class="Modal title">Iniciar sesión</h4>
                                      </div>
                                      <!-- CUERPO -->
                                      <div class="modal-body bg-success">
                                          <a href="PassIniciar.php" class="dropdown-item">Iniciar ahora</a>
                                      </div>
                                      <!-- PIE DE MODAL -->
                                      <div class="modal-footer">
                                          <p>Salir sin registrarse</p>
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                      </div>
                                  </div>
                              </div>
                         </div>


                         <div class="dropdown-divider"></div>
                         <!--<a href="#" class="dropdown-item">xxxx</a>-->

                         <!-- BOTON MODAL -->
                         <button type="button"
                              style="margin-left:20px;"
                              class="btn btn-primary"
                              data-toggle="modal"
                              data-target="#mimodal">Registrame
                         </button>
                         <!-- EL MODAL -->
                         <div class="modal fade" id="mimodal" tabindex="-1">  <!-- fade: efecto animación + tabindex: para cerrar con esc -->
                         <!-- modal-lg: tamaño (xs, sm....) + centered: centrarlo + modal-dialog-scrollbar: barra desplazaamiento-->
                              <div class="modal-dialog modal-sm modal-dialog-centered">
                                  <div class="modal-content">
                                      <!-- CABECERA -->
                                      <div class="modal-head" style="margin: 50px;">
                                          <button type="button" class="close" data-dismiss="modal" style="float-right">&times;</button>
                                          <h4 class="Modal title">Nuevo usuario</h4>
                                      </div>
                                      <!-- CUERPO -->
                                      <div class="modal-body bg-success">
                                          <a href="PassRegistrar.php" class="dropdown-item">Registrarse ahora</a>
                                      </div>
                                      <!-- PIE DE MODAL -->
                                      <div class="modal-footer">
                                          <p>Salir sin registrarse</p>
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                      </div>
                                  </div>
                              </div>
                         </div>
                     </div> <!-- dropdown-menu -->

                 </div> <!-- drpdown -->

             </div> <!-- col -->
             </div> <!-- row -->
             <div class="hrdivi"><hr></div>


    <!-- *** Título ***************************************************************************************************** -->

    <div class="row">
        <div class="col bordgreen">
                <h1 class="text-justify clearfix text-center"> EJERCICIO M4 - BOOTSTRAP</h1>
        </div>
    </div>


    <!-- ******************************************************************************************************************* -->
    <!--Maquetar con el sistema de 12 columnas ***************************************************************************** -->

     <p class="text-center text-warning">Ejemplo desplazamiento 12 columnas</p>
     <div class="row mt-1">
         <div class="col-12  col-sm-12  col-md-6  col-lg-2 col-xl-6 text-center bordblack">
             <p>col-12  col-sm-12  col-md-6  col-lg-2 col-xl-2</p></div>
         <div class="col-12  col-sm-12  col-md-6  col-lg-2 col-xl-6 text-center bordblack">
             <p>col-12  col-sm-12  col-md-6  col-lg-2 col-xl-2</p></div>

     </div> <!-- row -->
     <br>


    <!-- ******************************************************************************************************************* -->
    <!-- Slider o Carrusel ************************************************************************************************* -->



                         <p class="text-center text-warning">Slider o Carrusel</p>
                         <div id="demo1" class="carousel slide" data-ride="carousel" style="margin-left:50px;">

                           <!-- Indicators -->
                           <ul class="carousel-indicators">
                             <li data-target="#demo1" data-slide-to="0" class="active"></li>
                             <li data-target="#demo1" data-slide-to="1"></li>
                             <li data-target="#demo1" data-slide-to="2"></li>
                             <li data-target="#demo1" data-slide-to="3"></li>
                           </ul>

                           <!-- IMAGENES -->
                           <div class="carousel-inner">

                                 <div class="carousel-item active">
                                     <img src="img/Rio2.png"  class="img-fluid" alt="Rio" width="1000px" height="450px">
                                     <div class="carousel-caption">
                                       <h3>Rios de Teruel</h3>
                                       <p>El agua muy fria</p>
                                     </div>
                                 </div>

                                 <div class="carousel-item">
                                    <img src="img/Mariquita2.png" class="img-fluid" alt="Fauna" width="1000px" height="450px">
                                    <div class="carousel-caption">
                                      <h3>Mariquita en flor</h3>
                                      <p>Mucha diversidad de fauna</p>
                                    </div>
                                 </div>

                                 <div class="carousel-item">
                                    <img src="img/Montaña2.png" class="img-fluid" alt="Sabinas" width="1000px" height="450px">
                                    <div class="carousel-caption">
                                      <h3>Montañas</h3>
                                      <p>Montañas en alturas altas</p>
                                    </div>
                                 </div>

                                 <div class="carousel-item">
                                    <img src="img/Cascada2.png" class="img-fluid" alt="Cascada" width="1000px" height="450px">
                                    <div class="carousel-caption">
                                      <h3>Cascada</h3>
                                      <p>Para unas vistas relajantes</p>
                                    </div>
                                 </div>
                           </div>




                           <!-- CONTROLES -->
                           <a class="carousel-control-prev" href="#demo1" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
                           <a class="carousel-control-next" href="#demo1" data-slide="next"><span class="carousel-control-next-icon"></span></a>
                         </div>


                 <br><br><br>

    <!-- ******************************************************************************************************************* -->
    <!-- Redefinir las clases de color ************************************************************************************* -->

         <div class="row">
             <div class="col-12 bordgreen"><p class="text-center text-warning">
                 Redefinicion de las clases de colores: Originales</p>
             </div>
         </div>

         <div class="row">

         <div class="col-3 bg-light">
         <p class="text-justify mt-5 mr-5 ml-5 mb-5" style="color:#007bff"> text-primary original #007bff </p></div>

         <div class="col-3 bg-light">
         <p class="text-justify mt-5 mr-5 ml-5 mb-5" style="color:#6c757d"> text-secondary original #6c757d </p></div>

         <div class="col-3 bg-light">
         <p class="text-justify mt-5 mr-5 ml-5 mb-5" style="color:#28a745"> text-success original #28a745 </p></div>

         <div class="col-3 bg-light">
         <p class="text-justify mt-5 mr-5 ml-5 mb-5" style="color:#dc3545"> text-danger original #dc3545 </p></div>

         <div class="col-3 bg-light">
         <p class="text-justify mt-5 mr-5 ml-5 mb-5" style="color:#ffc107"> text-warning original #ffc107 </p></div>

         <div class="col-3 bg-light">
         <p class="text-justify mt-5 mr-5 ml-5 mb-5" style="color:#17a2b8"> text-info original #17a2b8 </p></div>

         <div class="col-3 bg-dark">
         <p class="text-justify mt-5 mr-5 ml-5 mb-5" style="color:#f8f9fa"> text-light original #f8f9fa </p></div>

         <div class="col-3 bg-light">
         <p class="text-justify mt-5 mr-5 ml-5 mb-5" style="color:#343a40"> text-dark original #343a40 </p></div>

         <div class="col-3 bg-light">
         <p class="text-justify mt-5 mr-5 ml-5 mb-5" style="color:#6c757d"> text-muted original #6c757d </p></div>

         <div class="col-3 bg-dark">
         <p class="text-justify mt-5 mr-5 ml-5 mb-5" style="color:#fff"> text-white original #fff </p></div>

             </div> <!-- row -->
             <br><br>

             <div class="row">
                 <div class="col-12 bordgreen"><p class="text-center text-warning">
                     Redefinicion de las clases de colores: Actuales</p>
                 </div>
            </div>


             <div class="row">
             <div class="col-3 bg-dark">  <p class="text-justify mt-5 mr-5 ml-5 mb-5 text-primary">text-primary actual</p></div>
             <div class="col-3 bg-light">  <p class="text-justify mt-5 mr-5 ml-5 mb-5 text-secondary">text-secondary actual</p></div>
             <div class="col-3 bg-light">  <p class="text-justify mt-5 mr-5 ml-5 mb-5 text-success">text-success actual</p></div>
             <div class="col-3 bg-light">  <p class="text-justify mt-5 mr-5 ml-5 mb-5 text-danger">text-danger actual</p></div>
             <div class="col-3 bg-light">  <p class="text-justify mt-5 mr-5 ml-5 mb-5 text-warning">text-warning actual</p></div>
             <div class="col-3 bg-light">  <p class="text-justify mt-5 mr-5 ml-5 mb-5 text-info">text-info actual</p></div>
             <div class="col-3 bg-light">   <p class="text-justify mt-5 mr-5 ml-5 mb-5 text-light">text-light actual</p></div>
             <div class="col-3 bg-dark">  <p class="text-justify mt-5 mr-5 ml-5 mb-5 text-dark">text-dark actual</p></div>
             <div class="col-3 bg-light">  <p class="text-justify mt-5 mr-5 ml-5 mb-5 text-muted">text-muted actual</p></div>
             <div class="col-3 bg-light">   <p class="text-justify mt-5 mr-5 ml-5 mb-5 text-white">text-white actual</p></div>
             </div> <!-- row -->
             <br><br><br>


    </div> <!-- container -->





    <!--..Contenido que está fuera del tema principal. (Un anuncio pe )............................................................. -->
     <aside>
     </aside>
    <!--..Pie de página.............................................................................................................. -->
     <footer>
         <?php
           include('./zBD/PieM42.php');
         ?>
     </footer>





<!--
     <script src="js/jquery-3.5.1.slim.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
-->





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
