<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCatalogo extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'autor'=>'required',
            'titulo'=>'required',
            'genero'=>'required'
        ];
    }
    public function attributes(){              // Cambiar el atributo {{message}} de create.blade.php y otros
    return[
       'autor'=> 'nombre del escritor/a [StoreCatalogo.php]',
    ];
    }    

    public function messages(){                // Cambiar todo el mensaje. Aqui con el atributo required
        return[
        'titulo.required'=> 'debe ingresar un título del libro [StoreCatalogo.php]',
        ];
    }    
}    