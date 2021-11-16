<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLiga extends FormRequest
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
            'federation_id'=>'required',
            'jornada'=>'required',
            'local'=>'required',
            'visitante'=>'required',
            'res_local'=>'required',
            'res_visitante'=>'required'
        ];
    }
}
