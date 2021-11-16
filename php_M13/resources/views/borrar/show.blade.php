<?php
 use App\Models\Cliente;
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
        <img class="float-right  ml-1 mt-4 mb-4" repeat="no repeat" src="{{ url('img/clientes.jpg') }}" style="width: 225px height= 126px">
    </div>
<!--............................................................................................................... -->
            <div class="col-xl-8 colmod12 shadow" >
            <h3>ELIMINACION DE CLIENTE<h3>
            <table>
                <form action="" name="formulario" method="GET" >
                    <tr>
                        <td><input type="text"   size="4px"  name="id"          value="{{$cliente->id}}"/></td>
                        <td><input type="text"   size="25px"  name="nombre"     value="{{$cliente->nombre}}"/></td>
                        <td><input type="text"   size="25px"  name="email"      value="{{$cliente->email}}"/></td>
                        <td><a href="{{route('clientes.listado')}}">Volver</a></td>
                    
                </form>
                        <td>
                <form action="{{route('clientes.destroy', $cliente)}}" method="POST">   
                            @csrf
                            @method('delete')   
                            <button type="submit">Eliminar</button>    
                        </td>

                </form>
                    </tr>
            </table>
                <a class="btn btn-outline-primary btn-sm " href="{{route('clientes.listado')}}" role="button">Volver</a>
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
                        $cli= Cliente::get();
                     ?>    
                    <!-- .................................................................................... -->
                    <h6>Lista actual</h6><hr>
                              @foreach($cli as $cli)  
                                  <strong>{{$cli->id}}</strong> 
                                  <strong>{{$cli->nombre}}</strong> //
                                  <strong>{{$cli->email}}</strong> <br>
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