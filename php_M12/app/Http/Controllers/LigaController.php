<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLiga;
use App\Models\Federation;
use App\Models\Liga;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Ball;
use App\Models\Equipo;
use App\Models\Location;
use App\Models\Profile;


class LigaController extends Controller
{
    /************************************************************************************************************************ */
    
    public function home(){
        $federations= Federation::get();
        return view('ligas.home', ['federations'=> $federations]);
    }
    /************************************************************************************************************************ */
    public function create(){                               
        //return "página para crear catalogos";               
        return view('ligas.create');                       
    }

    /************************************************************************************************************************ */
    public function store(StoreLiga $request){           
    
        $liga= Liga::create($request->all());                 
        //return $request;
        return redirect()->route('ligas.index', $liga);
    }
    /************************************************************************************************************************ */
    public function edit(Liga $liga){                         
        //$lig= Liga::find($liga);  return $lig;
        return view('ligas.edit', compact('liga'));
        }
    /************************************************************************************************************************ */
    public function update(Request $request, Liga $liga){
        $liga->update($request->all());
        return redirect()->route('ligas.index', $liga);
    }   
   /************************************************************************************************************************ */
   public function destroy(Liga $liga){
    $liga->delete();   
    return redirect()->route('ligas.index');
    }   
    /************************************************************************************************************************ */
   public function show(Liga $liga){                    
    //return $liga;                                    
    return view('ligas.show', compact('liga'));       
    }
}
