<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'CodigoProducto'                  => ['required', 'min:6',], 
            'nombreProducto'                  => ['required', 'min:3', 'max:120'], 
            'CantidadProducto'                => ['required', 'min:3', 'max:120'], 
            'consumo'                         => ['required', 'min:3', 'max:120'], 
            'MercanciaVenta'                  => ['required', 'min:3', 'max:120'], 
            'produccionInterna'               => ['required', 'min:3', 'max:120'], 
            'ManejaLotes'                     => ['required', 'min:1', 'max:50'], 
            'esServicio'                      => ['required', 'min:1', 'max:50'], 
            'productoActivo'                  => ['required', 'min:1', 'max:50'], 
            'DatosFabricante'                 => ['required', 'min:7', 'max:200'], 
            'Medidas'                         => ['required', 'min:5', 'max:20'], 
            'UbicacionFisica'                 => ['required', 'min:7', 'max:120' ],
            'Referencia'                      => ['required', 'min:7', 'max:120' ],
            'Presentacion'                    => ['required', 'min:7', 'max:120' ],
            'ProductoEquivalente'             => ['required', 'min:7', 'max:120' ],
            'StockMinimo'                     => ['required', 'min:7', 'max:120' ],
            'StockMaximo'                     => ['required', 'min:7', 'max:120' ],
            'TiempoReposicion'                => ['required', 'min:7', 'max:120' ],
            'CuentaInventarios'               => ['required', 'min:7', 'max:120' ],
            'CuentaContableIngreso'           => ['required', 'min:7', 'max:120' ],
            'CuentaContableIngresoAjuste'     => ['required', 'min:7', 'max:120' ],
            'DevolucionVentas'                => ['required', 'min:7', 'max:120' ],
            'DevolucionCompras'               => ['required', 'min:7', 'max:120' ],
            'CuentaContableGasto'             => ['required', 'min:7', 'max:120' ],
            'CuentaContableGastoAjuste'       => ['required', 'min:7', 'max:120' ],
            'ImpuestoCompras'                 => ['required', 'min:7', 'max:120' ],
            'ImpuestoVentas'                  => ['required', 'min:7', 'max:120' ],
        ];
    }
}
