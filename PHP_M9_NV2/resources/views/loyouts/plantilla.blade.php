<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href ="./css/bootstrap.css">   
    
    <title>@yield('title')</title>
    
    <!-- favicon -->
    <!-- estilos -->
    @include('loyouts.partials.header')

</head>
<body>
    <!-- header -->
    <!-- nav -->
    <!-- <h3> plantilla.blade.php</h3>-->
    @yield('content')
    <!-- footer -->
    @include('loyouts.partials.footer')
    <!-- scripts      
     <script src="js/jquery-3.5.1.slim.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     -->

</body>
</html>