<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updatecustomerrequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [

            'name'=> 'required',
            'adress'=> 'required',
            'phone_number'=> 'required',
            'category_id'=> 'required',

        ];

    }
    public function messages()
    {
        return [
            'name.required' => 'El campo Nombre es obligatorio',
            'adress.required' => 'El campo Direccion es obligatorio',
            'phone_number.required' => 'El campo Numero de telefono es obligatorio',
            'category.required' => 'El campo categoria es obligatorio',

        ];
    }
    }
