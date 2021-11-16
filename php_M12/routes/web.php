<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\LigaController;
use App\Models\Ball;
use App\Models\Federation;
use App\Models\Liga;
use App\Models\Equipo;
use App\Models\Location;
use App\Models\Profile;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BlogController;
use App\Models\Blog;
use Spatie\Permission\Contracts\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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



// Usuario y contraseña: breeze
//************************************************************************************************************************ */
Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';
//Route::get('/', function () {return view('welcome');});

//recoge Federaciones
//************************************************************************************************************************ */
Route::get('profile/{id}', function ($id) { 
    $federation= Federation::find($id);
    //dd($federation->nivel); 
    return view('ligas.profile',['federation'=>$federation]);
})->name('profile');

//Recoge Ligas
//************************************************************************************************************************ */
Route::get('ligas/index', function () { 
    $ligas= Liga::get();
    return view('ligas.listado', ['ligas'=> $ligas]);
})->name('ligas.index');

//Crud
//************************************************************************************************************************ */
Route::get('/',                          [LigaController::class, 'home'] )->name('ligas.home'); /*('ligas.home');*/
Route::get('/ligas/iniciar', function () {return view('welcome');})->name('ligas.iniciar');         //Envío a dashboard
Route::get('/ligas/create',              [LigaController::class, 'create'])->name('ligas.create');          //Form create
Route::post('/ligas',                    [LigaController::class,'store'])->name('ligas.store');             //Create
Route::get('/ligas/{liga}/edit',         [LigaController::class, 'edit'])->name('ligas.edit');              //Form edit
Route::put('/ligas/{liga}',              [LigaController::class,'update'])->name('ligas.update');           //update
Route::delete('/ligas/{liga}',           [LigaController::class,'destroy'])->name('ligas.destroy');         //delete
Route::get('/ligas/{liga}',              [LigaController::class, 'show'])->name('ligas.show');

/*ERROR 404 */
/******************************************************************************************************************* */
//Route::get('/xxxx', function () {return view('catalogos.error404');})->name('catalogos.xxx');         
Route::get('error', function(){abort('404');});

/*Contactar email */
/******************************************************************************************************************* */
Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');

// Roles y permisos: Spatie + Laravel Collective
/******************************************************************************************************************* */
Route::group(['middleware'=>['auth']],function(){
    Route::resource('roles',RolController::class);
    Route::resource('usuarios',UsuarioController::class);
    Route::resource('blogs',BlogController::class);
});



