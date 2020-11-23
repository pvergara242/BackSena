<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    protected $fillable = [
        'CodigoComprobante', 
        'numeroFactura', 
        'DetalleGeneral', 
        'FechaCompra', 
        'CodigoTercero', 
        'nombreTercero', 
        'codigoProducto', 
        'nombreProducto', 
        'Cantidades', 
        'unidadesDisponibles', 
        'CostoUnitarioCompra', 
        'CostoTotalCompra', 
        'Referencia',
        'Presentacion',
        'Impuestos',
        'Porcentajeimpuesto',
        'TotalImpuestos',
        'RetencionFuente',
        'TiempoReposicion',
        'PorcentajeRetefte',
        'TotalRetenciónFuente',
    ];
}
