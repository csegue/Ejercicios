<?php
if(!isset($_SESSION)) {
    session_start();
}

use App\Models\Cliente;
use App\Models\Reserva;
use App\Models\Room;
use App\Models\Servicio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


/*******************************************************************************************************************/
/*******************************************************************************************************************/
 ?>

 <!DOCTYPE html>                    
 <html lang="es">                    
     <head>
         <meta charset="utf-8">  
         <meta name="author"      content="Carlos Segué">
         <meta name="Descripción" content="Comienzo curso ITAcademy">
         <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no,  maximum-scale=1.0, minimum-scale=1.0">
         <meta http-equiv="x-ua-compatible" content="ie-edge">
         <link rel="stylesheet" href="fonts/css/fontello.css">  <!-- iconos -->
         <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> <!-- Fuente: Roboto Regular 400 -->
         <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
         
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">

         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Staatliches&display=swap" rel="stylesheet">
         
         <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">


         <title></title>

     </head>
 <body>
<!-- ******************************************************************************************************************* -->
 <!-- NAVBAR .......................................................................................................... -->
     <!-- 1.- Nombre o logo de la empresa -->
     <!-- 2.- Boton menu hamburguesa -->
     <!-- 3.- enlaces -->
     <!-- 4.- boton buscar -->

<!-- (1.-) clase navbar + expand horizontal hasta md + color texto + color backgroud + Efecto pegajoso-->     
        <nav class="navbar navbar-expand-lg navbar-danger bg-dark">
        
         <!-- Logo -->
         <!-- <a class="navbar-brand" href="#">Navbar</a> -->   
         <a href="index.php" class="navbar-brand">
         <img src="img/csglogo3.png"
         style="width: 60px"
         data-toggle="modal"
         data-target="#mymodal">
         </a>

         <!-- EL MODAL :  LE PONGO UN MODAL AL ICONO PARA PREGUNTAR-->
         <!-- *********************************************************************************************************** -->

          <div class="modal fade" id="mymodal" tabindex="-1">  <!-- fade: efecto animación + tabindex: para cerrar con esc modal-lg: tamaño (xs, sm....) + centered: centrarlo + modal-dialog-scrollbar: barra desplazaamiento -->
          <div class="modal-dialog modal-sm modal-dialog-centered">
          <div class="modal-content">
          CABECERA
              <div class="modal-head">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="Modal title"></h4>
              </div>
           CUERPO
              <div class="modal-body bg-success">
                  <a href="index.php" class="dropdown-item">Página de inicio</a>
              </div>
           PIE DE MODAL
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
          </div>
          </div>
          </div>

            <!-- BOTON MODAL-->
            <!-- *********************************************************************************************************** -->

            <button type="button "
                 class="btn btn-outline-secondary btn-sm ml-5 float-left"
                 data-toggle="modal"
                 data-target="#mimodal"><span class="icon-user-outline"></span>
         
            </button>
             <!-- EL MODAL  -->
             <div class="modal fade" id="mimodal" tabindex="-1" aria-hidden="true">   
             <div class="modal-dialog modal-sm modal-dialog-centered">
             <div class="modal-content">
                     CABECERA
                     <div class="modal-head"  style="margin: 0px;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                     </div>
                      CUERPO 
                     <div class="modal-body bg-success">
                     </div>
                      PIE DE MODAL
                     <div class="modal-footer">
                        <p></p>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                     </div>
             </div>
             </div>
             </div>

              <!-- BOTON MODAL -->
              <!-- ***********************************************************************************************************  -->
             <button type="button "
                  class="btn btn-outline-secondary btn-outLINE btn-sm ml-2"
                  data-toggle="modal"
                  data-target="#mimodal2"><span class="icon-user-outline"></span>
                  <!-- Registrarse -->
  
             </button>
             <!-- EL MODAL -->
             <div class="modal fade" id="mimodal2" tabindex="-1" aria-hidden="true">   
             <div class="modal-dialog modal-sm modal-dialog-centered">
             <div class="modal-content">
               
                    <!-- CABECERA -->
                    <div class="modal-head" style="margin: 0px;">
                          <button type="button" class="close" data-dismiss="modal" >&times;</button>
                          <h4 class="Modal title">Nuevo usuario</h4>
                    </div>
                    <!-- CUERPO -->
                    <div class="modal-body bg-success">
                          <a href="PassRegistrarse.php" class="dropdown-item">Registrarse ahora</a>   ESTE ES EL BUENO PERO HAY QUE RETOCARLO 
                          <a href="PassRegistrarseSinVerificar.php" class="dropdown-item">Registrarse ahora</a>
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
            <button 
                class="navbar-toggler" 
                type="button" 
                data-toggle="collapse" 
                data-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span>   bg-danger -->
                <span class="line"></span> 
                <span class="line"></span> 
                <span class="line"></span>
            </button>


<!-- (3.-) Enlaces -->

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
        <!-- .............................................................................................................. -->
<?php 
                if (Auth::check()) {
                    $user = Auth::user();
                    //auth()->user();
                    $usu_nom= auth()->user()->name;
                    //$id = Auth::id();
                    $_SESSION['loguin']=array();
                    $_SESSION['loguin']['u_nom']= $usu_nom;
?>                                        
                    <!-- </li>     -->
<?php
                    }else{
                    $_SESSION['loguin']['u_nom']= "";
                }    

                
?>      
                                    
            <!-- <?php echo date("d-m-Y"); ?> -->
        <!-- .............................................................................................................. -->   
        <?php if($_SESSION['login']['u_id']=='1'){  ?>
            <li class="nav-item" actived><a class="nav-link" href="{{route('reservas.profile', '1')}}">MENU PRINCIPAL</a></li>    
            <li class="nav-item"><a class="nav-link" href="{{route('clientes.listado')}}">CLIENTES</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('servicios.listado')}}">SERVICIOS</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('rooms.listado')}}">HABITACIONES</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('pensiones.listado')}}">RESTAURANTE</a></li>
        <?php }else { ?> 
            <li class="nav-item" actived><a class="nav-link" href="{{route('reservas.profile', '1')}}">MENU PRINCIPAL</a></li>    
            <li class="nav-item"><a class="nav-link disabled" href="{{route('clientes.listado')}}">CLIENTES</a></li>
            <li class="nav-item"><a class="nav-link disabled" href="{{route('servicios.listado')}}">SERVICIOS</a></li>
            <li class="nav-item"><a class="nav-link disabled" href="{{route('rooms.listado')}}">HABITACIONES</a></li>
            <li class="nav-item"><a class="nav-link disabled" href="{{route('pensiones.listado')}}">RESTAURANTE</a></li>
        <?php } ?>    
<!--
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
-->            
            <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
            </li>
            


            </ul>
<!-- (4.-) Buscar ........................................................................................................ -->
<!--            
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
-->            
        </div>
        </nav>


<!-- ********************************************************************************************************************* -->
<!-- MENU-2  DEBAJO NAVBAR
**************************************************************************************************************************  -->
    <div class="container-fluid" style="width:auto">
        <div class="Mod modtasca">
        <div class="row rowtasca">
<!--............................................................................................................... -->            
            <div class="col-12">
                <h5 class="centrar"> 
                    TASCA M.10 
                    <div class="float-right" >Bienvenid@ : <?php echo $_SESSION['loguin']['u_nom'];?></div>
                </h5>
            </div>
<!--............................................................................................................... -->            
        </div>
        </div>
       
    </div> <!-- container -->
<!-- ********************************************************************************************************************* -->
     <script src="js/jquery-3.5.1.slim.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/bootstrap.min.js"></script>

 </body>
 </html>
