<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntregaProductosRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'fechaSolicitud'                => ['required', 'min:6'], 
            'area'                          => ['required', 'min:3', 'max:120'], 
            'codigoRegional'                => ['required', 'min:3', 'max:120'], 
            'nombreRegional'                => ['required', 'min:3', 'max:120'], 
            'codigoCentroCostos'            => ['required', 'min:3', 'max:120'], 
            'nombreCentroCostos'            => ['required', 'min:3', 'max:120'], 
            'cordinadorArea'                => ['required', 'min:1', 'max:50'], 
            'numeroDocumento'               => ['required', 'min:1', 'max:50'], 
            'nombreServidorPublico'         => ['required', 'min:1', 'max:50'], 
            'numeroDocumentoServidor'       => ['required', 'min:7', 'max:200'], 
            'codigoFichaCaracterizacion'    => ['required', 'min:5', 'max:20'], 
            'codigoSena'                    => ['required', 'min:7', 'max:120' ],
            'descripcionBien'               => ['required', 'min:7', 'max:120' ],
            'unidadMedida'                  => ['required', 'min:7', 'max:120' ],
            'cantidadSolicitada'            => ['required', 'min:7', 'max:120' ],
            'cantidadEntregada'             => ['required', 'min:7', 'max:120' ],
            'observaciones'                 => ['required', 'min:7', 'max:120' ],
            'nombre'                        => ['required', 'min:7', 'max:120' ],
            'cargo'                         => ['required', 'min:7', 'max:120' ],
            
        ];
    }
}
