@extends('loyouts.plantilla')
@section('title', 'Pais - ' .$pais->pais)
@section('content')
    <!--
    <h6>Bienvenido al Pais de: <?php echo $pais; ?> </h6>
    <h6>Bienvenido al Pais de: {{$pais}} </h6> 
    -->

        <ul>
            <li><a href="{{route('paises.index')}}">            Volver a paises</a></li>
            <li><a href="{{route('paises.edit', $pais)}}">      Editar Pais</a></li>
        </ul>
      
        <form action="{{route('paises.destroy', $pais)}}" method="POST">
                @csrf                                           <!-- para @method('delete') -->
                @method('delete')                               <!-- para que lo entienda html  -->
                <button type="submit">Eliminar</button>    
        </form>

        <!--*************************************************************************************************  -->
        <p><strong>Bienvenido al Pais de show.blade.php:</strong>{{$pais->pais}}</p>
        <p><strong>Departamento:</strong>{{$pais->departamento}}</p>
        <p><strong>Ciudad:</strong>{{$pais->ciudad}}</p>
        <!--*************************************************************************************************  -->


        

@endsection


