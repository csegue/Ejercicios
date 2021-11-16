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
                    <img class="float-right  mr-2" repeat="no repeat" src="{{asset('img/federaciones.png')}}" style="width: 325px height= 230px">
                    <strong>Liga: </strong><h1>{{ $federation->nivel}}</h1>
                    <strong>email contacto: </strong><h1>{{ $federation->email}}</h1>
                    <strong>Web: </strong><h1>{{ $federation->web}}</h1>

                    <strong> Ambito actuación: </strong>{{ $federation->profile->ambito}}<br>
                    <strong> Presidente: </strong>{{ $federation->profile->presidente}}<br>

                    <strong>Oficina central :</strong>{{$federation->location->ciudad}}
                    
                </div>
            </div>
<!-- ................................................................................................................. -->
            <div class="row">   
                <div class="col-2 my-3 pt-6 shadow">
                    <strong>Equipos: </strong><br>

                    @foreach($federation->equipos as $equipos)
                        <spam class="badge badge-primary">{{$equipos->nombre}}</spam><br>
                    @endforeach
    
                </div>
                <div class="col-2 my-3 pt-6 ">
                    
                </div> 
                <div class="col-6 my-3 pt-6 shadow">
                    <img class="float-right  mr-2" repeat="no repeat" src="{{asset('img/balon.jpg')}}" style="width: 259px height= 324px">
                    <strong>Balóm Oficial : {{ $federation->ball->marca}}</strong><br>
                </div>    
            </div>
<!-- ................................................................................................................. -->
            <div class="row">   
                <div class="col-10 my-3 pt-6 shadow">
                    <strong>CALENDARIO JORNADAS Y PARTIDOS :</strong><br>
                    <a class="badge badge-danger" href="{{route('ligas.index')}}">IR A CALENDARIO</a> <br>
                </div>
            </div>            
            
        </div>  <!-- container -->    
        
    </body>
</html>
@endsection