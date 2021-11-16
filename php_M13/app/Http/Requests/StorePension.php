<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePension extends FormRequest
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
            'tipo_pen'=>'required'
        ];
    }

    public function attributes(){              // Cambiar el atributo {{message}} de create.blade.php y otros
    return[
       'tipo_pen'=> 'introduzca la  nueva pensión [Storepension.php]',
    ];
    }    

    public function messages(){                // Cambiar todo el mensaje. Aqui con el atributo required
        return[
        'tipo_pen.required'=> 'debe ingresar una nueva pensión [StorePension.php]',
        ];
    } 
}
