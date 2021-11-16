@extends('loyouts.plantilla')
@section('title', 'Editar')
@section('content')
    <h1>página para Editar un pais edit.blade.php</h1>
    
    <!--<form action="{{route('paises.store')}}" method="POST"> -->
    <form action="{{route('paises.update', $pais)}}" method="POST">      <!-- la ruta para modificar -->
        
        <!-- ............................................................................................... -->
        <input type="hidden" name="_token" value="{{csrf_token()}}" />   <!-- anti-pirateo -->
        <!-- ............................................................................................... -->
        <input type="hidden" name="_method" value="PUT">
         @method('put')                                                  <!-- por html que no lo reconoce -->
        <!-- ............................................................................................... -->
        
        
        <label>
            Pais: <br><input type="text" name="pais" value="{{$pais->pais}}"><br>
        </label>

        <label>
            Departamento:<br><input type="text" name="departamento" value="{{$pais->departamento}}"><br>
        </label>

        <label>
            Ciudad: <br><input type="text" name="ciudad" value="{{$pais->ciudad}}"><br><br> 
        </label>

        <button type="submit">Editar Registro</button>

    </form>
@endsection


