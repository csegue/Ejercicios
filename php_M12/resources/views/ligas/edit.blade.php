@extends('ligas.plantilla')
@section('title', 'Editar')
@section('content')
    
    <div class="container-fluid">



<!-- ******************************************************************************************************************* -->
<!-- MOD 1: -->
         <div class="Mod1">
             <div class="row rowmod1">   <!-- d-block: los pone verticales -->
               <div class="col-xl-2 colmod11" >
<!--                   
                   <nav2>                       
                       <ul>
                           <p>EDITAR JORNADAS O PARTIDOS</p>
                           <hr  style=size:2px color="grey" width="90%" />
                           <div class="boton3"><a href="{{route('ligas.index')}}" style="color:white">Volver</a></div>
                       </ul>
                   </nav2>
-->    
                </div>
<!--............................................................................................................... -->
        <div class="col-xl-10 colmod12">
        
        <h3>EDITAR JORNADAS O PARTIDOS</h3>



                 <table>
                        <td><input size=8px; placeholder="Federación"></td>
                        <td><input size=8px; placeholder="Jornada"></td>
                        <td><input size=16px; placeholder="Local"></td>
                        <td><input size=16px; placeholder="Visitante"></td>
                 <table>
 
            <form action="{{route('ligas.update',$liga)}}" method="post">            <!-- la ruta para modificar -->

                 <input type="hidden" name="_token" value="{{ csrf_token() }}"/>    
                 @csrf
                 <input type="hidden" name="_method" value="PUT"/>
                 @method('put')
                  <tr> 
                            <td><input type="text" size="8px" name="federation_id"  value=" {{$liga->federation_id}}"></td>
                            <td><input type="text" size="8px" name="jornada" value=" {{$liga->jornada}}"></td>
                            <td><input type="text" size="16px" name="local" value=" {{$liga->local}}"></td>
                            <td><input type="text" size="16px" name="visitante" value=" {{$liga->visitante}}"></td>
                            <td><input type="text" size="4px" name="res_local"  value=" {{$liga->res_local}}"></td>
                            <td><input type="text" size="4px" name="res_visitante" value=" {{$liga->res_visitante}}"></td>
                            <td><button type="submit">Editar</button></td>
                  </tr>
            </form>
        </table>

                <form action="{{route('ligas.index', $liga)}}" method="GET">
                            @csrf
                            <button type="submit"> Volver</button>
                </form>
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
               <img class="centrar2" repeat="no repeat" src="{{asset('img/Libros.png')}}" style="width: 1056px height= 540px">;
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
    </div>  <!-- container -->
 

    @endsection

<!-- ............................................................................................... -->
    