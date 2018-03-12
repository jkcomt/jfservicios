<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagoRpmTable extends Migration
{
    public function up()
    {
        Schema::create('pago_rpm', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_servicio');
            $table->string('cliente_nombre');
            $table->string('num_contacto');
            $table->string('operador');
            $table->string('num_rpm');
            $table->string('estado');
            $table->string('estado_servicio');
            //$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pago_rpm');
    }
}
