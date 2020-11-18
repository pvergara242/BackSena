<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'document'          => ['required', 'min:6',], 
            'name'              => ['required', 'min:3', 'max:120'], 
            'last_name'         => ['required', 'min:3', 'max:120'], 
            'surname'           => ['required', 'min:3', 'max:120'], 
            'last_surname'      => ['required', 'min:3', 'max:120'], 
            'razon_social'      => ['required', 'min:3', 'max:120'], 
            'pais_code'         => ['required', 'min:1', 'max:50'], 
            'departamento_code' => ['required', 'min:1', 'max:50'], 
            'municipio_code'    => ['required', 'min:1', 'max:50'], 
            'address'           => ['required', 'min:7', 'max:200'], 
            'phone'             => ['required', 'min:5', 'max:20'], 
            'email'             => ['required', 'min:7', 'max:120' ],
        ];
    }
}
