<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCliente;
use App\Models\Cliente;
use App\Models\Reserva;
use Illuminate\Http\Request;



class AltaController extends Controller
{

//Página principal
/************************************************************************************************************************ */
public function listadoAlta(){                               
    return view('altas.listadoAlta');                       
}
//Bajas
/************************************************************************************************************************ */
public function listadoLiberar(){                               
    return view('altas.listadoLiberar');                       
}
//Bajas
/************************************************************************************************************************ */
public function listadoCheckout(){           
    return view('altas.listadoCheckout');                       
}
//Bajas
/************************************************************************************************************************ */
public function createCheckout(Reserva $reserva){      
    //return $reserva;
    $reserva= Reserva::find($reserva->id);                    
    return view('altas.createCheckout', compact('reserva'));                       
}
//Altas
/************************************************************************************************************************ */
public function editar(Reserva $reserva2){                         
    $reserva2= Reserva::find($reserva2->id);  
    //return $reserva;
    return view('altas.edit', compact('reserva2'));
}
//Bajas
/************************************************************************************************************************ */
public function editarBaja(Reserva $reserva){                         
    $reserva= Reserva::find($reserva->id);  
    //return $reserva;
    return view('altas.editBaja', compact('reserva'));
}
//Altas
/************************************************************************************************************************ */
public function update(Request $request, Reserva $reserva){
    //return $reserva;
    $reserva->update($request->all());
    return redirect()->route('altas.listadoAlta');
}
//Baja
/************************************************************************************************************************ */
public function updateBaja(Request $request, Reserva $reserva){
    //return $reserva;
    $reserva->update($request->all());
    return redirect()->route('reservas.home');
}
/************************************************************************************************************************ */
public function storeCheckout(Request $request){    
    //return $request; 
    $reserva= Reserva::create($request->all());                 
    return redirect()->route('altas.listadoLiberar');
}
/************************************************************************************************************************ */
public function destroy(Reserva $reserva){
    $reserva->delete();   
    return redirect()->route('altas.listadoAlta');
}
 /************************************************************************************************************************ */
 public function show(Reserva $reserva){                    
    //return $reserva;                                    
    return view('altas.show', compact('reserva'));       
}
/************************************************************************************************************************ */




}