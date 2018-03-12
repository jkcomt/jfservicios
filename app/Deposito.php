<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposito extends Model
{
    protected $table = "depositos";

    protected $fillable = [
        'tipo_servicio',
        'cliente_nombre',
        'num_contacto',
        'entidad',
        'num_cuenta',
        'num_deposito',
        'estado',
        'estado_servicio'
    ];

    public $timestamps = false;
}
