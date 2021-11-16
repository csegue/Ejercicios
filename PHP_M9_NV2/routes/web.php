<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {return view('welcome');});



Route::get   ('/paises',             [PaisController::class, 'index'] ) ->name('paises.index');   //Mostrar los registros
Route::get   ('/paises/create',      [PaisController::class, 'create'] )->name('paises.create');  //Formulario recogida store
Route::get   ('/paises/{pais}',      [PaisController::class, 'show']  ) ->name('paises.show');    //[Read]
Route::post  ('/paises',             [PaisController::class, 'store'] ) ->name('paises.store');   //[create]
Route::get   ('/paises/{pais}/edit', [PaisController::class, 'edit'] )  ->name('paises.edit');    //Formulario recogida update
Route::put   ('/paises/{pais}',      [PaisController::class, 'update']) ->name('paises.update');  //[Update]
Route::delete('/paises/{pais}',      [PaisController::class, 'destroy'])->name('paises.destroy'); //[Delete] 


Route::get   ('/paises/{pais}/departamentos', [DepartamentosController::class, 'index']  ) ->name('departamentos.index'); 
Route::post  ('/paises/{pais}/departamentos', [DepartamentosController::class, 'store']  ) ->name('departamentos.store'); 
Route::get   ('/paises/{pais}/departamentos/{departamento}', [DepartamentosController::class, 'show']  ) ->name('departamentos.show'); 
Route::put   ('/paises/{pais}/departamentos/{departamento}', [DepartamentosController::class, 'update']  ) ->name('departamentos.update'); 
Route::delete('/paises/{pais}/departamentos/{departamento}', [DepartamentosController::class, 'destroy']  ) ->name('departamentos.destroy'); 


Route::resource('/employees', EmployeeController::class);



/* ROUTE RESOURCE *************************************************************************************************** */
//Route::resource('paises', PaisController::class);       // No Funciona la URI me pone paises/{paise} 
/* ****************************************************************************************************************** */

