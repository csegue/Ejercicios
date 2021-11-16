<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\mail\ContactanosMailable;


class ContactanosController extends Controller
{

/* ***************************************************************************************************************** */    
public function index(){                    // Método para mostrarnos el formulario
        return view('emails.index');
    }


/* ***************************************************************************************************************** */    
public function store(Request $request){                       // Método para procesar el formulario y enviar el correo			
    //return $request;	

    // VALIDACION ********************************************************************************************** //
    
        $request->validate([
         'name' => 'required',
         'correo' => 'required|email',               // pedira @ y .
         'mensaje' => 'required'
        ]);    
        		
        $correo=new ContactanosMailable($request->all());          // envío i al constructor public function __construct()			
        Mail::to('csegue55@gmail.com')->send($correo);           // LLamo a a clase Mail importada con use y accedo al metodo to    			
        //return "Mensaje enviado";                                  // ok del mail enviado.			
        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado');  // Cambiar a index
    }		

}
