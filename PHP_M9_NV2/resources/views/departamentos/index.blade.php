

<h4>"Bienvenido a la página de Departamentos, {{$pais}} [index]";</h4>



<form action="{{route('departamentos.store', $pais)}}" method="POST">
                @csrf                                           
                <button type="submit">Ir a departamentos.store</button>    
</form>

