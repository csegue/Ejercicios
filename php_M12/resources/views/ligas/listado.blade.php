@extends('ligas.plantilla')
@section('title', 'Elegir')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<div class="container-fluid">
 <!-- ................................................................................................................. -->   
<!-- MOD 1: -->

<div class="Mod">
    <div class="row rowmod">  
        <div class="col-xl-2 colmod" >
                    <nav2>
                       <ul>
                           <p>Resultados Jornadas</p>
                           <hr  style=size:2px color="grey" width="90%" />
                           <div class="boton3"><a href="{{route('ligas.home')}}" style="color:white">Volver Inicio</a></div><br>
                           <div class="boton3"><a href="{{route('ligas.create')}}" style="color:white">Crear Resultados</a></div>
                       </ul>
   
                    </nav2>
        @php
        use App\Models\Equipo;
        $cant_eq= Equipo::count();
        @endphp

        @php
        use App\Models\Liga;
        $sum1 = Liga::sum('res_local'); 
        $sum2 = Liga::sum('res_visitante'); 
        @endphp

                    <!-- $ligas= Liga::where('local', 'Barcelona')->get(); -->

                    
        </div>
<!-- ................................................................................................................. -->    
        <div class="col-xl-10 colmod" >
               <table style="margin-left: 10%;">
                        <td><input size=8px; placeholder="Federación"></td>
                        <td><input size=8px; placeholder="Jornada"></td>
                        <td><input size=15px; placeholder="Local"></td>
                        <td><input size=15px; placeholder="Visitante"></td>
                        <td><input size=4px; placeholder="{{$sum1}}"></td>
                        <td><input size=4px; placeholder="{{$sum2}}"></td>
                </table>   

                @foreach($ligas as $liga)
                        <table style="margin-left: 10%;">        
                        <tr>
                            <td><input type="text" size="8px" name="" value="{{$liga->federation_id}}"></td>
                            <td><input type="text" size="8px" name="" value="{{$liga->jornada}}"></td>
                            <td><input type="text" size="15px" name="" value="{{$liga->local}}"></td>
                            <td><input type="text" size="15px" name="" value="{{$liga->visitante}}"></td>
                            <td><input type="text" size="4px" name="" value="{{$liga->res_local}}"></td>
                            <td><input type="text" size="4px" name="" value="{{$liga->res_visitante}}"></td>
                            <td><a href="{{route('ligas.edit', $liga)}}">Editar</a></td>
                            <td><a href="{{route('ligas.show', $liga)}}">Eliminar</a></td>
                        </tr>
                        </table>

                @endforeach
                <br><br>    

               
    
     </div> <!-- col -->
<!-- ................................................................................................................. -->   
   </div> <!-- row -->
 </div>  <!-- Mod -->              
<!-- ................................................................................................................. -->   
</div> <!-- container -->

  


</body>
</html>
@endsection
