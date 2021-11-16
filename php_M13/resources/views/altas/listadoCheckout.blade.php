
<?php
 use App\Models\Cliente;
 use App\Models\Room;
 use App\Models\Reserva;

use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

?>


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
        <img class="float-right  mr-4 mt-4 mb-4" repeat="no repeat" src="{{ url('img/exit.jpg') }}" style="width: 225px height= 126px">
    </div>
<!--............................................................................................................... -->
            <div class="col-xl-8 colmod12 shadow" >
            <h4>1.- CHECK-OUT: SALIDA Y FACTURACION <h4> 
            <h6>Seleccione habitación para check-out <h6>     
            <table>
                    <td><input size=4px;  placeholder="id"></td>
                    <td><input size=9px;  placeholder="fecha_ent"></td>
                    <td><input size=9px;  placeholder="fecha_sal"></td>
                    <td><input size=9px;  placeholder="estado_hab"></td>
                    <td><input size=9px;  placeholder="pension_id"></td>
                    <td><input size=9px;  placeholder="cliente_id"></td>
                    <td><input size=9px;  placeholder="room_id"></td>
            </table>
                        <!-- .................................................................................... -->
                           <?php 
                           $reserva= Reserva::get();
                           $reserva2= Reserva::get();
                           $reserva3= Reserva::get();
                           ?>    
            <!-- ................................................................................................ -->
            <h6>Habitaciones ocupadas<h6> 
            @foreach($reserva as $reserva)  
                @if($reserva->estado_hab == 'ocupada')
                <table>
                <tr>    
                    <td><input type="text"  size="4px"  name="id"          value="{{$reserva->id}}" disabled></td>
                    <td><input type="text"  size="9px"  name="fecha_ent"   value="{{$reserva->fecha_ent}}"disabled></td>
                    <td><input type="text"  size="9px"  name="fecha_sal"   value="{{$reserva->fecha_sal}}"disabled></td>
                    <td><input type="text"  size="9px"  name="estado_hab"  value="{{$reserva->estado_hab}}"disabled></td>
                    <td><input type="text"  size="9px"  name="pension_id"  value="{{$reserva->pension_id}}"disabled></td>
                    <td><input type="text"  size="9px"  name="cliente_id"  value="{{$reserva->cliente_id}}"disabled></td>
                    <td><input type="text"  size="9px"  name="room_id"     value="{{$reserva->room_id}}"disabled></td>
                    <td><a href="{{route('altas.createCheckout', $reserva)}}">Check-out</a></td>
                </tr>
                </table>    
                @endif
            @endforeach       

            <h6>Habitaciones disponibles<h6> 
            @foreach($reserva2 as $reserva2)  
                @if($reserva2->estado_hab == 'libre')
                <table>
                <tr>    
                    <td><input type="text"  size="4px"  name="id"          value="{{$reserva2->id}}" disabled></td>
                    <td><input type="text"  size="9px"  name="fecha_ent"   value="{{$reserva2->fecha_ent}}"disabled></td>
                    <td><input type="text"  size="9px"  name="fecha_sal"   value="{{$reserva2->fecha_sal}}"disabled></td>
                    <td><input type="text"  size="9px"  name="estado_hab"  value="{{$reserva2->estado_hab}}"disabled></td>
                    <td><input type="text"  size="9px"  name="pension_id"  value="{{$reserva2->pension_id}}"disabled></td>
                    <td><input type="text"  size="9px"  name="cliente_id"  value="{{$reserva2->cliente_id}}"disabled></td>
                    <td><input type="text"  size="9px"  name="room_id"     value="{{$reserva2->room_id}}"disabled></td>
                </tr>
                </table>    
                @endif
            @endforeach       

            <h6>Historial de clientes y habitaciones<h6> 
            @foreach($reserva3 as $reserva3)  
                @if($reserva3->estado_hab == 'check-out')
                <table>
                <tr>    
                    <td><input type="text"  size="4px"  name="id"          value="{{$reserva3->id}}" disabled></td>
                    <td><input type="text"  size="9px"  name="fecha_ent"   value="{{$reserva3->fecha_ent}}"disabled></td>
                    <td><input type="text"  size="9px"  name="fecha_sal"   value="{{$reserva3->fecha_sal}}"disabled></td>
                    <td><input type="text"  size="9px"  name="estado_hab"  value="{{$reserva3->estado_hab}}"disabled></td>
                    <td><input type="text"  size="9px"  name="pension_id"  value="{{$reserva3->pension_id}}"disabled></td>
                    <td><input type="text"  size="9px"  name="cliente_id"  value="{{$reserva3->cliente_id}}"disabled></td>
                    <td><input type="text"  size="9px"  name="room_id"     value="{{$reserva3->room_id}}"disabled></td>
                </tr>
                </table>    
                @endif
            @endforeach       
   
            <!-- ........................................................................................................... -->

                <!-- <a class="btn btn-primary" href="">Crear</a>  -->
                <!-- <a class="btn btn-outline-primary btn-sm " href="{{route('reservas.create')}}" role="button">Crear</a>  -->
            </div> 
<!--............................................................................................................... -->
        <div class="col-xl-3 colmod12 " >
        </div>            
<!--............................................................................................................... -->
           </div><!-- row -->
       </div><!--mod1 -->

<!-- ******************************************************************************************************************* -->


<!-- MOD 3: -->
    <div class="Mod1">
        <div class="row rowmod1">   
<!--............................................................................................................... -->
             <div class="col-xl-3 colmod11 shadow" >
             </div>
<!--............................................................................................................... -->
               <div class="col-xl-8 colmod32 shadow" >
    
               </div>  <!-- align-self-start -->
<!--............................................................................................................... -->
              <div class="col-xl-9 colmod32" ></div>                
<!--............................................................................................................... -->              
           </div><!-- row -->
       </div><!--mod1 -->
<!-- ******************************************************************************************************************* -->




<!-- MOD 2: -->
         <div class="Mod2">
             <div class="row rowmod2">   
<!--............................................................................................................... -->               
             <div class="col-xl-3 colmod21" ></div>
<!--............................................................................................................... -->
               <div class="col-xl-8 colmod22" >
               </div>
<!--............................................................................................................... -->
            <div class="col-xl-1 colmod22" ></div> 
<!--............................................................................................................... -->
            <div class="col-xl-3 colmod12 shadow" ></div>
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