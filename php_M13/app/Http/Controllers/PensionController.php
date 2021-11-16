<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePension;
use App\Models\Pension;
use Illuminate\Http\Request;



class PensionController extends Controller
{
 /************************************************************************************************************************ */
 public function listado(){
    $pensiones= Pension::all();                                
    //return $catalogos;     
    return view('pensiones.listado',compact('pensiones'));
}
/************************************************************************************************************************ */
public function edit(Pension $pension){                         
    $pension= Pension::find($pension);  
    //return $pen;
    return view('pensiones.edit', compact('pension'));
}
/************************************************************************************************************************ */
public function update(Request $request, Pension $pension){
    //return $pension;
    $pension->update($request->all());
    return redirect()->route('pensiones.listado');
}   
/************************************************************************************************************************ */
public function create(){                               
    //return "Hola que tal";               
    return view('pensiones.create');                       
}
/************************************************************************************************************************ */
public function store(StorePension $request){    
    //return $request; 
    $pension= Pension::create($request->all());                 
    return redirect()->route('pensiones.listado');
}
/************************************************************************************************************************ */
public function destroy(Pension $pension){
    $pension->delete();   
    return redirect()->route('pensiones.listado');
}
 /************************************************************************************************************************ */
 public function show(Pension $pension){                    
    //return $pension;                                    
    return view('pensiones.show', compact('pension'));       
}








}
