

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
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
                           <p>Mantenimiento Usuarios</p>
                           <hr  style=size:2px color="grey" width="90%" />
                           <div class="boton3"><a href="" style="color:white">Volver Inicio</a></div><br>
                           <div class="boton3"><a href="{{ route('dashboard') }}" style="color:white">Dsahboard</a></div><br>
                           <div class="boton3"><a href="{{ route('usuarios.index')}}" style="color:white">Usuarios</a></div><br>
                           <div class="boton3"><a href="{{ route('roles.index')}}" style="color:white">Roles</a></div><br>
                           <div class="boton3"><a href="{{ route('blogs.index')}}" style="color:white">Blogs</a></div><br>
                       </ul>
   
                    </nav2>
        </div>
<!-- ................................................................................................................. -->    
        <div class="col-xl-10 colmod" >
        <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Roles</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                          <!-- directivas de Laravel Permission [vamos a definir los permisos] -->

                            @can('crear-rol')
                              <a class="btn btn-warning" href="{{route('roles.create')}}">Nuevo</a>    
                            @endcan

                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    <!--<th style="display: none;">ID</th>-->
                                    <th style="color: #fff;">Id</th>
                                    <th style="color: #fff;">Rol</th>
                                    <th style="color: #fff;">Acciones</th>
                                </thead>
                                <tbody> 
                                    @foreach($roles as $role)
                                        <tr>
                                            <td style="color: #000;">{{$role->id}}</td>
                                            <td style="color: #000;">{{$role->name}}</td>
                                            <td style="color: #000;">
                                                @can('editar-rol')
                                                <a class="btn btn-primary" href="{{route('roles.edit', $role->id)}}">Editar</a> 
                                                @endcan

                                                @can('borrar-rol')
                                                  {!! Form::open(['method'=>'DELETE', 'route'=>['roles.destroy', $role->id], 'style'=>'display:inline'])!!}
                                                     {!!Form::submit('Borrar',['class'=> 'btn btn-danger']) !!}
                                                     {!! Form::close() !!}
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach    
                                </tbody>
                            </table>
                            <!-- paginacion -->
                            <div class="pagination justify-content-end">
                            {!! $roles->links()!!}   <!-- paginación -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
     </div> <!-- col -->
<!-- ................................................................................................................. -->   
   </div> <!-- row -->
 </div>  <!-- Mod -->              
<!-- ................................................................................................................. -->   
</div> <!-- container -->

  


</body>
</html>

