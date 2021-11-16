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
            <h3 class="page__heading">Blogs</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                           
                        @can('crear-blog')
                            <a class="btn btn-warning" href="{{route('blogs.create')}}">Nuevo</a>
                        @endcan

                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    <!--<th style="display: none;">ID</th>-->
                                    <th style="color: #fff;">ID</th>
                                    <th style="color: #fff;">Título</th>
                                    <th style="color: #fff;">Comentario</th>
                                    <th style="color: #fff;">Acciones</th>
                                </thead>
                                <tbody> 
                                <!-- ............................................................................................ -->    
                                    @foreach($blogs as $blog)
                                        <tr>
                                            <td style="display: none;">{{$blog->id}}</td>
                                            <td style="color: #000;">{{$blog->id}}</td>
                                            <td style="color: #000;">{{$blog->titulo}}</td>
                                            <td style="color: #000;">{{$blog->contenido}}</td>
                                            <td style="color: #000;">
                                                <form action="{{ route('blogs.destroy',$blog->id)}}" method="POST">
                                                    @csrf
                                                    @can('editar-blog')
                                                    <a class="btn btn-info" href="{{route('blogs.edit',$blog->id)}}">Editar</a>
                                                    @endcan

                                                   
                                                    @method('DELETE')
                                                    @can('borrar-blog')
                                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                                    @endcan
                                                </form>
                                            </td>
                                        </tr>                                            
                                    @endforeach    
                                <!-- ............................................................................................ -->    
                                </tbody>            
                            </table>                
                                            
                            <div class="pagination justify-content-end">
                            {!! $blogs->links()!!}   <!-- paginación -->
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

