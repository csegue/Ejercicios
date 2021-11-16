@extends('catalogos.plantilla')
@section('title', 'Home Catalogos')
@section('content')

<div class="container-fluid">
<!-- ******************************************************************************************************************* -->
<!-- MOD 1: -->
         <div class="Mod1">
             <div class="row rowmod1">   <!-- d-block: los pone verticales -->
               <div class="col-xl-2 colmod11" >
                    <button class="boton1"><p href=""; style="color:white">Programa</p></button> 
                    <div class="boton2"><a href="{{route('catalogos.index')}}" style="color:black">Listado de Libros</a></div> 
                    <div class="boton2"><a href="{{route('catalogos.create')}}"style="color:black">Crear nuevo Libro</a></div> 
                    <div class="boton2"><a href="{{route('contactanos.index')}}"   style="color:black">Contactar</a></div> 
                    <div class="boton2"><a href="{{route('mantenimientos.index')}}"   style="color:black">Mantenimiento ?</a></div> 
                    <div class="boton2"><a href="error404.php"   style="color:black">ERROR 404</a></div> 
                    <div class="boton2"><a href="{{route('edad')}}"   style="color:black">Edad</a></div> 
                    <div class="boton2"><a href="{{route('cookies.formcookie')}}"  style="color:black">Cookies 1</a></div> 
                    <div class="boton2"><a href="{{route('cookies.crearcookie')}}" style="color:black">Cookies 2</a></div> 
                    <br><br>
                    
                    <button class="boton1"><p href=""; style="color:white">Empleados</p></button>
                    <div class="boton2"><a href="{{route('empleados.index')}}"style="color:black">Listado de empleados</a></div> 
                    <div class="boton2"><a href="{{route('empleados.create')}}"style="color:black">Crear nuevo empleado</a></div> 
                    <div class="boton2"><a href="{{route('empleados.recogerpuesto')}}"style="color:black">Buscar por puesto</a></div> 
                    <br>

                    <button class="boton1"><p href=""; style="color:white">Loguin</p></button> 
                    <div class="boton2"><a href="{{route('catalogos.iniciar')}}"           style="color:black">Loguin</a></div> 
                </div>
<!--............................................................................................................... -->
          <div class="col-xl-10 colmod12">
                    <div class="ContainerImg">
                        <img repeat="no repeat" src="img/FondoPantall7.jpg" style="width: 1056px height= 540px">;
                        <div class="textoImg">Software de gestion librerías</div>
                        <div class="CentrarImg"><a href="" style="color:white">Ir a Programa</a></div>  
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
