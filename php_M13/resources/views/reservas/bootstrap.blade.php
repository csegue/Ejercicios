@extends('reservas.plantilla')
@section('title', 'web oicial futbol')
@section('content')

<?php
if(!isset($_SESSION)) {
    session_start();
}
/*******************************************************************************************************************/
use Illuminate\Support\Facades\Auth;
use App\Models\Reserva;
use Illuminate\Http\Request;
/*******************************************************************************************************************/
 ?>
 <!DOCTYPE html>                    
 <html lang="es">                   
     <head>
         <meta charset="utf-8">  
         <meta name="author"      content="Carlos Segué">
         <meta name="Descripción" content="Comienzo curso ITAcademy">
         <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no,  maximum-scale=1.0, minimum-scale=1.0">
         <meta http-equiv="x-ua-compatible" content="ie-edge">
         <link rel="stylesheet" href="fonts/css/fontello.css"> 
         <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
         <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
         
         <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
         <title></title>
     </head>
 <body>

 <div class="container-fluid">
<!-- ******************************************************************************************************************* -->
<!-- MOD 1: -->
    <div class="Mod1">
      <div class="row rowmod1" style="height:150px;">   
<!--............................................................................................................... -->
        <div class="col-xl-1 colmod11 fixed-top bg-secondary" >
            <img src="{{asset('img/csglogo3.png')}}" class="img-fluid float-right mr-2 rounded">
            <p>
          
            </p>
        </div>
<!--............................................................................................................... -->
        <div class="col-xl-9 colmod11 fixed-top bg-secondary" >
        
        </div>
<!--............................................................................................................... -->
<!--............................................................................................................... -->    
       </div><!-- row -->
    </div><!--mod1 -->

<!-- ******************************************************************************************************************* -->

<!-- MOD 2: -->
         <div class="Mod2">
             <div class="row rowmod2">   <!-- d-block: los pone verticales -->
<!--............................................................................................................... -->               
             <div class="col-xl-10 colmod21" >
               <center><img src="{{asset('img/fondo.jpg')}}" class="img-fluid mr-2 rounded"></center> 
                
             </div>
<!--............................................................................................................... -->
            <div class="col-xl-2 colmod22" >
            <p>Ejemplo de <span class="badge badge-pill badge-primary ">insignia</span> </p>
            <p class="badge badge-pill badge-primary ">insignia</p>
            <button type="button" class="btn btn-primary"> Mensaje <span class="badge badge-light">4</span> </button>
            <div class="progress" style="height: 35px;">
            <div class="progress-bar w-75 bg-success ">75%</div>


            </div>
<!--............................................................................................................... -->
<!--............................................................................................................... -->
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
               <div class="col-xl-9 colmod32" >
               <h3>HABILITAR O DESHABILITAR RESERVAS DISPONIBLES:  <h3>  
             <!-- .................................................................................... -->
             <?php 
                           $reservas= Reserva::get();
                           ?>    
            <!-- .................................................................................... -->
            <table class="table  table-responsive-col">
                <tr class="">
                    <td>id</td>
                    <td>fecha_ent</td>
                    <td>fecha_sal</td>
                    <td>estado_hab</td>
                    <td>pension_id</td>
                    <td>cliente_id</td>
                    <td>room_id</td>
                </tr>    
                <tr class="" >
                       <td>10</td>
                       <td>20</td>
                       <td>30</td>
                       <td>40</td>
                       <td>50</td>
                       <td>60</td>
                       <td>70</td>
                 </tr>
                 <tr class="" >
                       <td>10</td>
                       <td>20</td>
                       <td>30</td>
                       <td>40</td>
                       <td>50</td>
                       <td>60</td>
                       <td>70</td>
                 </tr>
                 <tr class="" >
                       <td>10</td>
                       <td>20</td>
                       <td>30</td>
                       <td>40</td>
                       <td>50</td>
                       <td>60</td>
                       <td>70</td>
                 </tr>
            </table>
            

                        <!-- <a class="btn btn-primary" href="">Crear</a>  -->
                        <a class="btn btn-outline-primary btn-sm " href="{{route('reservas.create')}}" role="button">Crear</a> 
               </div>  <!-- align-self-start -->
<!--............................................................................................................... -->
              <div class="col-xl-9 colmod33" ></div>  <!-- align-self-start -->               
<!--............................................................................................................... -->              
           </div><!-- row -->
       </div><!--mod1 -->
<!-- ******************************************************************************************************************* -->

<!-- MOD 4: -->
         <div class="Mod4">
             <div class="row rowmod4">   <!-- d-block: los pone verticales -->
<!--............................................................................................................... -->
        <div class="col-xl-3 colmod41" >

                 <!-- BOTON MODAL -->	
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mimodal" style="margin-top: 100px;"  >
                    CONSULTA
                </button>	
	
                <!-- EL MODAL -->	
                <div class="modal fade" id="mimodal">	
                <div class="modal-dialog">	
                    <div class="modal-content">	
                <!-- CABECERA -->	
                <div class="modal-header">	
                    <h4 class="Modal title">Cabecera</h4>	
                    <button type="button" class="close" data-dismiss="modal">&times;</button>	
                </div>	
                <!-- CUERPO -->	
                <div class="modal-body">	
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed 	
                </div>	
                <!-- PIE DE MODAL -->	
                <div class="modal-footer">	
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>	
                </div>	

        
        </div>

<!--............................................................................................................... -->
               <div class="col-xl-9 colmod42" >
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur maiores deleniti id aliquid a totam, qui commodi iure unde illum! Necessitatibus, autem nostrum neque suscipit itaque culpa porro totam cum?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur maiores deleniti id aliquid a totam, qui commodi iure unde illum! Necessitatibus, autem nostrum neque suscipit itaque culpa porro totam cum?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur maiores deleniti id aliquid a totam, qui commodi iure unde illum! Necessitatibus, autem nostrum neque suscipit itaque culpa porro totam cum?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur maiores deleniti id aliquid a totam, qui commodi iure unde illum! Necessitatibus, autem nostrum neque suscipit itaque culpa porro totam cum?
                            
                   </p>
               </div>  <!-- align-self-start -->
<!--............................................................................................................... -->
               <div class="col-xl-9 colmod43" ></div>  <!-- align-self-start -->
<!--............................................................................................................... -->
            </div><!-- row -->
       </div><!--mod1 -->
<!--............................................................................................................... -->


<!-- ******************************************************************************************************************* -->
<!-- funciones -->
<!-- ******************************************************************************************************************* -->

</div><!-- container -->

     <script src="js/jquery-3.5.1.slim.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/bootstrap.min.js"></script>

 </body>
 </html>
 @endsection