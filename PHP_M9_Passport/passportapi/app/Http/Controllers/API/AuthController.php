<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Attempting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller{

    public function register(Request $request){                      //función que ayuda ha registrarnos
        $validatedData= $request->validate([                         //Validamos los datos que introduce
            'name'     =>'required|max:255',
            'email'    =>'required|email|unique:users',
            'password' =>'required|confirmed'
        ]);

        $validatedData['password']= Hash::make($request->password);  //Haseamos el campo password para que se almacene en la BD de forma encriptada
        $user= User::create($validatedData);                         //Almacenamos el usuario en la BD
        $accessToken= $user->createToken('authToken')->accessToken;  //Devuelve el token del usuario en texto plano
        return response([                                            //Respuesta al usuario 
            'user'          => $user,
            'access_token'  => $accessToken                          //Devuelve su access Token   
        ]);
    }

    public function login(Request $request){
        $loginData= $request->validate([                         //Validamos los datos que introduce
            'email'    =>'email|required',
            'password' =>'required'
        ]);

        if (!auth()->attempt($loginData)){ 
            return response(['message'=>'Credenciales invalidas']);
        }
    
        $accessToken= auth()->user()->createToken('authToken')->accessToken;
        return response(['user'=> auth()->user(), 'access_Token'=>$accessToken]);
        
    }



}