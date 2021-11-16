<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePais extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;                //Cambio false por true para validación 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [                          // Validación
                'pais'=>'required',
                'departamento'=>'required',
                'ciudad'=>'required'
            ];
    }

    public function attributes(){              // Cambiar el atributo {{message}} de create.blade.php y otros
    return[
       //'pais'=> 'nombre del pais [StorePais.php]',
    ];
}    

    public function messages(){                // Cambiar todo el mensaje. Aqui con el atributo required
    return[
       'pais.required'=>         'debe ingresar un pais',
       'departamento.required'=> 'debe ingresar un código del departamento',
       'ciudad.required'=>       'debe ingresar una ciudad',
    ];
}    


}
