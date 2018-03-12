<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecargaMovil extends Model
{
    protected  $table = "recarga_moviles";

    protected $fillable = [
        'tipo_servicio',
        'cliente_nombre',
        'num_contacto',
        'operador',
        'num_recarga',
        'monto_recarga',
        'estado',
        'estado_servicio'
    ];

    public $timestamps = false;
}
