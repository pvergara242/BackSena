<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntregaProducts extends Model
{
    protected $fillable = [
        'fechaSolicitud',
        'area',
        'codigoRegional',
        'nombreRegional',
        'codigoCentroCostos',
        'nombreCentroCostos',
        'cordinadorArea',
        'numeroDocumento',
        'nombreServidorPublico',
        'numeroDocumentoServidor',
        'codigoFichaCaracterizacion',
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
