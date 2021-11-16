@extends('reservas.plantilla')
@section('title', 'Hotel')
@section('content')

<?php
if(!isset($_SESSION)) {
    session_start();
}

 use App\Models\Reserva;
 use App\Models\Pension;
 use App\Models\Cliente;
 use App\Models\Room;
 use App\Models\Servicio;
?>


<div class="container-fluid">
<!-- ******************************************************************************************************************* -->
<!-- MOD 1: -->
         <div class="Mod1">
            <div class="row rowmod1">   <!-- d-block: los pone verticales -->
<!--............................................................................................................... -->  
                <!-- MENU IZQUIERDO VERTICAL -->          
                <div class="col-xl-2 colmod11" >
                    <button class="boton1" style="margin-top:8px"><a href="{{route('reservas.home', '1')}}"; style="color:white"; >Inicio</a></button><br>
                    <a href="{{route('contactanos.index')}}"><img src="{{asset('img/contactar.jpg')}}" style="width: 130px; height: 130px; margin-top: 10px" data-toggle="modal" data-target="#mymodal"></a>
                    <a href="{{route('reservas.iniciar')}}"><img src="{{asset('img/login.jpg')}}" style="width: 130px; height: 130px; margin-top: 10px" data-toggle="modal" data-target="#mymodal"></a>
                    @can('reservas.listado') <a href="{{route('roles.listado')}}"><img src="{{asset('img/roles.jpg')}}" style="width: 130px; height: 130px; margin-top: 10px" data-toggle="modal" data-target="#mymodal"></a> @endcan
                    <!-- <button class="boton1" style="margin-top:8px"><a href=""; style="color:white">Loguin</a></button>  -->
                </div>
<!--............................................................................................................... -->
                <!-- BODY DERECHO -->
                <div class="col-xl-3 my-1 ml-3 pt-3 shadow colmod12"> 
                <h4 >Reservas</h4><hr>
                        <!-- .................................................................................... -->
                           <?php 
                           $rsv= Reserva::get();
                           ?>    
                        <!-- .................................................................................... -->
                    <table>
                          <tr>  
                            <td><input size=1px;   placeholder="id"     ></td>
                            <td><input size=10px;  placeholder="F.Ent" ></td>
                            <td><input size=10px;  placeholder="F_Sal" ></td>
                            <td><input size=8x;    placeholder="Estado" ></td>
                          </tr>  
                    </table>
                    
                        @foreach($rsv as $rsv)
                        <table>
                        <tr>   
                               @if($rsv->estado_hab == 'ocupada')
                                 <td><a href="{{route('reservas.profile', $rsv->id)}}"> <input size=1px;  value="{{$rsv->id}}"        style="background-color:navy; color:white" disabled> </a></td> 
                                 <td><a href="{{route('reservas.profile', $rsv->id)}}"> <input size=10px; value="{{$rsv->fecha_ent}}" style="background-color:navy; color:white" disabled>  </a></td> 
                                 <td><a href="{{route('reservas.profile', $rsv->id)}}"> <input size=10px; value="{{$rsv->fecha_sal}}" style="background-color:navy; color:white" disabled>  </a></td> 
                                 <td><a href="{{route('reservas.profile', $rsv->id)}}"> <input size=8px;  value="{{$rsv->estado_hab}}"style="background-color:navy; color:white" disabled> </a></td>
                               @endif  
                               @if($rsv->estado_hab == 'libre')
                                 <td><a href="{{route('reservas.profile', $rsv->id)}}"> <input size=1px;  value="{{$rsv->id}}"        style="color:green" disabled>         </a></td> 
                                 <td><a href="{{route('reservas.profile', $rsv->id)}}"> <input size=10px; value="{{$rsv->fecha_ent}}" style="color:green" disabled>  </a></td> 
                                 <td><a href="{{route('reservas.profile', $rsv->id)}}"> <input size=10px; value="{{$rsv->fecha_sal}}" style="color:green" disabled>  </a></td> 
                                 <td><a href="{{route('reservas.profile', $rsv->id)}}"> <input size=8px;  value="{{$rsv->estado_hab}}"style="color:green" disabled> </a></td>
                               @endif  
                               </tr>     
                    </table>        

                               @endforeach
                    
                        <br>  
                          <!-- <a class="btn btn-outline-primary btn-sm btn-block" href="" role="button">Añadir/Elimirar Reserva</a> -->
                          
                          <!-- Roles: por SESSION -->
                          <!-- ....................................................................................
                          <?php if($_SESSION['login']['u_id']=='1'){  ?>
                             <a class="btn btn-success btn-sm btn-block" href="{{route('reservas.listado')}}" role="button"> Menu General Reserva</a>
                             <a class="btn btn-success btn-sm btn-block" href="{{route('altas.listadoAlta')}}" role="button"> Alta Reserva</a>
                             <a class="btn btn-success btn-sm btn-block" href="{{route('altas.listadoCheckout')}}" role="button">Baja Reserva</a>
                          <?php }else { ?>
                              <a class="btn btn-danger btn-sm btn-block" href="" role="button">Menu General - Acceso no permitido</a>
                              <a class="btn btn-success btn-sm btn-block" href="" role="button"> Alta Reserva - Acceso no permitido</a>
                              <a class="btn btn-success btn-sm btn-block" href="" role="button">Baja Reserva - Acceso no permitido</a>
                          <?php } ?>
                          -->
                          <!-- Roles: Spatie -->
                          <!-- .................................................................................... -->
                          @can('reservas.listado')  <!-- solo admin -->
                          <a class="btn btn-success btn-sm btn-block" href="{{route('reservas.listado')}}" role="button"> Menu General Reserva</a>
                          <a class="btn btn-success btn-sm btn-block" href="{{route('altas.listadoAlta')}}" role="button"> Alta Reserva</a>      
                          <a class="btn btn-success btn-sm btn-block" href="{{route('altas.listadoCheckout')}}" role="button">Baja Reserva</a>
                          @endcan
                </div>
<!--............................................................................................................... -->
                <!-- LISTADO GENERAL -->
                <div class="col-xl-3 my-1 ml-3 pt-3 shadow colmod12"> 
                <h4 >Estado de la Reserva</h4><hr>            
                    <table>        
                            
                        <tr><td><strong>Cliente id:</strong></td>                <td>{{ $cliente->id}}</td></tr>
                        <tr><td><strong>Cliente nombre:</strong></td>            <td>{{ $cliente->nombre}}</td></tr>
                        <tr><td><strong>Cliente email:</strong></td>             <td>{{ $cliente->email}}</td></tr>
                        <tr><td><strong>Reserva id:</strong></td>                <td>{{ $reserva->id}}</td></tr>
                        <tr><td><strong>Num Cliente:</strong></td>               <td>{{ $reserva->cliente_id}}</td></tr>
                        <tr><td><strong>Pensión id:</strong></td>                <td>{{ $pension->id}}</td></tr>
                        <tr><td><strong>Tipo de Pensión:</strong></td>           <td>{{ $pension->tipo_pen}}</td></tr>
                        <tr><td><strong>Habitación id:</strong></td>             <td>{{ $room->id}}</td></tr>
                        <tr><td><strong>Número habitación:</strong></td>         <td>{{ $room->num_hab}}</td></tr>
                        <tr><td><strong>Tipo Habitación:</strong></td>           <td>{{ $room->tipo_hab}}</td></tr>
                                

                        @foreach($reserva->servicios as $servicio)
                        <!-- <spam class="badge badge-primary">{{$servicio->tipo_serv}}</spam><br> -->
                        <td><strong>Servicios:</strong> {{ $servicio->id}} : {{ $servicio->tipo_serv}}</td></tr>
                        @endforeach
                      
                    </table>    
                </div>
<!--............................................................................................................... -->
                <!-- FALTA ASIGNAR LAS IMAGENES EN LA BASE DE DATOS <img src="{{url('img/hab01.jpg')}}"> ó <img src="{{url('$reservas->image')}}"> -->
                <div class="col-xl-3 my-1 ml-3 pt-3 shadow colmod12 " >
                <h4 >Imagen Habitación</h4> <hr>    

                    <!-- No he conseguido recoger el nombre del archivo de myAdmin y ponerla sin hacer todo esto -->
                    @if($room->num_hab =='10') <img class="float-right  mr-5" repeat="no repeat" src="{{asset('img/hab01.jpg')}}" style="width: 225px height= 126px"> @endif
                    @if($room->num_hab =='20') <img class="float-right  mr-5" repeat="no repeat" src="{{asset('img/hab02.jpg')}}" style="width: 225px height= 126px"> @endif      
                    @if($room->num_hab =='30') <img class="float-right  mr-5" repeat="no repeat" src="{{asset('img/hab03.jpg')}}" style="width: 225px height= 126px"> @endif      
                    @if($room->num_hab =='40') <img class="float-right  mr-5" repeat="no repeat" src="{{asset('img/hab04.jpg')}}" style="width: 225px height= 126px"> @endif      
                    @if($room->num_hab =='50') <img class="float-right  mr-5" repeat="no repeat" src="{{asset('img/hab05.jpg')}}" style="width: 225px height= 126px"> @endif      
                    @if($room->num_hab =='60') <img class="float-right  mr-5" repeat="no repeat" src="{{asset('img/hab06.jpg')}}" style="width: 225px height= 126px"> @endif      
                    @if($room->num_hab =='70') <img class="float-right  mr-5" repeat="no repeat" src="{{asset('img/hab07.jpg')}}" style="width: 225px height= 126px"> @endif      
                    @if($room->num_hab =='80') <img class="float-right  mr-5" repeat="no repeat" src="{{asset('img/hab08.jpg')}}" style="width: 225px height= 126px"> @endif      

                </div>
              
<!--............................................................................................................... -->                
        </div><!-- row -->
    </div><!--mod1 -->
<!-- ******************************************************************************************************************* -->
<!-- MOD 2: -->
        <div class="Mod2">
            <div class="row rowmod1">   <!-- d-block: los pone verticales -->
<!--............................................................................................................... -->            
                <div class="col-xl-2 colmod21" >
                </div>
<!--............................................................................................................... -->
                <div class="col-xl-3 my-1 ml-3 pt-3 shadow colmod12">
                <!-- HAGO UN RESUMEN DE LAS DIFERENTES TABLAS PARA INFORMACION -->    
                <h4 >Tipos de Habitaciones</h4><hr>
                  <!-- .................................................................................... -->
                           <?php 
                           $t_hab= Room::get();
                           ?>    
                        <!-- .................................................................................... -->
                          <div class="links">
                          <table border>
                          <tr>  
                            <td><input size=1px;   placeholder="id"     ></td>
                            <td><input size=10px;  placeholder="Num"    ></td>
                            <td><input size=10px;  placeholder="Tipo"   ></td>
                          </tr>  
                          </table>  
                          

                              @foreach($t_hab as $t_hab)  
                              <table>
                              <tr>
                                  <td><input size=1px;   placeholder="{{$t_hab->id}}"       disabled ></td>
                                  <td><input size=10px;  placeholder="{{$t_hab->num_hab}}"  disabled ></td>
                                  <td><input size=10px;  placeholder="{{$t_hab->tipo_hab}}" disabled ></td>
                              </table>    
                              </tr>  
                              @endforeach
                          </div>  
                          <br>  
                          <!-- <a class="btn btn-outline-primary btn-sm btn-block" href="{{route('rooms.listado')}}" role="button">Editar Habitaciones</a> -->
                          <!-- .................................................................................... -->
                          <?php if($_SESSION['login']['u_id']=='1'){  ?>
                            <a class="btn btn-outline-success btn-sm btn-block" href="{{route('rooms.listado')}}" role="button">Editar Habitaciones</a>
                          <?php }else { ?>
                              <a class="btn btn-danger btn-sm btn-block" href="" role="button">Acceso no permitido</a>
                          <?php } ?>
                </div>
<!--............................................................................................................... -->
                <div class="col-xl-3 my-1 ml-3 pt-3 shadow colmod12">
                <h4 >Clientes Actuales</h4><hr>
                  <!-- .................................................................................... -->
                           <?php 
                           $t_cli= Cliente::get();
                           ?>    
                        <!-- .................................................................................... -->
                          <div class="links">
                          <table border>
                          <tr>  
                            <td><input size=1px;   placeholder="id"     ></td>
                            <td><input size=16px;  placeholder="Nombre"    ></td>
                            <td><input size=16px;  placeholder="Email"   ></td>
                          </tr>  
                          </table>    
                          
                              @foreach($t_cli as $t_cli)  
                              <table>
                              <tr>    
                                  <td><input size=1px;   placeholder="{{$t_cli->id}}"       disabled ></td>
                                  <td><input size=16px;   placeholder="{{$t_cli->nombre}}"   disabled ></td>
                                  <td><input size=16px;   placeholder="{{$t_cli->email}}"    disabled ></td> 
                              </tr>
                              </table>   
                              @endforeach
                          </div>  
                          <br>  
                          <!-- <a class="btn btn-outline-primary btn-sm btn-block" href="{{route('clientes.listado')}}" role="button">Editar Clientes</a> -->
                          <!-- .................................................................................... -->
                          <?php if($_SESSION['login']['u_id']=='1'){  ?>
                            <a class="btn btn-outline-success btn-sm btn-block" href="{{route('clientes.listado')}}" role="button">Editar Clientes</a>
                          <?php }else { ?>
                              <a class="btn btn-danger btn-sm btn-block" href="" role="button">Acceso no permitido</a>
                          <?php } ?>
 
                </div>
<!--............................................................................................................... -->
                <div class="col-xl-3 my-1 ml-3 pt-3 shadow colmod12" >
                <h4 >Tipos de Pensiones</h4><hr>
                    <!-- .................................................................................... -->
                    <?php 
                           $t_pen= Pension::get();
                           ?>    
                        <!-- .................................................................................... -->
                          <div class="links">

                          
                              @foreach($t_pen as $t_pen)  
                                  <strong href="">{{$t_pen->id}}</strong> 
                                  <strong href="">{{$t_pen->tipo_pen}}</strong> <br>
                              @endforeach
                          </div>  
                          <br>  
                          <!-- <a class="btn btn-outline-primary btn-sm btn-block" href="{{route('pensiones.listado')}}" role="button">Editar Pensiones</a> -->
                          <!-- .................................................................................... -->
                          <?php if($_SESSION['login']['u_id']=='1'){  ?>
                            <a class="btn btn-outline-success btn-sm btn-block" href="{{route('pensiones.listado')}}" role="button">Editar Pensiones</a>
                          <?php }else { ?>
                              <a class="btn btn-danger btn-sm btn-block" href="" role="button">Acceso no permitido</a>
                          <?php } ?>
       
               </div>                
                
<!--............................................................................................................... -->                
        </div><!-- row -->
    </div><!--mod1 -->
<!-- ******************************************************************************************************************* -->
<!-- MOD 3: -->
         <div class="Mod3">
             <div class="row rowmod3">   <!-- d-block: los pone verticales -->
               <div class="col-xl-2 colmod3" >
               </div>
<!--............................................................................................................... -->
               <div class="col-xl-3 my-1 ml-3 pt-3 shadow colmod12" >
               <h4 >Servicios</h4><hr>

                    <?php
                        //$di=$cliente->reserva->id; echo "id : ".$di."<br>"; 
                        //$reserva2= Reserva::find($di);
                        $serv= Servicio::get();
                    ?>
               
                    @foreach($serv as $serv)
                        <strong href="">{{$serv->tipo_serv}}</strong> <br>
                    @endforeach     
                    
                    <!-- <a class="btn btn-outline-primary btn-sm btn-block" href="{{route('servicios.listado')}}" role="button">Editar Servicios</a> -->
                    <!-- .................................................................................... -->
                        <?php if($_SESSION['login']['u_id']=='1'){  ?>
                                <a class="btn btn-outline-success btn-sm btn-block" href="{{route('servicios.listado')}}" role="button">Editar Servicios</a>
                        <?php }else { ?>
                              <a class="btn btn-danger btn-sm btn-block" href="" role="button">Acceso no permitido</a>
                        <?php } ?>

               </div>  <!-- align-self-start -->
<!--............................................................................................................... -->               
           </div><!-- row -->
       </div><!--mod3 -->
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
