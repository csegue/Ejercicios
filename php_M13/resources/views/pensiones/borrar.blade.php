<table>
                    <td><input size=4px;  placeholder="id"></td>
                    <td><input size=20px;  placeholder="tipo_pen"></td>
            </table>
            
            @foreach($pension as $pension)
            <table>
            <form action="{{route('pensiones.destroy', $pension)}}" method="post">            <!-- la ruta para modificar -->
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>    @csrf
                <input type="hidden" name="_method" value="PUT"/>                  @method('delete')
                    <tr>
                        <td><input type="text"  size="4px"   name="id"         value="{{$pension->id}}"></td>
                        <td><input type="text"  size="20px"  name="tipo_pen"   value="{{$pension->tipo_pen}}"></td>
                        <td><button type="submit">Enviar a tomar por el culo</button></td>
                    </tr>
            </form>            
            </table>
            @endforeach
                        <!-- <a class="btn btn-primary" href="">Crear</a>  -->
                        <!-- <a class="btn btn-outline-primary btn-sm " href="" role="button">Crear</a> -->