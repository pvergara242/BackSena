<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComprasRequest extends FormRequest
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
            'CodigoComprobante'          => ['required', 'min:6',], 
            'numeroFactura'              => ['required', 'min:3', 'max:120'], 
            'DetalleGeneral'             => ['required', 'min:3', 'max:120'], 
            'FechaCompra'                => ['required', 'min:3', 'max:120'], 
            'CodigoTercero'              => ['required', 'min:3', 'max:120'], 
            'nombreTercero'              => ['required', 'min:3', 'max:120'], 
            'codigoProducto'             => ['required', 'min:1', 'max:50'], 
            'nombreProducto'             => ['required', 'min:1', 'max:50'], 
            'Cantidades'                 => ['required', 'min:1', 'max:50'], 
            'unidadesDisponibles'        => ['required', 'min:7', 'max:200'], 
            'CostoUnitarioCompra'        => ['required', 'min:5', 'max:20'], 
            'CostoTotalCompra'           => ['required', 'min:7', 'max:120' ],
            'Referencia'                 => ['required', 'min:7', 'max:120' ],
            'Presentacion'               => ['required', 'min:7', 'max:120' ],
            'Impuestos'                  => ['required', 'min:7', 'max:120' ],
            'Porcentajeimpuesto'         => ['required', 'min:7', 'max:120' ],
            'TotalImpuestos'             => ['required', 'min:7', 'max:120' ],
            'RetencionFuente'            => ['required', 'min:7', 'max:120' ],
            'TiempoReposicion'           => ['required', 'min:7', 'max:120' ],
            'PorcentajeRetefte'          => ['required', 'min:7', 'max:120' ],
            'TotalRetenciónFuente'       => ['required', 'min:7', 'max:120' ],
        ];
    }
}
