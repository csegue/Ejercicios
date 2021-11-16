<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServicio;
use App\Models\Servicio;
use Illuminate\Http\Request;


class ServicioController extends Controller
{
    /************************************************************************************************************************ */
 public function listado(){
    $servicios= Servicio::all();                                
    //return $servicios;     
    return view('servicios.listado',compact('servicios'));
}
/************************************************************************************************************************ */
public function edit(Servicio $servicio){                         
    $servicio= Servicio::find($servicio);  
    //return $servicio;
    return view('servicios.edit', compact('servicio'));
}
/************************************************************************************************************************ */
public function update(Request $request, Servicio $servicio){
    //return $servicio;
    $servicio->update($request->all());
    return redirect()->route('servicios.listado');
}   
/************************************************************************************************************************ */
public function create(){                               
    return view('servicios.create');                       
}
/************************************************************************************************************************ */
public function store(StoreServicio $request){    
    //return $request; 
    $servicio= Servicio::create($request->all());                 
    return redirect()->route('servicios.listado');
}
/************************************************************************************************************************ */
public function destroy(Servicio $servicio){
    $servicio->delete();   
    return redirect()->route('servicios.listado');
}
 /************************************************************************************************************************ */
 public function show(Servicio $servicio){                    
    //return $servicio;                                    
    return view('servicios.show', compact('servicio'));       
}

}
