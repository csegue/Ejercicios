<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;

class DepartamentosController extends Controller
{

/************************************************************************************************************************ */
   public function index(Pais $pais){  
    //return "Bienvenido a la página de Departamentos, $pais [index]"; 
    return view('departamentos.index', compact('pais'));                                                       // Paso a la vista  

}
/************************************************************************************************************************ */
public function store($pais){  
    return  "Bienvenido a la página de Departamentos, $pais [Store]";

}
/************************************************************************************************************************ */
public function show($pais, $departamento){  
    
    return  "Bienvenido a la página de Departamentos, $pais con variable $departamento  [Show]";

}
/************************************************************************************************************************ */
public function update($pais, $departamento){  
    return  "Bienvenido a la página de Departamentos, $pais con variable $departamento  [Update]";
    //return view('departamentos.create');                                                       // Paso a la vista  

}
/************************************************************************************************************************ */
public function destroy($pais, $departamento){  
    return  "Bienvenido a la página de Departamentos, $pais con variable $departamento  [Destroy]";
    //return view('departamentos.create');                                                       // Paso a la vista  

}




}
