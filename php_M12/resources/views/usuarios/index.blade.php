@extends('ligas.plantilla')
@section('title', 'web oicial futbol')
@section('content')

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
                           <h6>Mantenimiento Usuarios</h6>
                           <hr  style=size:2px color="grey" width="90%" />
                           <div class="boton3"><a href="{{route('ligas.home')}}" style="color:white">Volver Inicio</a></div><br>
                           <div class="boton3"><a href="{{ route('dashboard') }}" style="color:white">Dsahboard</a></div><br>
                           <div class="boton3"><a href="{{ route('usuarios.index')}}" style="color:white">Usuarios</a></div><br>
                           <div class="boton3"><a href="{{ route('roles.index')}}" style="color:white">Roles</a></div><br>
                           <div class="boton3"><a href="{{ route('blogs.index')}}" style="color:white">Blogs</a></div><br>
                       </ul>
   
                    </nav2>
        </div>

       


<!-- ................................................................................................................. -->    
        <div class="col-xl-10 colmod12" >
                            <a class="btn btn-warning" href="{{route('usuarios.create')}}">Nuevo</a>
                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    <!--<th style="display: none;">ID</th>-->
                                    <th style="color: #fff;">ID</th>
                                    <th style="color: #fff;">Nombre</th>
                                    <th style="color: #fff;">email</th>
                                    <th style="color: #fff;">Rol</th>
                                    <th style="color: #fff;">Acciones</th>
                                </thead>
                                <tbody> 
                                    @foreach($usuarios as $usuario)
                                        <tr>
                                            <td style="color: #000;">{{$usuario->id}}</td>
                                            <td style="color: #000;">{{$usuario->name}}</td>
                                            <td style="color: #000;">{{$usuario->email}}</td>
                                            <td style="color: #000;">
                                                @if(!empty($usuario->getRoleNames()))
                                                    @foreach($usuario->getRoleNames() as $rolName)
                                                    <h5><span class="badge badge-dark">{{$rolName}}</span></h5>
                                                @endforeach    
                                                @endif    
                                            </td>
                                            <td>
                                                <a class="btn btn-info" href="{{route('usuarios.edit', $usuario->id)}}">Editar</a>
                                                <!-- Laravel Collective [formularios -->
                                                {!! Form::open(['method'=> 'DELETE', 'route'=>['usuarios.destroy', $usuario->id], 'style'=>'display:inline']) !!}    
                                                       {!! Form::submit('borrar', ['class'=>'btn btn-danger'])!!} 
                                                {!! Form::close() !!}    
                                            </td>
                                        </tr>
                                    @endforeach    
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                            {!! $usuarios->links()!!}   <!-- paginación -->
                            </div>
               
    
        </div> <!-- col -->
     </div> <!-- row -->
   </div>  <!-- Mod -->        

<!-- ................................................................................................................. -->

<!-- ................................................................................................................. -->   
     <div class="Mod">
      <div class="row rowmod">  
            <div class="col-xl-2 colmod" >
                
            </div>
<!-- ................................................................................................................. -->   
<div class="col-xl-3 colmod2" >
            <div class="card bg-dark text-white mr-3 ">
            <div class="card-heard">  
                <h5 style="text-align: center">Usuarios</h5>
            </div>    
            <div class="card-body">
                @php
                use App\Models\User;
                $cantusuarios= User::count();
                @endphp
                <h2 class="text-center"><span>Usuarios: {{$cantusuarios}}</span></h2>
                <p class="m-b-0 text-left"><a href="{{route('usuarios.index')}}" class="text-black">Ver más</a></p>
            </div>
            </div>
    </div>
<!--............................................................................................................... -->
    <div class="col-xl-3 colmod2" >
            <div class="card bg-dark text-white mr-3 ">
            <div class="card-heard">  
                <h5 style="text-align: center">Roles</h5>
            </div>    
            <div class="card-body">
                @php
                use Spatie\Permission\Models\Role;
                $cant_rol= Role::count();
                @endphp
                <h2 class="text-center"><span>Roles: {{$cant_rol}}</span></h2>
                <p class="m-b-0 text-left"><a href="{{route('roles.index')}}" class="text-black">Ver más</a></p>
            </div>
            </div>
    </div>
<!--............................................................................................................... -->
<div class="col-xl-3 colmod2" >
            <div class="card bg-dark text-white mr-3 ">
            <div class="card-heard">  
                <h5 style="text-align: center">Blogs</h5>
            </div>    
            <div class="card-body">
                 @php
                use App\Models\Blog;
                $cant_blog= Blog::count();
                @endphp
                <h2 class="text-center"><span>Blogs: {{$cant_blog}}</span></h2>
                <p class="m-b-0 text-left"><a href="{{route('blogs.index')}}" class="text-black">Ver más</a></p>
            </div>
            </div>
    </div>

    </div> <!-- row -->
</div> <!-- Mod -->
<!-- ................................................................................................................. -->   
<!-- ................................................................................................................. -->   
</div> <!-- container -->

@endsection


</body>
</html>
