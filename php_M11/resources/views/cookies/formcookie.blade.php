@include('catalogos.header')
@yield('content')

        


<div class="container-fluid">
<!-- ******************************************************************************************************************* -->
<!-- MOD 1: -->
         <div class="Mod1">
             <div class="row rowmod1">   <!-- d-block: los pone verticales -->
               <div class="col-xl-2 colmod11" >
                   <nav2>
                       <ul>
                           <p>Opciones</p>
                           <h6> Insertar Datos </h6> 
                           <div class="boton3"><a href="{{route('catalogos.home')}}" style="color:white">Volver Inicio</a></div>
                       </ul>
                   </nav2>
               </div>
<!--............................................................................................................... -->
        <div class="col-xl-5 colmod12">
                
        
                <?php echo "fecha de hoy: "; echo date("d-m-Y"); ?>
                <form action="{{route('cookies.createcookie')}}" method="get">
                <table>        
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />       <!-- csrf_token:   anti-pirateo -->
                        <tr><th>Fecha</th></tr>
                        
                        <tr>
                        <td><input size="4px" type="date" name="fecha" value="{{Cookie::get('xdate')}}"></td>
                                @error('usuario')<small>*{{$message}}</small><br><br>@enderror
 <!--                       
                        <td><input type="text" name="usuario" value="{{Cookie::get('xname')}}"></td>
                                @error('usuario')<small>*{{$message}}</small><br><br>@enderror
                        <td><input type="text" name="password" value="{{Cookie::get('xpassword')}}"></td>
                                @error('password')<small>*{{$message}}</small><br><br>@enderror
-->                  
                        </tr>
                </table>           
                        <br><br>                
                        <button type="submit">Enviar</button>
                             
                </form>
                
        </div><!-- row -->
<!--............................................................................................................... -->
        <div class="col-xl-5 colmod12">
        <br><br>
        <h6>Generamos una comparativa entre dos fechas y creamos la cookie :  fecha1 </h6><br>
        <h6>Ingrese una fecha </h6>
        </div>





        </div><!-- col -->
      </div><!--mod1 -->
<!--............................................................................................................... -->

<!-- ******************************************************************************************************************* -->
<!-- MOD 2: -->
         <div class="Mod2">
             <div class="row rowmod2">   <!-- d-block: los pone verticales -->
               <div class="col-xl-3 colmod2" >
                   <br><br><br><br><br><br>
               </div>
<!--............................................................................................................... -->
               <div class="col-xl-9 colmod2" >

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


<!-- ******************************************************************************************************************* -->
<!-- funciones -->
<!-- ******************************************************************************************************************* -->
<?php


?>

</div><!-- container -->

<!--..Agrupar introducción del contenido....................................................................................... -->
<header>
</header>
 <!--..Agrupar navegación del sitio (Menu principal.............................................................................. -->
<!--..Contenido que está fuera del tema principal. (Un anuncio pe )............................................................. -->
     <aside>
     </aside>
<!--..Pie de página.............................................................................................................. -->
     <footer>
     </footer>

<!--
     <script src="js/jquery-3.5.1.slim.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
-->

<?php
    /*include('./zBD/Pie.php');*/
?>
@include('catalogos.footer')
 </body>
 </html>




<!-- .......................................................................................  -->
