@extends('ligas.plantilla')
@section('title', 'Elegir')
@section('content')


    <div class="container-fluid">



<!-- ******************************************************************************************************************* -->
<!-- MOD 1: -->
        <div class="Mod1">
           <div class="row rowmod1">   <!-- d-block: los pone verticales -->

               <div class="col-xl-2 colmod11" >                   
                   <nav2>
                       <ul>
                           <p>Opciones create</p>
                           <hr  style=size:2px color="grey" width="90%" />
                           <div class="boton3"><a href="{{route('ligas.home')}}" style="color:white">Volver Inicio</a></div>
                       </ul>
                       <p style="font-size: 0.8em; color:red;"><strong> @error('federation_id')*{{$message}}<br>@enderror</strong></p>
                       <p style="font-size: 0.8em; color:red;"><strong> @error('jornada')*{{$message}}<br><br>@enderror<strong></p>
                       <p style="font-size: 0.8em; color:red;"><strong> @error('local')*{{$message}}<br><br>@enderror</strong></p>
                       <p style="font-size: 0.8em; color:red;"><strong> @error('visitante')*{{$message}}<br><br>@enderror</strong></p>
                       <p style="font-size: 0.8em; color:red;"><strong> @error('res_local')*{{$message}}<br><br>@enderror</strong></p>
                       <p style="font-size: 0.8em; color:red;"><strong> @error('res_visitante')*{{$message}}<br><br>@enderror</strong></p>    
                
                    </nav2>

               </div>
<!--............................................................................................................... -->
        <div class="col-xl-10 colmod12">
        <h3>EDICION DE JORNADAS Y RESULTADOS - <h3>
        <table>

    <form action="" method="POST" >
        <td><input size=8px; placeholder="Federación"></td>
        <td><input size=8px; placeholder="Jornada"></td>
        <td><input size=4px; placeholder="Local"></td>
        <td><input size=4px; placeholder="Visitante"></td>
    </form>    
    
    <form action="{{route('ligas.store')}}" method="POST">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />       
         <tr>
            <td><input type="text" size="8px" name="federation_id" value="{{old('federation_id')}}"></td>  
            <td><input type="text" size="8px" name="jornada" value="{{old('jonada')}}"></td>  
            <td><input type="text" name="local" value="{{old('local')}}"></td>          
            <td><input type="text" name="visitante" value="{{old('visitante')}}"></td>
            <td><input type="text" size="2px" name="res_local" value="{{old('res_local')}}"></td>          
            <td><input type="text" size="2px" name="res_visitante" value="{{old('res_visitante')}}"></td>
            <td><button type="submit">Enviar</button></td>
         </tr>
    </form>
    </table>
    
        </div><!-- row -->
       </div><!-- col -->
      </div><!--mod1 -->
<!--............................................................................................................... -->

<!-- ******************************************************************************************************************* -->
<!-- MOD 2: -->
         <div class="Mod2">
             <div class="row rowmod2">   <!-- d-block: los pone verticales -->
               <div class="col-xl-11 colmod2" >
                   <br><br><br><br><br>
               <img class="centrar2" repeat="no repeat" src="{{asset('img/campos.jpg')}}" style="width: 1056px height= 540px">
               </div>
<!--............................................................................................................... -->
               <div class="col-xl-1 colmod2" >

               </div>
           </div><!-- row -->
       </div><!--mod1 -->
<!--............................................................................................................... -->
<!-- ******************************************************************************************************************* -->
<!-- MOD 3: -->
         <div class="Mod3">
             <div class="row rowmod3">   <!-- d-block: los pone verticales -->
               <div class="col-xl-3 colmod3" ></div>
<!--............................................................................................................... -->
               <div class="col-xl-9 colmod3" ></div>  <!-- align-self-start -->
           </div><!-- row -->
       </div><!--mod1 -->
<!--............................................................................................................... -->
<!-- ******************************************************************************************************************* -->
<!-- MOD 4: -->
         <div class="Mod4">
             <div class="row rowmod4">   <!-- d-block: los pone verticales -->
               <div class="col-xl-3 colmod4" ></div>
<!--............................................................................................................... -->
               <div class="col-xl-9 colmod4" ></div>  <!-- align-self-start -->
           </div><!-- row -->
       </div><!--mod1 -->
<!--............................................................................................................... -->


<!-- ******************************************************************************************************************* -->
<!-- funciones -->
<!-- ******************************************************************************************************************* -->
<?php


?>

</div><!-- container -->

@endsection


  


