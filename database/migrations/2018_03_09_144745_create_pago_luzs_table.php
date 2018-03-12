<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagoLuzsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_luz', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_servicio');
            $table->string('cliente_nombre');
            $table->string('num_contacto');
            $table->string('num_suministro');
            $table->string('monto_pagar');
            $table->string('estado');
            $table->string('estado_servicio');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pago_luz');
    }
}
