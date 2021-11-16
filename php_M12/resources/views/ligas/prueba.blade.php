@extends('ligas.plantilla')
@section('title', 'Elegir')
@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$federation->nivel}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

        <!-- Styles -->
        <style>
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
<div class="container">
<!-- ................................................................................................................. -->
        <div class="row">   
                <div class="col-10 my-3 pt-6 shadow">
   
                </div>
            </div>
<!-- ................................................................................................................. -->
            <div class="row">   
                <div class="col-2 my-3 pt-6 shadow">
                    <strong>Equipos: </strong><br>

                        <spam class="badge badge-primary">{{$federation->profile->ambito}}</spam><br>
                        <strong>Oficina central</strong>{{$federation->location->ciudad}}
                        <strong>Oficina central</strong>{{$federation->nivel}}
                        $var= $federation->equipos as $equipos;
                        <spam class="badge badge-primary"><p>voy</p> {{$var}}</spam><br>
    
                </div>
                <div class="col-2 my-3 pt-6 ">

                </div>    
            </div>
<!-- ................................................................................................................. -->
            <div class="row">   
                <div class="col-10 my-3 pt-6 shadow">
       
                </div>
            </div>            
            
        </div>  <!-- container -->    
        
    </body>
</html>
@endsection