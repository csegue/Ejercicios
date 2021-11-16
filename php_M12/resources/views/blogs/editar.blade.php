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
            <h3 class="page__heading">Editar Blog</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- validación -->
                            @if ($errors->any())
                                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                    <strong>¡Campos erroneos!</strong>
                                    @foreach ($errors->all() as $error)
                                      <span class="badge badger-danger">{{$error}}</span>
                                      <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                          <span aria-hidden="true">&times; </span>
                                      </button>
                                    @endforeach  
                                </div>
                            @endif

                            {!! Form::model($blog,['method'=> 'PUT', 'route'=>['blogs.update', $blog->id]])!!}    
                                <div class="row">
                                     <!-- ................................................................................ -->
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <label for="titulo">Título</label><br>
                                                {!! Form::text('titulo', null, null, array('class'=>'form-control'))!!}
                                            </div>    
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-floating">
                                                <label for="contenido">Contenido</label>   
                                                <textarea class="form-control" name="contenido" style="height: 100px">{{$blog->contenido}}</textarea>
                                            </div>    
                                    </div>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                                {!! Form::close()!!}
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
