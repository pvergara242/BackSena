<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'CodigoProducto',
        'nombreProducto',
        'CantidadProducto',
        'consumo',
        'MercanciaVenta',
        'produccionInterna',
        'ManejaLotes',
        'esServicio',
        'productoActivo',
        'DatosFabricante',
        'Medidas',
        'UbicacionFisica',
        'Referencia',
        'Presentacion',
        'ProductoEquivalente',
        'StockMinimo',
        'StockMaximo',
        'TiempoReposicion',
        'CuentaInventarios',
        'CuentaContableIngreso',
        'CuentaContableIngresoAjuste',
        'DevolucionVentas',
        'DevolucionCompras',
        'CuentaContableGasto',
        'CuentaContableGastoAjuste',
        'ImpuestoCompras',
        'ImpuestoVentas',
        
    ];
}   
