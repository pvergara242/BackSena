<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntregaProductsRequest extends FormRequest
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
            'fechaSolicitud'               => ['required', 'min:6',], 
            'area'                         => ['required', 'min:3', 'max:120'], 
            'codigoRegional'               => ['required', 'min:3', 'max:120'], 
            'nombreRegional'               => ['required', 'min:3', 'max:120'], 
            'codigoCentroCostos'           => ['required', 'min:3', 'max:120'], 
            'nombreCentroCostos'           => ['required', 'min:3', 'max:120'], 
            'cordinadorArea'               => ['required', 'min:1', 'max:50'], 
            'departamento_code'            => ['required', 'min:1', 'max:50'], 
            'numeroDocumento'              => ['required', 'min:1', 'max:50'], 
            'nombreServidorPublico'        => ['required', 'min:7', 'max:200'], 
            'numeroDocumentoServidor'      => ['required', 'min:5', 'max:20'], 
            'codigoFichaCaracterizacion'   => ['required', 'min:7', 'max:120' ],
            'codigoSena'                   => ['required', 'min:7', 'max:120' ],
            'descripcionBien'              => ['required', 'min:7', 'max:120' ],
            'unidadMedida'                 => ['required', 'min:7', 'max:120' ],
            'cantidadSolicitada'           => ['required', 'min:7', 'max:120' ],
            'cantidadEntregada'            => ['required', 'min:7', 'max:120' ],
            'observaciones'                => ['required', 'min:7', 'max:120' ],
            'nombre'                       => ['required', 'min:7', 'max:120' ],
            'cargo'                        => ['required', 'min:7', 'max:120' ],
        ];
    }
}


