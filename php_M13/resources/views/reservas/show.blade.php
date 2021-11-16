<?php
 use App\Models\Reserva;
?>


@extends('reservas.plantilla')
@section('title', 'Hotel')
@section('content')

<div class="container-fluid">
<!-- ******************************************************************************************************************* -->
<!-- MOD 1: -->
<div class="Mod1">
<div class="row rowmod1">   
<!--............................................................................................................... -->
    <div class="col-xl-3 colmod11 shadow" >
    <button class="boton1" style="margin-top:8px"><a href="{{route('reservas.profile', '1')}}"; style="color:white"; >Acceso a Programa</a></button><br>
        <img class="float-right  ml-1 mt-4 mb-4" repeat="no repeat" src="{{ url('img/reservas.jpg') }}" style="width: 225px height= 126px">
    </div>
<!--............................................................................................................... -->
        <div class="col-xl-8 colmod12 shadow" >
            <h3>ELIMINACION DE RESERVA<h3>


            <table>
                    <td><input size=4px;   placeholder="id"></td>
                    <td><input size=17px;  placeholder="fecha_ent"></td>
                    <td><input size=17px;  placeholder="fecha_sal"></td>
                    <td><input size=9px;   placeholder="estado"></td>
                    <td><input size=5px;   placeholder="pension"></td>
                    <td><input size=5px;   placeholder="cliente"></td>
                    <td><input size=5px;   placeholder="room"></td>
            </table>
            <table>
                <form action="" name="formulario" method="GET" >
                    <tr>
                            <td><input  disabled type="text"  size="4px"   name="id"         value="{{$reserva->id}}"></td>
                            <td><input  disabled type="text"  size="17px"  name="fecha_ent"  value="{{$reserva->fecha_ent}}"></td>
                            <td><input  disabled type="text"  size="17px"  name="fecha_sal"  value="{{$reserva->fecha_sal}}"></td>
                            <td><input  disabled type="text"  size="9px"  name="estado_hab" value="{{$reserva->estado_hab}}"></td>
                            <td><input  disabled type="text"  size="5px"  name="pension_id" value="{{$reserva->estado_hab}}"></td>
                            <td><input  disabled type="text"  size="5px"  name="cliente_id" value="{{$reserva->estado_hab}}"></td>
                            <td><input  disabled type="text"  size="5px"  name="room_id"    value="{{$reserva->estado_hab}}"></td>
                            <td><a href="{{route('reservas.listado')}}">Volver</a></td>
                       </form>
                        <td>
                            <form action="{{route('reservas.destroy', $reserva)}}" method="POST">
                            @csrf
                            @method('delete')   
                            <button type="submit">Eliminar</button>    
                        </td>
                        </form>
                    </tr>
            </table>
                <a class="btn btn-outline-primary btn-sm " href="{{route('reservas.listado')}}" role="button">Volver</a>
        </div> 
            
<!--............................................................................................................... -->
            <div class="col-xl-3 colmod12 shadow" > </div> 

<!--............................................................................................................... -->               
           </div><!-- row -->
       </div><!--mod1 -->

<!-- ******************************************************************************************************************* -->


<!-- MOD 2: -->
         <div class="Mod2">
             <div class="row rowmod2">   <!-- d-block: los pone verticales -->
<!--............................................................................................................... -->               
             <div class="col-xl-3 colmod21" ></div>
<!--............................................................................................................... -->
             <div class="col-xl-5 colmod22" >
                            <!-- .................................................................................... -->
                            <?php 
                        $rsv= Reserva::get();
                     ?>    
                    <!-- .................................................................................... -->
                    <h6>Lista actual</h6><hr>
                              @foreach($rsv as $rsv)  
                                  <strong>{{$rsv->id}}</strong> 
                                  <strong>{{$rsv->fecha_ent}}</strong> //
                                  <strong>{{$rsv->fecha_sal}}</strong> //
                                  <strong>{{$rsv->estado_hab}}</strong> <br> //
                                  <strong>{{$rsv->pension_id}}</strong> //
                                  <strong>{{$rsv->cliente_id}}</strong> //
                                  <strong>{{$rsv->room_id}}</strong> //
                              @endforeach

               </div>
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