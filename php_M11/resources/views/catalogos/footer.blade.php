<!DOCTYPE html>
<html lang="en">
<body>
    
<h6>PIE DE PAGINA </h6>

<ul>
<b>MIDDLEWARE</b> <br>
<li> Route::get('/catalogos', [CatalogoController::class, 'index'] ) ->name('catalogos.index')->middleware('auth'); </li>
   Middleware para redireccionar a la aplicación hacia el login.
<li> Route::get('/prueba', function() {})->middleware('roladmi');  </li>
   Podemos utilizar este middleware para filtrar los accesos de administrador y usuario.
<li>route::get('edad',function(){ return "Sí estás autorizado"; })->middleware('age');   </li>
   Otro ejemplo para ver como me puede redirigir según unos datos específicos : http://localhost/PHP_10/public/edad?age=18
<br>
<b>POSTMAN</b> <br>
<li>Adjunto  fichero PHP_10.postman_collection.json : Listado, show, Store, Update y Delete</li>
<b>BBDD</b> <br>
<li>Migraciones, Modelos, Seeders, No factorys.</li>
<b>EMAIL</b> <br>
<li>Incorporo pestaña de contactar con nosotros enviano email a mailtrap Api Token :2c993206123546edbeb9776b8a883cc7  
   JWT Token: eyJhbGciOiJIUzUxMiJ9.eyJkYXRhIjp7InRva2VuIjoiMmM5OTMyMDYxMjM1NDZlZGJlYjk3NzZiOGE4ODNjYzcifX0.YTFZ6rrjbAqFgvj0RmW7d7vYbs_RznbIHR8l6_fbRKd-9Yu30IKwdXMnyckGptWZ5ur7FQtEucVv4GPiWg1cvw</li>
<b>VALIDACIONES</b> <br>
<li>Utilizo el Form Request</li>
<b>VARIOS</b> <br>
<li>Fecha en Navbar más usuario</li>
<li>csegue55@gmail.com / 22222222 rol=1   y csegue99@gmail.com / 11111111  rol=2</li>
<b>SESIONES</b> <br>

<b>COOKIES</b> <br>
<li>cookies 2 : crea una nueva cookie usu4 </li>
<b>REGISTRO</b> <br>
<LI>Breeze</LI>


</ul>
</body>
</html>

