<?php

namespace App\Http\Controllers;

use App\Models\Mantenimiento;
use Illuminate\Http\Request;

class MantenimientoController extends Controller
{
    /************************************************************************************************************************ */
    public function index(){
        $mantenimientos= Mantenimiento::all();                                
        $mantenimientos= Mantenimiento::select('estado')->get();
        
        if($mantenimientos){
            return view('mantenimientos.index');
        }else{
            return view('mantenimientos.estado');
        }
    }
    /************************************************************************************************************************ */
    public function fechahora(){
        
    }
    


}
