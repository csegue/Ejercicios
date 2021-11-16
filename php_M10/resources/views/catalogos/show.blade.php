@include('catalogos.header')

             
        <div class="container-fluid">



<!-- ******************************************************************************************************************* -->
<!-- MOD 1: -->
         <div class="Mod1">
             <div class="row rowmod1">   <!-- d-block: los pone verticales -->
               <div class="col-xl-2 colmod11" >
                   <nav2>
                       <ul>
                           <p>Opciones show</p>
                           <hr  style=size:2px color="grey" width="90%" />
                           <div class="boton3"><a href="{{route('catalogos.home')}}" style="color:white">Volver Inicio</a></div>
                       </ul>
                   </nav2>
               </div>
<!--............................................................................................................... -->
        <div class="col-xl-10 colmod12">
        <h3>ARTICULO SELECCIONADO - SHOW - <h3>
        <table>
        

            <form action="" name="formulario" method="GET" >
              <tr>
                <td><input type="text"   size="4px"  name="id"          value="{{$catalogo->id}}"/></td>
                <td><input type="text"   size="25px"  name="autor"      value="{{$catalogo->autor}}"/></td>
                <td><input type="text"   size="25px"  name="titulo"     value="{{$catalogo->titulo}}"/></td>
                <td><input type="text"   size="25px"  name="genero"     value="{{$catalogo->genero}}"/></td>
                
                <td><a href="{{route('catalogos.index', $catalogo)}}">Volver</a></td>
             
                </form>
                <td><form action="{{route('catalogos.destroy', $catalogo)}}" method="POST">
                    @csrf
                    @method('delete')   
                    <button type="submit">Eliminar</button>    
                </form>
                </td>
            </tr>
    </table>
    

    <!-- ............................................................................................................. 
    <form action="{{route('catalogos.index', $catalogo)}}" method="GET">
                @csrf
                <button type="submit"> Volver</button>
    </form>
    -->
    <!-- ............................................................................................................. 
    <form action="{{route('catalogos.destroy', $catalogo)}}" method="POST">
                @csrf
                @method('delete')   
                <button type="submit">Eliminar</button>    
    </form>
    -->
    <!-- ............................................................................................................. -->

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
    
</div> <!-- container -->

    





@include('catalogos.footer')

