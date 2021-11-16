<?php

use App\Http\Controllers\AltaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\PensionController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ServicioController;
use Illuminate\Support\Facades\Route;



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

//Breeze
//*********************************************************************************************************** 
Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';

//PensionController
//************************************************************************************************************
Route::get('/pensiones/listado',        [PensionController::class, 'listado'] )->name('pensiones.listado');  
Route::get('/pensiones/{pension}/edit', [PensionController::class, 'edit'])->name('pensiones.edit');         //edit   - Form
Route::put('/pensiones/{pension}',      [PensionController::class, 'update'])->name('pensiones.update');     //edit   - A.Masiva
Route::get('/pensiones/create',         [PensionController::class, 'create'])->name('pensiones.create');     //create - Form
Route::post('/pensiones',               [PensionController::class,'store'])->name('pensiones.store');        //create - A.Masiva
Route::delete('/pensiones/{pension}',   [PensionController::class,'destroy'])->name('pensiones.destroy');    //delete - A.Masiva
Route::get('/pensiones/{pension}',      [PensionController::class, 'show'])->name('pensiones.show');         //delete - Form   

//ClienteController
//************************************************************************************************************
Route::get('/clientes/listado',        [ClienteController::class, 'listado'] )->name('clientes.listado');  
Route::get('/clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');         //edit   - Form
Route::put('clientes/{cliente}',       [ClienteController::class, 'update'])->name('clientes.update');     //edit   - A.Masiva
Route::get('/clientes/create',         [ClienteController::class, 'create'])->name('clientes.create');     //create - Form
Route::post('/clientes',               [ClienteController::class,'store'])->name('clientes.store');        //create - A.Masiva
Route::delete('/clientes/{cliente}',   [ClienteController::class,'destroy'])->name('clientes.destroy');    //delete - A.Masiva
Route::get('/clientes/{cliente}',      [ClienteController::class, 'show'])->name('clientes.show');         //delete - Form   


//ServicioController
//************************************************************************************************************
Route::get('/servicios/listado',         [ServicioController::class, 'listado'] )->name('servicios.listado');  
Route::get('/servicios/{servicio}/edit', [ServicioController::class, 'edit'])->name('servicios.edit');         //edit   - Form
Route::put('servicios/{servicio}',       [ServicioController::class, 'update'])->name('servicios.update');     //edit   - A.Masiva
Route::get('/servicios/create',          [ServicioController::class, 'create'])->name('servicios.create');     //create - Form
Route::post('/servicios',                [ServicioController::class,'store'])->name('servicios.store');        //create - A.Masiva
Route::delete('/servicios/{servicio}',   [ServicioController::class,'destroy'])->name('servicios.destroy');    //delete - A.Masiva
Route::get('/servicios/{servicio}',      [ServicioController::class, 'show'])->name('servicios.show');         //delete - Form   

//RoomController
//************************************************************************************************************
Route::get('/rooms/listado',        [RoomController::class, 'listado'] )->name('rooms.listado');  
Route::get('/rooms/{room}/edit',    [RoomController::class, 'edit'])->name('rooms.edit');         //edit   - Form
Route::put('roomss/{room}',         [RoomController::class, 'update'])->name('rooms.update');     //edit   - A.Masiva


//ReservaController (CRUD)
//************************************************************************************************************
Route::get('/profile/{id}',        [ReservaController::class, 'profile'] )->name('reservas.profile');
Route::get('/reservas/bootstrap',  [ReservaController::class, 'bootstrap'] )->name('reservas.bootstrap');  
Route::get('/reservas/iniciar', function () {return view('welcome');})->name('reservas.iniciar');         //Envío a dashboard
  
//............................................................................................................
Route::get('/home',                      [ReservaController::class, 'home'] )->name('reservas.home');  
Route::get('/reservas/listado',          [ReservaController::class, 'listado'] )->name('reservas.listado');  
Route::get('/reservas/{reserva}/editar', [ReservaController::class, 'editar'])->name('reservas.editar');     //edit   - Form
Route::put('reservas/{reserva}',         [ReservaController::class, 'update'])->name('reservas.update');     //edit   - A.Masiva
Route::get('/reservas/create',           [ReservaController::class, 'create'])->name('reservas.create');     //create - Form
Route::post('/reservas',                 [ReservaController::class,'store'])->name('reservas.store');        //create - A.Masiva
Route::delete('/reservas/{reserva}',     [ReservaController::class,'destroy'])->name('reservas.destroy');    //delete - A.Masiva
Route::get('/reservas/{reserva}',        [ReservaController::class, 'show'])->name('reservas.show');         //delete - Form   

/*ERROR 404 */
/******************************************************************************************************************* */
Route::get('errors', function(){abort('404');});

/*Contactar email */
/******************************************************************************************************************* */
Route::get('contactanos',  [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');

//AltasController
//************************************************************************************************************
//Bajas ( ocupada => libre)
Route::get('/altas/listadoLiberar',           [AltaController::class, 'listadoLiberar'])->name('altas.listadoLiberar');   //pasar de ocupada a libre
Route::get('/altas/{reserva}/editarBaja',     [AltaController::class, 'editarBaja'])->name('altas.editarBaja');           //edit   - Form
Route::put('altas/{reserva}/Baja',            [AltaController::class, 'updateBaja'])->name('altas.updateBaja');           //edit   - A.Masiva

//Bajas ( checkout => Historial)
Route::get('/altas/listadoCheckout',          [AltaController::class, 'listadoCheckout'])->name('altas.listadoCheckout'); //pasar la habitación a histórico
Route::get('/altas/{reserva}/createCheckout', [AltaController::class, 'createCheckout'])->name('altas.createCheckout');   //pasar la habitación a histórico
Route::post('/altas/storeCheckout',           [AltaController::class,'storeCheckout'])->name('altas.storeCheckout');      //create - A.Masiva

//Altas
Route::get('/altas/listadoAlta',       [AltaController::class, 'listadoAlta'])->name('altas.listadoAlta'); //listado Altas
Route::get('/altas/{reserva2}/editar', [AltaController::class, 'editar'])->name('altas.editar');     //edit   - Form
Route::put('altas/{reserva}',          [AltaController::class, 'update'])->name('altas.update'); //edit   - A.Masiva

//Spatie: Roles y Permisos
//************************************************************************************************************
Route::get('/roles/listado',        [RolController::class, 'listado'])->name('roles.listado'); //listado roles
Route::get('/roles/{user}/editar',  [RolController::class, 'editar'])->name('roles.editar');                 //edit - Form
Route::put('roles/{user}',          [RolController::class, 'update'])->name('roles.update');     //edit   - A.Masiva

//Pruebas
//************************************************************************************************************







