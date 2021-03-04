<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PedidoProductosRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'fechaElaboracion'            => ['required', 'min:6'], 
            'instructorEncargado'         => ['required', 'min:3', 'max:120'], 
            'numeroDocumento'             => ['required', 'min:3', 'max:120'], 
            'programa'                    => ['required', 'min:3', 'max:120'], 
            'ficha'                       => ['required', 'min:3', 'max:120'], 
            'producto'                    => ['required', 'min:3', 'max:120'], 
            'valorUnidad'                 => ['required', 'min:1', 'max:50'], 
            'cantidadProducir'            => ['required', 'min:1', 'max:50'], 
            'valorProduccion'             => ['required', 'min:1', 'max:50'], 
        ];
    }
}
