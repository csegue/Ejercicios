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
            <div class="col-xl-5 colmod12 shadow" >
            <h3>MODIFICAR DATOS CLIENTE<h3>    
            <table>
                    <td><input size=4px;   placeholder="id"></td>
                    <td><input size=20px;  placeholder="nombre"></td>
                    <td><input size=20px;  placeholder="email"></td>
            </table>
            
            @foreach($cliente as $cliente)
            <table>
            <form action="{{route('clientes.update', $cliente)}}" method="post">            <!-- la ruta para modificar -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>    @csrf
                        <input type="hidden" name="_method" value="PUT"/>       @method('put')
                        <tr>
                            <td><input style="background-color: white" type="text"  size="4px"   name="id"         value="{{$cliente->id}}"></td>
                            <td><input style="background-color: white" type="text"  size="20px"  name="nombre"     value="{{$cliente->nombre}}"></td>
                            <td><input style="background-color: white" type="text"  size="20px"  name="email"      value="{{$cliente->email}}"></td>
                            <td><button type="submit">Editar</button></td>
                        </tr>
            </form>            
            </table>
            @endforeach
                        <!-- <a class="btn btn-primary" href="">Crear</a>  -->
                        <a class="btn btn-outline-primary btn-sm " href="{{route('clientes.listado')}}" role="button">Volver</a>
            </div> 
<!--............................................................................................................... -->
            <div class="col-xl-3 colmod12 shadow" >
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
            <!-- <div class="col-xl-7 colmod12 shadow" ></div>  -->
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
            <div class="col-xl-8 colmod22" >

                <div class="card mt-3" style="width:200px">
                    <div class="card-header bg-muted">
                        <p class="text-center">Cliente</p>
                    </div>
                    <img src="{{ url('img/johndoe.jpg') }}">
                    <div class="card-body bg-secondary">
                        <h3 class="card-title">{{$cliente->nombre}}</h3>
                        <!-- <p class=" card-text"> Descripción persona</p> -->
                        <!-- <a href="#" class="btn btn-primary">Ver Perfil</a> -->
                    </div>
                    <!--
                    <div class="card-footer bg-muted">
                        <p> Pie tarjeta </p>
                    </div>
                    -->
                </div>



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