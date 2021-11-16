@extends('loyouts.plantilla')
@section('title', 'Paises')
@section('content')
   
<?php  /* NOSTRAR DESDE EL CONTROLADOR  *******************************************************************************/ ?>    
    <h3>Bienvenido a la página de Paises [index.blade.php -> + plantilla + Header]</h3>
  
    <!-- *************************************************************************************************************** -->
    <!-- ORM ELOQUENT(CRUD) Read Leer registros en la vista pasados por el controlador -->
    <ul>
        @foreach($paises as $pais)
        <li>
                 <!-- {{$pais}} -->                        <!-- Muestra todos los campos -->
                 <a href="{{route('paises.show', $pais)}}">{{$pais->pais}}, {{$pais->departamento}}, {{$pais->ciudad}}</a> 

        </li>
        @endforeach

    </ul>    
<!-- *************************************************************************************************************** -->  








@endsection
