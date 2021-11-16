@extends('reservas.plantilla')
@section('title', 'web oicial futbol')
@section('content')

<div class="container-fluid">
<!-- ******************************************************************************************************************* -->
<!-- MOD 1: -->
<div class="Mod1">
<div class="row rowmod1">   
<!--............................................................................................................... -->
    <div class="col-xl-3 colmod11 shadow" >
        <button class="boton1" style="margin-top:8px"><a href="{{route('reservas.profile', '1')}}"; style="color:white"; >Acceso a Programa</a></button><br>
        <img class="float-right  ml-1 mt-4" repeat="no repeat" src="{{ url('img/reservas.jpg') }}" style="width: 225px height= 126px">
    </div>
<!--............................................................................................................... -->
            <div class="col-xl-9 colmod12 shadow" >
            <h3>SEGUNDO PASO: ASIGNE HABITACION AL CLIENTE Y SERVICIOS  <h3>  
            <table>
                    <td><input size=4px;  placeholder="id"></td>
                    <td><input size=9px;  placeholder="fecha_ent"></td>
                    <td><input size=9px;  placeholder="fecha_sal"></td>
                    <td><input size=9px;  placeholder="estado_hab"></td>
                    <td><input size=9px;  placeholder="pension_id"></td>
                    <td><input size=9px;  placeholder="cliente_id"></td>
                    <td><input size=9px;  placeholder="room_id"></td>
            </table>

            @foreach($reservas as $reserva)
            <table>
                        <tr>
                            <td><input type="text"  size="4px"  name="id"          value="{{$reserva->id}}"></td>
                            <td><input type="text"  size="9px"  name="fecha_ent"   value="{{$reserva->fecha_ent}}"></td>
                            <td><input type="text"  size="9px"  name="fecha_sal"   value="{{$reserva->fecha_sal}}"></td>
                            <td><input type="text"  size="9px"  name="estado_hab"  value="{{$reserva->estado_hab}}"></td>
                            <td><input type="text"  size="9px"  name="pension_id"  value="{{$reserva->pension_id}}"></td>
                            <td><input type="text"  size="9px"  name="cliente_id"  value="{{$reserva->cliente_id}}"></td>
                            <td><input type="text"  size="9px"  name="room_id"     value="{{$reserva->room_id}}"></td>
                            <td><a href="{{route('reservas.editar', $reserva)}}">Reserva</a></td>
                            <td><a href="{{route('reservas.show',$reserva)}}">Eliminar</a></td>
                        </tr>
            </table>
            @endforeach

                        <!-- <a class="btn btn-primary" href="">Crear</a>  -->
                        <a class="btn btn-outline-primary btn-sm " href="{{route('reservas.create')}}" role="button">Crear</a> 
            </div> 
<!--............................................................................................................... -->
            <div class="col-xl-3 colmod12 shadow" >
            </div>
<!--............................................................................................................... -->               
            <!-- <div class="col-xl-7 colmod12 shadow" ></div>  -->
<!--............................................................................................................... -->               
           </div><!-- row -->
       </div><!--mod1 -->

<!-- ******************************************************************************************************************* -->


<!-- MOD 2: -->
         <div class="Mod2">
             <div class="row rowmod2">   <!-- d-block: los pone verticales -->
<!--............................................................................................................... -->               
             <div class="col-xl-11 colmod21" ></div>
<!--............................................................................................................... -->
               <div class="col-xl-1 colmod22" ></div>
<!--............................................................................................................... -->
                <div class="col-xl-1 colmod22" ></div>
<!--............................................................................................................... -->
           </div><!-- row -->
       </div><!--mod1 -->
<!-- ******************************************************************************************************************* -->


<!-- MOD 3: -->
         <div class="Mod3">
             <div class="row rowmod3">   <!-- d-block: los pone verticales -->
<!--............................................................................................................... -->
             <div class="col-xl-3 colmod31" ></div>
<!--............................................................................................................... -->
               <div class="col-xl-9 colmod32" ></div>  <!-- align-self-start -->
<!--............................................................................................................... -->
              <div class="col-xl-9 colmod32" ></div>  <!-- align-self-start -->               
<!--............................................................................................................... -->              
           </div><!-- row -->
       </div><!--mod1 -->
<!-- ******************************************************************************************************************* -->


<!-- MOD 4: -->
         <div class="Mod4">
             <div class="row rowmod4">   <!-- d-block: los pone verticales -->
<!--............................................................................................................... -->
             <div class="col-xl-3 colmod41" ></div>
<!--............................................................................................................... -->
               <div class="col-xl-9 colmod42" ></div>  <!-- align-self-start -->
<!--............................................................................................................... -->
               <div class="col-xl-9 colmod42" ></div>  <!-- align-self-start -->
<!--............................................................................................................... -->
            </div><!-- row -->
       </div><!--mod1 -->
<!--............................................................................................................... -->


<!-- ******************************************************************************************************************* -->
<!-- funciones -->
<!-- ******************************************************************************************************************* -->

</div><!-- container -->
@endsection