<?php
 use App\Models\Reserva;
 use App\Models\Pension;
 use App\Models\Cliente;
 use App\Models\Room;

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
    <img class="float-right  ml-1 mt-4 mb-4" repeat="no repeat" src="{{ url('img/reservas.jpg') }}" style="width: 225px height= 126px">

    </div>
<!--............................................................................................................... -->
            <div class="col-xl-8 colmod12 shadow" >
            <h3>ACTUALIZAR RESERVA<h3>    
           
            <!-- .................................................................................... -->
            <?php 
                    $t_pen= Pension::get();
                    $t_pen2= Pension::get();
                    $t_cli= Cliente::get();
                    $t_cli2= Cliente::get();
                    $t_room= Room::get();
                    $t_room2= Room::get();
                    $t_room3= Room::get();
            ?>    
                                   
            <!-- .................................................................................... -->
            
            <table>
                    <td><input size=4px;   placeholder="id"></td>
                    <td><input size=17px;  placeholder="fecha_ent"></td>
                    <td><input size=17px;  placeholder="fecha_sal"></td>
                    <td><input size=9px;   placeholder="estado"></td>
                    <td><input size=5px;   placeholder="pension"></td>
                    <td><input size=5px;   placeholder="cliente"></td>
                    <td><input size=5px;   placeholder="room"></td>
            </table>
  
                    <?php //dd($reserva);?>

                <table>
                <form action="{{route('altas.update', $reserva2)}}" method="post">           
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>    @csrf
                            <input type="hidden" name="_method" value="PUT"/>       @method('put')
                            <tr>
                                <td><input  type="text"  size="4px"   name="id"          value="{{$reserva2->id}}" disabled></td>
                                <td><input style="background-color: white" type="date"  size="17px"  name="fecha_ent"   value="{{$reserva2->fecha_ent}}"></td>
                                <td><input style="background-color: white" type="date"  size="17px"  name="fecha_sal"   value="{{$reserva2->fecha_sal}}"></td>
                                
                                <!-- <td><input  type="text"  size="9px"  name="estado_hab"   value="{{$reserva2->estado_hab}}"></td> -->
                                <!-- <td><input  type="text"  size="5px"  name="pension_id"   value="{{$reserva2->pension_id}}"></td> -->
                                <!-- <td><input  type="text"  size="5px"  name="cliente_id"   value="{{$reserva2->cliente_id}}"></td> -->
                                <td>
                                    <select style="width:85px" name="estado_hab">
                                            <optgroup label= "Opción :">
                                                <option selected="selected">ocupada</option>
                                                <option>libre</option>
                                                <option>check-out</option>
                                            </optgroup>
                                    </select>
                                </td>
                                <!-- <td><input  type="text"  size="5px"  name="pension_id"   value="{{$reserva2->pension_id}}"></td> -->
                                <td>
                                    <select style="width:55px" name="pension_id">
                                            @foreach($t_pen as $t_pen)  
                                            <optgroup label= "{{$t_pen->id}} : {{$t_pen->tipo_pen}}">
                                            @endforeach

                                            @foreach($t_pen2 as $t_pen2)  
                                            <option>{{$t_pen2->id}}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </td>
                                <!-- <td><input  type="text"  size="5px"  name="cliente_id"   value="{{$reserva2->cliente_id}}"></td> -->
                                <td>
                                    <select style="width:55px" name="cliente_id">
                                            @foreach($t_cli as $t_cli)  
                                            <optgroup label= "{{$t_cli->id}} : {{$t_cli->nombre}}">
                                            @endforeach

                                            @foreach($t_cli2 as $t_cli2)  
                                            <option>{{$t_cli2->id}}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </td>
                                <td><input  type="text"  size="5px"  name="room_id" value="{{$reserva2->id}}" disabled></td>
                                <td><button type="submit">Editar</button></td>
                            </tr>
                </form>            
                </table>

                        <!-- <a class="btn btn-primary" href="">Crear</a>  -->
                        <a class="btn btn-outline-primary btn-sm " href="{{route('altas.listadoAlta')}}" role="button">Volver Altas</a>
                        <a class="btn btn-outline-primary btn-sm " href="{{route('altas.listadoCheckout')}}" role="button">Volver Bajas</a>

                              
            </div> 
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
               <div class="col-xl-8 colmod12 shadow" >
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
                                  <strong>{{$rsv->estado_hab}}</strong> <br>
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