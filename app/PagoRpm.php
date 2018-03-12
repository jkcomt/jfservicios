<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PagoRpm extends Model
{
    protected $table = "pago_rpm";

    protected $fillable = [
        'tipo_servicio',
        'cliente_nombre',
        'num_contacto',
        'operador',
        'num_rpm',
        'estado',
        'estado_servicio'
    ];

    public $timestamps = false;
}
