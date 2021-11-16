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
<h2>Esta página no existe</h2>

<section style="padding-top:100px">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center">
                        <h1 style="font-size:162px;">404</h1>
                        <h2>Pagina no encontrada</h2>
                        <p>Lo sentimos, la página que busca no se encuentra. Vuelva al inicio</p>
                        <a href="{{route('catalogos.home')}}" class="btn btn-primary">Ir a la aplicación</a>
                    </div>
                </div>
            </div>
    
        </section>
</body>
</html>