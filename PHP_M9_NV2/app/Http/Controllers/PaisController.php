<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;
use App\Http\Requests\StorePais;               //validaciones formularios 

class PaisController extends Controller
{
    /************************************************************************************************************************ */
    public function index(){  
        //return "Bienvenido a la página de Paises [PaisController.php - function index]";   // Lo paso desde este controlador, sin pasarlo a la vista.
        //return view('paises.index');                                                       // Paso a la vista  

        // ORM ELOQUENT(CRUD) Read Leer registros en la vista, los paso en una array  [SI ES LENTO LO HACEMOS CON PAGINATE]
        $paises= Pais::all();                         // recupero todos los registros y los imprimo en la vista       
        return view('paises.index', compact('paises'));
    }
    /*************************************************************************************************************************** */
    public function show(Pais $pais){                     // Los enlaces entre vistas utilizo (Curso $curso)

        //return $pais->pais;                                    // Aquí ya me lo mostraría
        return view('paises.show', compact('pais'));       // Paso a la vista (otra forma)
    }
    /*************************************************************************************************************************** */
    public function create(){      
        return view('paises.create'); 

    }  
    /*************************************************************************************************************************** */
    //public function store(Request $request){                   // La cambio al añadir Form Request Validación formularios
    public function store(StorePais $request){
    
        //return $request->all();                                 // solo para ver si sale bien
        /*                                                          // Lo cambio por asignación masiva          
        $pais= new Pais();
        $pais->pais = $request->pais;
        $pais->departamento = $request->departamento;
        $pais->ciudad = $request->ciudad;
        //return $pais;
        $pais->save();
        return redirect()->route('paises.show', $pais->id);      // redireccionar a la vista de cursos
        */


        $pais= Pais::create($request->all());
        return redirect()->route('paises.show', $pais->id);

    }
    /*************************************************************************************************************************** */
    //public function edit($id){  $pais= Pais::find($id);  return $pais; }
    public function edit(Pais $pais){ 
        return view('paises.edit', compact('pais')); 
    
    }
    /*************************************************************************************************************************** */
    public function update(request $request, Pais $pais){
        //return $request->all();                                 // para ver si funciona
        
    /* VALIDACION ************************************************************************************************************* //
        $request->validate([                                    // La elimino pq la creo en Form Request (Metodo 2)
            'pais'=>'required',
            'departamento'=>'required',
            'ciudad'=>'required'
           ]);
    */ 
        /*                                                      // Lo cambio por asignación masiva                
        $pais->pais= $request->pais;
        $pais->departamento= $request->departamento;
        $pais->ciudad= $request->ciudad;
        //return $pais;                                          // Para ver que tengo -> ole y ole  :)
        $pais->save();
        return redirect()->route('paises.show', $pais->id);      // redirecciono
        */

        $pais->update($request->all());
        return redirect()->route('paises.show', $pais->id);
   

    }
    /************************************************************************************************************************ */
    public function destroy(Pais $pais){
        $pais->delete();
        return redirect()->route('paises.index');
   }

}
