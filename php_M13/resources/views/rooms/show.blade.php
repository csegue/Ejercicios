<?php
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
        <img class="float-right  ml-1 mt-4 mb-4" repeat="no repeat" src="{{ url('img/rooms.jpg') }}" style="width: 225px height= 126px">
    </div>
<!--............................................................................................................... -->
            <div class="col-xl-8 colmod12 shadow" >
            <h3>ELIMINACION DE CLIENTE<h3>
            <table>
                <form action="" name="formulario" method="GET" >
                    <tr>
                        <td><input type="text"   size="4px"  name="id"          value="{{$room->id}}"/></td>
                        <td><input type="text"   size="25px"  name="num_hab"     value="{{$room->num_hab}}"/></td>
                        <td><input type="text"   size="25px"  name="tipo_hab"      value="{{$room->tipo_hab}}"/></td>
                        <td><a href="{{route('rooms.listado')}}">Volver</a></td>
                    
                </form>
                        <td>
                <form action="{{route('rooms.destroy', $room)}}" method="POST">   
                            @csrf
                            @method('delete')   
                            <button type="submit">Eliminar</button>    
                        </td>

                </form>
                    </tr>
            </table>
                <a class="btn btn-outline-primary btn-sm " href="{{route('rooms.listado')}}" role="button">Volver</a>
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
               <div class="col-xl-5 colmod22 shadow" >
                              <!-- .................................................................................... -->
                              <?php 
                        $t_room= Room::get();
                     ?>    
                    <!-- .................................................................................... -->
                    <h6>Lista actual</h6><hr>
                              @foreach($t_room as $t_room)  
                                  <strong>{{$t_room->id}}</strong> 
                                  <strong>{{$t_room->num_hab}}</strong> //
                                  <strong>{{$t_room->tipo_hab}}</strong> <br>
                              @endforeach

               </div>
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
               <div class="col-xl-9 colmod32" ></div> 
<!--............................................................................................................... -->
              <div class="col-xl-9 colmod32" ></div>                
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
               <div class="col-xl-9 colmod42" ></div>  
<!--............................................................................................................... -->
               <div class="col-xl-9 colmod42" ></div>  
<!--............................................................................................................... -->
            </div><!-- row -->
       </div><!--mod1 -->
<!--............................................................................................................... -->


<!-- ******************************************************************************************************************* -->
<!-- funciones -->
<!-- ******************************************************************************************************************* -->

</div><!-- container -->
@endsection