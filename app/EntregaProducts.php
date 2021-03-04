<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntregaProducts extends Model
{
    protected $fillable = [
        'fechaSolicitud',
        'area',
        'codigoRegional',
        'codigoCentroCostos',
        'nombreCentroCostos',
        'cordinadorArea',
        'numeroDocumento',
        'nombreServidorPublico',
        'CantcodigoFichaCaracterizacionidades',
        'codigoSena',
        'descripcionBien',
        'unidadMedida',
        'cantidadSolicitada',
        'cantidadEntregada',
        'observaciones',
        'nombre',
        'cargo',
    ];
}
