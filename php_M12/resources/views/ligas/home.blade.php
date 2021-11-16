@extends('ligas.plantilla')
@section('title', 'web oicial futbol')
@section('content')

<div class="container-fluid">
<!-- ******************************************************************************************************************* -->
<!-- MOD 1: -->
         <div class="Mod1">
             <div class="row rowmod1">   <!-- d-block: los pone verticales -->
                <div class="col-xl-2 colmod11" >
                    <button class="boton1" style="margin-top:8px"><a href=""; style="color:white"; ></a></button><br>
                    <button class="boton1" style="margin-top:8px"><a href="{{route('ligas.index')}}"; style="color:white">Calendario</a></button><br>
                    <button class="boton1" style="margin-top:8px"><a href="{{route('ligas.create')}}"; style="color:white">Crear Calendario</a></button> 
                    <button class="boton1" style="margin-top:8px"><a href="{{route('contactanos.index')}}"; style="color:white">Contactar</a></button> 
                    <button class="boton1" style="margin-top:8px"><a href="{{route('usuarios.index')}}"; style="color:white">Blogs: Roles y Permisos</a></button> 
                    <button class="boton1" style="margin-top:8px"><a href="{{route('ligas.iniciar')}}"; style="color:white">Loguin</a></button> 
                </div>
<!--............................................................................................................... -->
                <div class="col-xl-4 my-1 ml-3 pt-3 shadow colmod12">
                          <h4 >Acceso a las Federaciones</h4>
                          <hr>
                          <img class="float-right  mr-2" repeat="no repeat" src="{{asset('img/campos2.jpg')}}" style="width: 225px height= 126px">  

                    <div class="links">
                          @foreach($federations as $federation)
                             <strong><a href="{{route('profile', $federation->id)}}">{{$federation->nivel}}</a></strong> <br>
                          @endforeach
                    </div>                
                </div>
<!--............................................................................................................... -->
                <div class="col-xl-4 my-1 ml-3 pt-3 shadow colmod12">
                          <h4 >Acceso a las ligas</h4>
                          <hr>
                          <img class="float-right  mr-2" repeat="no repeat" src="{{asset('img/ligas.jpg')}}" style="width: 225px height= 126px">  

                    <div class="links">
                         <a class="badge badge-danger" href="{{route('ligas.index')}}">IR A CALENDARIO</a> <br>
                    </div>                
                </div>



                </div>
             </div><!-- row -->
         </div><!--mod1 -->
<!--............................................................................................................... -->

<!-- ******************************************************************************************************************* -->
<!-- MOD 2: -->
         <div class="Mod2">
             <div class="row rowmod2">   <!-- d-block: los pone verticales -->
               <div class="col-xl-3 colmod2" ></div>
<!--............................................................................................................... -->
               <div class="col-xl-9 colmod2" >
                    <h6 style="margin-top: 50px"> - Accesos restringidos para administradores en la sección BLOGS. Todas contraseñas 11111111</H6>
                    <h6 > - Incluimos: Laravel Breeze, Laravel Permission, Laravel Collective</H6>
                    <h6 > - Tablas: Eloquent Relaciones, incluido Diagrama entidad relación en Dashboard</H6>
                    <h6 > - Migraciones, Seeders, Validaciones, Asignaciones masivas, Error404, Correo contacto y password</H6>


               </div>
           </div><!-- row -->
       </div><!--mod2 -->
<!--............................................................................................................... -->
<!-- ******************************************************************************************************************* -->
<!-- MOD 3: -->
         <div class="Mod3">
             <div class="row rowmod3">   <!-- d-block: los pone verticales -->
               <div class="col-xl-3 colmod3" ></div>
<!--............................................................................................................... -->
               <div class="col-xl-9 colmod3" ></div>  <!-- align-self-start -->
           </div><!-- row -->
       </div><!--mod3 -->
<!--............................................................................................................... -->
<!-- ******************************************************************************************************************* -->
<!-- MOD 4: -->
         <div class="Mod4">
             <div class="row rowmod4">   <!-- d-block: los pone verticales -->
               <div class="col-xl-3 colmod4" ></div>
<!--............................................................................................................... -->
               <div class="col-xl-9 colmod4" ></div>  <!-- align-self-start -->
           </div><!-- row -->
       </div><!--mod4 -->
<!--............................................................................................................... -->


<!-- ******************************************************************************************************************* -->
<!-- funciones -->
<!-- ******************************************************************************************************************* -->
<?php


?>

</div><!-- container -->


@endsection
