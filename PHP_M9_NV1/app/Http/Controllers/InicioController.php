<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


http://localhost/PHP_9_NV1/public/
class InicioController extends Controller
{
    public function __invoke()
    {
        return  "
        Este mensaje es desde tu controlador: InicioController <br><br>
        Escribe http://localhost/PHP_9_NV1/public/aficiones =>para acceder a la página de aficiones <br>
        Escribe http://localhost/PHP_9_NV1/public/aficiones/create =>para acceder a la pagina de nuevas aficiones <br>
        Escribe http://localhost/PHP_9_NV1/public/aficiones/Tu Afición => para imprimirla en pantalla <br>
        Escribe http://localhost/PHP_9_NV1/public/aficiones/Tu Afición/Tu Nombre => para saludarte <br>
        ";    
    }
    
}
