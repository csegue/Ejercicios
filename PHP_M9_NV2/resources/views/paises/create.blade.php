@extends('loyouts.plantilla')
@section('title', 'Insertar')
@section('content')
    <h1>Formulario para crear paises create.blade.php</h1>
    


    <form action="{{route('paises.store')}}" method="POST">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />       <!-- csrf_token:   anti-pirateo -->

        <label> Pais: <br><input type="text" name="pais" value="{{old('pais')}}"><br></label>  <!-- old = placeholder -->

                @error('pais')                     <!-- Directiva de blade para mostrar los mensajes de Validación  -->
                    <small>*{{$message}}</small>   <!-- The 'name' fiels is required -->
                <br><br>
                @enderror
                
        <label> Departamento:<br> <input type="text" name="departamento" value="{{old('departamento')}}"><br>

                @error('departamento')
                    <small>*{{$message}}</small>
                <br><br>
                @enderror

        <label> Ciudad: <br><input type="text" name="ciudad" value="{{old('ciudad')}}"><br><br> </label>

                @error('ciudad')
                    <small>*{{$message}}</small>
                <br><br>
                @enderror

        <button type="submit">Enviar</button>

    </form>
@endsection


