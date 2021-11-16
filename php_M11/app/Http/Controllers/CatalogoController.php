<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCatalogo;
use App\Models\Catalogo;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    /************************************************************************************************************************ */
    public function home(){
        return view('catalogos.home');                                  // Paso a la vista    
    }
    /************************************************************************************************************************ */
    public function index(){
        $catalogos= Catalogo::all();                                
        //return $catalogos;     
        return view('catalogos.listado', compact('catalogos'));
    }
    /************************************************************************************************************************ */
    public function create(){                               
        //return "página para crear catalogos";               
        return view('catalogos.create');                       
    }
    /************************************************************************************************************************ */
    public function store(StoreCatalogo $request){     
        $catalogo= Catalogo::create($request->all());                 
        return redirect()->route('catalogos.index', $catalogo);
    }
    /************************************************************************************************************************ */
    public function edit(Catalogo $catalogo){                         
    //$cat= Catalogo::find($catalogo);  return $cat;
    //return $catalogo;                                      
    return view('catalogos.edit', compact('catalogo'));
    }
    /************************************************************************************************************************ */
    public function update(Request $request, Catalogo $catalogo){
        //return "Hola";
        //return $catalogo;
        $catalogo->update($request->all());
        return redirect()->route('catalogos.index', $catalogo);
    }   
    /************************************************************************************************************************ */
    public function destroy(Catalogo $catalogo){
        $catalogo->delete();   
        return redirect()->route('catalogos.index');
   }
   /************************************************************************************************************************ */
   public function show(Catalogo $catalogo){                    
        //return $catalogo;                                    
        return view('catalogos.show', compact('catalogo'));       
    }
  

}


