<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        h1 { color: blue;}
    </style>    



</head>
<body>
    <h1>Correo electrónico</h1>                         <!-- título mensaje -->
    <p> 10 correo con Laravel</p>                       <!-- mensaje -->

    <p>Nombre:{{$contacto['name']}}</p>
    <p>Correo:{{$contacto['correo']}}</p>
    <p>Mensaje:{{$contacto['mensaje']}}</p>
  
   
</body>
</html>