<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updatecategoryrequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [

            'description' => 'required',

        ];

    }
    public function messages()
    {
        return [
            'description.required'=>'La Descripcion no debe estar vacio.',

        ];
    }
}
