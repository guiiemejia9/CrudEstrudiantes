<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createcategoryrequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'description'=> 'required|unique:category,description',
        ];

    }
    public function messages()
    {
        return [
            'description' => 'El campo descripción debe de estar lleno',


        ];
    }
}
