<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCliente;
use App\Models\Cliente;


class ClienteController extends Controller
{
 /************************************************************************************************************************ */
 public function listado(){
    $clientes= Cliente::all();                                
    //return $clientes;     
    return view('clientes.listado',compact('clientes'));
}
/************************************************************************************************************************ */
public function edit(Cliente $cliente){                         
    $cliente= Cliente::find($cliente);  
    //return $pen;
    return view('clientes.edit', compact('cliente'));
}
/************************************************************************************************************************ */
public function update(Request $request, Cliente $cliente){
    //return $cliente;
    $cliente->update($request->all());
    return redirect()->route('clientes.listado');
}   
/************************************************************************************************************************ */
public function create(){                               
    //return "Hola que tal";               
    return view('clientes.create');                       
}
/************************************************************************************************************************ */
public function store(StoreCliente $request){    
    $this->validate($request,[
        'nombre'=>'required',
        'email'=>'required|email|unique:users,email',
    ]);

    //return $request; 
    $cliente= Cliente::create($request->all());                 
    return redirect()->route('clientes.listado');
}
/************************************************************************************************************************ */
public function destroy(Cliente $cliente){
    $cliente->delete();   
    return redirect()->route('clientes.listado');
}
 /************************************************************************************************************************ */
 public function show(Cliente $cliente){                    
    //return $cliente;                                    
    return view('clientes.show', compact('cliente'));       
}
/************************************************************************************************************************ */


}
