<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    protected $fillable = [
        'document', 
        'name', 
        'last_name', 
        'surname', 
        'last_surname', 
        'type', 
        'razon_social', 
        'pais_code', 
        'departamento_code', 
        'municipio_code', 
        'address', 
        'phone', 
        'email',
    ];
}
