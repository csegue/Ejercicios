<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href ="css/bootstrap.css">

    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>   
</head>
<body>



<!-- ***************************************************************************************************************** -->
<!-- NAVBAR .......................................................................................................... -->
             <!-- 1.- Nombre o logo de la empresa -->
             <!-- 2.- Boton menu hamburguesa -->
             <!-- 3.- enlaces -->

<!-- (1.-) clase navbar + expand horizontal hasta md + color texto + color backgroud + Efecto pegajoso-->
<nav class="navbar navbar-expand-md navbar-light bg-light">  <!-- fixed-top -->

             <a href="#" class="navbar-brad">
                 <img src="img/csglogo3.png"
                     style="width: 60px"
                     data-toggle="modal"
                     data-target="#mymodal">



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
                     <li class="nav-item"><a href="#" class="nav-link" id="sectores">DESPL_01</a></li>
                     <li class="nav-item"><a href="#" class="nav-link" id="ropa">DESPL_02</a></li>
                     <li class="nav-item"><a href="#" class="nav-link" id="caracteristicas">DESPL_03</a></li>
                     <li class="nav-item dropdown">
                         <a href="#" class="nav-link dropdown-toggler" data-toggle="dropdown" id="navbardrop">DESPL_04</a>
                             <div class="dropdown-menu">
                                 <a href="#" class="dropdown-item">SUBDESPL_01</a>
                                 <a href="#" class="dropdown-item">SUBDESPL_02</a>
                                 <div class="dropdown-divider"></div>
                                 <a href="#" class="dropdown-item">SUBDESPL_03</a>
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

         <div class="container-fluid" >  <!-- container-fluid -->




<!-- ********************************************************************************************************************* -->
<!-- MENU-2  DEBAJO NAVBAR
**************************************************************************************************************************  -->
<div class="Cab_02">
    <div class="row">
        <div class="col">
            <h4> PHP_9_NIVEL 2 y NIVEL 3</h4>
        </div>
    </div>
</div>

        <h3>header.blade.php</h3>
        <hr>
        <br>
        <nav>
            <ul>
            <!-- .................................................................................................... --> 
            <!-- class="{{request()-> routeIs('home') ? 'active' : ' '}}"  => Activa en rojo la última casilla apretada -->   
            <!-- .................................................................................................... -->       
            <li>
                <a href="{{route('paises.index')}}" 
                class="{{request()-> routeIs('cursos.*') ? 'active' : ' '}}"
                >Página Inicial</a>
            </li>   
                <!-- @dump(request()->routeIs('cursos.index'))             -->
            
            <!-- .................................................................................................... -->        
            <li>
                <a href="{{route('paises.create')}}" 
                class="{{request()-> routeIs('create') ? 'active' : ' '}}"
                >Crear País</a>
            </li>   
                <!-- @dump(request()->routeIs('nosotros'))             -->
    
            <!-- .................................................................................................... -->  
        
            
            </ul>
        </nav>

    





     <script src="js/jquery-3.5.1.slim.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/bootstrap.min.js"></script>

    
</body>
</html>