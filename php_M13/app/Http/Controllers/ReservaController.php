<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReserva;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Pension;
use App\Models\Reserva;
use App\Models\Room;
use App\Models\Servicio;



class ReservaController extends Controller
{

/************************************************************************************************************************ */
public function profile($id){

    $reserva= Reserva::find($id);
    //.......................................................................................................................
    
    $cli= $reserva->cliente_id;
    $cliente= Cliente::find($cli);
    //return view('reservas.profile',['cliente'=>$cliente]);         


    $pen= $reserva->pension_id;
    $pension= Pension::find($pen);
    //dd($pension);  
    //return view('reservas.profile',['pension'=>$pension,'cliente'=>$cliente]);         

    $roo= $reserva->room_id;
    $room= Room::find($roo);
    //dd($room);  
    //return view('reservas.profile',['pension'=>$pension,'cliente'=>$cliente, 'room'=>$room]);    
    
    $servicio= Servicio::find($id);
    //dd($room);  
    return view('reservas.profile',['reserva'=>$reserva, 'servicio'=>$servicio,'pension'=>$pension,'cliente'=>$cliente, 'room'=>$room]); 

}

/************************************************************************************************************************ */
public function home(){
    /*
    $reservas= Reserva::get();
    $rooms= Room::get();
    $clientes= Cliente::get();
    return view('reservas.home', ['clientes'=>$clientes, 'rooms'=>$rooms, 'reservas'=> $reservas]);
    */
    
    $reservas= Reserva::get();
    return view('reservas.home', ['reservas'=> $reservas]);
}
/************************************************************************************************************************ */
public function listado(){
    $reservas= Reserva::all();                                
    //return response()->json($reservas);                   //Prueba correcta Postman
    //dd($reservas);
    //return $reservas;     
    return view('reservas.listado',compact('reservas'));
}
/************************************************************************************************************************ */
public function editar(Reserva $reserva){                         
    $reserva= Reserva::find($reserva->id);  
    //return $reserva;
    return view('reservas.edit', compact('reserva'));
}
/************************************************************************************************************************ */
public function update(Request $request, Reserva $reserva){
    //return $reserva;
    //return response()->json($request);                   //Prueba correcta Postman
    $reserva->update($request->all());
    return redirect()->route('reservas.listado');
}   
/************************************************************************************************************************ */
public function create(){                               
    //return "Hola que tal";               
    return view('reservas.create');                       
}
/************************************************************************************************************************ */
public function store(StoreReserva $request){    
    //return $request; 
    //return response()->json($request);                  //Prueba correcta Postman
    $reserva= Reserva::create($request->all());                 
    return redirect()->route('reservas.listado');
}
/************************************************************************************************************************ */
public function destroy(Reserva $reserva){
    $reserva->delete();   
    return redirect()->route('reservas.listado');
}
 /************************************************************************************************************************ */
 public function show(Reserva $reserva){                    
    //return $reserva;                                    
    return view('reservas.show', compact('reserva'));       
}
/************************************************************************************************************************ */
public function bootstrap(){  
    return view('reservas.bootstrap');       
}






}
