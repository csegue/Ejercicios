@include('catalogos.header')
@yield('content')


<?php
if(!isset($_SESSION)) {
    session_start();
}

/*******************************************************************************************************************/
/*
if(isset($_SESSION['loguin'])){

      echo "sesion Abierta a usuario :"."<br>";
      echo "id_Usuario :".$_SESSION['login']['u_id'];   echo"<br>";
      echo "Nom_Usu :".$_SESSION['login']['u_nom'];  echo"<br>";
      echo "email_Usua :".$_SESSION['login']['u_ema'];  echo"<br>";
      echo "rol_Usuari :".$_SESSION['login']['u_rol'];  echo"<br>";

}else
{
    echo "sesion No Abierta index.php"." - ";
}
*/
/*******************************************************************************************************************/
 ?>

 <!DOCTYPE html>                     <!--  Se pone al principio del programa para saber cual es es la version de HTLM 5 -->
 <html lang="es">                    <!-- idioma -->
     <head>
         <!-- metadatos: Es lo que nuestro navegador detecta de cierta configuración o información de nuestra p.web -->
         <meta charset="utf-8">  <!-- símbolos especiales como la ñ, acentos      -->
         <meta name="author"      content="Carlos Segué">
         <meta name="Descripción" content="Comienzo curso ITAcademy">
         <!-- viewport: que mi ancho va a ser el ancho del dispositivo y que mi escala inicial va a ser la 1 -->
         <!-- La width=device-widthparte establece el ancho de la página para seguir el ancho de la pantalla del dispositivo (que variará  según el dispositivo). -->
         <!-- La initial-scale=1parte establece el nivel de zoom inicial cuando el navegador carga la página por primera vez. -->
         <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no,  maximum-scale=1.0, minimum-scale=1.0">
         <!-- maxima compatibilidad para todos los navegadores -->
         <meta http-equiv="x-ua-compatible" content="ie-edge">
         <link rel="stylesheet" href="fonts/css/fontello.css">  <!-- iconos -->
         <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> <!-- Fuente: Roboto Regular 400 -->
         <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
        
         <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">


    <title>M4_Bootstrap</title>


    </head>

 <body>

<div class="container-fluid">
<!-- ******************************************************************************************************************* -->
<!-- MOD 1: -->
         <div class="Mod1">
             <div class="row rowmod1">   <!-- d-block: los pone verticales -->
               <div class="col-xl-2 colmod11" >
                   <nav2>
                       <ul>
                           <p>Opciones listado empleados</p>
                           <hr  style=size:2px color="grey" width="90%" />
                           <div class="boton3"><a href="{{route('catalogos.home')}}" style="color:white">Volver Inicio</a></div>
                       </ul>
                   </nav2>
               </div>
<!--............................................................................................................... -->
        <div class="col-xl-10 colmod12">
            <!-- ORM ELOQUENT(CRUD) Read Leer registros en la vista pasados por el controlador -->
        <table>
            <tr>
                <th>id</th><th>Nombre</th><th>Sueldo</th><th>id_puesto</th><th>id_ss</th></tr>
        </table>
        
        @foreach($empleados as $empleado)
        <table>        
        <tr>
            <td><input type="text" name="autor" value="{{$empleado->id}}"></td>
            <td><input type="text" name="autor" value="{{$empleado->nombre}}"></td>
            <td><input type="text" name="titulo" value="{{$empleado->sueldo}}"></td>
            <td><input type="text" name="genero" value="{{$empleado->id_puesto}}"></td>
            <td><input type="text" name="genero" value="{{$empleado->id_ss}}"></td>
            <td><a href="{{route('empleados.edit', $empleado)}}">Editar</a></td>
            <td><a href="{{route('empleados.show', $empleado)}}">Eliminar</a></td>
        </tr>
        </table>
        @endforeach

        <form action="{{route('empleados.create')}}"><input type="submit" value="Crear" name="" ></form>
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
