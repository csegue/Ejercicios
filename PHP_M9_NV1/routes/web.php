<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

/************************************************************************************************************************ */

//Route::get('/', function(){ return "Hola estas en la ruta: página de inicio";});
Route::get('/', InicioController::class)->name('inicio');                                       


/* Pagina de inicio de aficiones */
Route::get('/aficiones', function () {return "Bienvenido a la ruta: página de aficiones  :) ";});        
//Route::get('/aficiones', [AficionController::class, 'index'] )->name('aficiones.index');          



/* Proximo formulario de entrada de datos */
Route::get('/aficiones/create', function () {return "ruta para crear tus aficiones";});              
//Route::get('/aficiones/create', [AficionController::class, 'create'] )->name('aficiones.create');    


/*
/*Mostrará los datos de la Base de Datos en pantalla */
//Route::get('/aficiones/{aficion}', function ($aficion) {return "Bienvenido a la afición de: ".$aficion;}); 
//Route::get('/aficiones/{curso}', [AficionController::class, 'show'] )->name('aficiones.show');       




Route::get('/aficiones/{aficion}/{categoria?}', function ($aficion, $categoria=null) {    // ?: puede ser opcional, null:valor por defecto 
    //return "este es la afición: $aficion de la categoria de: $categoria";

    if($categoria){
        return "Tu afición es: $aficion y tu nombre es Hello,:  $categoria";
    }else{
        return "Tu afición es: $aficion" ;
    }    
    
});




/************************************************************************************************************************ */
