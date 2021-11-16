@extends('catalogos.plantilla')
@section('title', 'Editar')
@section('content')
    
    <div class="container-fluid">



<!-- ******************************************************************************************************************* -->
<!-- MOD 1: -->
         <div class="Mod1">
             <div class="row rowmod1">   <!-- d-block: los pone verticales -->
               <div class="col-xl-2 colmod11" >
                   <nav2>
                       <ul>
                           <p>Opciones Edit</p>
                           <hr  style=size:2px color="grey" width="90%" />
                           <div class="boton3"><a href="{{route('catalogos.home')}}" style="color:white">Volver Inicio</a></div>
                       </ul>
                   </nav2>
               </div>
<!--............................................................................................................... -->
        <div class="col-xl-10 colmod12">
        
        <h3>LISTADO ARTICULOS - EDIT-</h3>
        <table>
    <tr><th>AUTOR</th><th>TITULO</th><th>GENERO</th></tr>
 
                <form action="{{route('catalogos.update',$catalogo)}}" method="post">            <!-- la ruta para modificar -->

                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>    
                        @csrf
                        <input type="hidden" name="_method" value="PUT"/>
                        @method('put')
                        <tr> 
                            <td><input type="text" name="autor"  value=" {{$catalogo->autor}}"></td>
                            <td><input type="text" name="titulo" value=" {{$catalogo->titulo}}"></td>
                            <td><input type="text" name="genero" value=" {{$catalogo->genero}}"></td>
                            <td><button type="submit">Editar</button></td>
                        </tr>
                </form>
                </table>

                <form action="{{route('catalogos.index', $catalogo)}}" method="GET">
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
    