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

<!-- .................................................................................... -->
<?php 
                    $t_pen= Pension::get();
                    $t_pen2= Pension::get();
                    $t_cli= Cliente::get();
                    $t_cli2= Cliente::get();
            ?>    
                                   
<!-- .................................................................................... -->

<!--............................................................................................................... -->
            <div class="col-xl-8 colmod12 shadow" >
            <h3>LIBERAR HABITACION?<h3>    
           
            
            
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
                <form action="{{route('altas.updateBaja', $reserva)}}" method="post">           
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>    @csrf
                            <input type="hidden" name="_method" value="PUT"/>       @method('put')
                            <tr>
                                <td><input  type="text"  size="4px"   name="id"          value="{{$reserva->id}}"></td>
                                <td><input  type="date"  size="17px"  name="fecha_ent"   value="{{$reserva->fecha_ent}}"></td>
                                <td><input  type="date"  size="17px"  name="fecha_sal"   value="{{$reserva->fecha_sal}}"></td>
                                <td><input  type="text"  size="9px"   name="estado_hab"   value="libre"></td> 
                                <td><input  type="text"  size="5px"   name="pension_id"   value="{{$reserva->pension_id}}"></td> 
                                <td><input  type="text"  size="5px"  name="cliente_id"   value="{{$reserva->cliente_id}}"></td> 
                                <td><input  type="text"  size="5px"  name="room_id" value="{{$reserva->room_id}}" disabled></td>
                                <td><button type="submit">Liberar</button></td>
                            </tr>
                </form>            
                </table>

                        <!-- <a class="btn btn-primary" href="">Crear</a>  -->
                        <a class="btn btn-outline-primary btn-sm " href="{{route('altas.listadoLiberar')}}" role="button">Volver Altas</a>
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