<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /************************************************************************************************************************ */
    public function index(){
        $empleados= Empleado::all();                                
        //return $empleados;     
        return view('empleados.listado', compact('empleados'));
    }
    /************************************************************************************************************************ */
    public function create(){                               
        //return "página para crear empleados";               
        return view('empleados.create');                       
    }
    /************************************************************************************************************************ */
    public function store(Request $request){     
        $request->validate([
            'nombre'=>'required',
            'sueldo'=>'required',
            'id_puesto'=>'required',
            'id_ss'=>'required'
           ]);
            

           $empleado= new Empleado();
           $empleado->nombre = $request->nombre;
           $empleado->sueldo = $request->sueldo;
           $empleado->id_puesto = $request->id_puesto;
           $empleado->id_ss = $request->id_ss;
           $empleado->save();
           

        //$empleado= Empleado::create($request->all());        // Sin VALIDACION MASIVA           
        return redirect()->route('empleados.index', $empleado);
    }
    /************************************************************************************************************************ */
    public function edit(Empleado $empleado){                         
        //$emp= Empleado::find($empleado);  return $emp;
        //return $empleado;                                      
        return view('empleados.edit', compact('empleado'));
        }
    /************************************************************************************************************************ */
    public function update(Request $request, Empleado $empleado){
        $request->validate([
            'nombre'=>'required',
            'sueldo'=>'required',
            'id_puesto'=>'required',
            'id_ss'=>'required'
           ]);
        //return "Hola";
        //return $empleado;
        $empleado->update($request->all());
        return redirect()->route('empleados.index', $empleado);
    }
    /************************************************************************************************************************ */
    public function destroy(Empleado $empleado){
        $empleado->delete();   
        return redirect()->route('empleados.index');
    }
   /************************************************************************************************************************ */
    public function show(Empleado $empleado){                    
        //return $empleado;                                    
        return view('empleados.show', compact('empleado'));       
    }   

    /************************************************************************************************************************ */
    public function recogerpuesto(){
        return view('empleados.recogerpuesto');
    }


    /************************************************************************************************************************ */
    public function listadopuesto(Request $request){   
        $puesto = $request->get('id_puesto');                            
        $empleados= Empleado::where('id_puesto',$puesto)->get();
        return view('empleados.listadopuesto', compact('empleados'));       
    }

    


}
