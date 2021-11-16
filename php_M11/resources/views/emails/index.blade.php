@extends('catalogos.plantilla')
@section('title', 'Contactanos')
@section('content')
                 <h1>Dejame un mensae y contactaremos - Contactos -</h1>

<!-- ******************************************************************************************************************* -->
<!-- MOD 1: -->
<div class="Mod1">
             <div class="row rowmod1">   <!-- d-block: los pone verticales -->
               <div class="col-xl-2 colmod11" >
                   <nav2>
                       <ul>
                           <p>Opciones</p>
                           <hr  style=size:2px color="grey" width="90%" />
                           <div class="boton3"><a href="{{route('catalogos.home')}}" style="color:white">Volver Inicio</a></div>
                       </ul>
                   </nav2>
               </div>
<!--............................................................................................................... -->
        <div class="col-xl-4 colmod15">
        
        <form action="{{route('contactanos.store')}}" method="POST">
            @csrf
            <label>
                    Nombre: <br><input type="text" name="name">
                    <br>
            </label>
                    <br>
                    @error('name')
                        <p><strong>{{$message}}</strong></p>
                    @enderror
            <label>
                    Correo: <br><input type="text" name="correo">
                    <br>
            </label>
                    <br>
                    @error('correo')
                        <p><strong>{{$message}}</strong></p>
                    @enderror
            <label>
                    Mensaje: <br><textarea rows="4" name="mensaje"></textarea>
                    <br>
            </label>
                    <br>
                    @error('mensaje')
                        <p><strong>{{$message}}</strong></p>
                    @enderror
            <button type="submit">Enviar Mensaje</button>

    </form>
            <!-- mensaje de envio del mail en ventana java -->
            @if (session('info'))
                <script>
                    alert("{{session('info')}}");
                </script>
            @endif
            
        <form action="{{route('catalogos.index')}}" method="GET">
            @csrf
            <button type="submit"> Volver</button>
        </form>
<!--............................................................................................................... -->        
      
        </div><!-- row -->
            <div class="col-xl-6 colmod2" >
                    <img class="centrar" src="img/contactar.png" style="width: 728px height= 410px">
            </div>
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


