<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PagoAgua extends Model
{
    protected $table = "pago_agua";

    protected $fillable = [
        'tipo_servicio',
        'cliente_nombre',
        'num_contacto',
        'num_suministro',
        'monto_pagar',
        'estado',
        'estado_servicio'
    ];

    public $timestamps = false;
}
