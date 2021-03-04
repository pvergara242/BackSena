<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProducts extends Model
{
    protected $fillable = [
        'fechaElaboracion', 
        'instructorEncargado', 
        'numeroDocumento',
        'programa',
        'ficha',
        'producto',
        'valorUnidad',
        'cantidadProducir',
        'valorProduccion',
    ];
}   
