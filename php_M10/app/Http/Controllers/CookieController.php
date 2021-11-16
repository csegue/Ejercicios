<?php
namespace App\Http\Controllers;
session_start();  //Inicializada en MenuCab12.php

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Cookie;


class CookieController extends Controller
{

    //Formulario entrada Fecha y 2 datos más
    /*....................................................................................................... */
    
    public function formcookie(){
        return view('cookies.formcookie');
    }


    //Verificación de la fecha y creación de la cookie
    /*....................................................................................................... */
    public function createcookie(Request $request){
        echo $ydate=$request->fecha."<br>";
        echo $dd=date("Y-m-d")."<br>";
        $yname=     $request->usuario;
        $ypassword= $request->password;

        //echo "actual :".$fecha_actual =  strtotime($dd); echo "<br>"; 
        //echo "compar :".$fecha_entrada = strtotime($ydate); echo "<br>";

                if($dd == $ydate) {
                    echo "La fecha actual es igual a la comparada y se ha añadido la cookie: fecha1";
                } else {
                    echo "La fecha actual no es igual a la comparada y se ha añadido la cookie: fecha1";
                }
                
                       
        return response("")->cookie('fecha1',$ydate,60);        
               
    
    }
    //
    /*....................................................................................................... */
    public function crearcookie(Request $request){
        if (Auth::check()) {
            
            /*2 Maneras de crear cooquies */
            /* 1ª */
            $usu4   = auth()->user()->name ;
            //return response("Hola Mundo")->cookie('usu',auth()->user()->name,60);
            return response(view("dashboard"))->cookie('usu4',$usu4,60);
            return \Cookie::get('usu4');

            /* 2ª */
            //\Cookie::queue('nomcoo','valor',60);
            //return view('welcome');
            /* ......................................................................................................... */
            /* 2 Maneras de Extarer información de las cookies */
            /* 1ª */
            //return \Request::Cookie('nomcoo'); 
            /* 2ª */
            //return \Cookie::get('usu4');
        }else{
            echo "No esta logueado";
            return redirect()->intended('dashboard');

        }    
    }

}


