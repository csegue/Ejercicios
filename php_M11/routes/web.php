<?php

use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\MantenimientoController;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

/*
Route::get('/', function () {return view('welcome');});
*/



/* LOG IN & REGISTER */ 
/******************************************************************************************************************* */
Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';


/*RUTAS INICIO*/
/******************************************************************************************************************* */
Route::get('/',[CatalogoController::class, 'home'] )->name('catalogos.home');
Route::get('/catalogos/iniciar', function () {return view('welcome');})->name('catalogos.iniciar');         //Envío a dashboard

/*RUTAS CATALOGOS*/
/******************************************************************************************************************* */
Route::get('/catalogos/create', [CatalogoController::class, 'create'])->name('catalogos.create');           //Form create
Route::get('/catalogos/listado',[CatalogoController::class, 'index'])->name('catalogos.index');
Route::post('/catalogos',[CatalogoController::class,'store'])->name('catalogos.store');                     //Create
Route::get('/catalogos/{catalogo}/edit', [CatalogoController::class, 'edit'])->name('catalogos.edit');      //Form edit
Route::put('/catalogos/{catalogo}',      [CatalogoController::class,'update'])->name('catalogos.update');   //update
Route::delete('/catalogos/{catalogo}',   [CatalogoController::class,'destroy'])->name('catalogos.destroy'); //delete
Route::get('/catalogos/{catalogo}',      [CatalogoController::class, 'show'])->name('catalogos.show');

/*BUSQUEDA POR PUESTO DE TRABAJO*/
/******************************************************************************************************************* */
Route::get('/empleados/recogerpuesto', [EmpleadoController::class, 'recogerpuesto'])->name('empleados.recogerpuesto');          
Route::post('/empleados/listadopuesto', [EmpleadoController::class, 'listadopuesto'])->name('empleados.listadopuesto');          


/*RUTAS EMPLEADOS*/
/******************************************************************************************************************* */
Route::get('/empleados/create', [EmpleadoController::class, 'create'])->name('empleados.create');           //Form
Route::get('/empleados/listado',[EmpleadoController::class, 'index'])->name('empleados.index');             //Listado  
Route::post('/empleados',[EmpleadoController::class,'store'])->name('empleados.store');                     //Create - validate
Route::get('/empleados/{empleado}/edit', [EmpleadoController::class, 'edit'])->name('empleados.edit');      //Form edit
Route::put('/empleados/{empleado}',      [EmpleadoController::class,'update'])->name('empleados.update');   //update - validate
Route::delete('/empleados/{empleado}',   [EmpleadoController::class,'destroy'])->name('empleados.destroy'); //delete
Route::get('/empleados/{empleado}',      [EmpleadoController::class, 'show'])->name('empleados.show');

/*  */
/******************************************************************************************************************* */
Route::get('/mantenimientos/index', [MantenimientoController::class, 'index'])->name('mantenimientos.index');

/* ENVIO DE MAIL PARA QUE CONTACTEN CON NOSOTROS */
/******************************************************************************************************************* */
Route::get ('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');             //Form - validate
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');

/*MIDDLEWARE  Proyecto y Controlador*/
/******************************************************************************************************************* */
route::get('edad',              function(){ return "Sí estás autorizado"; })->name('edad')->middleware('age');   //CheckAge.php
route::get('no-autorizado',     function(){ return "No estás autorizado"; });
/* .................................................................................................................. */

/*ERROR 404 */
/******************************************************************************************************************* */
Route::get('/xxxx', function () {return view('catalogos.error404');})->name('catalogos.xxx');         
Route::get('error', function(){abort('404');});

/* COOKIES */
/******************************************************************************************************************* */
Route::get('cookies/formcookie',        [CookieController::class, 'formcookie'])->name('cookies.formcookie');
Route::get('cookies/createcookie',      [CookieController::class, 'createcookie'])->name('cookies.createcookie');
Route::get('cookies/crearcookie',       [CookieController::class, 'crearcookie'])->name('cookies.crearcookie');